<?php include_once("./inc/php/layout_functions.php"); ?>
<?php
    $newsArray = array();
    $eventsArray = array();
    $projectsArray = array();
    $project_categoryArray = array();
    $event_categoryArray = array();
    $citys = array();
    $adsArray = array();
    $articlesArray = array();
    $commentsArray = array();
    $membersArray = array();

    $newsArray[] = news_item("Datum", "./img/temp.jpg", "Admin", "De reactie tekst");
    $newsArray[] = news_item("Datum", "./img/temp.jpg", "Admin", "De reactie tekst");
    $newsArray[] = news_item("Datum", "./img/temp.jpg", "Admin", "De reactie tekst");
    $newsArray[] = news_item("Datum", "./img/temp.jpg", "Admin", "De reactie tekst");

    $eventsArray[] = events_item("Titel event", "Datum", "Plaats", "Omschrijving");
    $eventsArray[] = events_item("Titel event", "Datum", "Plaats", "Omschrijving");
    $eventsArray[] = events_item("Titel event", "Datum", "Plaats", "Omschrijving");
    $eventsArray[] = events_item("Titel event", "Datum", "Plaats", "Omschrijving");

    $projectsArray[] = projects_item("Titel project", "Datum", "Plaats", "Omschrijving");
    $projectsArray[] = projects_item("Titel project", "Datum", "Plaats", "Omschrijving");
    $projectsArray[] = projects_item("Titel project", "Datum", "Plaats", "Omschrijving");
    $projectsArray[] = projects_item("Titel project", "Datum", "Plaats", "Omschrijving");

    $project_categoryArray[] = "Planten en decoratie";
    $project_categoryArray[] = "Grote werkzaamheden";
    $project_categoryArray[] = "Vrijwillegerswerk";

    $event_categoryArray[] = "Buurtfeest";
    $event_categoryArray[] = "Bijeenkomst";
    $event_categoryArray[] = "Etentje";

    $citys[] = "Kortrijk";
    $citys[] = "Waregem";

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