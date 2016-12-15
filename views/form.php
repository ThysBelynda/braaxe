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

<form class="form-inline">
    <div class="col-lg-8">
        <form method="POST" action="../form.controller.php">

            <div class="row">
                <div class="col-lg-offset-2 col-lg-4">
                    <div class="form-input">
                        <label>Nom</label>
                        <input type="text" name="nom" class="form-control" placeholder="Jane">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-input">
                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text" name="prenom" class="form-control" placeholder="Jane">
                        </div>
                    </div>
                </div>
            </div>
        <br>
            <div class="row">
                <div class="col-lg-offset-2 col-lg-4">
                    <div class="form-input">
                        <label >E-mail</label>
                        <input type="text" name="email" placeholder="E-mail" class="form-control">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-input">
                        <label>Code Postal</label>
                        <input type="text" name="postal" placeholder="Postal" class="form-control">
                    </div>
                </div>
            </div>
        <br>
            <div class="row">
                <div class="col-lg-offset-2 col-lg-6">
                    <div class="form-input">
                        <label>Téléphone</label>
                        <input type="text" name="telephone" placeholder="Telephone" class="form-control">
                    </div>
                 </div>

                <div class="col-lg-offset-5 col-lg-2">
                    <div class="form-submit">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</form>

</body>
</html>
