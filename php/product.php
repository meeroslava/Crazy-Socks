<?php
session_start();
require_once 'utils/Database.php';
$db = new Database();

$product = $db->getProduct($_GET['id']);
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title><?= $product['title'] ?></title>
    <link href="http://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<?= include 'templates/menu.php'?>

<body>
<div class="product-card">
    <div class="img">
        <img src="<?= $product['image'] ?>" alt="">
    </div>
    <div class="product-info">
        <h2><?= $product['title'] ?></h2>
        <span class="desc"><?= $product['description'] ?></span>
        <span class="price"><i class="ion-social-usd"></i><?= $product['price'] ?></span>

        <h3>Stars</h3>
        <p>stars</p>

        <form method="post" action="./cart.php">
            <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
            <input type="hidden" name="quantity" value="1">
            <button type="submit" class="addbtn"><i class="ion-ios-cart"></i> Add To Cart</button>
        </form>

        <form method="post" action="./wish-list.php">
            <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
            <button type="submit" class="addbtn"><i class="ion-ios-heart"></i> Add To Wish List</button>
        </form>

    </div>

    <div class="ratingtitle">
        <h3>Rate This Product</h3>
    </div>

    <div class="rating">
        <input type="radio" name="star" id="star1"> <label for="star1"></label>
        <input type="radio" name="star" id="star2"> <label for="star2"></label>
        <input type="radio" name="star" id="star3"> <label for="star3"></label>
        <input type="radio" name="star" id="star4"> <label for="star4"></label>
        <input type="radio" name="star" id="star5"> <label for="star5"></label>
    </div>

</div>

<?= require 'templates/footer.php'?>

</body>

</html>