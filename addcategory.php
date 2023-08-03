<?php
include("connect.php");
include("aheader.php")
?>

<section class="contact py-5" id="contact">
	<div class="container py-md-5">
		<h3 class="tittle text-center">Add Category</h3>

		<div class="row mt-4">
			<div class="col-lg-12">
				<form action="addcategory_code.php" method="post">
					<div class="main-w3layouts-sectns ">
						<div class="w3-btm-spc form-text2 p-0">

							<input type="text" name="c_name" id="" placeholder="Category Name">
							<button type="submit">Add</button>
						</div>
					</div>

				</form>
			</div>

		</div>

	</div>
</section>



<?php include("footer.php") ?>