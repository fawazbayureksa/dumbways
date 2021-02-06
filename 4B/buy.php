<?php

session_start();
if (!isset($_SESSION["user"])) {
    echo "<script>alert('Please Log in first')</script>";
    echo "<script>location='login.php';</script>";
};
$id_cycle=$_GET['id'];
//Jika sudah ada di keranjang maka akan +1
if (isset($_SESSION['keranjang'][$id_cycle])) 
{
    $_SESSION['keranjang'][$id_cycle]+=1;

}
else
//Jika belum ada maka beli 1
    {
        $_SESSION['keranjang'][$id_cycle]=1;
    }

echo "<script>alert('Bike add to cart');</script>";
echo "<script>location='index.php?page=cart';</script>";
?>

