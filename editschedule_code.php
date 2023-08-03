<?php

include("connect.php");
$p_id = $_POST['p_id'];
$date = $_POST['date'];
$price = $_POST['price'];
$capacity = $_POST['capacity'];
$s_id = $_POST['s_id'];


$q = "update schedule set p_id ='$p_id', date='$date', price='$price', capacity='$capacity' where s_id='$s_id'";
mysqli_query($cn, $q);
header("location:viewshedule.php");
