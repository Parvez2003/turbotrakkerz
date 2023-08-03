<?php include("connect.php") ?>
<?php include("aheader.php") ?>
<section class="contact py-5" id="contact">
    <div class="container py-md-5">
        <h3 class="tittle text-center">Admin Home</h3>

        <div class="row mt-4">
            <div class="col-lg-3">
                Category
                <br />
                <?php
                $q1 = "select * from category";
                $rs1 = mysqli_query($cn, $q1);
                $category = mysqli_num_rows($rs1);
                print $category;
                ?>
            </div>
            <div class="col-lg-3">
                Package
                <br>
                <?php
                $q2 = "select * from package";
                $rs2 = mysqli_query($cn, $q2);
                $package = mysqli_num_rows($rs2);
                print $package;
                ?>
            </div>
            <div class="col-lg-3">
                User<br>
                <?php
                $q3 = "select * from user";
                $rs3 = mysqli_query($cn, $q3);
                $user = mysqli_num_rows($rs3);
                print $user;
                ?>
            </div>
            <div class="col-lg-3">
                Booking<br>
                <?php
                $q4 = "select * from booking";
                $rs4 = mysqli_query($cn, $q4);
                $booking = mysqli_num_rows($rs4);
                print $booking;
                ?>
            </div>

        </div>

    </div>
</section>



<?php include("footer.php") ?>