<?php
//$publications = array();
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "news");

$con =@mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

if (@mysqli_connect()) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error();}



/*
$result = mysqli_query($con,"SELECT * FROM publication");
//work with results

while ($row = mysqli_fetch_array($result)){
    //echo '<br>' . $row ['type'];
    $publications[] = new Publication($row);
}

echo '<pre>';

*/