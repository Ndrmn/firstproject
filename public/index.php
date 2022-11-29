<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div class="container">

    <h1>My blog</h1>
    <div class="nav">
        <button class="btn" onclick="document.location='index.php'">Feed</button>
        <button class="btn" onclick="document.location='newpost.php'">Add post</button>
    </div>
    <div><h2>Feed</h2></div>

    <!-- <div class="card" style="width: 18rem;">
        <img src="assets/images/orig.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <a href="#" class="btn btn-primary">More</a>
    </div> -->

    <?php

    $pdo = new PDO('mysql:host=172.18.0.4;dbname=firstproject','docker','secret');

    $query = $pdo->query('SELECT * FROM `posts`');
    while($row = $query->fetch(PDO::FETCH_OBJ)) {


        echo '<div class="card" style="width: 18rem;">';
        echo    '<img src="'.$row->picture.'" class="card-img-top" alt="...">';
        echo    '<div class="card-body">';
        echo        '<h5 class="card-title">';
                echo $row->title;
                echo        '</h5>';
                echo           '<p class="card-text">';
                    echo $row->text;
                    echo  '</p>';
                    echo        '</div> <a href="#" class="btn btn-primary">More</a>';

                    echo '<p class="card-text date-small">';
                    echo $row->date;
                    echo '</p>';
                    echo   '</div>';
    };
    ?>

</div>
</body>
</html>