<?php

include("connect.php");
$p_id=$_POST['p_id'];
print $p_id;
$date=$_POST['date'];
print $date;
$price=$_POST['price'];
print $price;
$capacity=$_POST['capacity'];
print $capacity;

$q="insert into schedule(p_id,date,price,capacity) values('$p_id','$date','$price','$capacity')";
mysqli_query($cn , $q);
print $q;

header("location:viewshedule.php");
