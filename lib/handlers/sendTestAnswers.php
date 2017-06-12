<?php 
	include "../config.php";
	include "../session.php";
	include "../functions.php";
	
	$answers = [
		"i1" => $_REQUEST["i1"],
		"i2" => $_REQUEST["i2"],
		"i3" => $_REQUEST["i3"],
		"i4" => $_REQUEST["i4"],
		"i5" => $_REQUEST["i5"],
		"i6" => $_REQUEST["i6"],
		"i7_intuneric" => $_REQUEST["i7_intuneric"],
		"i7_soareci" => $_REQUEST["i7_soareci"],
		"i7_ascutit" => $_REQUEST["i7_ascutit"],
		"i7_lift" => $_REQUEST["i7_lift"]
	];
	
	$res = sendTestAnswers($connection, $answers);
	
	echo $res === true ? "Datele au fost înregistrate cu succes!" : "Datele nu au putut fi colectate!";
?>