
<?php include 'controller/php/requete_modif.php' ?>
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
				<a  class="aajax" href="index.php?page=visu_profil"><p>Bonjour <?= $_SESSION['user'] ?></p></a>
			</div>
		</div>
	</header>
	<main>
		<div class="row">
			<div class="small-12 small-centered columns">
				<h2>Si tu veux modifier ton profil, tu es au bon endroit petit Koala.</h2>
			</div>
		</div>
		<form method="post" action="">
			<div class="row">
				<div class="small-12 large-5 large-offset-3 columns end">
					<input type="text" name="pseudo" value="" placeholder="Votre pseudo" />
					<input type="text" name="nom" value="" placeholder="Votre Nom">
					<input type="text" name="prenom" value="" placeholder="Votre Prenom">
					<input type="text" name="mail" value="" placeholder="Votre email">
					<input type="text" name="description" value="" placeholder="Votre description">
				</div>
			</div>
			<div class="row">
				<div class="small-4 large-2 large-centered columns">
					<button class="success button" name="modifier" type="submit">Modifier</button>
				</div>
			</div>
		</form>
    </main>
