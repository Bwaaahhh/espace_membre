<?php include 'PDO.php';                                 //--------------Modif profil------------------//



    // if(isset($_GET['ID_utilisateur']))
    //{
      //$ID_utilisateur = (int)$_GET['ID_utilisateur'];
      // $result=$dbh->query("SELECT * FROM utilisateur WHERE ID_utilisateur= 1");

        if (isset($_POST['modifier']))
        {
          $nom = ($_POST['nom']);
          $pseudo =($_POST['pseudo']);
          $prenom = ($_POST['prenom']);
          $mail = ($_POST['mail']);

          if($nom != "")
          {
            $result=$dbh->query("UPDATE utilisateur SET nom ='$nom' WHERE ID_utilisateur = 1 ");
          }

          if($pseudo != "")
          {
            $result=$dbh->query("UPDATE utilisateur SET pseudo='$pseudo' WHERE ID_utilisateur=1");
          }

          if($prenom != "")
          {
            $result=$dbh->query("UPDATE utilisateur SET prenom='$prenom' WHERE ID_utilisateur=1");
          }

          if($mail != "")
          {
            $result=$dbh->query("UPDATE utilisateur SET mail='$mail' WHERE ID_utilisateur=1");
          }

        }
      //}

 ?>
