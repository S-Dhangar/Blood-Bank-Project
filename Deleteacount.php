<?php

$conn = new mysqli('localhost','root','','bloodbank');
session_start();
$name = $_SESSION['name'];
$password = $_SESSION['password'];
$query1 = "DELETE FROM `blood groups` WHERE Name = '$name' AND Password = '$password'";
$query2 = "DELETE FROM `blood banks` WHERE Name = '$password' AND Password = '$password'";

mysqli_query($conn,$query2);
mysqli_query($conn,$query1);
session_destroy();
header("location:first page.html");


?>