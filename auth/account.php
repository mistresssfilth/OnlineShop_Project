<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/account.css">

</head>

<body>
<div class="main">
        <?php require "header-auth.php" ?>
        <div class="row">        
            <?php require "aside-menu-login.php" ?>
            <div class="account">
            <a href="exit.php">
            <p id="exit"> Выйти из аккаунта </p> 
            </a>
            <p id="myacc"> мой аккаунт </p>
            <p id="welcome"> Добро пожаловать! </p>
            <div class="account-orders">
                <p>Мои заказы</p>
            </div>
        </div>
        
        
        </div>

</div>
<?php require "../footer.php" ?>

</html>