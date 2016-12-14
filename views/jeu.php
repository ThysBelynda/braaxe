<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Grand jeu concours</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="">

</head>

<body>

<script language="javascript">

    function changeImage() {

        if (document.getElementById("carte1").src == "../img/carte3-01.png")
        {
            document.getElementById("carte1").src = "../img/carte3-05.png";
        }
        else
        {
            document.getElementById("imgClickAndChange").src = "../img/carte3-01.png";
        }
    }
</script>

<div class="regle">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-4">
            <h3> DÉCOUVREZ L'ENSEMBLE DES ANIMATIONS EN UN MINIMUM DE TEMPS ET DE COUPS</h3>
        </div>
        <div class="col-lg-4">
            <h2>Temps : 33s <br> Coups : 20</h2>
        </div>
    </div>

</div>


<div class="carte">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">

            <div class="row">
                <div class="col-lg-3">
                    <img src="../img/carte3-01.png" height="140px" width="125px" id="carte1" onclick="changeImage()">
                </div>
                <div class="col-lg-3">
                    <img src="../img/carte3-01.png" height="140px" width="125px" id="carte2">
                </div>
                <div class="col-lg-3">
                    <img src="../img/carte3-01.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img src="../img/carte3-01.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img src="../img/carte3-01.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img src="../img/carte3-01.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img src="../img/carte3-01.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img src="../img/carte3-01.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img src="../img/carte3-01.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img src="../img/carte3-01.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img src="../img/carte3-01.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img src="../img/carte3-01.png" height="140px" width="125px">
                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>