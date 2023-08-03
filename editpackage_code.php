<?php

include("connect.php");

$title = $_POST['title'];
$c_id = $_POST['c_id'];
$detail = $_POST['detail'];
$price = $_POST['price'];


$photo = "package/" . $_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

print $photo;
$pdf = "pdf/" . $_FILES['pdf']['name'];
move_uploaded_file($_FILES['pdf']['tmp_name'], $pdf);


$p_id = $_POST['p_id'];


$q = "update package set title='$title' , c_id='$c_id' ,  detail='$detail' , price='$price' , photo='$photo' , pdf='$pdf'  where p_id='$p_id'";
mysqli_query($cn, $q);
header("location:viewpackage.php");
