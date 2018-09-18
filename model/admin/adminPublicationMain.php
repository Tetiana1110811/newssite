<?php

require_once 'adminData.php';

$result = mysqli_query($con,"SELECT * FROM publication ORDER BY id DESC ;");

$news_by_category = array();

while($category =  mysqli_fetch_assoc($result))
    $news_by_category[$category['category']][] =  $category;

function create_tree ($categoryes, $category_tree, $max_publications){
    $pub_counter = 0;
    if(is_array($categoryes) and  isset($categoryes[$category_tree])){
        $tree = '<ul>';

        $tree .= "<a href='../../view/admin/adminNews_category_list.php?category=".$category_tree."'>".$category_tree."</a>"
            .   "  "

        . "<a href='../../model/admin/deleteNews.php'>DELETE</a>"."  " . "<a href='../../model/admin/editNews.php'>EDIT</a>";

        ;

        foreach($categoryes[$category_tree] as $category){
            if($pub_counter < $max_publications) {
                $tree .= "<li><a href='../../view/admin/adminNews.php?news_id=" . $category['id'] . "'>" . $category['title'] . "</a>"
                    . "   "

          . "<a href='../../model/admin/deleteNews.php'>DELETE</a>". "  " . "<a href='../../model/admin/editNews.php'>EDIT</a></li>";
                $pub_counter++;
            }
        }
        $tree .= '</ul>';
    }
    else return null;
    return $tree;
}

// вызываем функцию и строим дерево
$keys = array_keys($news_by_category);
foreach ($keys as $key) {
    echo create_tree($news_by_category, $key, 5);
}

?>

