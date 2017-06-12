<?php
	include "./lib/config.php";
	include "./lib/session.php";
	include "./lib/functions.php";
?>

<!DOCTYPE HTML>
<html lang="ro">
    <?php include('./lib/components/meta.php') ?>

    <body>
		<script src="./public/js/ajax.js" type="text/javascript"></script>
	
		<div class="container">
			<?php include('./lib/components/header.php') ?>
		
			<div class="content">
				<div class="page">
					<h4>Test</h4>

					<div class="presentation">
						<img src="./public/res/test.jpg"/>
					</div>

					<form action="" onsubmit="sendTestAnswers()" id="test" method="post" class="test">
						<div class="question">
							I1*: Exista situatii/obiecte sau animale care iti provoca o frica intensa persistenta, excesivă sau
							nejustificata (de ex. zbor, inaltimi, animale, injecţii, vederea sângelui, plagi, lift, etc.) ?
						</div>
						<div class="answer">
							<div class="answer-a">
								<label for="q1a">
									Da
								</label>
								<input id="q1a" type="radio" name="q1" value="1">
							</div>
							<div class="answer-b">
								<label for="q1b">
									Nu
								</label>
								<input id="q1b" type="radio" name="q1" value="0">
							</div>
						</div>

						<div class="question">
							I2*: Eviti aceste situatii de la primul punct sau simti o frica puternica cand esti in aceste situatii ?
						</div>
						<div class="answer">
							<div class="answer-a">
								<label for="q2a">
									Da
								</label>
								<input id="q2a" type="radio" name="q2" value="1">
							</div>
							<div class="answer-b">
								<label for="q2b">
									Nu
								</label>
								<input id="q2b" type="radio" name="q2" value="0">
							</div>
						</div>

						<div class="question">
							I3*: Recunoşti ca frica ta este excesivă sau nejustificata ?
						</div>
						<div class="answer">
							<div class="answer-a">
								<label for="q3a">
									Da
								</label>
								<input id="q3a" type="radio" name="q3" value="1">
							</div>
							<div class="answer-b">
								<label for="q3b">
									Nu
								</label>
								<input id="q3b" type="radio" name="q3" value="0">
							</div>
						</div>

						<div class="question">
							I4*: Ai senzaţia de sufocare ?
						</div>
						<div class="answer">
							<div class="answer-a">
								<label for="q4a">
									Da
								</label>
								<input id="q4a" type="radio" name="q4" value="1">
							</div>
							<div class="answer-b">
								<label for="q4b">
									Nu
								</label>
								<input id="q4b" type="radio" name="q4" value="0">
							</div>
						</div>

						<div class="question">
							I5*: Ai amorţeli - furnicături ?
						</div>
						<div class="answer">
							<div class="answer-a">
								<label for="q5a">
									Da
								</label>
								<input id="q5a" type="radio" name="q5" value="1">
							</div>
							<div class="answer-b">
								<label for="q5b">
									Nu
								</label>
								<input id="q5b" type="radio" name="q5" value="0">
							</div>
						</div>

						<div class="question">
							I6*: Te inrosesti la nivelul feţei, ai frisoane ?
						</div>
						<div class="answer">
							<div class="answer-a">
								<label for="q6a">
									Da
								</label>
								<input id="q6a" type="radio" name="q6" value="1">
							</div>
							<div class="answer-b">
								<label for="q6b">
									Nu
								</label>
								<input id="q6b" type="radio" name="q6" value="0">
							</div>
						</div>

						<div class="question">
							I7: Care din urmatoarele situatii va creeaza palpitatii sau va agita numai cat auziti ?
						</div>
						<div class="answer-multiple">
							<input id="intuneric" type="checkbox" name="intuneric" value="1">
							<label for="intuneric">
								Intuneric
							</label>
							<br/>
							<input id="soareci" type="checkbox" name="soareci" value="1">
							<label for="soareci">
								Soareci
							</label>
							<br/>
							<input id="ascutit" type="checkbox" name="ascutit" value="1">
							<label for="ascutit">
								Stilou/Pix ascutit
							</label>
							<br/>
							<input id="lift" type="checkbox" name="lift" value="1">
							<label for="lift">
								Lift
							</label>
						</div>

						<div class="submit">
							<button id="submit-btn" type="submit">
								Trimite Raspunsurile
							</button>
							<div id="submit-status" class="hidden send-status"></div>
						</div>
					</form>
				</div>
			</div>
			
			<?php include('./lib/components/footer.php') ?>
		</div>
    </body>
</html>