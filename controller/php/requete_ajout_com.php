<?php
	// request to update com
if(isset($_POST["un_com"])){
    $query2 = $dbh->query("SELECT ID_utilisateur FROM utilisateur WHERE utilisateur.ID_utilisateur = '$profil'");
    $res2 = $query2->fetchAll(PDO::FETCH_OBJ);


    foreach ($res2 as $obj){
        $id = $obj->ID_utilisateur ;
    }

		$com = $_POST["un_com"];
		$req = $dbh->prepare("INSERT INTO commentaire (contenu , auteur , ID_utilisateur) VALUES (:contenu , :auteur , :ID_utilisateur )");
        $req->execute(array(
            'contenu' => $com,
            'auteur' => $_SESSION['user'],
            'ID_utilisateur' => $id ,
        ));
}
