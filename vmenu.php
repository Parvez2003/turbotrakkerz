	<nav>
		<label for="drop" class="toggle">Menu</label>
		<input type="checkbox" id="drop" />
		<ul class="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="vpackage.php">Package</a></li>

			<li><a href="vgallery.php">Gallery</a></li>
			<?php
			if (!isset($_SESSION['u_id'])) {
			?>
				<li><a href="register.php">Register</a></li>
				<li><a href="vlogin.php">Login</a></li>
			<?php } else { ?>
				<li><a href="logout.php">Logout</a></li>
			<?php } ?>
		</ul>
	</nav>