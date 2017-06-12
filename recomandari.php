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
				    <h4>Recomandări</h4>
				
					<?php 
						if (getUser()) {
							echo '
								 <div class="presentation">
									<img src="./public/res/recomandari.jpg"/>
								</div>

								<p class="text-center">
									Vă recomandăm urmatoarea lectură în ceea ce privește fobiile:
								</p>

								<ul class="recommendations">
									<li>
										<a href="http://esticurios.ro/lifestyle/top-45-cele-mai-ciudate-si-neobisnuite-fobii-ale-oamenilor-frica" target="_blank">
											Cele mai ciudate Fobii din lume
										</a>
									</li>
									<li>
										<a href="http://adevarul.ro/locale/ramnicu-valcea/ciudatenii-despre-fobii-apare-teama-dus-cinofobia-teama-inaltime-explicatiile-specialistilor-1_558d6b176471c92e069d5813/index.html" target="_blank">
											Cum apare teama
										</a>
									</li>
									<li>
										<a href="http://www.la-psiholog.ro/info/fobii-totul-despre-fobii-de-la-a-la-z" target="_blank">
											Despre toate Fobiile A-Z
										</a>
									</li>
									<li>
										<a href="http://adevarul.ro/sanatate/minte-sanatoasa/fobia-selfie-celelalte-frici-ni-le-aadus-tehnologia-moderna-1_5367ae170d133766a861874f/index.html" target="_blank">
											Nomofobia - Tehnologia Modernă
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