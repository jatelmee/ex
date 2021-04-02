<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/tmp/css/style.css">
    <script src="public/tmp/js/main.js"></script>
    <title><?= $page_name ?></title>
</head>
<body>
    <div class="header">
        <a href="/">Главная</a>
        <?php if(!uid()):?>
            <a href="/login">Вход</a>
            <a href="/register">Регистрация</a>
        <?php else:?>
            <a href="/cabinet">Кабинет</a>
            <a href="/logout">Выход</a>
        <?php endif;?>
        <?php adminBtn();?>
    </div>
