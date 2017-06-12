<?php
	include "./lib/config.php";
	include "./lib/session.php";
	include "./lib/functions.php";
?>

<!DOCTYPE HTML>
<html lang="ro">
    <?php include('./lib/components/meta.php') ?>

    <body>
		<div class="container">
			<?php include('./lib/components/header.php') ?>
		
			<div class="content">
				<div class="page">
					<h4>Autentificare</h4>

					<?php 
						if(isset($_POST['login'])){
							loginUser($connection);
						} else {
							echo '<div id="message-notification" class="notification"></div>';
						}
					?>

					<form action="" method="post" class="form-box">
						<fieldset>
							<label>Adresa de E-Mail</label>
							<input type="text" tabindex="1" placeholder="Introduceți Adresa de E-Mail..." name="email" autocomplete="off" required>
							<label>Parola</label>
							<input type="password" tabindex="1"  placeholder="Introduceți Parola..." name="password" autocomplete="off" required>
						</fieldset>
						<footer>
							<input type="submit" value="Autentificare" name="login" tabindex="1">
						</footer>
					</form>
				</div>
			</div>
			
			<?php include('./lib/components/footer.php') ?>
		</div>
    </body>
</html>