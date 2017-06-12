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
				    <h4>Jocuri de Amuzament/Logică</h4>
				
					<?php 
						if (getUser()) {
							echo '
								<p class="text-center">
									Următoarele jocuri vă pot ajuta în a vă relaxa:
								</p>

								<ul class="exercises">
									<li>
										<a href="https://sketch.io/sketchpad/"  target="_blank">
											SketchPad (Desen)
										</a>
									</li>
									<li>
										<a href="http://www.jigsawplanet.com/" target="_blank">
											JigsawPlanet (Puzzle)
										</a>
									</li>
								</ul>
							';
						} else {
							echo '
								<div class="not-logged">
									Va trebui să vă autentificați pentru a putea vizualiza conținutul!
								</div>
							';
						}
					?>
				</div>
			</div>
			
			<?php include('./lib/components/footer.php') ?>
		</div>
    </body>
</html>