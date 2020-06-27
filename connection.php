<?php



$ser="localhost";
$user="root";
$pass="";
$db="expences";


$con=mysqli_connect($ser,$user,$pass,$db) or die("connection faile");

echo "connection success";


?>

