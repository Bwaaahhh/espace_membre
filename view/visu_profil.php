<?php include "controller/php/test_membre.php" ?>
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
                <label name="pseudo_profil"><?=$obj->pseudo?></label>
                <label name="nom_profil"><?=$obj->nom?></label>
                <label name="prenom_profil"><?=$obj->prenom?></label>
            </div>
            <div class="small-12 large-4 large-offset-1 columns">
                <form name="member_testing" action='controller/php/test_membre.php' method="post">
					<input type="text" value="">Pseudo</input>
					<input type="submit"></input>
				</form>
				<form name="member_find" action='php/visu_profil.php' method="post">
					<?php foreach($result as $each){ ?>
						<?php if($true_member == true){ ?>
							<input type="submit" name="<?= $member ?>">
						<?php } else{ ?>
							 <p>Aucun Koala ne se nomme ainsi.</p>
						<?php } ?>
					<?php } ?>
				</form>
            </div>
        </div>
        <div class="row">
            <div class="small-12">
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
