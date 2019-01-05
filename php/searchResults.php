<?php
session_start();
require 'utils/Database.php';
$db = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
    <link href="http://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/shopnow.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<?= include('templates/menu.php')?>

<body>

<main>

    <h1>Your search results:</h1>

    <div class="items">
            <div class="item">
                <a href="products/1.html"><img src="../images_of_socks/high_socks/1.png"></a>
                <p>description about product1</p>
                <p>$</p>

            </div>

            <div class="item">
                <a href="products/2.html"><img src="../images_of_socks/high_socks/2.png"></a>
                <p>description about product1</p>
                <p>$</p>

            </div>

            <div class="item">
                <a href="products/3.html"><img src="../images_of_socks/high_socks/3.png"></a>
                <p>description about product1</p>
                <p>$</p>

            </div>

            <div class="item">
                <a href="products/4.html"><img src="../images_of_socks/high_socks/4.png"></a>
                <p>description about product1</p>
                <p>$</p>

            </div>

            <div class="item">
                <a href="products/5.html"><img src="../images_of_socks/high_socks/5.png"></a>
                <p>description about product1</p>
                <p>$</p>

            </div>

            <div class="item">
                <a href="products/6.html"><img src="../images_of_socks/high_socks/6.png"></a>
                <p>description about product1</p>
                <p>$</p>

            </div>

            <div class="item">
                <a href="products/7.html"><img src="../images_of_socks/high_socks/7.png"></a>
                <p>description about product1</p>
                <p>$</p>

            </div>

            <div class="item">
                <a href="products/8.html"><img src="../images_of_socks/high_socks/8.png"></a>
                <p>description about product1</p>
                <p>$</p>

            </div>
        </div>

</main>

<?= require './templates/footer.php'?>


</body>

</html>