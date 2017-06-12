<!DOCTYPE HTML>
<html lang="ro">
    <?php include('./lib/components/meta.php') ?>

    <body>
		<div class="container">
			<?php include('./lib/components/header.php') ?>
		
			<div class="content">
				<div class="page">
				    <h4>Exerciții Mentale</h4>
				
					<?php 
						if (getUser()) {
							echo '
								<p class="text-left">
									Puteti sa va controlati mintea folosind urmatoarele sfaturi psihologice si fiziologice si veti putea
									trai o viata satisfacatoare, fara stres si atacuri de anxietate.
								</p>

								<h5>Masajul</h5>

								<p class="text-left">
									Contribuie la relaxare, reducerea stresului si a nivelurilor de anxietate. Daca va simtit anxiosi la
									locul de munca si nu aveti timp sa vizitati un maseur profesionist, faceti un auto-masaj discret cu
									mainile la nivelul cefei, chiar in biroul dvs.
								</p>

								<h5>Analizati si luati masuri pentru rezolvarea problemelor si temerilor</h5>

								<p class="text-left">
									Daca suferiti de fobii, incercati sa va confruntati cu temerile dvs., dar treptat, cu ajutorul unui
									profesionist, invatati sa acceptati situatiile care vi se par terifiante.
								</p>

								<h5>Ganditi pozitiv</h5>

								<p class="text-left">
									Inlocuiti gandurile negative cu cele pozitive. Este posibil sa fi auzit deja acest sfat, dar aceasta
									este de fapt o tehnica de genstionare simpla dar foarte eficienta a anxietatii.<br/><br/>
									Incercati sa suprimati gandurile negative, nu subestimati puterea mintii. Dvs. mentineti controlul
									acesteia si puteti sa renuntati la gandurile negative si sa le inlocuiti cu unele optimiste.
								</p>

								<h5>Exprimati-va in scris temerile si grijile</h5>

								<p class="text-left">
									O data ce ati pus totul pe hartie ati putea afla ca va faceti griji legate de evenimente asupra
									carora n-aveti nici un control, dar si legate de probleme nesemnificative. In acest caz pur si
									simplu trebuie sa incetati sa va mai ingrijorati, sa va pastrati energia si puterea pentru
									provocarile importante din viata dumneavoastra.
								</p>

								<h5>Nu va faceti griji despre ce cred sau ce spun oamenii despre dumneavoastra</h5>

								<p class="text-left">
									Acest lucru este foarte util pentru persoanele care sufera de tulburari de anxietate sociala. Nu
									aveti nevoie de aprobarea sau amestecul altor persoane pentru ca viata dvs. sa devina mai
									interesanta.
								</p>

								<h5>Zambiti</h5>

								<p class="text-left">
									Prin zambet se elibereaza medicamente naturale in corpul nostru: serotonina si endorfina. Acesti
									hormoni sunt calmante naturale care vor contribui la eliberarea tensiunilor din organism, la
									relaxarea muschilor si inlaturarea durerii. Starea negativa de spirit se va transforma instantaneu
									in buna dispozitie. Zambetul este contagios si va stimula sistemul imunitar.
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