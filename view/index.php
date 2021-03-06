<?php include 'controller/php/login.php' ?>
<body>
    <header>
        <div class="row">
            <img class="small-3 small-offset-4 large-2 large-offset-0 column" src="view/images/logo.png" alt="une tete de koala qui est le logo du site" />
            <div class="small-12 large-3 large-offset-2 column">
                <h1>Velkroala</h1>
                <p>Vous ne pourrez jamais en décrocher</p>
            </div>
            <form class="" action="" method="post">
                <div id="login" class="small-5 small-offset-3 large-3 large-offset-2 column end">
                    <input type="text" name="identification" placeholder="Identifiant"/>
                    <input type="password" name="passwordid" placeholder="Mot de passe"  />
                    <button class="button success" name="login_submit" type="submit">Zou!</button>
                    <?php if($bad == ""){  ?>
                  <?php   }else{  ?>
                  <?= $bad; ?>
                  <?php } ?>
                </div>
            </form>
        </div>
    </header>

    <main>
        <div class="row">
            <div class="row">
                <div class="small-2 small-centered columns">
                    <button class="button alert" onclick="subs()">S'inscrire :</button>
                </div>
            </div>
            <form id="subscribe" class="invisible" action="controller/php/requete_inscription.php" method="post">
                <div class="row">
                    <div class="small-3 column">
                        <label for="right-label" class="text-right middle">Votre nom :</label>
                    </div>
                    <div class="small-4 columns end">
                        <input type="text" name="surname" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="right-label" class="text-right middle">Votre prénom :</label>
                    </div>
                    <div class="small-4 columns end ">
                        <input type="text" name="name" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="right-label" class="text-right middle">Votre pseudo :</label>
                    </div>
                    <div class="small-4 columns end">
                        <input type="text" name="nickname" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="right-label" class="text-right middle">Votre e-mail :</label>
                    </div>
                    <div class="small-4 columns end">
                        <input type="text" name="email" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="right-label" class="text-right middle">Votre mot de passe :</label>
                    </div>
                    <div class="small-4 columns end">
                        <input type="password" name="password" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="right-label" class="text-right">Retaper votre mot de passe :</label>
                    </div>
                    <div class="small-4 columns end">
                        <input type="password" name="reconfirm" value="">
                    </div>
                </div>
                <div class="row">
                    <button class="button primary small-4 large-2 columns end" type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </main>
