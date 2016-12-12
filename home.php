<?php
require_once 'vendor/facebook/graph-sdk/src/Facebook/autoload.php';

$fb = new Facebook\facebook([
    'app_id' => '584723665071337',
    'app_secret' => '148f7c2fa47fbacb8757ce2be0d1a030',
    'default_graph_version' => 'v2.5',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost/braaxe_exo/home.php/callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Grand jeu concours</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>



        <div class="prix">
            <div class="red">
                <div class="rec">
                    <div class="anim">
                        <div class="bat">
                            <img src="img/batonnet2.png" height="400px" width=375px">
                        </div>
                        <div class="bouton">

                            <div class="fb-login-button" scope="public_profile,email" onlogin="checkLoginState(); data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true">

                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

<div id="status">

</div>
</body>
</html>