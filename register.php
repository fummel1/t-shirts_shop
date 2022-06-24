<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registration</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>
<header>
    <div class="menu">
        <div class="menu-m"><i class="fas fa-bars"></i></div>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="">Женщинам</a></li>
            <li><a href="">Мужчинам</a></li>
            <li><a href=""><i class="fas fa-shopping-cart"></i> Корзина</a></li>
            <li><a href="login.php"><i class="fas fa-user-circle"></i> Войти</a></li>
            <li><a href="register.php"> Регистрация</a></li>
        </ul>
    </div>

    <div class="menu-mobile">
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="">Женщинам</a></li>
            <li><a href="">Мужчинам</a></li>
            <li><a href=""><i class="fas fa-shopping-cart"></i> Корзина</a></li>
            <li><a href="login.php"><i class="fas fa-user-circle"></i> Войти</a></li>
            <li><a href="register.php"> Регистрация</a></li>
        </ul>
    </div>

</header>

<main>
    <h1>Регистрация</h1>
    <form>
        <label for="username">Ваше имя</label>
        <input type="text" name="username" id="username">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="login">Логин</label>
        <input type="text" name="login" id="login">

        <label for="password">Пароль</label>
        <input type="password" name="password" id="password">

        <div class="error-mess" id="error-block"></div>

        <button type="button" id="reg_user">Зарегистрироваться</button>
    </form>
</main>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>
