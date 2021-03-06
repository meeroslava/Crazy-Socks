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


<div class="form-wrap">
    <form method="post" action="singIn.php">
        <h1>Sign In</h1>
        <div class="input">
            <input type="email" name="email" value="" placeholder="Email">
            <input type="password" name="password" value="" placeholder="Password">
        </div>
        <div class="button">
            <button type="submit" name="signin" class="btn">Sign In</button>
        </div>

        <p>
            not a member yet? <a href="../html/CreateAccount.html">join us!</a>
        </p>

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