<?php include "controller/php/test_membre.php" ;
      include "controller/php/requete_affichage.php" ?>
<body>
	<header>
		<div class="row">
			<div class="small-8 large-2 columns">
				<img src="view/images/logo.png"/>
			</div>
			<div class="small-8 large-2 large-offset-3 columns">
				<h1>Velkroala</h1>
			</div>
			<div class="small-8 large-2 large-offset-3 columns">
				<p>Bonjour ...</p>
			</div>
		</div>
	</header>
	<main>
        <div class="row">
            <?php foreach ($res as $obj):?>

            <div class="small-12 large-2 columns">

                <img src="<?=$obj->url_image?>" alt="Image représentant l'avatar du profil">
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
						<a href="index.php?page=visu_profil"><?=$member?></a>
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
                <button>Ajouter un commentaire</button>
            </div>
        </div>
        <div class="row">
            <div class="small-12">


                <!-- GENERATION DES COMMENTAIRES VIA PHP -->


            </div>
        </div>



    </main>
