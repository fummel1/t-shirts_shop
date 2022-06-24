<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>authorization</title>
    <!-- <?php
        require_once "lib/mysql.php";
        $sql = 'SELECT * FROM articles WHERE `id` = ?';
        $query = $pdo->prepare($sql);
        $query->execute([$_GET['id']]);

        $article = $query->fetch(PDO::FETCH_OBJ);

        // $website_title = $article->title;
    ?> -->
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
            <?php if (isset($_COOKIE['email'])) : ?>
                <!-- <li><a href="add-article.php">Добавить статью</a></li> -->
                <li><a href="login.php">Кабинет пользователя</a></li>
                <li><a href="login.php" id="exit_userr">Выйти</a></li>
                <?php else : ?>
            <li><a href="login.php"><i class="fas fa-user-circle"></i> Войти</a></li>
            <li><a href="register.php"> Регистрация</a></li>
            <?php endif; ?>
        </ul>
    </div>

    <div class="menu-mobile">
    <!-- <div class="menu-m"><i class="fas fa-bars"></i></div> -->
    <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="">Женщинам</a></li>
            <li><a href="">Мужчинам</a></li>
            <li><a href=""><i class="fas fa-shopping-cart"></i> Корзина</a></li>
            <?php if (isset($_COOKIE['email'])) : ?>
                <!-- <li><a href="add-article.php">Добавить статью</a></li> -->
                <li><a href="login.php">Кабинет пользователя</a></li>
                <li><a href="login.php" id="exit_userr">Выйти</a></li>
                <?php else : ?>
            <li><a href="login.php"><i class="fas fa-user-circle"></i> Войти</a></li>
            <li><a href="register.php"> Регистрация</a></li>
            <?php endif; ?>
        </ul>
    </div>

</header>

<main>
        <?php if (!isset($_COOKIE['email'])) : ?>
            <h1>Авторизация</h1>
            <form>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">

                <label for="password">Пароль</label>
                <input type="password" name="password" id="password">

                <div class="error-mess" id="error-block"></div>

                <button type="button" id="login_user">Войти</button>
            </form>
        <?php else : ?>
            <h2>Привет : <?= $_COOKIE['email'] ?>, Вы успешно авторизовались.</h2>
            <form>
                <button type="button" id="exit_user">Выйти</button>
            </form>
        <?php endif; ?>
    </main>

    <!-- <output-of-articles>
<h1>Ваш комментарий</h3>
        <form>
            <label for="username">Ваше имя</label>
            <?php if (isset($_COOKIE['email'])) : ?>
                <input type="text" name="username" id="username" value="<?= $_COOKIE['email'] ?>">
            <?php else : ?>
                <input type="text" name="username" id="username">
            <?php endif; ?>

            <label for="mess">Сообщения</label>
            <textarea name="mess" id="mess"></textarea>

            <div class="error-mess" id="error-block"></div>

            <button type="button" id="mess_send">Добавить комментарий</button>
        </form>

        <div class="comments">
        <?php
            $sql = 'SELECT * FROM comments WHERE `article_id` = ? ORDER BY id DESC';
            $query = $pdo->prepare($sql);
            $query->execute([$_GET['id']]);

            $comments = $query->fetchAll(PDO::FETCH_OBJ);
            foreach($comments as $el) {
                echo "<div class='comment'>
                    <h2>" . $el->name . "</h2>
                    <p>" . $el->mess . "</p>
                </div>";
            }
        ?>
        </div>
</output-of-articles> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <!-- <script>
        $('#mess_send').click(function() {
            let name = $('#username').val();
            let mess = $('#mess').val();

            $.ajax({
                url: 'ajax/commend_add.php',
                type: 'POST',
                cache: false,
                data: {
                    'username': name,
                    'mess': mess,
                    'id': '<?= $_GET['id'] ?>'
                },
                dataType: 'html',
                success: function(data) {
                    if (data === "Done") {
                        $(".comments").prepend(`<div class='comment'>
                            <h2>${name}</h2>
                            <p>${mess}</p>
                        </div>`);
                        $("#mess_send").text("Все готово");
                        $("#error-block").hide();
                        $('#mess').val("");
                    } else {
                        $("#error-block").show();
                        $("#error-block").text(data);
                    }
                }
            });
        });
    </script> -->
</body>
</html>
