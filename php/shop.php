<?php
session_start();
require 'utils/Database.php';
$db = new Database();

$products = $db->getAllProducts();
$highSocks= $db->getHighSocks();
$lowSocks=$db->getLowSocks();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop Now</title>
    <link href="http://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/shopnow.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<body>
<? require 'templates/menu.php'?>

<main>

    <div class="title">Shop Now</div>

    <div class="filter">



        <div id="type">
            <label>Choose Type </label>
            <select name="type" id="sockType">
                <option id="all" selected> All </option>
                <option id="high"> High </option>
                <option id="low"> Low </option>
            </select>
        </div>
    </div>


    <div class="items">

        <div class="highSocks">
            <h2>High Socks</h2>

            <?php foreach ($highSocks as $highSock):
                ?>
                <div class="item">
                    <a href="product.php?id=<?= $highSock['product_id'] ?>"><img src="<?= $highSock['image'] ?>"></a>   <!-- change link -->

                    <p><?= $highSock['description'] ?></p>
                    <p><?= $highSock['price'] ?>$</p>
                </div>

            <?php endforeach;  ?>

        </div>

        <div class="lowSocks">

            <h2>Low Socks</h2>

            <?php foreach ($lowSocks as $lowSock):
                ?>
                <div class="item">
                    <a href="product.php?id=<?= $lowSock['product_id'] ?>"><img src="<?= $lowSock['image'] ?>"></a>   <!-- change link -->
                    <p><?= $lowSock['description'] ?></p>
                    <p><?= $lowSock['price'] ?>$</p>
                </div>

            <?php endforeach;  ?>

        </div>

    </div>


</main>

<? require './templates/footer.php'?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="../javascript/shopNow.js"></script>
</body>

</html>