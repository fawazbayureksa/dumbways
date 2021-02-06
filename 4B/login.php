<?php 
session_start();
	require 'koneksi.php'
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | DW Bike</title>
	<link rel="stylesheet" type="text/css" href="node_modules/style.css">
	<link rel="stylesheet" type="text/css" href="assets/node_modules/fortawesome/fontawesome-free/css/all.css">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">

</head>
<body>
	<div class="container-fluid">
		<div class="row justify-content-center mt-5">	
			<div class="col-sm-5">
				<div class="card bg-dark">
					<div class="card-header text-center">
						<h3 class="text-white">FORM LOGIN</h3>
					</div>
					<div class="card-body">
						<form class="" method="post">
							<div class="form-floating mb-3">
								  <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Username">
								  <label for="floatingInput">Email</label>
							</div>
							<div class="form-floating">
								  <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
								  <label for="floatingPassword">Password</label>
							</div>
							<div class="card-footer">
								<div class="row justify-content-center mt-3">
									<button class="btn btn-primary" type="submit" name="masuk">Log in</button>
								</div>
								<div class="row justify-content-center mt-3">
									<a class="btn btn-info" href="register.php">Register</a>
								</div>
								<div class="row justify-content-center mt-3">
									<a class="btn btn-danger" href="index.php?page=home">Home</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>


<?php 

	  if (isset($_POST['masuk'])) {
   
  
    $email=$_POST['email'];
    $pass = $_POST['pass'];

    $query = mysqli_query($db,"SELECT * FROM user WHERE email='$email' and password ='$pass' ");
    $cek = mysqli_num_rows($query);


        if ($cek == 1) {
            
            $_SESSION['user'] = mysqli_fetch_assoc($query);

            	if ($_SESSION['user']['level'] == 2 ) {
            	
	            echo "<script>alert('Login User Successfully');</script>";
	            echo "<script>location='admin/index.php?page=home';</script>";
            	}else
            		{

            		 echo "<script>alert('Login User Successfully');</script>";
	          		  echo "<script>location='index.php?page=home';</script>";
            	};



        }else{
            
            echo "<script>alert('Login User failed');</script>";
            echo "<script>location='login.php';</script>";

        }

    }

 ?>