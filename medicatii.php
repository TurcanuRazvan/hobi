<!DOCTYPE HTML>
<html lang="ro">
    <?php include('./lib/components/meta.php') ?>

    <body>
		<div class="container">
			<?php include('./lib/components/header.php') ?>
		
			<div class="content">
				<div class="page">
				    <h4>Medicații</h4>
				
					<?php 
						if (getUser()) {
							echo '
								<div class="presentation">
									<img src="./public/res/medicatii.jpg"/>
								</div>

								<p class="text-left">
									Cauzele fobiei sunt in mare parte necunoscute inca. Totusi, se pare ca exista o corelatie stransa
									intre fobia pacientului si fobia parintilor acestuia. Copiii pot invata fobiile observand reactiile
									fobice ale unui membru al familiei la un obiect sau o situatie. Un exemplu de fobie invatata este
									teama de serpi. Neurotransmitatorii din creier, genetica si experientele traumatice de asemeni par
									sa influenteze dezvoltarea fobiilor.
								</p>

								<h5>Consult de specialitate</h5>

								<p class="text-left">
									Simpla senzatie de teama si nesiguranta fata de anumite obiecte sau situatii poate fi normala si
									comuna. Daca teama nu impiedica desfasurarea vietii, nu este considerata o tulburare si poate sa nu
									necesite tratament. Dar daca teama devine irationala si incontrolabila astfel incat afecteaza
									interactiunea sociala sau sarcinile de serviciu, tulburarea poate necesita tratament medical sau
									psihologic. Evaluarea initiala trebuie sa fie facuta de un medic, cum ar fi medicul de familie sau
									un psihiatru, care poate elimina alte cauze ale anxietatii. Apoi, tratamentul poate fi condus de un
									profesionist in sanatate mentala cum ar fi psihiatrul sau psihologul.
								</p>

								<h5>Diagnostic</h5>

								<p class="text-left">
									Medicul va obtine o anamneza, va intreba despre simptome, cat de des apar si ce le declanseaza.
									Uneori afectiuni fizice pot apare in acelasi timp cu tulburarea de anxietate. Astfel ca medicul va
									realiza o examinare fizica completa, astfel incat sa determine daca nu cumva alte conditii medicale
									in afara fobiei determina simptomele de anxietate. Fobia poate apare alaturi de ale tulburari de
									anxietate si poate fi insotita de depresie, abuz de alcool sau alte substante, sau tulburari de
									alimentatie. Medicul va incerca sa identifice alte tulburari mentale care pot exista inainte de a
									discuta despre tratament.
								</p>

								<h5>Complicatii</h5>

								<p class="text-left">
									<u><b>Fobia poate determina aparitia altor probleme</b></u><br/>
									- Izolarea Sociala: pacientul cu fobie poate evita situatiile sociale si locurile publice; pot apare
									probleme financiare, profesionale sau interpersonale datorita fobiei sociale si agorafobiei;<br/>
									- Depresia: evitarea mai multor activitati pe care alti oameni le considera placute in viata
									personala si profesionala poate duce la aparitia depresiei;<br/>
									- Abuzul de Substante: unele persoane cu fobii apeleaza la alcool sau alte droguri pentru a face
									fata stresului; aceasta alegere nesanatoasa si neinteleapta poate duce la abuzul de alcool sau alte
									droguri.
								</p>

								<h5>Tratament</h5>

								<p class="text-left">
									Medicul poate sugera medicatie sau terapie comportamentala sau ambele pentru tratamentul fobiei.
									Majoritatea pacientilor nu se fac bine fara ajutor si necesita o forma de tratament. Obiectivul
									tratamentului fobiei este reducerea anxietatii si fricii si sa-l ajute pe pacient sa faca fata mai
									bine obiectelor si situatiilor care determina aceste simptome.<br/><br/>
									<u><b>Tratament medicamentos</b></u><br/>
									- Beta blocante. Aceasta medicatie functioneaza prin blocarea efectului stimulator al epinefrinei
									(adrenalina). Ele blocheaza unele semne periferice ale stimularii adrenergice si anxietatii,
									incluzand pulsul crescut, tensiunea arteriala crescuta, tremuraturile vocii si ale mainilor. Aceasta
									medicatie poate fi foarte eficienta pentru persoanele care au trac pe scena, dar care trebuie sa
									tina o prezentare in fata altor persoane. Totusi, nu toate betablocantele sunt eficiente pentru
									acest scop, si sunt disponibile doar cu prescriptie medicala.<br/>
									- Antidepresivele. Antidepresivele pot, de asemeni, sa reduca anxietatea. Cele mai folosite
									antidepresive sunt inhibitorii selectivi ai recaptarii serotoninei (ISRS). Aceasta medicatie
									actioneaza la nivelul serotoninei, un neurotransmitator din creier despre care se crede ca
									influenteaza dispozitia. Dintre ISRS fac parte: citalopram, escitalopram, fluoxetina, fluvoxamina,
									paroxetina, sertralina. Daca ISRS nu sunt eficiente sau determina efecte secundare intolerabile,
									medicul poate prescrie inhibitori de monoaminoxidaza (IMAO), care blocheaza monoaminoxidaza din
									sistemul nervos. IMAO include fenelezina si tranilcipromina.<br/>
									- Sedative. Medicamentele numite benzodiazepine ajuta la relaxarea pacientului prin reducerea
									anxietatii simtite de acesta. Ele includ lorazepam, diazepam, alprazolam, clordiazepoxid. Sedativele
									trebuie folosite cu precautie deoarece pot da dependenta. In general este sigura folosirea unor doze
									mici de sedative din cand in cand sau doar pe perioade scurte de timp. Totusi, sedativele trebuie
									evitate daca pacientul are un istoric de abuz de alcool sau alte droguri.
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