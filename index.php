<?php
session_start();
$pages = require '_cfg/pages.php';
$cfg = require 'core/vars.php';
require_once 'core/core.php';
require_once '_cfg/db/data.php';
$su = require '_cfg/admin.php';
$_SESSION['message'] = '';
$page_name = $cfg['siteName'].' '.$cfg['uri'];



require 'public/tmp/header.php';
if ($cfg['uri'] == 'p'){
    $_POST['base'] = 'btc';
    $_POST['amount'] = 2;
    $_POST['target'] = 'usd';
    var_dump(api());
}
if ($cfg['uri'] == ''){
    require 'public/tmp/index.php';
}
if ($cfg['uri'] == 'login'){
    if (uid()){
        redirect();
    }else{
        if (isset($_POST['email']) and isset($_POST['password'])){
            if ($_POST['email'] == '' or $_POST['password'] == ''){
                $_SESSION['message'] = 'Заполните форму';
            }else{
                login($_POST['email'], $_POST['password']);
            }
        }
        require 'public/tmp/login.php';
    }
}
if ($cfg['uri'] == 'register'){
    if (uid()){
        redirect();
    }
    require 'public/tmp/register.php';
}
if ($cfg['uri'] == 'cabinet'){
    if (!uid()){
        redirect();
    }else{
        require 'public/tmp/cabinet.php';
    }
}
if ($cfg['uri'] == 'logout'){
    logOut();
    redirect();
}
if ($cfg['uri'] == 'ticket'){
    if (isset($_SESSION['ticket'])){
        require 'public/tmp/ticket.php';
    }else{redirect();}
}
if ($cfg['uri'] == 'admin'){
    if ($_SESSION['username'] != $su['login']){
        echo '<script>document.location.href = "/";</script>';
        end();
    }
    require 'public/tmp/admin/index.php';
}
require 'public/tmp/footer.php';


