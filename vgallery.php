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



    <!-- team -->
    <section class="team py-5" id="team">
        <div class="container pb-xl-5 pb-lg-3">
            <h3 class="tittle text-center">Our Gallery</h3>
            <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4"></p>
            <div class="row team-grid">
                <?php
                $q = "Select * from gallery";
                $rs = mysqli_query($cn, $q);
                while ($row = mysqli_fetch_array($rs)) {
                ?>
                    <div class="col-lg-3 col-sm-6 ">
                        <div class="box13">
                            <img src="<?php print $row['file']; ?>" style="width:250px;height:250px" class="img-fluid img-thumbnail" alt="" />
                            <div class="box-content">
                                <h3 class="title"><?php print $row['title']; ?></h3>


                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- //team -->



    <?php include("footer.php"); ?>