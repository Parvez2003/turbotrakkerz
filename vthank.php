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
                <h1><a href="index.php" class="logo-2">Turbo Trekkerz</a></h1>
            </div>
        </div>
        <!-- //banner -->
    </div>
    <!-- //home -->

    <!-- contact -->
    <section class="contact py-5" id="contact">
        <div class="container py-md-5">
            <div class="row mt-4">
                <div class="col-lg-12 mb-5">
                    <form action="vbooking_code.php" method="post">
                        <h1 class="text-center">
                            <a href="index.html" class="logo-2">
                                <font color="black"> Thank You For Booking :-)...
                                </font>
                            </a>



                        </h1>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- //contact -->

    <?php include("footer.php") ?>