<?php

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
						 {
							echo '
								<h4>Bine ați venit!</h4>

								<div class="presentation">
									<img src="./public/res/acasa_guest.jpg"/>
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