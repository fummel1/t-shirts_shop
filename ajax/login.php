<?php
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $pass = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    $error = '';
    if (strlen($email) < 2)
        $error = 'Введите email';
    else if (strlen($pass) < 5)
        $error = 'Введите пароль';

    if($error != '') {
        echo $error;
        exit();
    }

    require_once "../lib/mysql.php";
    
    $salt = '34jhjkhui34uihuhnkj';
    $pass = md5($salt . $pass);

    $sql = 'SELECT id FROM users WHERE `email` = ? AND `password` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$email, $pass]);

    if($query->rowCount() == 0)
        echo "Такого пользователя нет";
    else {
        setcookie('email', $email, time() + 1800, "/");
        echo "Done";
    }

    