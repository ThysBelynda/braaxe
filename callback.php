<?php
require_once 'vendor/facebook/graph-sdk/src/Facebook/autoload.php';

# login-callback.php
$fb = new Facebook\facebook([
    'app_id' => '584723665071337',
    'app_secret' => '148f7c2fa47fbacb8757ce2be0d1a030',
    'default_graph_version' => 'v2.5',
]);

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
