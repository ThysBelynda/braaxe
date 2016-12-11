<?php

$host = "localhost";
$dbName = "helloddk_test";
$user = "root";
$password = "root";


try {
    $db = new PDO('mysql:host=' . $host . ';dbname=' . $dbName . ';charset=utf8', $user, $password);
    //echo 'Ca marche';
} // si elle rate, on affiche l'erreur
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
