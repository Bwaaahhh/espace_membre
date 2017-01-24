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
			<div class="small-8 large-4 columns">
				<div>
					<p>Bienvenue petit Koala !</p>
				</div>
			</div>
			<div class="small-8 large-4 columns">
				<img alt="Koala content" src="view/images/image_acceuil.jpg"/>
			</div>
		</div>
		<div class="row">
			<div class="small-10 large-5 columns">
				<a href="php/modif_profil.php"><img alt="Gros bouton de modification de profil"/></a>
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
	</main>