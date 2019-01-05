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
                $db->deleteCartItem($product_id, $user_email);
                break;
            }
            case 'UPDATE': {
                $db->updateQuantity($product_id, $user_email, $_POST['inc'] === 'true');
                break;
            }
            default: {
                $quantity = $_POST['quantity'];
                $db->addToCart($product_id, $quantity, $user['user_email']);
            }
        }


    }

    $card_items = $db->getCartItems( $user['user_email']);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link href="http://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>

<?= require 'templates/menu.php'?>

<div class="shopping-cart">
    <div class="title">
        Shopping Bag
    </div>

    <?php foreach ($card_items as $item): ?>
        <div class="item">
            <form method="post" action="./wish-list.php">
                <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                <button type="submit" class="like-button"><i class="far fa-heart"></i> </button>
            </form>

            <div class="image">
                <img src="<?= $item['image'] ?>" alt=""/>
            </div>

            <div class="description">
                <a href="./product.php?id=<?= $item['product_id'] ?>"><?= $item['title'] ?></a>
            </div>

            <div class="quantity">
                <form method="post" action="./cart.php">
                    <input type="hidden" name="action" value="UPDATE">
                    <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                    <input type="hidden" name="inc" value="false">
                    <button type="submit" class="minus-button"><i class="fas fa-minus"></i> </button>
                </form>

                <input type="text" name="name" value="<?= $item['quantity'] ?>">

                <form method="post" action="./cart.php">
                    <input type="hidden" name="action" value="UPDATE">
                    <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                    <input type="hidden" name="inc" value="true">
                    <button  class="plus-button" type="submit" name="button"><i class="fas fa-plus"></i> </button>
                </form>
            </div>

            <div class="total-price"><?= $item['price'] ?> $</div>

            <form method="post" action="./cart.php">
                <input type="hidden" name="action" value="DELETE">
                <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                <button type="submit" class="delete-button"><i class="far fa-trash-alt"></i> </button>
            </form>


        </div>
    <?php endforeach; ?>



    <p class="total-payment">Total: <?= array_reduce($card_items, function($accumulator, $item) {
        return $accumulator + ($item['price'] * $item['quantity']);
        }, 0) ?>$</p>

    <div class="payment">

        <button type="button">Proceed to payment</button>
    </div>
</div>


<?= require 'templates/footer.php'?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="../javascript/cart.js"></script>
</body>
</html>