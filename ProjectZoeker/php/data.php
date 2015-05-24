<?php include_once("./inc/php/layout_functions.php"); ?>
<?php
    $newsArray = array();
    $eventsArray = array();
    $projectsArray = array();

    $newsArray[] = news_item("Datum", "./img/temp.jpg", "Admin", "De reactie tekst");
    $newsArray[] = news_item("Datum", "./img/temp.jpg", "Admin", "De reactie tekst");

    $eventsArray[] = events_item("Titel event", "Datum", "Plaats", "Omschrijving");
    $eventsArray[] = events_item("Titel event", "Datum", "Plaats", "Omschrijving");

    $projectsArray[] = projects_item("Titel project", "Datum", "Plaats", "Omschrijving");
    $projectsArray[] = projects_item("Titel project", "Datum", "Plaats", "Omschrijving");
?>