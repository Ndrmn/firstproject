<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/style.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div class="container">
    <h1>My blog</h1>
    <div class="navigation">
        <button class="btn" onclick="document.location='index.php'">Feed</button>
        <button class="btn" onclick="document.location='newpost.php'">Add post</button>
    </div>
    <div><h2>Add post</h2></div>
    <form action="./add.php" method="post" enctype="multipart/form-data">
        <p>Title:</p>
        <input type="text" name="name" id="name" placeholder="">
        <p>Text:</p>
        <textarea type="textarea" name="fulltext" id="fulltext" placeholder=""></textarea>
        <p>Picture:</p>
        <input type="file" name="image" id="image" accept="image/*">
        <button class="btnSubm" type="submit">Save</button>
        
    </form>
</div>
</body>
</html>