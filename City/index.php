<?php
$file = file_get_contents('./city2.json', true);

function get_string_between($string, $start, $end){
    $string = " ".$string;
    $ini = strpos($string,$start);
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string,$end,$ini) - $ini;
    return substr($string,$ini,$len);
}

function DB_connectie(){
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $dbname = "groenestraat";

    $conn = new MYSQLI($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function add_project($city){
    $conn = DB_connectie();
    $stmt = $conn->prepare("INSERT INTO tblprojecten(Titel) VALUES (?)");
    $stmt->bind_param("s", $city);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

$cities =  get_string_between($file, '[', ']');
$pieces = explode(",", $cities);

for($i = 0; $i < count($pieces); $i++){
    $city = substr($pieces[$i], 1, -1);
    echo $city."<br/>";
    //add_project($city);
}
?>