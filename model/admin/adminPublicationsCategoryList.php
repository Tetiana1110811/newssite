<?php

require_once 'adminData.php';

echo '<pre>';

if(isset($_GET['category'])) {
    $category_name = $_GET['category'];
    $news_id = 'news_id';

    $result = mysqli_query($con, "SELECT * FROM publication  WHERE category = ".$category_name.";");
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

        foreach($categoryes[$category_tree] as $category) {
            if ($pub_counter < $max_publications) {
                $tree .= "<form action='actionNews.php'  method='post'> 
                <input type='checkbox' value=<li><a href=' /view/admin/adminNews_category_list.php?category=" . $category['category'] . "'>" .
                    $category['title'] . "</a></li>";

                $pub_counter++;


            }
        }






        $tree .= '</ul>'



        . "<input type='submit' name='delete ' value='DELETE NEWS' > "
        . "<input type='submit' name='edit' value='EDIT NEWS' >"
        . "<input type='submit' name='add' value='ADD NEWS' > "
        . "<input type='submit' name='addComments' value='ADD COMMENTS' > "
        . "<input type='submit' name='editComments' value='EDIT COMMENTS' > "
        . "<input type='submit' name='deleteComments' value='DELETE COMMENTS' >

        
        
                   </form>";

    }
    else return null;
    return $tree;
}