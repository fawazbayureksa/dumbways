<?php 
	
	require_once 'koneksi.php';

	$id = $_GET['id'];

	mysqli_query("DELETE FROM * cycle WHERE id_cycle = '$id'");
	echo "<Script>alert('Bike Deleted Successfully')</script>";
	echo "<Script>location='index.php?page=home'</script>";

 ?>