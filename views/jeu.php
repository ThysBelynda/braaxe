<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Grand jeu concours</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

    <script language="JavaScript">
/*
        function nb_aleatoire(nb)
        {
            nombre= Math.floor(Math.random() * nb)+1;
        }

        // variables
        nombreCartes=12;    //nombre de cartes multiple de 4
        nomImage="carte";    //début du nom des image => nomimage(n°).gif
        // n°= 00 image vide ou transparente - 0 dos carte - de 1 à 6 pour 12 cartes (6 paires)
        // il faut aussi une image gagne.gif

        tirage = [];//tirage aléatoire
        place = [];
        choix=0;
        nbim2=0;
        nbim3=0;
        choixim=1;
        gain=0;
        nombres="";
        divs=nombreCartes/2;
        nb=nombreCartes+1;
        cpt=0;


        for (i=1 ; i<nb ; i++)
        {
            nb_aleatoire(nombreCartes);
            tirage[i]= nombre;

            for (t=1 ; t<i ;t++) {

                if (tirage[t]==nombre) {
                    i=i-1;
                }
            }
        }


        for (i=1 ;i<nb ;i++)
        {
            if (tirage[i]>divs) nbtire=tirage[i]-divs;
            else nbtire=tirage[i];
            place[i]=nbtire;
        }
*/
    </script>

</head>

<body>


<script language="JavaScript">
    /*nombreCartes=12;
    cpt=0;
    nomImage="carte";

    function changeCard([nbim] =0) {
        if (nbim==nbim2) nbim=0;
        else{
            if (nbim==nbim3) nbim=0;
            else{
                if (choixim==3)
                {
                    if (val1==val2) {efface(nbim2);efface(nbim3);gain++;}
                    else {no_efface(nbim2);no_efface(nbim3);}
                    choixim=1;nbim3=0
                }
                if (choixim==1) {nbim2=nbim;val1=place[nbim];choix++;}
                if (choixim==2) {nbim3=nbim;val2=place[nbim];}
                choixim++;
            }}
        document.images[nbim-1].src = non_im+place[nbim]+".png";
        if (choixim==3){if (gain==divs-1) {
            setTimeout("efface(nbim2);efface(nbim3);document.images[1].src = 'batonnet.png'",500);gain++;
        }}
        document.form1.result.value = choix
    }

    function efface(eff) {
        document.images[eff-1].src = nomImage+"1.png";
        place[eff]=0}

    function no_efface(eff) {
        document.images[eff-1].src = nomImage+"5.png";}


    document.write('<table border="0" align="center">');
    for (i=1 ;i<(nombreCartes/4)+1 ;i++){
        document.write('<tr>');
        for (t=1 ;t<5 ; t++){
            cpt++;
            document.write('<td><img src="../img/carte0.png" width="100" height="100" onclick="this.src='../img/carte1.png'"></a></td>');
        }
        document.write('</tr>');
    }
    document.write('</table><p>&nbsp;</p>'+
        '<form name="form1">'+
        '<table width="520" border="0" align="center" bgcolor="#99FFFF">'+
        '<tr><td width="200" align="center">'+
        'Nombre de coups '+
        '<input name="result" type="text" id="result2" size="5">'+
        '</td><td width="100" align="center">'+
        /*'<input type="button" name="Submit" onClick="window.location=\'jeu.php\'" value="Rejouer">'+*/
        /*'</td><td align="center">'+
        /*'<input type="button" name="Submit" onClick="window.location=\'../home.php\'" value="Quiter">'+*/
       /* '</td></tr><tr>'+
        /*'<td colspan="3">Le but du jeu est de retourner'+
        'les cartes 2 par 2, afin de trouver les cartes identiques</td>'+*/
       /* '</tr></table></form>');
*/
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

<script>

    var nb = Math.floor(Math.random()*12)+1;
    document.write(nb);

    var image_tracker ='0';
    function change(){
        var image = document.getElementById(nb);

        if (image_tracker=='0'){
            image.src ='../img/carte1.png';
            image_tracker = '1';
        } else {
            image.src ='../img/carte0.png';
            image_tracker = '0';
        }

    }


</script>

<div class="carte">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">

            <div class="row">
                <div class="col-lg-3">
                    <img id="1" onclick="change();" src="../img/carte0.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img id="2" onclick="change();" src="../img/carte0.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img id="3" onclick="change();" src="../img/carte0.png" height="140px" width="125px">
                </div>
                <div  class="col-lg-3">
                    <img id="4" onclick="change();" src="../img/carte0.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img id="5" onclick="change();" src="../img/carte0.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img id="6" onclick="change();" src="../img/carte0.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img id="7" onclick="change();" src="../img/carte0.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img id="8" onclick="change();" src="../img/carte0.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img id="9" onclick="change();" src="../img/carte0.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img id="10" onclick="change();" src="../img/carte0.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img id="11" onclick="change();" src="../img/carte0.png" height="140px" width="125px">
                </div>
                <div class="col-lg-3">
                    <img id="12" onclick="change();" src="../img/carte0.png" height="140px" width="125px">
                </div>

            </div>
        </div>
    </div>
</div>


</body>
</html>