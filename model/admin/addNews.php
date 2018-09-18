<?php


require_once('C:\OSPanel\domains\localhost\mvc\model\admin\adminData.php');

      if (isset($_POST ['submit']))
      {
          $category = $_POST ['category'];
          $title = $_POST ['title'];
          $short_content = $_POST ['short_content'];
          $content = $_POST ['content'];
          $date = $_POST ['date'];
          $tags = $_POST ['tags'];
          $preview = $_FILES ['preview'];





        $query = mysqli_query($con,"INSERT INTO publication (date,category,title,short_content,content,tags,preview) 
                                           VALUES (NOW(),'$category','$title','$short_content','$content','$tags','$preview' )");



        mysqli_close($con);

      }



