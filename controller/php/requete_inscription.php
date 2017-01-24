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

  if (empty($_POST['email']) || !filter_var($_POST['email'] )) {

    $errors['email'] = "L'adresse électronique n'est pas valide ";
  }

  if (empty($_POST['password']) || $_POST['password'] != $_POST['reconfirm'] ) {
    $errors['password'] = "Le mot de passe n'est pas valide ";
  }

  if(empty($errors)){
    $req = $dbh->prepare("INSERT INTO utilisateur SET nom = ?, prenom = ?, pseudo = ?, mail = ?, password = ? ");
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $req->execute([$_POST['surname'], $_POST['name'], $_POST['nickname'], $password, $_POST['email']]);
    die('compte crée');
  }

debug($errors);
}
