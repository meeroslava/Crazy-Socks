<?php
require_once './utils/Database.php';
$db = new Database();

$user = $db->getUser();
?>

<nav class="menu">
    <ul>
        <li><a href="/Crazy-Socks/php/index.php">Home</a></li>
        <li><a href="/Crazy-Socks/php/about.php">About</a></li>
        <li><a href="/Crazy-Socks/php/shop.php">Shop</a></li>
        <li><a href="/Crazy-Socks/php/contact-us.php">Contact Us</a></li>

    </ul>

    <div class="logo">
        <a href="/Crazy-Socks/php/login.php"><img src="../icons/profile.png"></a>
        <a href="/Crazy-Socks/php/wish-list.php"><img src="../icons/wish.png"></a>
        <a href="/Crazy-Socks/php/cart.php"><img src="../icons/cart.png"></a>
        <p>
            <strong>
                Hello <?= $user['name'] ?>
            </strong>
        </p>
    </div>



    <form class="search-form">
        <input type="text" placeholder="Search">
        <button>Search</button>
    </form>
</nav>
