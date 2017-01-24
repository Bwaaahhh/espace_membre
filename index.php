<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Velkroala</title>
        <meta name="description" content="Travail Espace Membres" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/foundation/6.2.4-rc2/foundation.min.css"  />
        <link rel="stylesheet" type="text/css" href="view/css/style.css"  />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class="row">
                <img class="small-3 small-offset-4 large-2 large-offset-0 column" src="view/images/logo.png" alt="une tete de koala qui est le logo du site" />
                <div class="small-12 large-3 large-offset-2 column">
                    <h1>Velkroala :</h1>
                    <p>Vous ne pourrez jamais en décrocher</p>
                </div>
                <div id="login" class="small-5 small-offset-3 large-3 large-offset-2 column end">
                    <input type="text" placeholder="Identifiant"/>
                    <input type="password" placeholder="Mot de passe"  />
                    <button class="button success" type="submit">Zou!</button>
                </div>
            </div>
        </header>

        <main>
            <div class="row">
                <div class="row">
                    <div class="small-2 small-centered columns">
                        <button class="button alert">S'inscrire :</button>
                    </div>

                </div>
                <form id="subscribe" class="invisible">
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
                            <input type="password" name="repassword" value="">
                        </div>
                    </div>
                    <div class="row">
                        <button class="button primary small-4 large-2 columns end" type="submit">S'inscrire</button>
                    </div>
                </form>
            </div>
        </main>

        <footer>
            <div class="row">
                <i class="fa fa-facebook-official fa-3x small-2 small-offset-3 " aria-hidden="true"></i>
                <i class="fa fa-twitter fa-3x small-2 small-offset-1" aria-hidden="true"></i>
                <i class="fa fa-github fa-3x small-2 small-offset-1" aria-hidden="true"></i>
            </div>
        </footer>

    </body>
</html>
