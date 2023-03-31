<?php
session_start();

$mysqli = new mysqli('localhost', 'root', 'mysql', 'petsshop');
$query = "set names utf8";
$mysqli->query($query);

$action = $_POST["action"];
if ($action == 'show'){
    if (!(isset($_SESSION['cart']))){
        echo '<p id="empty-cart"> Ваша корзина пуста</p>';
        exit;
    };
    $cart = $_SESSION['cart'];
    if (count($cart) == 0){
        echo '<p id="empty-cart"> Ваша корзина пуста</p>';
        exit;
    }
    $sum = 0;
    for ($i = 0; $i < count($cart); $i++){
        $idProduct = $cart[$i]["idProduct"];
        $query = 'select * from products where product_id = '.$cart[$i]["idProduct"].' ';
        $results = $mysqli->query($query);
        while($row = $results->fetch_assoc()){
            $sum = $sum + $row["price"];
            echo '<div class="init">
                
                <table>
                <td>
                    <tr>
                        <td>
                        <img src="'.$row['img'].'" alt="" width=110>
                        </td>
                        <td>'.$row["product_name"].'  </td>
                        <td>'.$row["price"].' RUB</td>
                        <td><input id="cart-btn" type="button" value="Убрать из корзины" onClick="delFromCart('.$row["product_id"].')"/></td>
                        
                    </tr>
                    
                </td>
            </table>
            </div>
            ';
        }
        
    }
    echo '<div class="sum"> Всего: '.$sum.' RUB</div>';
}

if ($action == 'add'){
    $cart = $_SESSION['cart'];

    $id = $_POST['id'];

    $newProduct["idProduct"] = $id;
    $cart[count($cart)] = $newProduct;
    $_SESSION['cart'] = $cart;

}

if ($action == 'del'){
    $id = $_POST['id'];
    $newCart = array();


    $cart = $_SESSION['cart'];
    for ($i = 0; $i < count($cart); $i++){
        $idProduct = $cart[$i]["idProduct"];
        if ($id != $idProduct){
            $newCart[count($newCart)] = $cart[$i];
    
        }
    }
    $_SESSION['cart'] = $newCart;
    
}
?>