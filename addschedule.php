<?php include("connect.php") ?>

<?php include("aheader.php") ?>

<section class="contact py-5" id="contact">
	<div class="container py-md-5">
		<h3 class="tittle text-center">Add Schedule</h3>

		<div class="row mt-4">
			<div class="col-lg-12">
				<form action="addschedule_code.php" method="post">
					<div class="main-w3layouts-sectns ">
						<div class="w3-btm-spc form-text2 p-0">
							<label>
								<h4> P_id </h4>
							</label>
							<!-- <input type="text" name="p_id" id="" placeholder="Enter P_id Here"> -->

							<select name="p_id">
								<option value="">1</option>
								<option value="">5</option>
							</select>
							<label>
								<h4> Date </h4>
							</label>
							<input type="date" name="date" id="" placeholder="Enter Date Here">
							<br><br>
							<label>
								<h4> Price </h4>
							</label>
							<input type="text" name="price" id="" placeholder="Enter Price Here">

							<label>
								<h4> Capacity </h4>
							</label>
							<input type="text" name="capacity" id="" placeholder="Enter Capacity Here">


							<button type="submit">Add</button>
						</div>
					</div>

				</form>
			</div>

		</div>

	</div>
</section>



<?php include("footer.php") ?>