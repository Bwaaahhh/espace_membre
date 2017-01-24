<?php
	// request to search pseudo
	$member = $_POST("member_testing");
	$query = $dbh->query("SELECT utilisateur.pseudo FROM utilisateur WHERE pseudo LIKE ".$member."");
	$result =$query->fetchall();
	$true_member = in_array($member, $result);
?>