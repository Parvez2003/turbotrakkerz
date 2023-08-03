<?php
include("connect.php");
include("aheader.php");


$s_id = $_GET['s_id'];

$q = "select * from schedule where s_id='$s_id'";
$rs = mysqli_query($cn, $q);
$row = mysqli_fetch_array($rs);
?>
<section class="contact py-5" id="contact">
	<div class="container py-md-5">
		<h3 class="tittle text-center">Edit Schedule</h3>

		<div class="row mt-4">
			<div class="col-lg-12">
				<form action="editschedule_code.php" method="post">
					<div class="main-w3layouts-sectns ">
						<div class="w3-btm-spc form-text2 p-0">
							<input type="hidden" name="s_id" value="<?php print $s_id ?>">
							<label>
								<h4> P_id </h4>
							</label>
							<input type="text" value="<?php print $row['p_id']; ?>" name="p_id" id="" placeholder="Enter P_id Here">


							<label>
								<h4> Date </h4>
							</label>
							<input type="date" value="<?php print $row['date']; ?>" name="date" id="" placeholder="Enter Date Here"><br><br>


							<label>
								<h4> Price </h4>
							</label>
							<input type="text" value="<?php print $row['price']; ?>" name="price" id="" placeholder="Enter Price Here">

							<label>
								<h4> Capacity </h4>
							</label>
							<input type="text" value="<?php print $row['capacity']; ?>" name="capacity" id="">

							<button type="submit"> Edit </button>
						</div>
					</div>

				</form>
			</div>

		</div>

	</div>
</section>



<?php include("footer.php") ?>