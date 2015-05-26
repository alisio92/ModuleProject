<?php
function projects_item($date, $img, $name, $reaction)
{
    return array($date, $img, $name, $reaction);
}

function events_item($title, $date, $location, $description)
{
    return array($title, $date, $location, $description);
}

function news_item($date, $img, $name, $reaction)
{
    return array($date, $img, $name, $reaction);
}

function ads_item($img, $title, $date, $text, $linked)
{
    return array($img, $title, $date, $text, $linked);
}

function articles_item($title, $date, $category, $text, $linked)
{
    return array($title, $date, $category, $text, $linked);
}

function comments_item($date, $img, $name, $reaction, $delete){
    return array($date, $img, $name, $reaction, $delete);
}
?>