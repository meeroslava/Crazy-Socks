<?php

session_start();

require_once 'utils/Database.php';
$db = new Database();

$user = $db->getUser();
$message = '';
$card_items = [];
if($user) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $product_id = $_POST['product_id'];
        $user_email = $user['user_email'];

        $action = isset($_POST['action']) ? $_POST['action'] : null;
        switch ($action) {
            case 'DELETE': {
                $db->deleteFromWishList($product_id, $user_email);
                break;
            }
            default: {
                $db->addToWishList($user_email, $product_id);
            }
        }


    }

    $wish_list_items = $db->getWishListItems($user['user_email']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wish List</title>
    <link href="http://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<? require 'templates/menu.php'?>

<body>
<div class="shopping-cart">
    <div class="title">
        Wish List
    </div>
    <!--product1-->
    <?php foreach ($wish_list_items as $item): ?>
        <div class="item">

            <form method="post" action="./cart.php">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                <button type="submit" class="cart-button"><i class="fas fa-shopping-cart"></i> </button>
            </form>

            <div class="image">
                <img src="<?= $item['image'] ?>" alt=""/>
            </div>

            <div class="description">
                <a href="product.php?id=<?= $item['product_id'] ?>">
                    <span><?= $item['title'] ?></span>
                </a>
            </div>


            <div class="total-price"><?= $item['price'] ?>$</div>

            <form method="post" action="./wish-list.php">
                <input type="hidden" name="action" value="DELETE">
                <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                <button type="submit" class="delete-button">
                    <i class="far fa-trash-alt"></i>
                </button>
            </form>


        </div>

    <?php endforeach; ?>


</div>

<? require 'templates/footer.php'?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="../javascript/wishList.js"></script>
</body>
</html>
