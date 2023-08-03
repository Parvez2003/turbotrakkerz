<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("connect.php");
if (!isset($_SESSION['u_id'])) {
	header('location:vlogin.php');
}
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
				<h1><a href="index.php" class="logo-2">Turbo Trekkerz</a></h1>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //home -->

	<!-- contact -->
	<section class="contact py-5" id="contact">
		<div class="container py-md-5">
			<h3 class="tittle text-center">Booking</h3>
			<p class="sub-tittle text-center mt-3 mb-sm-5 mb-4"></p>
			<div class="row mt-4">
				<div class="col-lg-12 mb-5">
					<form action="vbooking_code.php" method="post">
						<?php
						$p_id = $_POST['p_id'];
						$qp = "select * from package where p_id=$p_id";
						$rs = mysqli_query($cn, $qp);
						$row = mysqli_fetch_array($rs);
						// print_r($row);
						?>
						<input type="hidden" name="p_id" value="<?php print $p_id ?>" />
						<div class="row main-w3layouts-sectns">
							<div class="col-md-12 w3-btm-spc form-text1">
								<input type="text" value="<?php print $row['title']; ?>" name="Name" placeholder="Enter Package Name" required="">
							</div>
							<div class="col-md-12 w3-btm-spc form-text2">
								<select name="s_id" required="">
									<?php
									$qs = "select * from schedule where p_id=$p_id";
									$rss = mysqli_query($cn, $qs);
									while ($rows = mysqli_fetch_array($rss)) {
									?>
										<option value="<?php print $rows['s_id']; ?>"><?php print $rows['date']; ?> </option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="row main-w3layouts-sectns">
							<div class="col-md-12 w3-btm-spc form-text1">
								<input type="text" readonly name="email" value="<?php print $row['price']; ?>" placeholder="Enter Amount" required="">
							</div>

						</div>
						<div class="row main-w3layouts-sectns">
							<div class="col-md-12 w3-btm-spc form-text1">
								<input type="text" name="amount" readonly value="<?php print($row['price'] / 2); ?>" placeholder="Enter Amount" required="">
							</div>

						</div>

						<button type="submit" class="btn mt-3">Submit</button>
					</form>
				</div>

			</div>

		</div>
	</section>
	<!-- //contact -->
	<?php include("footer.php") ?>