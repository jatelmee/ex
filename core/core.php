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

