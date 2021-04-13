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
function redirect(){
    echo '<script>document.location.href = "/";</script>';
}
function adminBtn(){
    $su = require '_cfg/admin.php';
    if (isset($_SESSION['username'])){
        if ($_SESSION['username'] == $su['login']){
            echo '<a href="/admin">'.$su['login'].'</a><br>';
        }
    }
}
function uid(){
    if (isset($_SESSION['id']) and isset($_SESSION['username']) and isset($_SESSION['email'])){
        return true;
    }
    return false;
}

function logOut(){
    unset($_SESSION['id']);
    unset($_SESSION['username']);
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
function ltc(){
    $array = file_get_contents('https://api.cryptonator.com/api/ticker/LTC-usd');
    $array = json_decode($array, true);
    $price = $array['ticker']['price'];
    return $price;
}
function eth(){
    $array = file_get_contents('https://api.cryptonator.com/api/ticker/ETH-usd');
    $array = json_decode($array, true);
    $price = $array['ticker']['price'];
    return $price;
}
function xrp(){
    $array = file_get_contents('https://api.cryptonator.com/api/ticker/XRP-usd');
    $array = json_decode($array, true);
    $price = $array['ticker']['price'];
    return $price;
}
function ton(){
    $array = file_get_contents('https://api.cryptonator.com/api/ticker/TON-usd');
    $array = json_decode($array, true);
    $price = $array['ticker']['price'];
    return $price;
}
function xmr(){
    $array = file_get_contents('https://api.cryptonator.com/api/ticker/xmr-usd');
    $array = json_decode($array, true);
    $price = $array['ticker']['price'];
    return $price;
}
function price($base, $target){
    $array = file_get_contents('https://api.cryptonator.com/api/ticker/'.$base.'-'.$target);
    $array = json_decode($array, true);
    $price = $array['ticker']['price'];
    return round($price, 2, PHP_ROUND_HALF_UP);
}

