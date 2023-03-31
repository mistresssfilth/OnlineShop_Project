<div class="header">
<div class="basket">
        <a href="basket.php">Корзина</a>
    </div>
    <h1>Petshop</h1>
    
    
    <div class="account-main">
    <?php if (!(isset($_COOKIE['user'])) || $_COOKIE['user'] == "" ) :
        ?>
        <a href="auth/login.php">Войти</a>
        <a href="auth/register.php">Регистрация</a>
    
    <?php else: ?>
        <a href="auth/register.php">Личный кабинет</a>
        <?php endif; ?>
    </div>
</div>
    <div class="menu">
        <ul>
            <li><a href="index.php">Главная</a> </li>
            <li><a href="categories/cats.php">Кошки</a></li>
            <li><a href="categories/dogs.php">Собаки</a></li>
            <li><a href="categories/rodents.php">Грызуны</a></li>
            <li><a href="categories/other.php">Прочее</a></li>
            <form action="search/search.php" method="POST">
                <input type="search" name="searchText" placeholder="Search">
        
            </form>
        </ul>
    </div>