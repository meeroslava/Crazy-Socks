<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crazy Socks</title>
    <link href="http://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<? require 'templates/menu.php'?>

<main>
    <div class="header">
        <div class="title">
            Welcome to
            <br/>
            <strong>Crazy Socks! </strong>
        </div>
        <a href="./shop.php">Shop Now</a>
    </div>



</main>

<? require 'templates/footer.php'?>

</body>
</html>