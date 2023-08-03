<?php
include("connect.php");
include("aheader.php");
if (isset($_GET['s_id'])) {
    $s_id = $_GET['s_id'];
    $qd = "delete from schedule where s_id='$s_id'";
    mysqli_query($cn, $qd);
}
?>
<section class="contact py-5" id="contact">
    <div class="container py-md-5">
        <h3 class="tittle text-center">View Schedule</h3>
        <h6><a href="addschedule.php">Add Schedule</a></h6>
        <div class="row mt-4">
            <div class="col-lg-12">

                <table class="table">

                    <tr>

                        <td> P_id </td>
                        <td>Date </td>
                        <td>price </td>
                        <td>capacity </td>
                        <td>Option </td>

                    </tr>


                    <?php
                    $q = "select * from schedule";
                    $rs = mysqli_query($cn, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                        <tr>

                            <td><?php print $row['p_id']; ?></td>

                            <td><?php print $row['date']; ?></td>
                            <td><?php print $row['price']; ?></td>
                            <td><?php print $row['capacity']; ?></td>
                            <td>
                                <a href="editschedule.php?s_id=<?php print $row['s_id']; ?>">EDIT </a>|
                                <a href="viewschedule.php?s_id=<?php print $row['s_id']; ?>">DELETE</a>
                            </td>
                        </tr>
                    <?php } ?>


                </table>
            </div>

        </div>

    </div>
</section>



<?php include("footer.php") ?>