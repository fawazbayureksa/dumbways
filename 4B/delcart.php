<?php
session_start();
$id_cycle=$_GET['id'];
unset($_SESSION['keranjang'][$id_cycle]);

echo "<script>alert('Cancel');</script>";
echo "<script>location='index.php?page=cart';</script>";


?>

