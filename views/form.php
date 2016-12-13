<?php
require ('../form.controller.php');
?>

<!doctype html>

<html lang="fr">
<head>
    <meta charset="utf-8">

    <title>Gagné!</title>

</head>

<body>
<h2> BRAVO ! <br> <p>Vous avez découvert toutes les cartes en : ... coups et ... sec <br> Vous obtenez donc un score de 3400 pts <hr> Pour découvrir le classement merci de compléter le formulaire suivant :</p></h2>
<section id="login-container">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 midway-horizontal midway-vertical fadeInDown animated">
        <div id="logbox">
            <h1>Connectez-vous !</h1>
            <form method="POST" action="../jeu.php">
                <div class="form-input">
					<input type="text" name="nom" placeholder="Nom">
                </div>
                <div class="form-input">
					<input type="text" name="prenom" placeholder="Prénom">
                </div>
                <div class="form-input">
                    <input type="text" name="email" placeholder="E-mail">
                </div>
                <div class="form-input">
                    <input type="text" name="postal" placeholder="Postal">
                </div>
                <div class="form-input">
                    <input type="text" name="telephone" placeholder="Telephone">
                </div>
                <div class="form-submit">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
</section>

</body>
</html>
