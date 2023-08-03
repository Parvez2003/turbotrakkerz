<?php
include("aheader.php");
include("connect.php");

$p_id = $_GET['p_id'];

$q = "select * from package where p_id='$p_id'";
$rs = mysqli_query($cn, $q);
$row = mysqli_fetch_array($rs);
?>
<section class="contact py-5" id="contact">
	<div class="container py-md-5">
		<h3 class="tittle text-center"> Edit Package </h3>

		<div class="row mt-4">
			<div class="col-lg-12">
				<form action="editpackage_code.php" enctype="multipart/form-data" method="post">
					<div class="main-w3layouts-sectns ">
						<div class="w3-btm-spc form-text2 p-0">
							<input type="hidden" name="p_id" value="<?php print $p_id ?>">
							<label>
								<h4> Title </h4>
							</label>
							<input type="text" value="<?php print $row['title']; ?>" name="title" id="">


							<label>
								<h4> C_id </h4>
							</label>
							<select value="<?php print $row['c_id']; ?>" name="c_id">


								<?php
								$q1 = "select * from category";
								$rs1 = mysqli_query($cn, $q1);
								while ($row1 = mysqli_fetch_array($rs1)) {
								?>
									<option value="<?php print $row1['c_id']; ?>"><?php print $row1['c_name']; ?></option>
								<?php } ?>

							</select>
							<label>
								<h4> Details </h4>
							</label>
							<input type="text" value="<?php print $row['detail']; ?>" name="detail" id="">

							<label>
								<h4> Price </h4>
							</label>
							<input type="text" value="<?php print $row['price']; ?>" name="price" id="">

							<label>
								<h4> Photo </h4>
							</label><br><br>
							<input type="file" value="<?php print $row['photo']; ?>" name="photo"><br><br>



							<label>
								<h4> Pdf </h4>
							</label> <br><br>
							<input type="file" value="<?php print $row['pdf']; ?>" name="pdf"><br><br>


							<button type="submit"> Edit </button>
						</div>
					</div>

				</form>
			</div>

		</div>

	</div>
</section>



<?php include("footer.php") ?>