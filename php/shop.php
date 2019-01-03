<?php
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
<nav class="menu">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="shopNow.html">Shop</a></li>
        <li><a href="ContactUs.html">Contact Us</a></li>
    </ul>

    <div class="logo">
        <a href="../html/signIn.html"><img src="../icons/profile.png"></a>
        <a href="../html/wishList.html"><img src="../icons/wish.png"></a>
        <a href="../html/cart.html"><img src="../icons/cart.png"></a>
    </div>

    <form class="search-form">
        <input type="text" placeholder="Search">
        <button>Search</button>
    </form>
</nav>

<body>



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
                    <a href="blablabla"><img src="<?= $highSock['image'] ?>"></a>   <!-- change link -->

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
                    <a href="blablabla"><img src="<?= $lowSock['image'] ?>"></a>   <!-- change link -->
                    <p><?= $lowSock['description'] ?></p>
                    <p><?= $lowSock['price'] ?>$</p>
                </div>

            <?php endforeach;  ?>

        </div>

    </div>


</main>

<div class="footer">
    <div class="copyright">
        <p>&copy 2018 - Crazy Socks</p>
    </div>
    <div class="social">
        <ul>
            <li><a href="../html/ContactUs.html" class="contact"><i class="far fa-envelope"></i></a></li>
            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="../javascript/shopNow.js"></script>
</body>

</html>