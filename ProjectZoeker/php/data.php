<?php include_once("./inc/php/layout_functions.php"); ?>
<?php
    $adsArray = array();
    $articlesArray = array();
    $commentsArray = array();
    $membersArray = array();

    $adsArray[] = ads_item("./img/temp.jpg", "Titel zoekertje", "Datum", $ads_linked, "derp");
    $adsArray[] = ads_item("./img/temp.jpg", "Titel zoekertje", "Datum", $ads_linked, "derp");

    $articlesArray[] = articles_item("Titel Artikel", "Datum", "Category", $articles_linked, "derp");
    $articlesArray[] = articles_item("Titel Artikel", "Datum", "Category", $articles_linked, "derp");

    $commentsArray[] = comments_item("Datum", "./img/temp.jpg", "Username", "De reactie tekst", $detail_delete_comment);
    $commentsArray[] = comments_item("Datum", "./img/temp.jpg", "Username", "De reactie tekst", $detail_delete_comment);

    for($i = 1; $i < 8; $i++){
        $membersArray[] = "Lid ".$i;
    }

    $project_owner = true;
?>