<?php

?>
<div class="container-mini">
    <h3 class="mt-2 text-center">Мой счёт</h3>

    <div class="card text-white bg-dark mb-3 w-100" >
        <div class="card-header"><?=$_SESSION['username'].' '.$_SESSION['surname']?></div>
        <div class="card-body">
            <h5 class="card-title">На вашем счету: <?=$_SESSION['balance']?> RUB</h5>
            <a href="/cash-in" class="btn btn-outline-info mt-4">Пополнить</a>
            <table class="table text-light mt-2 w-75">
                <tbody>
                <tr>
                    <th scope="row">Доиграш</th>
                    <td>0 RUB</td>
                </tr>
                <tr>
                    <th scope="row">Ожидает выплаты</th>
                    <td>0 RUB</td>
                </tr>
                <tr>
                    <th scope="row">Доступно</th>
                    <td><?=$_SESSION['balance']?> RUB</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>





<div class="container-mini">
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a  class="btn btn-outline-info m-2"  href="active-bets " >Мои ставки</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-outline-info m-2" id="pills-tennis-tab" data-toggle="pill" href="#pills-tennis" role="tab" aria-controls="pills-tennis" aria-selected="false">Личные данные</a>
        </li>
        <div class="dropdown show">
            <a class="btn btn-outline-info mt-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Операции
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Пополнить</a>
                <a class="dropdown-item" href="#">Вывести</a>
                <a class="dropdown-item" href="#"></a>
            </div>
        </div>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-ftb" role="tabpanel" aria-labelledby="pills-ftb-tab">
            Здесь будут ваши ставки
        </div>
        <div class="tab-pane fade" id="pills-tennis" role="tabpanel" aria-labelledby="pills-tennis-tab">
            умпкурмкр
        </div>

    </div>
</div>





<div class="container-mini text-dark">
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn w-100 text-start collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Мои ставки
                    </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <a href="#" class="w-100 btn btn-light text-start">Активные</a>
                    <a href="#" class="btn w-100 btn-light text-start">Неактивные</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn w-100 text-start collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Денежные операции
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <a href="#" class="w-100 btn btn-light text-start">Пополнение</a>
                    <a href="#" class="btn w-100 btn-light text-start">Вывод средств</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn w-100 text-start collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Настройки
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <a href="#" class="w-100 btn btn-light text-start">Персональные данные</a>
                    <a href="#" class="btn w-100 btn-light text-start">Смена пароля</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading4">
                <h5 class="mb-0">
                    <button class="btn w-100 text-start collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                        Помощь/Информация
                    </button>
                </h5>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                <div class="card-body">
                    <a href="#" class="w-100 btn btn-light text-start">Служба поддержки</a>
                    <a href="#" class="btn w-100 btn-light text-start">Правила и условия</a>
                    <a href="#" class="btn w-100 btn-light text-start">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
    </div>
</div>







<div class="container-mini">

    <div class="jumbotron">
        <h3 class="display-4">Гарантированый бонус!</h3>
        <hr class="my-4">
        <p>После первого пополнения на 1500RUB вы получите на ваш счёт 1500RUB дополнительно.</p>
        <p class="lead">
            <a class="btn btn-outline-info btn-lg" href="#" role="button">Пополнить счёт</a>
        </p>
    </div>
</div>
