<?php

if(isset($_POST['login_submit'])){

  include "functions.php";

	$errors = array();


	//Basic validation
	if(empty($_POST['identification'])){
		$errors[] = "entrer un pseudo";
    echo "entrer un pseudo";
	}

  else{
		$username = $_POST['identification'];
    echo $username;
	}

	if(empty($_POST['passwordid'])){
		$errors[] = "entrer votre mdp";
    echo "";
	}

  else{
		$password = $_POST['passwordid'];
    echo $password;
	}

	if (count($errors == 0)) {
		$sql = "SELECT ID_utilisateur FROM utilisateur WHERE pseudo = '$username'";
		$result = $mysqli->query($sql);
		if ($result->num_rows === 1) {
			$row = $result->fetch_array(MYSQLI_ASSOC);
			if (password_verify($password, $row['passwordid'])) {
				//Password matches, so create the session
				$_SESSION['user']['user_id'] = $row['user_id'];
				// header("Location:/members");
			}else{
				$errors[] = "The username or password do not match";
			}
		}else{
			$errors[] = "The username or password do not match";
		}
	}
}
