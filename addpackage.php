<?php include("connect.php") ?>
<?php include("aheader.php") ?>




<section class="contact py-5" id="contact">
	<div class="container py-md-5">
		<h3 class="tittle text-center">Add Package</h3>

		<div class="row mt-4">
			<div class="col-lg-12">
				<form action="addpackage_code.php" method="post" enctype="multipart/form-data">
					<div class="main-w3layouts-sectns ">
						<div class="w3-btm-spc form-text2 p-0">
							<label>
								<h4> Title </h4>
							</label>
							<input type="text" name="title" id="" placeholder="Enter Title Here">

							<label>
								<h4> Category </h4>
							</label>
							<select name="c_id" id="">
								<?php
								$q1 = "select * from category";
								$rs1 = mysqli_query($cn, $q1);
								while ($row1 = mysqli_fetch_array($rs1)) {
								?>
									<option value="<?php print $row1['c_id']; ?>"><?php print $row1['c_name']; ?></option>
								<?php } ?>
								<select>
									<label>
										<h4> Price </h4>
									</label>
									<input type="text" name="price" placeholder="Enter Price Here">


									<label>
										<h4> Details </h4>
									</label>
									<input type="text" name="detail" placeholder="Enter Details Here">


									<label>
										<h4> Photo </h4>
									</label><br><br>
									<input type="file" name="photo"><br><br>



									<label>
										<h4> Pdf </h4>
									</label> <br><br>
									<input type="file" name="pdf"><br><br>





									<p>
									<p> <button type="submit">Add</button></p>
									</p>
						</div>
					</div>

				</form>
			</div>

		</div>

	</div>
</section>



<?php include("footer.php") ?>