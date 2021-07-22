<?php
session_start();
$pages = require '_cfg/pages.php';
$cfg = require 'core/vars.php';
require_once 'core/core.php';
require_once '_cfg/db/data.php';
$su = require '_cfg/admin.php';
$_SESSION['message'] = '';
$page_name = $cfg['siteName'];
if ($cfg['uri'] == 'test-api'){
    require 'core/testApi.php';
}else{
    require 'public/tmp/header.php';
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
    }else{
        if (isset($_POST['email']) and isset($_POST['password'])){
              if ($_POST['email'] == '' or $_POST['password'] == ''){
                  $_SESSION['message'] = 'Не все поля заполнены';
              }elseif ($_POST['uname'] == '' or $_POST['sname'] == ''){
                  $_SESSION['message'] = 'ФИО не указан';
              }elseif (strlen($_POST['uname']) < 2 or strlen($_POST['sname'])<2){
                  $_SESSION['message'] = 'Слишком короткое ФИО';
              }elseif ($_POST['password'] != $_POST['password-repeat']){
                  $_SESSION['message'] = 'Пароли не совпадают';
              }elseif (strlen($_POST['password']) < 6){
                  $_SESSION['message'] = 'Минимальная длина пароля: 6 символов';
              }else{
                  register($_POST['uname'], $_POST['sname'], $_POST['password'], $_POST['email'], $_POST['promo']);
                  login($_POST['email'], $_POST['password']);
              }
          }
        require 'public/tmp/register.php';
    }
}
if ($cfg['uri'] == 'cabinet'){
    if (uid()){updateUD();}
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
if ($cfg['uri'] == 'promo'){
    require 'public/tmp/promo.php';

}
if (preg_match('/line/i', $cfg['uri'])){
    require 'public/tmp/line.php';
}
if ($cfg['uri'] == 'live'){
    require 'public/tmp/live.php';

}
if ($cfg['uri'] == 'support'){
    require 'public/tmp/support.php';

}
if ($cfg['uri'] == 'ticket'){
    if (isset($_SESSION['ticket'])){
        require 'public/tmp/ticket.php';
    }else{redirect();}
}
if ($cfg['uri'] == 'admin'){
    if ($_SESSION['email'] != $su['login']){
        echo '<script>document.location.href = "/";</script>';
        end();
    }
    require 'public/tmp/admin/header_admin.php';
    require 'public/tmp/admin/index.php';
}
if ($cfg['uri'] == 'addevent'){
    if ($_SESSION['email'] != $su['login']){
        echo '<script>document.location.href = "/";</script>';
        end();
    }
    var_dump($_POST);
    if (isset($_POST['event'])){
        addEvent();
    }
    require 'public/tmp/admin/header_admin.php';
    require 'public/tmp/admin/addevent.php';
}
if ($cfg['uri'] == 'users'){
    if ($_SESSION['email'] != $su['login']){
        echo '<script>document.location.href = "/";</script>';
        end();
    }
    require 'public/tmp/admin/header_admin.php';
    require 'public/tmp/admin/users.php';

}
if ($cfg['uri'] == 'events-history'){
    if ($_SESSION['email'] != $su['login']){
        echo '<script>document.location.href = "/";</script>';
        end();
    }
    require 'public/tmp/admin/header_admin.php';
    require 'public/tmp/admin/events.php';

}
if (preg_match('/event-data/i', $cfg['uri'])){
    if ($_SESSION['email'] != $su['login']){
        echo '<script>document.location.href = "/";</script>';
        end();
    }
    require 'public/tmp/admin/header_admin.php';
    require 'public/tmp/admin/event-data.php';

}
if (preg_match('/edit-event/i', $cfg['uri'])){
    if ($_SESSION['email'] != $su['login']){
        echo '<script>document.location.href = "/";</script>';
        end();
    }
    require 'public/tmp/admin/header_admin.php';
    require 'public/tmp/admin/edit-event.php';
}
if (preg_match('/dell-event/i', $cfg['uri'])){
    if ($_SESSION['email'] != $su['login']){
        echo '<script>document.location.href = "/";</script>';
        end();
    }
    dellEvent($_GET['id']);
    redirect('/events-history');

}
if (preg_match('/save-event_data/i', $cfg['uri'])){
    if ($_SESSION['email'] != $su['login']){
        echo '<script>document.location.href = "/";</script>';
        end();
    }
    var_dump($_POST);
    editEvent();
    redirect('/event-data?id='.$_GET['id']);
}
if (preg_match('/bet-event/i', $cfg['uri'])){
    $row = getEventById($_GET['id']);
    require 'public/tmp/bet-event-tmp.php';
}
if (preg_match('/make-bet/i', $cfg['uri'])){
    if (!uid()){
        redirect('/login');
        end();
    }
    $row = getEventById($_GET['id']);
    require 'public/tmp/make-bet.php';
    $_SESSION['messageSum'] = '';
}
if ($cfg['uri'] == 'reg-bet'){
    if (!uid()){
        redirect();
    }
    if ($_POST['sum'] > $_SESSION['balance']){
        $_SESSION['messageSum'] = 'Введите суму коректно';
        redirect("/make-bet?id=".$_POST['event']."&type=".$_POST['bet']);
        end();
    }
    addBet();
    echo "<div class='container-mini'>
             <div style='display: flex; flex-direction: column; align-items: center'>
                <h5 class='mt-4 text-center'>
                Ставка принята
                </h5>
                <a href='/line?type=all' style='max-width: 300px' class='btn btn-outline-info mt-4'>Назад</a>
             </div>
        </div>";
}
if ($cfg['uri'] == 'pay-status'){
    if (!uid()){
        redirect();
    }
    require 'payments/pay_status.php';
}if ($cfg['uri'] == 'pay-error'){
    if (!uid()){
        redirect();
    }
    require 'payments/error_pay.php';
}if ($cfg['uri'] == 'pay-access'){
    if (!uid()){
        redirect();
    }
    require 'payments/access.php';
}
//payment

if ($cfg['uri'] == 'add-cash'){
    if (!uid()){
        redirect();
    }
    require 'public/tmp/cashin/add-cash.php';
}if ($cfg['uri'] == 'cash-in-perfect'){
    if (!uid()){
        redirect();
    }
    require 'public/tmp/cashin/perfect-form.php';
}if ($cfg['uri'] == 'cash-in-payeer'){
    if (!uid()){
        redirect();
    }
    require 'public/tmp/cashin/payeer-form.php';
}if ($cfg['uri'] == 'active-bets'){
    if (!uid()){
        redirect();
    }
    require 'public/tmp/activeBets.php';
}




if ($cfg['uri'] != 'test-api'){
    require 'public/tmp/footer.php';
}



