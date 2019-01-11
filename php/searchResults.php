<?php
session_start();
require 'utils/Database.php';
$db = new Database();

$socks = $db->searchSocks($_GET['search']);
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
<? include('templates/menu.php')?>

<body>

<main>

    <h1>Your search results:</h1>
    <div class="items">

    <?php foreach ($socks as $sock): ?>
        <div class="item">
            <a href="product.php?id=<?= $sock['product_id'] ?>"><img src="<?= $sock['image'] ?>"></a>
            <p><?= $sock['description'] ?></p>
            <p><?= $sock['price'] ?>$</p>
        </div>
    <?php endforeach; ?>
        </div>

</main>

<? require './templates/footer.php'?>


</body>

</html>