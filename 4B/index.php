<?php 
session_start();
require_once 'koneksi.php';


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dumbways</title>
	<link rel="stylesheet" type="text/css" href="node_modules/style.css">
	<link rel="stylesheet" type="text/css" href="assets/node_modules/fortawesome/fontawesome-free/css/all.css">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">

</head>
<body>


		<nav class="navbar navbar-dark bg-dark">
		  <div class="container-fluid">
		    <a href="index.php?page=home" class="navbar-brand">DW Bike</a>
		    <div class="justify-content-end">
		      <a class="btn btn-danger" href="index.php?page=cart"><i class="fas fa-shopping-cart"></i> My Order</a>
		       <a class="btn btn-primary" href="
		       		<?php 
		       			if (isset($_SESSION['user'])) {
		       				
		       				echo "logout.php";
		       			}else{
		       				echo "login.php";
		       			}

		       	 ?>

		       ">
		       <i class="fas fa-user"></i>

		       	<?php 
		       			if (isset($_SESSION['user'])) {
		       				
		       				echo "Logout";
		       			}else{
		       				echo "Login";
		       			}

		       	 ?>

		       </a>
		    </div>
		    
		  </div>
		</nav>
	<div class="container">
			<?php 
					if (isset($_GET['page'])) {
							
						if ($_GET['page'] == 'home') {
							include 'home.php';
						}
						if ($_GET['page'] == 'cart') {
							include 'cart.php';
						}
						if ($_GET['page'] == 'detail-cycle') {
							include 'detail.php';
						}

						
					}
					else
					{
						include 'home.php';
					}
			 ?>
	</div>
</body>
</html>