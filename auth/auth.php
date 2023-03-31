<?php 
    $username = filter_var(trim($_POST['username']), 
    FILTER_SANITIZE_STRING);
   
    $pass = filter_var(trim($_POST['pass']), 
    FILTER_SANITIZE_STRING);

    $pass = md5($pass);

    $mysql = new mysqli('localhost', 'root', 'mysql', 'petsshop');

    $result = $mysql->query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$pass'");
    $user = $result->fetch_assoc();
    if(count($user) == 0)
    {
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie('user', $user['id'], time() + 3600, "/");

    $mysql->close();

    header('Location: account.php');

?>