

<!DOCTYPE HTML>
<html lang="ro">
    <?php include('./lib/components/meta.php') ?>

    <body>
		<script src="./public/js/ajax.js" type="text/javascript"></script>

		<div class="container">
			<?php include('./lib/components/header.php') ?>
		
			<div class="content">
				<div class="page">
					<h4>Înregistrare</h4>

					<?php 
						if(isset($_POST['register'])){
							registerUser($connection);
						} else {
							echo '<div id="message-notification" class="notification"></div>';
						}
					?>

					<form action="" method="post" class="form-box">
						<fieldset>
							<label>Nume</label>
							<input type="text" tabindex="1" placeholder="Introduceți Numele..." name="firstName" autocomplete="off" required>
							<label>Prenume</label>
							<input type="text" tabindex="1" placeholder="Introduceți Prenumele..." name="lastName" autocomplete="off" required>
							<label>Fobia</label>
							<input type="text" tabindex="1" placeholder="Introduceți Fobia..." name="phobia" autocomplete="off" required>
							<label>Adresa de E-Mail</label>
							<input type="text" tabindex="1" placeholder="Introduceți Adresa de E-Mail..." name="email" autocomplete="off" required onkeyup="checkIfEmailAlreadyExists(this.value)">
							<input class="hidden" type="password"/>
							<label>Parola</label>
							<input type="password" tabindex="1" placeholder="Introduceți Parola..." name="password" required>
						</fieldset>
						<footer>
							<input type="submit" value="Înregistrare" name="register" tabindex="1">
						</footer>
					</form>
				</div>
			</div>
			
			<?php include('./lib/components/footer.php') ?>
		</div>
    </body>
</html>