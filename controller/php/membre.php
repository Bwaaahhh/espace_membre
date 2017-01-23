<?php
	// request to search pseudo
	$query = $dbh->query("SELECT utilisateur.pseudo FROM utilistaeur whetre nom like ");
	$result =$query->fetchall();
	$member = $_POST("member_testing");
	$true_member = in_array($member, $result);
?>