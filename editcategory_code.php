<?php

include("connect.php");
$c_name = $_POST['c_name'];
$c_id = $_POST['c_id'];
$q = "update category set c_name ='$c_name' where c_id='$c_id'";
mysqli_query($cn, $q);

header("location:viewcategory.php");
