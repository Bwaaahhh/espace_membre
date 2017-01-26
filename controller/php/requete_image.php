<?php 
	if(isset($_POST["modifier"])){
		$img = $_POST["img"];
		$pseudo = $_SESSION['user'];
		$query = $dbh->query("UPDATE utilisateur SET url_image = $img WHERE pseudo = '$pseudo'");
	}
?>