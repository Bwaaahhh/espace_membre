<?php include 'controller/php/requete_modif.php' ?>
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
            <div class="small-12 small-centered large-centered columns  ">
                <p class="titre_modif">Si tu veux modifier ton profil tu es au bon endroit petit Koala</p>
            </div>
        </div>
        <div class="row">
                <div class="small-12 large-3 large-offset-1 columns">
                    <img src="" alt="">
								</div>
					<form class=""  action="" method="post">
						<input type="text" placeholder="url de la nouvelle image">

	                <div class="small-12 large-5 large-offset-2 columns end">
	                    <input type="text" name="pseudo" value="" placeholder="Votre pseudo" />
	                    <input type="text" name="nom" value="" placeholder="Votre Nom">
	                    <input type="text" name="prenom" value="" placeholder="Votre Prenom">
	                    <input type="text" name="mail" value="" placeholder="Votre email">
	                </div>
        </div>
	            <div class="row">
	                <div class="small-12" id="update_desc">
	                    <p>lalala<p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="small-4 large-2 large-centered columns">
	                    <button name="modifier" class="success button" type="submit">Modifier</button>
	                </div>
	            </div>
        		</form>


    </main>
