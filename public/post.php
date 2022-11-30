<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div class="container">

    <h1>My blog</h1>
    <div class="navigation">
        <button class="btn" onclick="document.location='../index.php'">Feed</button>
        <button class="btn" onclick="document.location='../newpost.php'">Add post</button>
    </div>
    <div><h2>Feed</h2></div>

    <?php

    $pdo = new PDO('mysql:host=172.18.0.2;dbname=firstproject','docker','secret');

    $id = $_GET['id'];

    $sql = 'SELECT * FROM `posts` WHERE `id` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$id]);


    // $query = $pdo->query('SELECT * FROM `posts` WHERE `id` = ?');
    while($row = $query->fetch(PDO::FETCH_OBJ)) {


        echo'<div class="card" style="width: 18rem;">';
        echo    '<img src="../'.$row->picture.'" class="card-img-top" alt="...">';
        echo    '<div class="card-body">';
        echo        '<h5 class="card-title">'.$row->title.'</h5>';
        echo        '<p class="card-text">'.$row->text.'</p>';
        echo    '</div>';
        echo    '<p class="card-text date-small">'.$row->date.'</p>';
        echo'</div>';
    };
    ?>

</div>
</body>
</html>