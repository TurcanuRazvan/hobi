<?php
	include "./lib/functions.php";
	include "./lib/session.php";

	unset($_SESSION["user"]);
	
	header("Location: index.php");
	exit;
?>