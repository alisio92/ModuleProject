<?php
include "twitteroauth/twitteroauth.php";

$consumer_key = 'xylpj7zu5aLUDeC8QEji1BT6a';
$consumer_secret = 'QqJC4lGJZZIhfyVxOhkI9BEOPrEZWnk5OCibAtewlaP1knPBDw';
$accesstoken = '1897932781-Tl18JbCezvVkEFwPgP4bFgmH1awNmVr4ScmYkCU';
$accesstokensecret = '7pcH9VnlYMKHV1QV141HOBNYd3jStV0puVFpiI6E6lv4P';
$twitter = new TwitterOAuth($consumer_key, $consumer_secret, $accesstoken, $accesstokensecret);
$content = $twitter->get('account/verify_credentials');

session_start();

$name = $content->name;
$image = "https://twitter.com/".$content->screen_name."/profile_image?size=original";
?>