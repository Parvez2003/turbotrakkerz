<?php
include("connect.php");


$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
$city = $_POST["city"];
$contact = $_POST["contact"];
$q = "insert into user (name,address,email,password,city,contact)values('$name','$address','$email','$password','$city','$contact')";
mysqli_query($cn, $q);
header("location:vlogin.php");
