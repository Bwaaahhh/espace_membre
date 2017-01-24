<?php
	// request to display one profil
	$profil = $_POST["member_find"];
	$query = $dbh->query("SELECT pseudo , nom , prenom , description FROM utilisateur WHERE utilisateur.pseudo = '$profil'");
	$res = $query->fetchAll(PDO::FETCH_OBJ);
?>
