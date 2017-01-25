<?php
include "pdo2.php";

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
	}

  else{
		$password = $_POST['passwordid'];
	}

	if (count($errors == 0)) {
        $user = $_POST["identification"];

        // QUERY DATABASE TO VERIFY LOGIN INFORMATION
        $query_password = $dbh->prepare("SELECT password, pseudo FROM utilisateur WHERE pseudo = :user");
        $query_password->execute(array(':user' => $user));
        $password_row = $query_password->fetchAll();

        // CHECK PASSWORD
        $password = $_POST["passwordid"];
        print_r($password);
        $password_hash = $password_row[0]["password"];
print_r($password_hash);
        if(password_verify($password, $password_hash)){
        //    $_SESSION['pseudo'] = $password_row[0]['user_session'];
        //    require 'members.php';
        print_r("pouet");
        }
        // RESPOND IF WRONG INFORMATION GIVEN
        else{
        //     $login_wrong = "The username and/or password you entered is incorrect. Please try again.";
        //     require 'front_page.php';
        print_r("lala");
        }
	}
}
