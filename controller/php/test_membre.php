<?php
	// request to search pseudo
	
	if(isset($_POST["un_membre"])){
		$member = $_POST["un_membre"];
		$query = $dbh->query("SELECT utilisateur.pseudo FROM utilisateur WHERE pseudo LIKE '%$member%'");
		$result = $query->fetchAll();
	}
?>
