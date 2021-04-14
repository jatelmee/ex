<?php
api();
?>


<div class="container">
    <div class="first-block">
        <h2>UMI => $</h2>
    </div>
    <div class="second-block">
        <h3>Выберите валюту и заполните форму</h3>
    </div>
    <div class="ex-div">
        <div class="currency">
            <div class="currency">
                <div class="form-btn" data-form-id="#perfect-form">Perfect Money</div>
                <div class="form-btn" data-form-id="#payoneer-form">Peyoneer</div>
                <div class="form-btn" data-form-id="#perfect-form">Advacash</div>
            </div>
        </div>
        <div class="crypt-course">
            <h4 style="font-size: 20px">Курс обмена в USD $</h4><br>
            <span>BTC = <?= price('BTC', 'usd'); ?> </span>
            <span>LTC = <?= price('LTC', 'usd'); ?> </span>
            <span>ETH = <?= price('eth', 'usd'); ?> </span>
            <span>XRP = <?= price('xrp', 'usd'); ?> </span>
            <span>TON = <?= price('ton', 'usd'); ?> </span>
            <span>XMR = <?= price('xmr', 'usd'); ?> </span>
        </div>
    </div>
    <div class="ex-div">
        <div>
            <h3>Отдаю</h3>

        </div>
        <div>
            <h3>Получаю</h3>
        </div>
    </div>

    <div id="perfect-form">
        <div class="form-btn" data-form-id="#perfect-form">X</div>
    </div>
    <div id="payoneer-form">
        <div class="form-btn" data-form-id="#payoneer-form">X</div>
    </div>




</div>
