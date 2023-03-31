<?php
    $username = filter_var(trim($_POST['username']), 
    FILTER_SANITIZE_STRING);

    $email = filter_var(trim($_POST['email']), 
    FILTER_SANITIZE_STRING);
   
    $pass = filter_var(trim($_POST['pass']), 
    FILTER_SANITIZE_STRING);

    $pass = md5($pass);

    $mysql = new mysqli('localhost', 'root', 'mysql', 'petsshop');
    $mysql->query("INSERT INTO `users` (`email`, `username`, `password`)
    VALUES ('$email', '$username','$pass')");

    $mysql->close();

    header('Location: login.php');


?>