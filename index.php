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
						}
					?>
				</div>
			</div>
			
			<?php include('./lib/components/footer.php') ?>
		</div>
    </body>
</html>