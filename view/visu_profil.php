<?php include "controller/php/test_membre.php" ;
      include "controller/php/requete_affichage.php" ;
      include "controller/php/requete_ajout_com.php";
      include "controller/php/requete_visu_com.php"; ?>
<body>
	<header>
		<div class="row">
			<div class="small-8 large-2 columns">
				<a  class="aajax" href="index.php?page=page_accueil"><img src="view/images/logo.png" alt="une tete de koala qui est le logo du site" /></a>
			</div>
			<div class="small-8 large-2 large-offset-3 columns">
				<h1>Velkroala</h1>
			</div>
			<div class="small-8 large-2 large-offset-3 columns">
				<p>Bonjour <?= $_SESSION['user'] ?></p>
			</div>
		</div>
	</header>
	<main>
        <div class="row">
            <?php foreach ($res as $obj):?>

            <div class="small-12 large-2 columns">
                <?php if($obj->url_image == ""){ ?>
                    <?php echo "Cet utilisateur n'a pas encore d'image de profil" ?>
                <?php }else{ ?>
                    <img src="<?=$obj->url_image?>" alt="Image représentant l'avatar du profil">
                <?php } ?>
            </div>
            <div class="small-12 large-4 large-offset-1 columns">
                <label name="pseudo_profil">Pseudo : <?=$obj->pseudo?></label>
                <label name="nom_profil">Nom : <?=$obj->nom?></label>
                <label name="prenom_profil">Prenom : <?=$obj->prenom?></label>
            </div>
            <div class="small-8 large-4 columns">
				<p>Rechercher un membre</p>
				<form name="member_testing" action='' method="post">
					<input type="text" name="un_membre" value="">
					<input type="submit">
				</form>
			<?php if(isset($_POST["un_membre"])){ ?>
				<form name="member_find" action='visu_profil.php' method="post">
					<?php foreach($result as $each){ ?>
						<a class="aajax" href="index.php?page=visu_profil&pseudo=<?=$each->ID_utilisateur?>"><?=$each->pseudo?></a>
					<?php } ?>
				</form>
				<?php } ?>
			</div>
        </div>
        <div class="row">
            <div class="small-12">
                <p>Description :</p>
                <?=$obj->description?>
            </div>
        </div>
        <?php endforeach;?>
        <div class="row">
            <div class="small-3 columns end">
                <button onclick="popup()">Ajouter un commentaire</button>
            </div>
            <div class="small-6 popup_com">
                <form name="add_com" action="" method="post">
                    <input type="text" name="un_com"  value="" placeholder="Taper ici votre commentaire"/>
                    <button onclick="cacher()">Annuler</button>
                    <button type="submit" onclick="valider()">Valider</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="small-12">

                <?php foreach ($res3 as $obj3):?>
                    <label name="auteur_com">Auteur du com : <?=$obj3->auteur?></label>
                    <label name="contenu_com"><?=$obj3->contenu?> </label>
                <!-- GENERATION DES COMMENTAIRES VIA PHP -->
                <?php endforeach;?>

            </div>
        </div>



    </main>
