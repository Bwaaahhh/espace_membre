<?php 
	if(isset($_POST["button"])){
		$img = $_POST["img"];
		$query = $dbh->query("UPDATE utilisateur SET url_image = $img WHERE pseudo = 'kikoo'");
	}
?>