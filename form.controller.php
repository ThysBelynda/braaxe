<?php
require ('config/config.php');
require ('models/form.fn.php');

if (isset($_POST['nom']) && !empty($_POST['nom'])
    && isset($_POST['prenom']) && !empty($_POST['prenom'])
    && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['postal']) && !empty($_POST['postal'])
    && isset($_POST['telephone']) && !empty($_POST['telephone'])) {

    $decouvrir = register($db, $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['postal'], $_POST['telephone']);

    if ($decouvrir == true){
        header('Location: views/jeu.php');

    } else{
        header('Location: views/form.php');
    }
}