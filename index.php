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
					<?php 
						if (getUser()) {
							echo '
								<h4>Bine ați revenit, ' . $_SESSION["user"]["firstname"] . ' ' . $_SESSION["user"]["lastname"] . '!</h4>

								<div class="presentation">
									<img src="./public/res/acasa_logged.jpg"/>
								</div>

								<p class="text-center">
									<u>Fobiile ce le aveți:</u><br/>
									' . $_SESSION["user"]["phobia"] . '<br/><br/><br/>
									Va trebui sa persistați ca să puteți scăpa de fobiile dumneavoastră.<br/>
									Nu vă dați bătut și continuați cu excercițiile oferite de noi!
								</p>
							';
						} else {
							echo '
								<h4>Bine ați venit!</h4>

								<div class="presentation">
									<img src="./public/res/all.jpg"/>
								</div>

								<p class="text-center">
									Acesta este un sit realizat cu scopul de ajuta persoanele să scape de diferite fobii.<br/>
									Pentru utilizarea aplicației, va trebui să vă înregistrați un cont, iar pe urmă să vă autentificați.<br/><br/>
									În cazul în care doriți ajutor privat, nu ezitați să ne contactați la numarul de telefon: <br/>
									+(40)425.521.522
								</p>
							';
						}
					?>
				</div>
			</div>
			
			<?php include('./lib/components/footer.php') ?>
		</div>
    </body>
</html>