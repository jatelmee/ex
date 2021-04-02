<?php
session_start();
$pages = require '_cfg/pages.php';
$cfg = require 'core/vars.php';
require_once 'core/core.php';
require_once '_cfg/db/data.php';
$su = require '_cfg/admin.php';

$page_name = $cfg['siteName'].' '.$cfg['uri'];



require 'public/tmp/header.php';
if ($cfg['uri'] == ''){
    require 'public/tmp/index.php';
}
if ($cfg['uri'] == 'login'){
    if (uid()){
        redirect();
    }else{
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
require 'public/tmp/footer.php';


