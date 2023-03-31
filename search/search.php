<html>
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/content.css">

</head>
<body>
<div class="main">
        <?php require "header-search.php" ?>
                <div class="row">
                        <?php require "aside-menu-search.php" ?>
        
                        <div class="catalog">
                        <?php 
                        $searchText  = $_POST["searchText"];

                        $mysql = new mysqli('localhost', 'root', 'mysql', 'petsshop');
            
                        $result = $mysql->query("SELECT * FROM `products` WHERE `product_name` LIKE '%$searchText%'");

                        while ($row=$result->fetch_array()) {
                                echo '<div class="cell">
                                        <div class="cell-inside">
                                                <div class="product-img"><img src="../'.$row['img'].'" alt=""></div>
                                                <div class="product-desc">'.$row['product_name'].'</div>
                                                <div class="product-price">'.$row['price'].' руб. </div>
                        
                                                <input class="product-btn" type="button" value="В корзину" onClick=""></input>
                                                

                                
                                         </div>
                                </div>'; }
                ?>

        </div>
        

        </div>    

</div>
<?php require "../footer.php" ?>

</body>
</html>