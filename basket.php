<html>
    <head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="js/jquery-3.6.0.min.js"> </script>
    <script src="js/myCart.js"> </script>
    </head>
    <body onload="showCart()">
    <div class="main">
        <?php require "header.php" ?>
        <div class="row">
            <?php require "aside-menu.php" ?>
            <div class="page-name">Корзина </div>
                <div class="cart-content" id="in-check"></div>
        </div>
    </div>
        <?php require "footer.php" ?>
    </body>
</html>