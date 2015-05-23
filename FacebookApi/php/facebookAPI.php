<?php
require_once( 'src/Facebook/FacebookSession.php');
require_once( 'src/Facebook/FacebookRequest.php' );
require_once( 'src/Facebook/FacebookResponse.php' );
require_once( 'src/Facebook/FacebookSDKException.php' );
require_once( 'src/Facebook/FacebookRequestException.php' );
require_once( 'src/Facebook/FacebookRedirectLoginHelper.php');
require_once( 'src/Facebook/FacebookAuthorizationException.php' );
require_once( 'src/Facebook/GraphObject.php' );
require_once( 'src/Facebook/GraphUser.php' );
require_once( 'src/Facebook/GraphSessionInfo.php' );
require_once( 'src/Facebook/Entities/AccessToken.php');
require_once( 'src/Facebook/HttpClients/FacebookCurl.php' );
require_once( 'src/Facebook/HttpClients/FacebookHttpable.php');
require_once( 'src/Facebook/HttpClients/FacebookCurlHttpClient.php');

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

session_start();
if(isset($_REQUEST['logout'])){
    unset($_SESSION['fb_token']);
}

FacebookSession::setDefaultApplication($api_key,$api_secret);
$helper = new FacebookRedirectLoginHelper($redirect_login_url);
$sess = $helper->getSessionFromRedirect();
if(isset($_SESSION['fb_token'])){
    $sess = new FacebookSession($_SESSION['fb_token']);
}
$logout = 'https://student.howest.be/alisio.putman/app/FacebookApi?logout=true';
if(isset($sess)){
    try{
        $_SESSION['fb_token']=$sess->getToken();

        $request = new FacebookRequest($sess,'GET','/me');
        $response = $request->execute();
        $graph = $response->getGraphObject(GraphUser::classname());

        $name = $graph->getName();
        $id = $graph->getId();
        $image = 'https://graph.facebook.com/'.$id.'/picture?width=300';
        $email = $graph->getProperty('email');
    }catch(FacebookRequestException $e){
        $error = $e->getMessage();
    }
}

function messages($link, $description, $message, $userMessage){
    echo $link + " " + $description + " " + $message + " " + $userMessage;
    /*$array = [];
    $array['link'] = 'http://google.be';
    $array['description'] = 'this is a description';
    $array['message'] = 'Post from app';
    postMessage($array);

    $array2 = [];
    $array2['source'] = new CURLFile('img/image.png', 'image/png');
    $array2['message'] = 'User provided message';
    postImage($array2);*/
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