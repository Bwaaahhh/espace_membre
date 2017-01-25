<?php include 'PDO.php';                                 //--------------Modif profil------------------//

    require_once('PDO.php');

    // if(isset($_GET['ID_utilisateur']))
    //{
      //$ID_utilisateur = (int)$_GET['ID_utilisateur'];
      $result=$dbh->query("SELECT * FROM utilisateur WHERE ID_utilisateur= 1");


        if (isset($_POST['modifier']))
        {
          $nom = ($_POST['nom']);
          $pseudo =($_POST['pseudo']);
          $prenom = ($_POST['prenom']);
          $mail = ($_POST['mail']);

          $result=$dbh->query("UPDATE utilisateur SET nom='$nom', prenom='$prenom', pseudo='$pseudo', mail='$mail' WHERE ID_utilisateur=1");
        }
      //}

 ?>
