<?php
session_start();
require ('../config/config.php');

function register(PDO $db, $nom, $prenom, $email, $postal, $telephone) {
    $sql="INSERT INTO users SET nom= :nom, prenom = :prenom, email= :email, postal= :postal, telephone= :telephone";

    $req = $db->prepare($sql);
    $req->execute(array(
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':email' => $email,
        ':postal' => $postal,
        ':telephone' => $telephone
    ));

    return true;


}