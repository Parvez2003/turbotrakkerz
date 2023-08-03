<?php

include("connect.php");
include("aheader.php");

$c_id = $_GET['c_id'];

$q = "select * from category where c_id='$c_id'";
$rs = mysqli_query($cn, $q);
$row = mysqli_fetch_array($rs);
?>
<section class="contact py-5" id="contact">
	<div class="container py-md-5">
		<h3 class="tittle text-center">Edit Category</h3>

		<div class="row mt-4">
			<div class="col-lg-12">
				<form action="editcategory_code.php" method="post">
					<div class="main-w3layouts-sectns ">
						<div class="w3-btm-spc form-text2 p-0">
							<input type="hidden" name="c_id" value="<?php print $c_id ?>">
							<input type="text" value="<?php print $row['c_name']; ?>" name="c_name" id="" placeholder="Category Name">
							<button type="submit">Edit</button>
						</div>
					</div>

				</form>
			</div>

		</div>

	</div>
</section>



<?php include("footer.php") ?>