<?php
    $name = $_POST['name'];
    $fulltext = $_POST['fulltext'];
    $image = $_FILES['image']['tmp_name'];
    $imagename = $_FILES['image']['name'];
    $path = "images/";
    $filedir = $path.$imagename;


    $pdo = new PDO('mysql:host=172.18.0.2;dbname=firstproject','docker','secret');

    $sql = 'INSERT INTO posts(title, text, picture) VALUES(:name, :fulltext, :picture)';
    $query = $pdo->prepare($sql);
    $query->execute(['name' => $name, 'fulltext'=> $fulltext, 'picture'=>$filedir]);

    move_uploaded_file($image, $filedir);

    header('Location: /');
?>