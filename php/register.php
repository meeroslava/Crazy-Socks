<?php
session_start();
require_once 'utils/Database.php';
$db = new Database();

$user = $db->getUser();
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];


    if($password1 === $password2) {
        $response = $db->createUser($name, $mail, $password1);

        if($response) {
            $message = 'User created successfully!';
        } else {
            $message = 'An error occurred!';
        }
    } else {
        $message = 'Passwords are not the same!';
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Your Account</title>
    <link href="http://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/CreateAccountStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
<? include 'templates/menu.php'?>

<div class="form-wrap">
    <form method="POST" action="./register.php">
        <h1>Create Your Account</h1>
        <div class="input">
            <input type="text" name="name" value="" placeholder="Name">
            <input type="email" name="mail" value="" placeholder="Email">
            <input type="password" name="password1" value="" placeholder="Password">
            <input type="password" name="password2" value="" placeholder="Confirm Password">
        </div>
        <div class="button">
            <button type="submit">Sign Up</button>
        </div>

        <p class="message"><?= $message ?></p>
    </form>




</div>

<? include 'templates/footer.php'?>
</body>
