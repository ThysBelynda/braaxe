<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Grand jeu concours</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

    <script language="JavaScript">
        <!--
        //PLF- http://www.monjavascript.net/
        function nb_aleatoire(nb)
        {
            nombre= Math.floor(Math.random() * nb)+1;
        }

        // variables*********
        nbc=12 //nombre de cartes multiple de 4
        non_im="imag" //début du nom des image => nomimage(n°).gif
        // n°= 00 image vide ou transparente - 0 dos carte - de 1 à 6 pour 12 cartes (6 paires)
        // il faut aussi une image gagne.gif

        tirage = new Array;//tirage aléatoire
        place = new Array;
        choix=0;nbim2=0;nbim3=0;
        choixim=1
        gain=0;
        nombres="";
        divs=nbc/2;
        nb=nbc+1;
        cpt=0;

        for (i=1 ;i<nb ;i++)
        {
            nb_aleatoire(nbc);
            tirage[i]= nombre;
            for (t=1 ; t<i ;t++){
                if (tirage[t]==nombre)
                {
                    i=i-1;
                }}}
        for (i=1 ;i<nb ;i++)
        {
            if (tirage[i]>divs) nbtire=tirage[i]-divs;
            else nbtire=tirage[i];
            place[i]=nbtire;
        }


        function change_im(nbim) { //
            if (place[nbim] !=0) {
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
                document.images[nbim-1].src = non_im+place[nbim]+".gif";
                if (choixim==3){if (gain==divs-1) {
                    setTimeout("efface(nbim2);efface(nbim3);document.images[1].src = 'gagne.gif';",500);gain++;
                }}
                document.form1.result.value = choix
            }}

        function efface(eff) {
            document.images[eff-1].src = non_im+"00.gif";
            place[eff]=0}

        function no_efface(eff) {
            document.images[eff-1].src = non_im+"0.gif";}

        //-->
    </script>

</head>

<body>


<script language="JavaScript">
    <!--
    //PLF- http://www.monjavascript.net/
    document.write('<table border="0" align="center">');
    for (i=1 ;i<(nbc/4)+1 ;i++){
        document.write('<tr>');
        for (t=1 ;t<5 ; t++){
            cpt++;
            document.write('<td><a href="#" onClick="change_im('+(cpt)+')"><img src="'+non_im+'0.gif" width="99" height="99" border="0"></a></td>');
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
        '<input type="button" name="Submit" onClick="window.location=\'memory.htm\'" value="Rejouer">'+
        '</td><td align="center">'+
        '<input type="button" name="Submit" onClick="window.location=\'../index.htm\'" value="Quiter">'+
        '</td></tr><tr>'+
        '<td colspan="3">Le but du jeu est de retourner '+
        'les cartes 2 par 2, afin de trouver les cartes identiques</td>'+
        '</tr></table></form>');
    //-->
    <!--//PLF- http://www.monjavascript.net/ //-->
</script>


</body>
</html>