



<div id="carouselExampleSlidesOnly" class="carousel slide carousel-75" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/public/tmp/css/img/c-item-2.jpg" alt="Первый слайд">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/public/tmp/css/img/c-item-3.jpg" alt="Второй слайд">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/public/tmp/css/img/c-item-1.jpg" alt="Третий слайд">
        </div>
    </div>
</div>

<div class="container">
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="btn btn-outline-info m-2 active" id="pills-dota-tab" data-toggle="pill" href="#pills-dota" role="tab" aria-controls="pills-dota" aria-selected="true">Dota2</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-outline-info m-2" id="pills-cs-tab" data-toggle="pill" href="#pills-cs" role="tab" aria-controls="pills-cs" aria-selected="false">Counter-Strike</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-outline-info m-2" id="pills-cog-tab" data-toggle="pill" href="#pills-cog" role="tab" aria-controls="pills-cog" aria-selected="false">King of Glory</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-outline-info m-2" href="/line?type=all"  aria-selected="false">Другие</a>
        </li>

    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-dota" role="tabpanel" aria-labelledby="pills-dota-tab">
            Футболл
        </div>
        <div class="tab-pane fade" id="pills-cs" role="tabpanel" aria-labelledby="pills-cs-tab">
            Теннис
        </div>
        <div class="tab-pane fade" id="pills-cog" role="tabpanel" aria-labelledby="pills-cog-tab">
            Баскетбол
        </div>

    </div>
</div>


<nav class="navbar fixed-bottom navbar-light bg-d2">
    <div class="container  justify-content-center">
        <?php if(!uid()):?>
            <span class="text-light m-2">Зарегистрируйся и получи бонус</span>
            <span class="text-primary m-2">+1500</span>
            <a class="btn btn-info m-2" href="/register">Регистрация</a>
        <?php else:?>
            <span class="text-light m-2">Пополни счёт и получи бонус</span>
            <span class="text-primary m-2">+1500</span>
            <a class="btn btn-info m-2" href="/register">Пополнить</a>
        <?php endif;?>

    </div>
</nav>

