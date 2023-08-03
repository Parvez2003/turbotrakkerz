<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Turbo Trekkerz</title>
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
				<?php include("vmenu.php"); ?>
			</div>
			<!-- //nav -->
			<div class="banner-inner">
				<h1><a href="index.php" class="logo-2"> Turbo Trekkerz </a></h1>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //home -->


	<style>
		.txt {
			display: block;
			width: 100%;
			margin-bottom: 15px;
			padding: 12px 15px;
			outline: none;
			font-size: 16px;
			font-weight: 400;
			color: #777;
			background-color: transparent;
			text-transform: capitalize;
			background-image: none;
			letter-spacing: 1px;
			-webkit-appearance: none;
			transition: .3s ease-in-out;
			border: 1px solid #ccc;
		}
	</style>
	<section class="contact py-5" id="contact">
		<div class="container py-md-5">
			<h3 class="tittle text-center"> LOGIN </h3>

			<div class="row mt-4">
				<div class="col-lg-12">
					<form action="vlogin_code.php" method="post">
						<div class="main-w3layouts-sectns ">
							<div class="w3-btm-spc form-text2 p-0">

								<input type="text" name="email" id="" placeholder="Enter Your email Here">
								<input type="password" class="txt" name="password" id="" placeholder="Enter Your password Here">
								<button type="submit"> Login </button>
							</div>
						</div>

					</form>
					<a href="adminlogin.php">Click here For Admin Login</a>

				</div>

			</div>

		</div>
	</section>



	<?php include("footer.php") ?>