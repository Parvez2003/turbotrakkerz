<?php
include("connect.php");
include("aheader.php"); ?>
<section class="contact py-5" id="contact">
    <div class="container py-md-5">
        <h3 class="tittle text-center">View User</h3>

        <div class="row mt-4">
            <div class="col-lg-12">

                <table class="table">

                    <tr>
                        <td> Name</td>
                        <td> Address </td>
                        <td> E-Mail</td>
                        <td> Password </td>
                        <td> City </td>
                        <td> Contact </td>

                    </tr>
                    <?php
                    $q = "select * from user";
                    $rs = mysqli_query($cn, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                        <tr>
                            <td><?php print $row['name']; ?></td>
                            <td><?php print $row['address']; ?></td>
                            <td><?php print $row['email']; ?></td>
                            <td><?php print $row['password']; ?></td>
                            <td><?php print $row['city']; ?></td>
                            <td><?php print $row['contact']; ?></td>
                        </tr>
                    <?php } ?>

                </table>
            </div>

        </div>

    </div>
</section>



<?php include("footer.php") ?>