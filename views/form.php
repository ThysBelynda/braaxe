<!doctype html>

<html lang="fr">
<head>
    <meta charset="utf-8">

    <title>Gagné!</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"

</head>

<body>
<div class="message" align="center">
    <div class="row">
        <div class="col-lg-8">
            <h2> BRAVO ! </h2>
            <div class="texte">
                <h4>Vous avez découvert toutes les cartes en :</h4>
                <p>... coups et ... sec</p> <br>
            </div>
            <div class="texte">
                <h4>Vous obtenez donc un score de :</h4>
                <p> ... pts</p>
            </div>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <p>Pour découvrir le classement merci de compléter le formulaire suivant :</p>
        </div>
    </div>
</div>

<div class="form" align="center">
    <div class="col-lg-8">
        <form method="POST" action="../form.controller.php">

            <div class="row">
                <div class="col-lg-offset-2 col-lg-4">
                    <div class="form-input">
                        <input type="text" name="nom" placeholder="Nom">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-input">
                        <input type="text" name="prenom" placeholder="Prénom">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-offset-2 col-lg-4">
                    <div class="form-input">
                        <input type="text" name="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-input">
                        <input type="text" name="postal" placeholder="Postal">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-offset-4 col-lg-4">
                    <div class="form-input">
                        <input type="text" name="telephone" placeholder="Telephone">
                    </div>
                    <div class="form-submit">
                        <input type="submit" value="Envoyer">
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>


</body>
</html>
