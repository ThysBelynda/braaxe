<?php
/*
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
*/

/*
//CONFIGURE YOU APP HERE
define("APP_ID","584723665071337");//REPLACE THIS WITH YOUR FACEBOOK APP ID
define("APP_SECRET","148f7c2fa47fbacb8757ce2be0d1a030");//REPLACE THIS WITH YOUR FACEBOOK APP SECRET
define("CALLBACK_URI","http://localhost/braaxe_exo/callback.php");//REPLACE THIS WITH YOU CALLBACK URL [This is where facebook will redirect user after login]
define("LOGOUT_REDIRECT_URL","http://localhost/braaxe_exo/home.php");//REPLACE THIS WITH URL OF YOU LOGIN PAGE

/** APP CONFIGURATION END HERE **/
*/

$fb = new Facebook\facebook([
    'app_id' => '584723665071337',
    'app_secret' => '148f7c2fa47fbacb8757ce2be0d1a030',
    'default_graph_version' => 'v2.5',
]);
