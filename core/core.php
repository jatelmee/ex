<?php

// errors visible
ini_set('display_errors', 1);
error_reporting(E_ALL);

function debug($str) {
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    exit;
}
function redirect($href = '/'){
    echo '<script>document.location.href = "'.$href.'";</script>';
}

function adminBtn(){
    $su = require '_cfg/admin.php';
    if (isset($_SESSION['username'])){
        if ($_SESSION['email'] == $su['login']){
            echo '<a href="/admin">'.$su['login'].'</a><br>';
        }
    }
}
function uid(){
    if (isset($_SESSION['id']) and isset($_SESSION['username']) and isset($_SESSION['surname']) and isset($_SESSION['email'])){
        return true;
    }
    return false;
}

function logOut(){
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['surname']);
    unset($_SESSION['email']);
}
function btc(){
    $array = file_get_contents("https://api.cryptonator.com/api/ticker/btc-usd");
    $array = json_decode($array, true);
    $result = [
        'base'     => $array['ticker']['base'],
        'target'   => $array['ticker']['target'],
        'price'    => $array['ticker']['price'],
        'change24' => $array['ticker']['change'],
    ];
    return $result['price'];
}

function price($base, $target){
    $array = file_get_contents('https://api.cryptonator.com/api/ticker/'.$base.'-'.$target);
    $array = json_decode($array, true);
    $price = $array['ticker']['price'];
    return round($price, 2, PHP_ROUND_HALF_UP);
}
function api(){
    if (isset($_POST['base']) and isset($_POST['amount']) and isset($_POST['target'])){
        $jsn =[
            'profit' => $_POST['amount'] * price($_POST['base'], $_POST['target']),
        ];
        return json_encode($jsn);
    }
    return 0;
}
function toFill($val){
    if (isset($_POST[$val]) and $_POST[$val] != ''){
        return $_POST[$val];
    }
    else{return '';}
}
function replaceBet($bet){
    $arr = [
        'p1' =>'П1',
        'p2' =>'П2',
        'b25' =>'Больше 2,5',
        'm25' =>'Меньше 2,5',
        'f1_m15' =>'Фора 1(-1,5)',
        'f2_m15' =>'Фора 2(-1,5)',
        'f1_15' =>'Фора 1(1,5)',
        'f2_15' =>'Фора 2(1,5)',
        'ts20' =>'Точный счёт 2:0',
        'ts02' =>'Точный счёт 0:2',
        'ts21' =>'Точный счёт 2:1',
        'ts12' =>'Точный счёт 1:2',
        'k1p1' =>'Карта 1 П1',
        'k1p2' =>'Карта 1 П2',
        'k2p1' =>'Карта 2 П1',
        'k2p2' =>'Карта 2 П2',
        'tc' =>'Тотал чётный',
        'tnc' =>'Тотал нечётный',
    ];
    return $arr[$bet];

}

