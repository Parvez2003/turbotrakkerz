<?php

include("connect.php");

$title = $_POST['title'];
print $title;
$c_id = $_POST['c_id'];
print $c_id;
$price = $_POST['price'];
print $price;
$detail = $_POST['detail'];
print $detail;

$photo = "package/" . $_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

print $photo;
$pdf = "pdf/" . $_FILES['pdf']['name'];
move_uploaded_file($_FILES['pdf']['tmp_name'], $pdf);



$q = "insert into package(title,c_id,price,detail,photo,pdf) values ('$title','$c_id','$price','$detail','$photo','$pdf')";
mysqli_query($cn, $q);
print $q;

header("location:viewpackage.php");