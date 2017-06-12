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
					<h4>Statistici</h4>

					<div class="presentation">
						<img src="./public/res/statistici.jpg"/>
					</div>
					
					<?php $statistics = retrieveStatistics($connection); ?>

					<div id="statistics-info" class="statististics">
						<div class="headline">
							Statistici Useri
						</div>
						<div class="stat">
							<div class="name">
								Useri
							</div>

							<div class="value">
								<?php echo $statistics["totalUsers"] ?> useri înregistrați
							</div>
						</div>

						<div class="headline">
							Statistici Teste
						</div>
						<div class="stat">
							<div class="name">
								Teste Realizate
							</div>

							<div class="value">
								<?php echo $statistics['totalTests'] ?> teste realizate
							</div>
						</div>
						<?php 
							if ($statistics['totalTests'] > 0) {
								echo '
									<div class="stat">
									<div class="name">
										I1 - Da/Nu
									</div>

									<div class="value">
										' . $statistics['total_i1'] . ' din ' . $statistics['totalTests'] . ' au raspuns <span>Da</span>, restul<span>Nu</span>
									</div>
								</div>
								<div class="stat">
									<div class="name">
										I2 - Da/Nu
									</div>

									<div class="value">
										' . $statistics['total_i2'] . ' din ' . $statistics['totalTests'] . ' au raspuns <span>Da</span>, restul<span>Nu</span>
									</div>
								</div>
								<div class="stat">
									<div class="name">
										I3 - Da/Nu
									</div>

									<div class="value">
										' . $statistics['total_i3'] . ' din ' . $statistics['totalTests'] . ' au raspuns <span>Da</span>, restul<span>Nu</span>
									</div>
								</div>
								<div class="stat">
									<div class="name">
										I4 - Da/Nu
									</div>

									<div class="value">
										' . $statistics['total_i4'] . ' din ' . $statistics['totalTests'] . ' au raspuns <span>Da</span>, restul<span>Nu</span>
									</div>
								</div>
								<div class="stat">
									<div class="name">
										I5 - Da/Nu
									</div>

									<div class="value">
										' . $statistics['total_i5'] . ' din ' . $statistics['totalTests'] . ' au raspuns <span>Da</span>, restul<span>Nu</span>
									</div>
								</div>
								<div class="stat">
									<div class="name">
										I6 - Da/Nu
									</div>

									<div class="value">
										' . $statistics['total_i6'] . ' din ' . $statistics['totalTests'] . ' au raspuns <span>Da</span>, restul<span>Nu</span>
									</div>
								</div>
								<div class="stat">
									<div class="name">
										I7 - Intuneric
									</div>

									<div class="value">
										' . $statistics['total_i7_intuneric'] . ' din ' . $statistics['totalTests'] . ' au selectat raspunsul
									</div>
								</div>
								<div class="stat">
									<div class="name">
										I7 - Soareci
									</div>

									<div class="value">
										' . $statistics['total_i7_soareci'] . ' din ' . $statistics['totalTests'] . ' au selectat raspunsul
									</div>
								</div>
								<div class="stat">
									<div class="name">
										I7 - Obiecte Ascutite
									</div>

									<div class="value">
										' . $statistics['total_i7_ascutit'] . ' din ' . $statistics['totalTests'] . ' au selectat raspunsul
									</div>
								</div>
								<div class="stat">
									<div class="name">
										I7 - Lift
									</div>

									<div class="value">
										' . $statistics['total_i7_lift'] . ' din ' . $statistics['totalTests'] . ' au selectat raspunsul
									</div>
								</div>
								';
							}
						?>
					</div>

					<div class="controls">
						<button id="download-statistics-csv">
							CSV
						</button>
						<button id="download-statistics-json">
							JSON
						</button>
						<button id="download-statistics-svg">
							SVG
						</button>
						<button id="download-statistics-html">
							HTML
						</button>
					</div>
				</div>
			</div>
			
			<?php include('./lib/components/footer.php') ?>
		</div>
		
		<script src="./public/js/dom-to-image.js" type="text/javascript"></script>
		<script src="./public/js/exports.js" type="text/javascript"></script>
    </body>
</html>