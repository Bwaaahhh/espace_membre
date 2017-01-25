<?php
	// request to display one profil
	$profil = $_GET["pseudo"];
	$query = $dbh->query("SELECT pseudo , nom , prenom , description FROM utilisateur WHERE utilisateur.ID_utilisateur = '$profil'");
	$res = $query->fetchAll(PDO::FETCH_OBJ);
?>
