<?php
include("connect.php");
include("aheader.php");
 ?>



<section class="contact py-5" id="contact">
    <div class="container py-md-5">
        <h3 class="tittle text-center">View Booking</h3>

        <div class="row mt-4">
            <div class="col-lg-12">

                <table class="table">

                    <tr>
                        <td> User Detail </td>
                        <td> Package</td>
                        <td> Schedule </td>
                        <td> Booking Date </td>
                        <td> Advance amount </td>

                    </tr>


                    <?php
                    $q = "select p.*,b.*,s.*,u.name from package p, booking b, schedule s,user u where u.u_id=b.u_id and  s.s_id=b.s_id and p.p_id=b.p_id";
                    $rs = mysqli_query($cn, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                        <tr>
                            <td><?php print $row['name']; ?></td>
                            <td><?php print $row['title']; ?></td>
                            <td><?php print $row['date']; ?></td>
                            <td><?php print $row['book_date']; ?></td>
                            <td><?php print $row['advance_amount']; ?></td>
                        </tr>
                    <?php } ?>


                </table>
            </div>

        </div>

    </div>
</section>



<?php include("footer.php") ?>