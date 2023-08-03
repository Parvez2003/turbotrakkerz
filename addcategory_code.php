<?php

include("connect.php");
$c_name=$_POST['c_name'];
print $c_name;

$q="insert into category(c_name) values ('$c_name')";
mysqli_query($cn , $q);
print $q;

header("location:viewcategory.php");
?>
