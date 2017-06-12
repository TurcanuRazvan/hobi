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
					<h4>Exerciții</h4>
					
					<?php 
						if (getUser()) {
							echo '
								<div class="presentation">
									<img src="./public/res/exercitii.jpg"/>
								</div>

								<p class="text-center">
									Vă recomandăm urmatoarele excerciții pentru a combate fobiile:
								</p>

								<ul class="exercises">
									<li>
										<a href="./exercitii_fizice.php">
											Exerciții Fizice
										</a>
									</li>
									<li>
										<a href="./exercitii_mentale.php">
											Exerciții Mentale
										</a>
									</li>
									<li>
										<a href="./jocuri.php">
											Jocuri de Amuzament/Logică
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