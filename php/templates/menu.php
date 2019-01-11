<?php
require_once './utils/Database.php';
$db = new Database();

$user = $db->getUser();
?>

<nav class="menu">
    <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a href="./about.php">About</a></li>
        <li><a href="./shop.php">Shop</a></li>
        <li><a href="./contact-us.php">Contact Us</a></li>
    </ul>

    <div class="logo">
        <a href="./login.php"><img src="../icons/profile.png"></a>
        <a href="./wish-list.php"><img src="../icons/wish.png"></a>
        <a href="./cart.php"><img src="../icons/cart.png"></a>
    </div>



    <form class="search-form" method="get" action="./searchResults.php">
        <input type="text" name="search" placeholder="Search">
        <button type="submit">Search</button>
        <p>Hello <?= $user['name'] ?></p>
    </form>
</nav>
