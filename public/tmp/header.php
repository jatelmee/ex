<!doctype html>
<html lang="ru">
<head>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/tmp/css/style.css">
    <link rel="stylesheet" href="public/tmp/css/media.css">
    <script src="public/tmp/js/jquery.js"></script>
    <script src="public/tmp/js/main.js"></script>
    <script src="public/tmp/js/jquery.js"></script>
    <title><?= $page_name ?></title>
</head>
<body>
    <div class="header">
        <div class="site-name">
            <a href="/">
                Exchanger
            </a>
        </div>

        <div class="uid">
            <?php if(!uid()):?>
                <a href="/login">Вход</a>
                <a href="/register">Регистрация</a>
            <?php else:?>
                <a href="/cabinet">Кабинет</a>
                <a href="/logout">Выход</a>
            <?php endif;?>
            <?php adminBtn();?>
        </div>

    </div>
