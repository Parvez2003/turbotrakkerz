<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
if (!isset($_SESSION['a_id'])) {
	header("location:adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title> Turbo Trekkerz </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Natural Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- home -->
	<div id="home">
		<!-- banner -->
		<div class="banner_w3lspvt-2 text-center">
			<!-- nav -->
			<div class="nav_w3ls pt-4 pb-3 text-center position-static">
				<nav>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu">
						<li><a href="ahome.php">HOME</a></li>
						<li><a href="viewcategory.php">CATEGORY</a></li>
						<li><a href="viewpackage.php">PACKAGE</a></li>
						<li><a href="viewschedule.php">SCHEDULE</a></li>
						<li><a href="viewbooking.php">BOOKING</a></li>
						<li><a href="viewuser.php">USER</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
					</ul>
				</nav>
			</div>
			<!-- //nav -->
			<div class="banner-inner">
				<h1><a href="index.php" class="logo-2">TurboTrekkerz</a></h1>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //home -->