<html>
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/content.css">
        <link rel="stylesheet" href="../css/cart.css">

        <script src="../js/jquery-3.6.0.min.js"> </script>
    <script src="../js/myCart.js"> </script>

</head>
<body>
<div class="main">
        <?php require "../header-page.php" ?>
                <div class="row">
                        <?php require "aside-menu-page.php" ?>
                        <div class="page-name">Любимые товары</div>

                        <div class="catalog">
                        <?php $mysql = new mysqli('localhost', 'root', 'mysql', 'petsshop');

                        $result = $mysql->query("SELECT * FROM `products` WHERE `best` = '1'");

                        while ($row=$result->fetch_array()) {
                                echo '<div class="cell">
                                        <div class="cell-inside">
                                                <img class="product-img" src="../'.$row['img'].'" alt="">
                                                <div class="product-fav">Хит продаж</div>
                                                <div class="product-desc">'.$row['product_name'].'</div>
                                                <div class="product-price">'.$row['price'].' руб. </div>
                                                <input class="product-btn" type="button" value="В корзину" onClick="addToCart('.$row["product_id"].')"></input>
                                         </div>
                                </div>'; }
                ?>

        </div>
        

        </div>    

</div>
<?php require "../footer.php" ?>

</body>
</html>