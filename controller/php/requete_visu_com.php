<?php
	// request to display com
	$profil = $_GET["pseudo"];
	$query3 = $dbh->query("SELECT contenu , auteur FROM commentaire WHERE commentaire.ID_utilisateur = '$profil'");
	$res3 = $query3->fetchAll(PDO::FETCH_OBJ);
?>
