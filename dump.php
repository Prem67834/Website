<?php require_once('googleauth.php') ?>	
<?php require_once('vendor/autoload.php') ?>
<?php
$clientID = "129849669835-sd20rblas0fd169dh07f83oi7snjc76r.apps.googleusercontent.com";
$secret = "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";

// Google API Client
$gclient = new Google_Client();

$gclient->setClientId($clientID);
$gclient->setClientSecret($secret);
$gclient->setRedirectUri('http://localhost/Texel/login.php');


$gclient->addScope('email');
$gclient->addScope('profile');

if (isset($_GET['code'])) {
    // Get Token
    $token = $gclient->fetchAccessTokenWithAuthCode($_GET['code']);

    // Check if fetching token did not return any errors
    if (!isset($token['error'])) {
        // Setting Access token
        $gclient->setAccessToken($token['access_token']);

        // store access token
        $_SESSION['access_token'] = $token['access_token'];

        // Get Account Profile using Google Service
        $gservice = new Google_Service_Oauth2($gclient);

        // Get User Data
        $udata = $gservice->userinfo->get();
        foreach ($udata as $k => $v) {
            $_SESSION['login_' . $k] = $v;
        }
        $_SESSION['ucode'] = $_GET['code'];

        header('location: ./');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="<?= $gclient->createAuthUrl() ?>" class="btn mt-4" id="submit_signup_1"><img
															src="https://cdn-icons-png.flaticon.com/512/281/281764.png"
															width="40px" height="40px">Sign
														up</a>
</body>
</html>