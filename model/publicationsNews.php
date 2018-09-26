<?php


if(isset($_GET['news_id'])) {
    $news_id = $_GET['news_id'];
    require_once 'data.php';
    require_once '/OSPanel/domains/localhost/mvc/controller/classes.php';


    echo '<pre>';
    $result = mysqli_query($con,"SELECT * FROM publication WHERE id = ".$news_id.";");
//work with results

    while ($row = mysqli_fetch_array($result)) {
        //echo '<br>' . $row ['type'];
        $publications[] = new Publication($row);
    }

    echo '<pre>';

    foreach ($publications as $item) {
        echo '<pre>';
        print_r($item->printTitleNews());
        echo '<pre>';
        print_r($item->printDateNews());
        echo '<pre>';
        print_r($item->printContentNews());
        echo '<pre>';
        print_r($item->printCategoryNews());
        echo '<pre>';
    }

}