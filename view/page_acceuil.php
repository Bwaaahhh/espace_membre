<?php include "php/test_membre.php" ?>
<body>
	<header>
		<div class="row">
			<div class="small-8 large-2 columns">
				<img src="images/logo.png"/>
			</div>
			<div class="small-8 large-2 large-offset-3 columns">
				<h1>Velkroala</h1>
			</div>
			<div class="small-8 large-2 large-offset-3 columns">
				<p>Bonjour ...</p>
			</div>
		</div>
	</header>
	<section>
		<div class="row">
			<div class="small-8 large-4 columns">
				<div>
					<p>Bienvenue petit Koala !</p>
				</div>
			</div>
			<div class="small-8 large-4 columns">
				<img alt="Koala content" src="..."/>
			</div>
		</div>
		<div class="row">
			<div class="small-10 large-5 columns">
				<img alt="Gros bouton de modification de profil"/>
			</div>
			<div class="small-8 large-4 columns">
				<p>Rechercher un membre</p>
				<form name="member_testing" action='php/test_membre.php' method="post">
					<input type="text" value>Pseudo</input>
					<input type="submit"></input>
				</form>
				<form name="member_finding" action='php/visu_profil.php' method="post">
					<?php foreach($result as $each){ ?>
						<?php if($true_member == true){ ?> 
							<input type="submit" name="<?= $member; ?>">
						<?php } else{ ?>
							<?= <p>Aucun Koala ne se nomme ainsi</p> ?>
						<?php } ?>
					<?php } ?>
				</form>
			</div>
		</div>
	</section>
	<footer>
		<div class="small-8 large-4 columns">
			<img src="..." alt="logo-facebook"/>
			<img src="..." alt="logo-twitter"/>
			<img src="..." alt="logo-github"/>
		</div>
	</footer>
</body>