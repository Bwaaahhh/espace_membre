<?php
	// request to search pseudo
	if(isset($_POST["member_testing"])){
		$member = $_POST["member_testing"];
		$query = $dbh->query("SELECT utilisateur.pseudo FROM utilisateur WHERE pseudo LIKE ".$member." ");
		$result = $query->fetchAll();
		$true_member = in_array($member, $result);
	}
?>
