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
					<h4>Despre</h4>

					<div class="presentation">
						<img src="./public/res/despre.jpg"/>
					</div>

					<p class="text-center about">
						Aplicația Web cu rol de asistent medical în ceea ce privește fobia sau fobiile unui utilizator, a fost realizată de către:<br/><br/>
						<b>Țurcanu Răzvan Florin Marius</b><br/>
						<b>Filibiu Mădălina</b><br><br/>
						Acest sit este licențiat sub o atribuire <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons | International License</a><br/>
						<b>HobiWeb</b> a fost realizat pentru cursul de <b>Tehnologii Web</b> din cadrul Facultății de Informatică, din Iași
					</p>
				</div>
			</div>
			
			<?php include('./lib/components/footer.php') ?>
		</div>
    </body>
</html>