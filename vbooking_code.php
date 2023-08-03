<?php
include("connect.php");

$p_id = $_POST['p_id'];
$s_id = $_POST['s_id'];
$u_id = $_SESSION['u_id'];
$amount = $_POST['amount'];
$booking_date = date("Y-m-d");
$q = "insert into booking (u_id,p_id,s_id,book_date,advance_amount)values('$u_id','$p_id','$s_id','$booking_date','$amount')";
mysqli_query($cn, $q);
header("location:vthank.php");
