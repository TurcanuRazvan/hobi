<?php 
	include "../config.php";
	include "../session.php";
	include "../functions.php";
	
	$req = $_REQUEST["req"];
	
	echo checkIfEmailExists($connection, $req) ? "Adresa de Email exista deja!" : "Adresa de Email este valida!";
?>