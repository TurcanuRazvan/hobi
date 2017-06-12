<?php
	// Configuration File
	ob_start();
	
	// Connection data
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "hobiweb";
	
	// Establishing database connection
	$connection = new mysqli($server, $username, $password, $database);
	if ($connection->connect_error){
		die("");
	}
	
	// We check if the 'users' and 'tests' tables exists with populated data
	// If they are missing, we create them
	$query = "SELECT id FROM users";
	$result = mysqli_query($connection, $query);

	if(empty($result)){
        $query = "CREATE TABLE users(id int(100) AUTO_INCREMENT, firstName varchar(200) NOT NULL, lastName varchar(200) NOT NULL, phobia varchar(00) NOT NULL, password varchar(200) NOT NULL, email varchar(200) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
        $result = mysqli_query($connection, $query);
	}
	
	$query = "SELECT id FROM tests";
	$result = mysqli_query($connection, $query);

	if(empty($result)){
        $query = "CREATE TABLE tests(id int(100) AUTO_INCREMENT, i1 int(100) NOT NULL, i2 int(100) NOT NULL, i3 int(100) NOT NULL, i4 int(100) NOT NULL, i5 int(100) NOT NULL, i6 int(100) NOT NULL, i7_intuneric int(100) NOT NULL, i7_soareci int(100) NOT NULL, i7_ascutit int(100) NOT NULL, i7_lift int(100) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
        $result = mysqli_query($connection, $query);
	}

?>