<?php
     session_start();
     define("APPURL", "http://localhost/aroma-moon");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Copmatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7e75116256.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>aroma moon</title>
</head>
<body>
<header>
    <div class="heading">
        <div class="right-heading">
        <div class="logo">
            <a href="<?php echo APPURL; ?>"><img src="images/sticker.webp"/>aroma moon</a>
        </div>
        <div class="search-bar">
            <form  class="search-form">
            <input type="search" name="search" placeholder="search...">
            <input type="submit" name="submit" value="submit">
            </form>
        </div>
        </div>
        <div class="left-heading">
            <div class="login-status">
                <div class="login"><a class="fa-solid fa-right-to-bracket fa-2x" href="auth/login.php"></a></div>
                <div class="register"><a class="fa-solid fa-user-xmark fa-2x" href="auth/register.php"></a></div>
                <div class="logout"><a class="fa-solid fa-right-from-bracket fa-2x" href="auth/logout.php"></a></div>
                <div class="logged-user"><i class="fa-solid fa-user-check fa-2x"></i><span class="username">
                <?php //echo $_SESSION['username']; ?></span></div>
            <div class="cart"><a class="fa-solid fa-cart-shopping fa-2x" href="orders/cart.php"></a></div>
        </div>
</div>

    </div>

    <div class="navigation">
        <div class="right-nav">
        <a href="categorise/incense.php">incense</a>
        <a href="categorise/mstk.php">mstk</a>
        <a href="categorise/perfumes.php">perfumes</a>
        <a href="categorise/candles.php">candles</a>
        <a href="categorise/bath bomb.php">bath bomb</a>
        </div>
        
        <div class="left-nav">
            <a href="about.php" class="about">About us</a>
        <a href="contact.php" class="contact">Contact us</a>

        </div>
    </div>
</header>