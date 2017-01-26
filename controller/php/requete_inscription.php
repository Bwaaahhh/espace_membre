<?php

if (!empty($_POST)) {
include 'functions.php';
include 'PDO.php';

  $errors = array();

  if (empty($_POST['surname']) || !preg_match('/^[a-zA-Z-0-9_]+$/', $_POST['surname'] )) {
    $errors['surname'] = "Le nom n'est pas valide ";

  }

  if (empty($_POST['name']) || !preg_match('/^[a-zA-Z-0-9_]+$/', $_POST['name'] )) {
    $errors['name'] = "Le prénom n'est pas valide ";
  }

  if (empty($_POST['nickname']) || !preg_match('/^[a-z\d_]{2,20}$/i', $_POST['nickname'] )) {
    $errors['nickname'] = "le pseudo n'est pas valide";
  }
  else{
    $req = $dbh->prepare("SELECT ID_utilisateur FROM utilisateur WHERE pseudo = ?");
    $req->execute([$_POST['nickname']]);
    $user = $req->fetch();

    if($user){
      $errors['nickname'] = 'Ce pseudo est déjà pris';
      echo "<p>Ce pseudo est déjà pris<p>";
    }
  }

  if (empty($_POST['email']) || !filter_var($_POST['email'] )) {

    $errors['email'] = "L'adresse électronique n'est pas valide ";
  }
  else{
    $req = $dbh->prepare("SELECT ID_utilisateur FROM utilisateur WHERE mail = ?");
    $req->execute([$_POST['email']]);
    $user = $req->fetch();
    if($user){
      $errors['email'] = 'Cet e-mail est déjà pris';
      echo "<p>Cet e-mail est déjà pris<p>";
    }
  }
  if (empty($_POST['password']) || $_POST['password'] != $_POST['reconfirm'] ) {
    $errors['password'] = "Le mot de passe n'est pas valide ";
  }

  if(empty($errors)){
    $req = $dbh->prepare("INSERT INTO utilisateur SET nom = ?, prenom = ?, pseudo = ?,  password = ?, mail = ? ");
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $req->execute([$_POST['surname'], $_POST['name'], $_POST['nickname'], $password, $_POST['email']]);
    die('compte crée');
  }


}
