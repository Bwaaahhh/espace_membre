<?php
include "pdo2.php";
$bad = "";
if(isset($_POST['login_submit'])){

  include "functions.php";

	$errors = false ;


	//Basic validation
	if(empty($_POST['identification'])){
		$errors = true ;
	}

  else{
		$username = $_POST['identification'];
	}

	if(empty($_POST['passwordid'])){
        $errors = true ;
	}

  else{
		$password = $_POST['passwordid'];
	}

	if ($errors == false) {
        $user = $_POST["identification"];

        // QUERY DATABASE TO VERIFY LOGIN INFORMATION
        $query_password = $dbh->prepare("SELECT password, pseudo , ID_utilisateur FROM utilisateur WHERE pseudo = :user");
        $query_password->execute(array(':user' => $user));
        $password_row = $query_password->fetchAll();

        // CHECK PASSWORD
        $password = $_POST["passwordid"];
        $password_hash = $password_row[0]["password"];
        if(password_verify($password, $password_hash)){
            $_SESSION['user'] = $password_row[0]['pseudo'];
            $_SESSION['id_user'] = $password_row[0]['ID_utilisateur'];
            header("location: index.php?page=page_accueil");
        //    require 'members.php';
        }
        // RESPOND IF WRONG INFORMATION GIVEN
        else{
        //     $login_wrong = "The username and/or password you entered is incorrect. Please try again.";
        //     require 'front_page.php';
        $bad = "<p>mauvais mot de passe ou identifiant recommence avant que ton compte soit supprimé à vie et on interdira l'accès à ton e-mail <p>";
        }
	}
}
