<?php
	// request to display one profil
	$query = $dbh->query("SELECT pseudo , nom , prenom , description FROM utilisateur WHERE utilisateur.prenom LIKE \"Melanie\" ");
	$res = $query->fetchAll(PDO::FETCH_OBJ);
?>