<?php
	session_start();
	
	// Stocheaza utilizatorul in sesiune
	function setUser($firstName, $lastName, $phobia, $email) {
		$user = [ 
			'firstname' => $firstName,
            'lastname' => $lastName,
			'phobia' => $phobia,
			'email' => $email
        ];
		
		$_SESSION["user"] = $user;
	};
	
	//Preia starea utilizatorului din sesiune (daca a fost stocat sau nu în sesiune)
	function getUser() {
		return !empty($_SESSION["user"]);
	};
?>