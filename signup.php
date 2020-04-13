<?php
	require "header.php";
?>

	<main>
		<div class="wrapper-main">
			<section class="section-default">
				<h1>Signup</h1>
				<?php
					if (isset($_GET['error'])) {
						if ($_GET['error']=="emptyfields") {
							echo '<p class="signuperror">Fill in all fields!</p>';
						}
						else if ($_GET['error']=="invaliduidmail") {
							echo '<p class="signuperror">Fill in all fields!</p>';
						}
					}
				?>
				<form action="includes/signup.inc.php" method="post">
					<input type="text" name="uid" placeholder="username"></br>
					<input type="text" name="mail" placeholder="E-mail"></br>
					<input type="password" name="pwd" placeholder="password"></br>
					<input type="password" name="re-pwd" placeholder="repeat-password"></br>
					<button type="submit" name="signup-submit">Submit</button>
				</form>
			</section>
			
		</div>
		
	</main>

