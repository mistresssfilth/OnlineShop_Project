<html>
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/login.css">

</head>
<body>
<div class="main">
        <?php require "header-auth.php" ?>
       
        <div class="row">        
            <?php require "aside-menu-login.php" ?>
        
            <div class="login-content">
            <p>регистрация</p>
            <div class="login-buttons">
                <form action="check.php" method="POST">
                    <div class="email"><input type="text" name="email" placeholder="Email" size="30"></div>
                    <div class="username"><input type="text" name="username" placeholder="Username" size="30"></div>
                    <div class="pass"><input type="password" name="pass" placeholder="Password" size="30"></div>
                    <div class="btn-log"><button  type="submit">Регистрация</button></div>
                </form>
            </div>
        </div>

</div>
<?php require "../footer.php" ?>

</body>
</html>