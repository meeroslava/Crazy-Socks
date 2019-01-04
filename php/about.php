<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link href="http://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
<?= include 'templates/menu.php'?>

<main>
    <div class="header">
        <h1>About Us</h1>
        <p>It is a long established fact that a reader will be distracted by the
            readable content of a page when looking at its layout.
            The point of using Lorem Ipsum is that it has a more-or-less normal
            distribution of letters, as opposed to using 'Content here, content here',
            making it look like readable English. Many desktop publishing packages and web
            page editors now use Lorem Ipsum as their default model text, and a search
            for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
            have evolved over the years, sometimes by accident, sometimes on purpose
            (injected humour and the like).</p>
    </div>
</main>



<?= include 'templates/footer.php'?>

</body>

</html>
