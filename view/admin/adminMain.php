
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../../web/css/bootstrap.min.css">

    <title>Page ADMIN</title>
</head>
<body>


<?php include '/OSPanel/domains/localhost/mvc/model/admin/adminHeader.php';

require '/OSPanel/domains/localhost/mvc/model/admin/adminPublicationMain.php';?>


<form enctype="multipart/form-data" action="../../model/admin/addNews.php" method="post">
    <p><label for="category">Category:</label>
        <input type="text" id = "category" name="category" /></p>

    <p> <label for="title">Title:</label>
        <input type="text" id = "title" name="title" /></p>

    <p><label for="short_content">Short content:</label>
        <input type="text" id = "short_content" name="short_content" /></p>


    <p><label for="content">Content:</label>
        <textarea type="text" id="content" name="content"></textarea></p>

    <p><label for="date">Date:</label>
        <input type="text" id="date" name="date" /></p>


   <p> <label for="tags">Tags:</label>
       <input type="text"  id="tags" name="tags" /></p>


    <p><label for="preview">Images</label>
        <input type="file" id="preview" name="preview" /></p>

    <p><input type="submit" value="Add news" name="submit"/></p>


</form>


<form action="/model/admin/addComments.php" method="post">

    <p>Comments <input type="text" name="age" /></p>

    <p>Category: <input type="text" name="category" /></p>
    <p>Title: <input type="text" name="short_content" /></p>
    <p>News: <input type="text" name="content" /></p>
    <p>Date <input type="text" name="date" /></p>
    <p>images <input type="text" name="preview" /></p>
    <p>Tags <input type="text" name="age" /></p>


    <p>Add Comments <input type="submit"/></p>
    <p>Editing Comments <input type="submit"/></p>
    <p>Delete Comments <input type="submit"/></p>

</form>

<form method="post" action="../../model/admin/deleteNews.php">



    <input type="submit" name="submit"  value="DELETE">



</form>





<script src="../../web/js/bootstrap.min.js"></script>
</body>

</html>












