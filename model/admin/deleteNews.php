<?php


require_once('C:\OSPanel\domains\localhost\mvc\model\admin\adminData.php');

if (isset($_POST ['submit']))
{
    $id = $_POST ['id'];
    $category = $_POST ['category'];
    $title = $_POST ['title'];
    $short_content = $_POST ['short_content'];
    $content = $_POST ['content'];
    $date = $_POST ['date'];
    $tags = $_POST ['tags'];
    $preview = $_FILES ['preview'];





    $query = mysqli_query($con,"DELETE FROM publication  WHERE id = $id LIMIT 1 ");



    mysqli_close($con);

}

echo '<p> Are you sure you want to DELETE this news?</p>';
echo '<form method="post" action="deleteNews.php">';

echo '<input type="submit" name="submit"  value="DELETE">';



echo '</form>';

// else
//if(isset($_GET['news_id'])) {
    //$news_id = $_GET['news_id'];
    //require_once 'adminData.php';
    //require_once '/OSPanel/domains/localhost/mvc/controller/classes.php';

    //echo '<pre>';
    //$result = mysqli_query($con,"DELETE FROM publication WHERE id = $news_id LIMIT 1");

    //mysqli_close($con);

//}
