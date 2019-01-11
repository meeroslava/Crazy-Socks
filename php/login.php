<?php
session_start();
require 'utils/Database.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();

    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $user = $db->loginUser($mail, $password);

    if($user) {
        $message = "{$user['name']} is logged in.";
    } else {
        $message = 'An error occurred!';
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link href="http://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/signIn.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
<? include 'templates/menu.php'?>
<div class="form-wrap">
    <form method="post" action="./login.php">
        <h1>Sign In</h1>
        <div class="input">
            <input type="email" name="mail" value="" placeholder="Email">
            <input type="password" name="password" value="" placeholder="Password">
        </div>


        <div class="button">
            <button type="submit">Sign In</button>
        </div>

        <p>
            not a member yet?
            <a href="./register.php">join us!</a>
        </p>

        <p class="message"><?= $message ?></p>
    </form>
</div>
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

</body>