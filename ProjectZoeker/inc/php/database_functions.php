<?php include_once("array_functions.php"); ?>
<?php
function get_projects(){
    $projectsArray = array();
    $projectsArray[] = projects_item(0, "Titel project1", "Datum", "Plaats", "Omschrijving", 10);
    $projectsArray[] = projects_item(1, "Titel project2", "Datum", "Plaats", "Omschrijving", 20);
    $projectsArray[] = projects_item(2, "Titel project3", "Datum", "Plaats", "Omschrijving", 20);
    $projectsArray[] = projects_item(3, "Titel project4", "Datum", "Plaats", "Omschrijving", 15);
    return $projectsArray;
}

function get_popular_projects($array){
    $projectsArray = array();
    for($i = 0; $i < count($array); $i++){
        //TODO meeste leden
        if($array[$i]["members"] == 20) $projectsArray[] = $array[$i];
    }
    return $projectsArray;
}

function get_project_category(){
    $project_categoryArray = array();
    $project_categoryArray[] = "Planten en decoratie";
    $project_categoryArray[] = "Grote werkzaamheden";
    $project_categoryArray[] = "Vrijwillegerswerk";
    return $project_categoryArray;
}

function get_event_category(){
    $event_categoryArray = array();
    $event_categoryArray[] = "Buurtfeest";
    $event_categoryArray[] = "Bijeenkomst";
    $event_categoryArray[] = "Etentje";
    return $event_categoryArray;
}

function get_citys(){
    $citysArray = array();
    $citysArray[] = "Kortrijk";
    $citysArray[] = "Waregem";
    $citysArray[] = "Brussel";
    return $citysArray;
}

function get_events(){
    $eventsArray = array();
    $eventsArray[] = events_item(0, "Titel event1", "Datum", "Plaats", "Omschrijving");
    $eventsArray[] = events_item(1, "Titel event2", "Datum", "Plaats", "Omschrijving");
    $eventsArray[] = events_item(2, "Titel event3", "Datum", "Plaats", "Omschrijving");
    $eventsArray[] = events_item(3, "Titel event4", "Datum", "Plaats", "Omschrijving");
    return $eventsArray;
}

function get_new_events($array, $amount){
    $eventsArray = array();
    for($i = count($array)-1; $i >= count($array) - 2 ; $i--){
        $eventsArray[] = $array[$i];
    }
    return $eventsArray;
}

function get_news(){
    $newsArray = array();
    $newsArray[] = news_item("Datum", "./img/temp.jpg", "Admin", "De reactie tekst");
    $newsArray[] = news_item("Datum", "./img/temp.jpg", "Admin", "De reactie tekst");
    $newsArray[] = news_item("Datum", "./img/temp.jpg", "Admin", "De reactie tekst");
    $newsArray[] = news_item("Datum", "./img/temp.jpg", "Admin", "De reactie tekst");
    return $newsArray;
}

function get_detail($id){
    $array = get_projects();
    for($i = 0; $i < count($array); $i++){
        if($array[$i]["id"] == $id) {
            return $array[$i];
        }
    }
}
?>