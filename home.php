<?php

use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookSession;

require 'vendor/autoload.php';

    $appId = '584723665071337';
    $appSecret = '148f7c2fa47fbacb8757ce2be0d1a030';

FacebookSession::setDefaultApplication();

$helper = new FacebookRedirectLoginHelper('http://localhost/braaxe_exo/');

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