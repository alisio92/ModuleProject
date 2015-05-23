<?php
include_once "./google-api-php-client-master/examples/templates/base.php";
session_start();

require_once realpath(dirname(__FILE__) . './google-api-php-client-master/examples//../src/Google/autoload.php');
$client_id = '421774788282-u8gc0u1i1hbiev36avlrsaubgqbb8lnm.apps.googleusercontent.com';
$client_secret = 'cqGnx_HxMmeATQV77kESkmIn';
$redirect_uri = 'http://student.howest.be/alisio.putman/app/GoogleApi/index.php';

$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("https://www.googleapis.com/auth/urlshortener");

$service = new Google_Service_Urlshortener($client);

if (isset($_REQUEST['logout'])) {
    unset($_SESSION['access_token']);
}

if (isset($_GET['code'])) {
    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
    $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
} else {
    $authUrl = $client->createAuthUrl();
}

if ($client->getAccessToken() && isset($_GET['url'])) {
    $url = new Google_Service_Urlshortener_Url();
    $url->longUrl = $_GET['url'];
    $short = $service->url->insert($url);
    $_SESSION['access_token'] = $client->getAccessToken();
}

echo pageHeader("User Query - URL Shortener");
if (strpos($client_id, "googleusercontent") == false) {
    echo missingClientSecretsWarning();
    exit;
}
?>
    <div class="box">
        <div class="request">
            <?php
            if (isset($authUrl)) {
                echo "<a class='login' href='" . $authUrl . "'>Connect Me!</a>";
            } else {
?>
            <p><?php echo $error; ?></p>
            <p>Hi <?php echo $name; ?></p>
            <p><img src='<?php echo $image; ?>' /></p>
            <p><a href='<?php echo $logout; ?>'><button>Logout</button></a></p>
            <button type="button" name="method1" id="method1">Method 1</button>
            <?php
            }
            ?>
        </div>

        <div class="shortened">
            <?php
            if (isset($short)) {
                var_dump($short);
            }
            ?>
        </div>
    </div>
<script src="./javascript/index.js"></script>