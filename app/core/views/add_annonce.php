<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Add annonce</title>
</head>
<body>
    <form action="" style="margin: auto" method="POST" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Tile"> <br> <br>
    <textarea name="description" placeholder="description" cols="30" rows="10"></textarea> <br> <br>
    <input type="file" name="myimage" placeholder=" Banner"> <br> <br>
    <input type="text" name="contact" placeholder="contact"> <br> <br>
    <input type="submit" value="Enregistrer"> <br> <br>
    </form>
</body>
</html>


<?php
    
    require_once 'app/core/controllers/annonce.php';
    $annonce = new Annonce();
    $annonce ->  add_annonce();

?>