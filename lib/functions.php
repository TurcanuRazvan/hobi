<?php
    // Logins an User
	function loginUser($connection){
		if(!empty($_POST['email']) && !empty($_POST['password'])){
			$email = strip_tags($_POST['email']);
			$password = strip_tags($_POST['password']);
			
			$query = $connection->prepare('SELECT firstName, lastName, phobia, email FROM users WHERE email = ? AND password = ? LIMIT 1');
			$query->bind_param('ss', $email, $password);
			$query->execute();
			$result = $query->get_result();
			
			if($result->num_rows > 0) {
				$row = $result->fetch_assoc();

				setUser($row['firstName'], $row['lastName'], $row['phobia'], $row['email']);
				
				header("Location: index.php");
				exit;
			} else {
				echo '<div id="message-notification" class="notification display">Nu v-ați putut autentifica cu datele respective!</div>';
			}
		} else {
				echo '<div id="message-notification" class="notification display">Trebuie sa completați toate câmpurile!</div>';
		}
	};

	// Registers a User
	function registerUser($connection){		
		if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['phobia']) && !empty($_POST['email']) && !empty($_POST['password'])){
			$firstName = strip_tags($_POST['firstName']);
			$lastName = strip_tags($_POST['lastName']);
			$phobia = strip_tags($_POST['phobia']);
			$email = strip_tags($_POST['email']);
			$password = strip_tags($_POST['password']);
			
			$query = $connection->prepare('SELECT email FROM users WHERE email = ? LIMIT 1');
			$query->bind_param('s', $email);
			$query->execute();
			$result = $query->get_result();
			if($result->num_rows > 0) {
				echo '<div id="message-notification" class="notification display">Adresa de Email exista deja!</div>';
			} else {
				$query = $connection->prepare('INSERT INTO users(firstName, lastName, phobia, email, password) VALUES (?, ?, ?, ?, ?)');
				$query->bind_param('sssss', $firstName, $lastName, $phobia, $email, $password);
				$query->execute();
				
				echo '<div id="message-notification" class="notification display">Userul a fost creat cu success!</div>';
			}
		} else {
			echo '<div id="message-notification" class="notification display">Trebuie sa completați toate câmpurile!</div>';
		}
	};
	
	// Checks if an Email already exists in the Database
	function checkIfEmailExists($connection, $email) {
		$query = $connection->prepare('SELECT email FROM users WHERE email = ? LIMIT 1');
		$query->bind_param('s', $email);
		$query->execute();
		$result = $query->get_result();
		if($result->num_rows > 0){
			return true;
		} else {
			return false;
		}
	}
	
	// Retrieves the statistics stored in the Database
	function retrieveStatistics($connection) {
		$statistics = [
			"totalTests" => 0,
			"total_i1" => 0,
			"total_i2" => 0,
			"total_i3" => 0,
			"total_i4" => 0,
			"total_i5" => 0,
			"total_i6" => 0,
			"total_i7_intuneric" => 0,
			"total_i7_soareci" => 0,
			"total_i7_ascutit" => 0,
			"total_i7_lift" => 0,
			"totalUsers" => 0
		];
		
		// Retrieve Total Tests
		$sql = "SELECT COUNT(*) AS totalTests FROM tests;";
		$result = $connection->query($sql);
		$row = $result->fetch_assoc();
		if ($row['totalTests']) {
			$statistics['totalTests'] = $row['totalTests'];
		}
		
		// Retrieve Questions Positive Answers (== 1)
		for ($i = 1; $i <= 6; $i++) {
			$sql = "SELECT COUNT(*) AS total_i" . (string)$i . " FROM tests WHERE i" . (string)$i . " = 1;";
			$result = $connection->query($sql);
			$row = $result->fetch_assoc();
			if ($row["total_i" . (string)$i]) {
				$statistics["total_i" . (string)$i] = $row["total_i" . (string)$i];
			}
		}
		$i7_answers = array("intuneric", "soareci", "ascutit", "lift");
		forEach ($i7_answers as $answer) {
			$sql = " SELECT COUNT(*) AS total_i7_" . (string)$answer . " FROM tests WHERE i7_" . (string)$answer . " = 1;";
			$result = $connection->query($sql);
			$row = $result->fetch_assoc();
			if ($row["total_i7_" . (string)$answer]) {
				$statistics["total_i7_" . (string)$answer] = $row["total_i7_" . (string)$answer];
			}
		};
			
		// Retrieve Total Users
		$sql = "SELECT COUNT(*) AS totalUsers FROM users;";
		$result = $connection->query($sql);
		$row = $result->fetch_assoc();
		if ($row['totalUsers']) {
			$statistics['totalUsers'] = $row['totalUsers'];
		}
		
		return $statistics;
	}
	
	// Inserts into Database the Test Answers
	function sendTestAnswers($connection, $answers) {
		$i1 = strip_tags($answers['i1']);
		$i2 = strip_tags($answers['i2']);
		$i3 = strip_tags($answers['i3']);
		$i4 = strip_tags($answers['i4']);
		$i5 = strip_tags($answers['i5']);
		$i6 = strip_tags($answers['i6']);
		$i7_intuneric = strip_tags($answers['i7_intuneric']);
		$i7_soareci = strip_tags($answers['i7_soareci']);
		$i7_ascutit = strip_tags($answers['i7_ascutit']);
		$i7_lift = strip_tags($answers['i7_lift']);
		
		$query = $connection->prepare('INSERT INTO tests(i1, i2, i3, i4, i5, i6, i7_intuneric, i7_soareci, i7_ascutit, i7_lift) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
		$query->bind_param('iiiiiiiiii', $i1, $i2, $i3, $i4, $i5, $i6, $i7_intuneric, $i7_soareci, $i7_ascutit, $i7_lift);
		$res = $query->execute();
	    if ($res) {
			return true;
		} else {
			return false;
		}
	}
?>