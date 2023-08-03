<?php
include("connect.php");

include("aheader.php");
if (isset($_GET['p_id'])) {
    $p_id = $_GET['p_id'];
    $qd = "delete from package where p_id='$p_id'";
    mysqli_query($cn, $qd);
}
?>
<section class="contact py-5" id="contact">
    <div class="container py-md-5">
        <h3 class="tittle text-center">View package</h3>
        <h6><a href="addpackage.php">Add Package</a></h6>
        <div class="row mt-4">
            <div class="col-lg-12">

                <table class="table">

                    <tr>
                        <td> Title </td>
                        <td> Price </td>
                        <td> Details </td>
                        <td> Photo </td>
                        <td> Pdf </td>
                        <td> Option </td>

                    </tr>
                    <?php
                    $q = "select * from package";
                    $rs = mysqli_query($cn, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                        <tr>
                            <td><?php print $row['title']; ?></td>
                            <td><?php print $row['price']; ?></td>
                            <td><?php print $row['detail']; ?></td>
                            <td><img src="<?php print $row['photo']; ?>" style="width:250px;height:250px" /></td>
                            <td><a href="<?php print $row['pdf']; ?>" download="">Download</a></td>
                            <td>
                                <a href="editpackage.php?p_id=<?php print $row['p_id']; ?>">EDIT</a>|
                                <a href="viewpackage.php?p_id=<?php print $row['p_id']; ?>">DELETE</a>

                            </td>
                        </tr>
                    <?php } ?>


                </table>
            </div>

        </div>

    </div>
</section>



<?php include("footer.php") ?>