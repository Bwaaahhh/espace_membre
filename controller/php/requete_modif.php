<?php include 'PDO.php';                                 //--------------Modif profil------------------//



    // if(isset($_GET['ID_utilisateur']))
    //{
      //$ID_utilisateur = (int)$_GET['ID_utilisateur'];
      $result=$dbh->query("SELECT * FROM utilisateur WHERE ID_utilisateur= ".$_SESSION['id_user']." ");

        if (isset($_POST['modifier']))
        {
          $nom = ($_POST['nom']);
          $pseudo =($_POST['pseudo']);
          $prenom = ($_POST['prenom']);
          $mail = ($_POST['mail']);
          $description = ($_POST['description']);

          if($nom != "")
          {
            $result=$dbh->query("UPDATE utilisateur SET nom='$nom' WHERE ID_utilisateur= ".$_SESSION['id_user']." ");
          }

          if($pseudo != "")
          {
            $result=$dbh->query("UPDATE utilisateur SET pseudo='$pseudo' WHERE ID_utilisateur= ".$_SESSION['id_user']."");
          }

          if($prenom != "")
          {
            $result=$dbh->query("UPDATE utilisateur SET prenom='$prenom' WHERE ID_utilisateur= ".$_SESSION['id_user']."");
          }

          if($mail != "")
          {
            $result=$dbh->query("UPDATE utilisateur SET mail='$mail' WHERE ID_utilisateur= ".$_SESSION['id_user']."");
          }

          if($description != "")
          {
            $result=$dbh->query("UPDATE utilisateur SET description='$description' WHERE ID_utilisateur = ".$_SESSION['id_user']." ");

          }

        }
      //}

 ?>
