<?php
if(!session_id()) {
    session_start();
}
require_once 'vendor/facebook/graph-sdk/src/Facebook/autoload.php';

//------------------------------------------FB CODE---------------------------------------------------
# login-callback.php
$fb = new Facebook\facebook([
    'app_id' => '584723665071337',
    'app_secret' => '148f7c2fa47fbacb8757ce2be0d1a030',
    'default_graph_version' => 'v2.5',
]);

//------------------------------------------FB CODE PHP-----------------------------------------------

$helper = $fb->getRedirectLoginHelper();
try {
    $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (isset($accessToken)) {
    // Logged in!
    $_SESSION['facebook_access_token'] = (string) $accessToken;

    header('Location: views/jeu.php');
    // Now you can redirect to another page and use the
    // access token from $_SESSION['facebook_access_token']
}


//------------------------------------------FB CODE JS----------------------------------------------
# example-obtain-from-js-cookie-app.php
$fb = new Facebook\facebook([
    'app_id' => '584723665071337',
    'app_secret' => '148f7c2fa47fbacb8757ce2be0d1a030',
    'default_graph_version' => 'v2.5',
]);

$helper = $fb->getJavaScriptHelper();
try {
    $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (isset($accessToken)) {
    // Logged in
}

