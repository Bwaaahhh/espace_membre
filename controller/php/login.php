<?php
include("PDO.php");
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM utilisateur WHERE pseudo = :pseudo AND password = :pass');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $password));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
    echo 'Vous êtes connecté !';
}
