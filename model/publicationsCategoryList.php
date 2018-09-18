<?php

require_once 'data.php';

echo '<pre>';

if(isset($_GET['category'])) {
    $category_name = $_GET['category'];

    $result = mysqli_query($con, "SELECT * FROM publication WHERE category = ".$category_name.";");
    //work with results
    $categoryes = array();

    while($category =  mysqli_fetch_assoc($result))
        $categoryes[$category['category']][] =  $category;

    echo create_tree($categoryes, $category_name,$max_publications = 5);
}



function create_tree ($categoryes, $category_tree,$max_publications){
    $pub_counter = 0;
    if(is_array($categoryes) and  isset($categoryes[$category_tree])){
        $tree = '<ul>';

        $tree .= $category_tree;

        foreach($categoryes[$category_tree] as $category){
            if ($pub_counter < $max_publications) {
                $tree .= "<li><a href='../view/pages/news_category_list.php?category=" . $category['id'] . "'>" . $category['title'] .  "</a></li>";
                $pub_counter++;
            }
        }



        $tree .= '</ul>';
    }
    else return null;
    return $tree;
}