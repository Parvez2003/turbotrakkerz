<?php

include("connect.php");
include("aheader.php");

if (isset($_GET['c_id'])) {
	$c_id = $_GET['c_id'];
	$qd = "delete from category where c_id='$c_id'";
	mysqli_query($cn, $qd);
}

?>
<section class="contact py-5" id="contact">
	<div class="container py-md-5">
		<h3 class="tittle text-center">View Category</h3>
		<h6><a href="addcategory.php">Add Category</a></h6>
		<div class="row mt-4">
			<div class="col-lg-12">

				<table class="table">

					<tr>

						<td> C_Name </td>

						<td> Option </td>

					</tr>
					<?php
					$q = "select * from category";
					$rs = mysqli_query($cn, $q);
					while ($row = mysqli_fetch_array($rs)) {
					?>
						<tr>

							<td><?php print $row['c_name']; ?></td>
							<td>
								<a href="editcategory.php?c_id=<?php print $row['c_id']; ?>">EDIT</a>|
								<a href="viewcategory.php?c_id=<?php print $row['c_id']; ?>">DELETE</a>

							</td>

						</tr>
					<?php } ?>
				</table>
			</div>

		</div>

	</div>
</section>



<?php include("footer.php") ?>