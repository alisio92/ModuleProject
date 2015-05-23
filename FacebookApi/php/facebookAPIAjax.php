<?php
require_once( '../src/Facebook/FacebookSession.php');
require_once( '../src/Facebook/FacebookRequest.php' );
require_once( '../src/Facebook/FacebookResponse.php' );
require_once( '../src/Facebook/FacebookSDKException.php' );
require_once( '../src/Facebook/FacebookRequestException.php' );
require_once( '../src/Facebook/FacebookRedirectLoginHelper.php');
require_once( '../src/Facebook/FacebookAuthorizationException.php' );
require_once( '../src/Facebook/GraphObject.php' );
require_once( '../src/Facebook/GraphUser.php' );
require_once( '../src/Facebook/GraphSessionInfo.php' );
require_once( '../src/Facebook/Entities/AccessToken.php');
require_once( '../src/Facebook/HttpClients/FacebookCurl.php' );
require_once( '../src/Facebook/HttpClients/FacebookHttpable.php');
require_once( '../src/Facebook/HttpClients/FacebookCurlHttpClient.php');

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;
use Facebook\FacebookHttpable;
use Facebook\FacebookCurlHttpClient;
use Facebook\FacebookCurl;

include_once("API.inc.php");

$link = $_GET['link'];
$description = $_GET['description'];
$message = $_GET['message'];
$userMessage = $_GET['userMessage'];
if($_GET['functionName'] == 'submit') echo messages('','','','');
if($_GET['functionName'] == 'api_key') echo $api_key;
if($_GET['functionName'] == 'api_secret') echo $api_secret;
if($_GET['functionName'] == 'redirect_login_url') echo $redirect_login_url;

function messages($link, $description, $message, $userMessage){
    $array = [];
    $array['link'] = $link;
    $array['description'] = $description;
    $array['message'] = $message;
    postMessage($array);

    $array2 = [];
    $array2['source'] = new CURLFile('img/image.png', 'image/png');
    $array2['message'] = $userMessage;
    postImage($array2);
    echo 'done';
}

function postMessage($array){
    global $sess;
    $postRequest = new FacebookRequest($sess,'POST','/me/feed', $array);
    $postRequest->execute();
}

function postImage($array){
    global $sess;
    $postRequest = new FacebookRequest($sess,'POST','/me/photos', $array);
    $postRequest->execute();
}
?>