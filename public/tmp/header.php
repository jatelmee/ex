<!doctype html>
<html lang="ru">
<head>
    <link rel="SHORTCUT ICON" href="/public/tmp/css/img/Logo_sm2.png" type="image/x-icon">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/tmp/css/bootstrap.css">
    <link rel="stylesheet" href="public/tmp/css/style.css">
    <script src="public/tmp/js/jquery.js"></script>
    <script src="public/tmp/js/main.js"></script>
    <title><?= $page_name ?></title>
</head>

<body class="bg-light admin-bg">
<nav class="navbar navbar-expand-lg navbar-dark bg-light">
    <div class="container">
        <a class="navbar-brand logo" href="/"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link m-2" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2" href="/line?type=all">Линия</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2" href="/live">Ставки Live</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2" href="/promo">Акции и бонусы</a>
                </li>
            </ul>

            <ul class="navbar-nav mr-auto" style="right: 0">
                <li class="nav-item ">
                    <?php if(!uid()):?>
                        <a class="btn btn-outline-info m-2" href="/login">Вход</a>
                    <?php else:?>

                        <?=$_SESSION['balance']?>RUB
                        <a class="btn btn-outline-info m-2" href="/add-cash">Пополнить</a>
                        <a class="" style="text-decoration: none" href="/cabinet">
                            <svg version="1.1"  x="0px" y="0px"viewBox="0 0 53 53" height="36" width="36"><path style="fill:#E7ECED;" d="M18.613,41.552l-7.907,4.313c-0.464,0.253-0.881,0.564-1.269,0.903C14.047,50.655,19.998,53,26.5,53c6.454,0,12.367-2.31,16.964-6.144c-0.424-0.358-0.884-0.68-1.394-0.934l-8.467-4.233c-1.094-0.547-1.785-1.665-1.785-2.888v-3.322c0.238-0.271,0.51-0.619,0.801-1.03c1.154-1.63,2.027-3.423,2.632-5.304c1.086-0.335,1.886-1.338,1.886-2.53v-3.546c0-0.78-0.347-1.477-0.886-1.965v-5.126c0,0,1.053-7.977-9.75-7.977s-9.75,7.977-9.75,7.977v5.126c-0.54,0.488-0.886,1.185-0.886,1.965v3.546c0,0.934,0.491,1.756,1.226,2.231c0.886,3.857,3.206,6.633,3.206,6.633v3.24C20.296,39.899,19.65,40.986,18.613,41.552z"/><g><path style="fill:#556080;" d="M26.953,0.004C12.32-0.246,0.254,11.414,0.004,26.047C-0.138,34.344,3.56,41.801,9.448,46.76c0.385-0.336,0.798-0.644,1.257-0.894l7.907-4.313c1.037-0.566,1.683-1.653,1.683-2.835v-3.24c0,0-2.321-2.776-3.206-6.633c-0.734-0.475-1.226-1.296-1.226-2.231v-3.546c0-0.78,0.347-1.477,0.886-1.965v-5.126c0,0-1.053-7.977,9.75-7.977s9.75,7.977,9.75,7.977v5.126c0.54,0.488,0.886,1.185,0.886,1.965v3.546c0,1.192-0.8,2.195-1.886,2.53c-0.605,1.881-1.478,3.674-2.632,5.304c-0.291,0.411-0.563,0.759-0.801,1.03V38.8c0,1.223,0.691,2.342,1.785,2.888l8.467,4.233c0.508,0.254,0.967,0.575,1.39,0.932c5.71-4.762,9.399-11.882,9.536-19.9C53.246,12.32,41.587,0.254,26.953,0.004z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                        </a>
                        <?=$_SESSION['username'].' '.$_SESSION['surname']?>

                    <?php endif;?>
                </li>
                <li class="nav-item">
                    <?php if(!uid()):?>
                        <a class="btn btn-outline-info m-2" href="/register">Регистрация</a>
                    <?php else:?>
                        <a class="btn btn-outline-info m-2" href="/logout">Выход</a>
                    <?php endif;?>
                    <?php adminBtn();?>
                </li>
            </ul>
        </div>
    </div>

</nav>
