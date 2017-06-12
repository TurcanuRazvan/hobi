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
				    <h4>Exerciții Fizice</h4>
				
					<?php 
						if (getUser()) {
							echo '
								<p class="text-left">
									Stresul si anxietatea sunt normale si fac parte din viata oricarei persoane, insa tulburarile de
									anxietate, care afecteaza circa 40 de milioane de adulti, reprezinta problema de sanatate mintala,
									cel mai frecvent intalnita. Beneficiile exercitiilor fizice se pot prelungi dincolo de diminuarea
									nivelului de stres catre ameliorarea anxietatii si a tulburarilor psihice asociate ei.
								</p>

								<h5>Plimbarea</h5>

								<p class="text-left">
									Psihologii care s-au ocupat de influenta exerciţiului asupra starilor anxioase si depresiei au
									constatat ca 10 minute de plimbare aduc acelasi beneficiu ca 45 minute de exercitiu aerobic.
								</p>

								<h5>Natura</h5>

								<p class="text-left">
									Drumetiile prin padure sunt cea de-a doua activitate care combate depresia si anxietatea. „Natura
									are un efect calmant asupra mintii“, explica dr. Ben Michaelis, un psiholog clinician American,
									autorul a numeroase carti în domeniu.
								</p>

								<h5>Yoga</h5>

								<p class="text-left">
									Exercitiile de yoga reduc si ele depresia conform unei cercetari din 2007 publicata in
									Evidence-Based Complementary and Alternative Medicine. Astfel, aceia care au urmat astfel de cursuri
									s-au declarat mai putin nervosi, mai putin anxiosi, in timp ce altii au observant aceleasi efecte
									imediat ce au inceput exercitiile. „Lucrul cel mai important la yoga este ca dincolo de
									contorsionarile corpului se centreaza mult pe respiratie, iar acest lucru ne ajuta sa ne calmam
									nervii“, mai spune Michaelis
								</p>

								<h5>Exercitii de respiratie</h5>

								<p class="text-left">
									<b><u>Vizualizarea (ajuta la calmarea mintii):</u></b><br/>
									- Relaxeaza-te complet<br/>
									- Intinde-te, inchide ochii si imagineaza-ti ca te afli intr-un loc fericit, gandeste-te la lucruri
									placute<br/>
									- Respira adanc, pe nas<br/>
									- Vizualizeaza-te asa cum iti doresti, nu lasa gandurile negative sa-ti intre în minte<br/>
									- Stai în aceasta pozitie pentru cateva secunde si relaxeaza-ti total corpul<br/><br/>
									<b><u>Respiratia masurata (ajuta la calmarea atacurilor de panica):</u></b><br/>
									- Poti sta asezat sau in picioare<br/>
									- Relaxeaza-ti mainile si umerii si asaza-ti palmele pe umeri<br/>
									- Inspira lent pe nas, in timp ce numeri pana la 4, astfel incat stomacul sa se extinda<br/>
									- Opreste-te pentru o secunda si expira incet si lin, in timp ce numeri pana la 7<br/>
									- Repeta aceasta tehnica timp de cateva minute<br/><br/>
									<b><u>Respiratia egala (ajuta sa scapi de Stres si sa iti limpezesti mintea):</u></b><br/>
									- Respira lent, pe nas, in timp ce numeri pana la 4<br/>
									- Expira, in acelasi mod, in timp ce numeri pana la 4<br/>
									- Concentreaza-te ca respiratia sa se faca doar pe nas
								</p>
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