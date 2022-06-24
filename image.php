<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Полноценная форма</title>
    <link rel="stylesheet" href="css/producrs.css">
</head>
<body>
    <main>
        <h2>Форма обратной связи</h2>
        <form method="post" autocomplete="off">
            <label class="label" for="name">Имя</label>
            <input  type="text" id="name" placeholder="Введите имя">

            <label class="label" for="email">Email</label>
            <input  type="email" id="email" placeholder="Выш email">

            <label class="label" for="telephone">Телефн</label>
            <input  type="tel" id="telephone" name="telephone" placeholder="Ваш телефон">

            <label class="label" for="message">Введите сообщение</label>
            <textarea id="message" name="message" placeholder="Введите сообщение"></textarea>

            <div id="messageErrorUser"></div>

            <button type="button" class="btn" onclick="checkForm()" id="send">Отправить</button>
        </form>
    </main>
</form>
</body>
</html>