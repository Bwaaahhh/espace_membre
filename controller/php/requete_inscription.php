<?php

if (!empty($_POST)) {

  $errors = array();

  if (empty($_POST['surname']) || !preg_match('[^"]+', $_POST['surname'] )) {
    $errors['surname'] = "Le nom n'est pas valide ";
  }

  if (empty($_POST['name']) || !preg_match('[^"]+', $_POST['name'] )) {
    $errors['name'] = "Le prénom n'est pas valide ";
  }

  if (empty($_POST['email']) || !filter_var($_POST['email'] )) {

    $errors['email'] = "L'adresse électronique n'est pas valide ";
  }

  if (empty($_POST['password']) || $_POST['password'] != $_POST['reconfirm'] )) {
    $errors['password'] = "Le mot de passe n'est pas valide ";
  }

  include 'PDO.php'
  $pdo = "INSERT INTO utilisateur SET nom = ?, prenom = ?, pseudo = ?, mail = ?, password = ? "

}
