
<?php
session_start();
require 'utils/Database.php';
// connect to the database
$db = new Database();

$name="";
$user_email="";
//$errors=array();



//if the Sign Up button is clicked
if (isset($_POST['sign in'])){
    echo "hello";

    $name = mysqli_real_escape_string($_POST['name']);
    $user_email = mysqli_real_escape_string($_POST['user_email']);
    $password1 = mysqli_real_escape_string($_POST['password1']);
    $password2 = mysqli_real_escape_string($_POST['password2']);


    // ensure that form fields are filled properly
    if(empty($name)){
        array_push($errors, "Name is required");
    }
    if(empty($email)){
        array_push($errors, "Email is required");
    }
    if(empty($password1)){
        array_push($errors, "Password is required");
    }
    if($password1 != $password2){
        array_push($errors, "your password and confirmation password do not match");
    }

    // if there are no errors, save user to database

    if (count($errors)==0){
        $password=md5($password1);
        $sql = "INSERT INTO users (user_email, password, name) VALUES ($user_email,$password,$name)";
        mysqli_query($db, $sql);
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

<div class="form-wrap">
    <form method="post" action="CreateAccount.php">
        <!--display validation errors here-->
        <?php
        include "php/errors.php"
        ?>

        <h1>Create Your Account</h1>
        <div class="input">
            <input type="text" name="name" value="<?php echo $name;?>" placeholder="Name">
            <input type="email" name="user_email" value="<?php echo $user_email;?>" placeholder="Email">
            <input type="password" name="password1" value="<?php echo $password;?>" placeholder="Password">
            <input type="password" name="password2" value="" placeholder="Confirm Password">
        </div>

        <div class="button">
            <button type="submit" name="CreateAccount" class="btn">Sign Up</button>
        </div>


    </form>

    <p>
        Already a member? <a href="php/singIn">Sign In</a>
    </p>

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