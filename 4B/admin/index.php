<?php 
session_start();
if (!isset($_SESSION["user"])) {
    echo "<script>alert('Please Log in first')</script>";
    echo "<script>location='../login.php';</script>";
};

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard | Dw Bike</title>
	<link rel="stylesheet" type="text/css" href="../node_modules/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/node_modules/fortawesome/fontawesome-free/css/all.css">
	<link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
</head>
<body>

	<nav class="navbar navbar-dark bg-dark">
		  <div class="container-fluid">
		    <a href="index.php?page=home" class="navbar-brand">DW Bike</a>  
		    <div class="justify-content-end">
			  <a href="index.php?page=home"  class="navbar-brand"> Bike data</a>
		      <a class=" navbar-brand" href="index.php?page=add-bike"> Add Bike</a>
		      <a class=" navbar-brand" href="index.php?page=add-merk"> Add Brand</a>
		      <a class=" navbar-brand" href="index.php?page=add-user"> Add User</a>
		      <a class=" navbar-brand" href="index.php?page=user"> User</a>
		      <a class="btn btn-danger navbar-brand" href="../logout.php"> Logout</a>
		    </div>
		  </div>
		</nav>

	<div class="container">
		<?php 
		if (isset($_GET['page'])) {
						
						if ($_GET['page'] == 'home') {
							include 'home.php';
						}
						if ($_GET['page'] == 'add-bike') {
							include 'addbike.php';
						}
						if ($_GET['page'] == 'add-merk') {
							include 'addmerk.php';

						}
							if ($_GET['page'] == 'delete') {
							include 'deletebike.php';
						}
						if ($_GET['page'] == 'detail') {
							include 'detail.php';
						}
						if ($_GET['page'] == 'add-user') {
							include 'adduser.php';
						}if ($_GET['page'] == 'user') {
							include 'user.php';
						}
					}
					
		 ?>
	</div>
		
</body>
</html>