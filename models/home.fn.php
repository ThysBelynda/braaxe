<?php

//---------------------------------------FBD CODE---------------------------------------------------
$fb = new Facebook\facebook([
    'app_id' => '584723665071337',
    'app_secret' => '148f7c2fa47fbacb8757ce2be0d1a030',
    'default_graph_version' => 'v2.5',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost/braaxe_exo/home.php/callback.php', $permissions);