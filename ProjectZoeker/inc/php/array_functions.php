<?php
function projects_item($id, $title, $date, $location, $description, $members)
{
    if($title == null) $title = "";
    if($date == null) $date = "";
    if($location == null) $location = "";
    if($description == null) $description = "";
    if($members == null) $members = "";
    return array("id" => $id, "title" => $title, "date" => $date, "location" => $location, "description" => $description, "members" => $members);
}

function events_item($id, $title, $date, $location, $description)
{
    if($title == null) $title = "";
    if($date == null) $date = "";
    if($location == null) $location = "";
    if($description == null) $description = "";
    return array("id" => $id, "title" =>$title, "date" => $date, "location" => $location, "description" =>$description);
}

function news_item($date, $img, $name, $reaction)
{
    if($date == null) $date = "";
    if($img == null) $img = "";
    if($name == null) $name = "";
    if($reaction == null) $reaction = "";
    return array("date" => $date, "img" => $img, "name" => $name, "reaction" => $reaction);
}

function ads_item($img, $title, $date, $text, $linked)
{
    if($img == null) $img = "";
    if($title == null) $title = "";
    if($date == null) $date = "";
    if($text == null) $text = "";
    if($linked == null) $linked = "";
    return array($img, $title, $date, $text, $linked);
}

function articles_item($title, $date, $category, $text, $linked)
{
    if($title == null) $title = "";
    if($date == null) $date = "";
    if($category == null) $category = "";
    if($text == null) $text = "";
    if($linked == null) $linked = "";
    return array($title, $date, $category, $text, $linked);
}

function comments_item($date, $img, $name, $reaction, $delete)
{
    if($date == null) $date = "";
    if($img == null) $img = "";
    if($name == null) $name = "";
    if($reaction == null) $reaction = "";
    if($delete == null) $delete = "";
    return array($date, $img, $name, $reaction, $delete);
}
?>