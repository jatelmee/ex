<?php
$config = require '_cfg/db/config.php';
$pdo = new PDO(
    'mysql:host=' . $config['host'] . ';dbname=' . $config['name'] . '', $config['user'], $config['password']
);

$username = '1';
$password = '1';
$email = '3';


function login($email, $password){
    $su = require '_cfg/admin.php';
    if ($email == $su['login'] and $password == $su['password']){
        $_SESSION['id'] = '0';
        $_SESSION['username'] = $su['login'];
        $_SESSION['email'] = $su['login'];
        return;
    }
    global $pdo;
    $query = $pdo->query("SELECT * FROM users WHERE  email = '$email' AND password = '$password'");
    $user = $query->fetch(PDO::FETCH_OBJ);
    if (isset($user->id)){
        $_SESSION['id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
    }
    else{
        $_SESSION['message'] = 'Неверный логин или пароль';
    }
}


function register($pdo, $username, $password, $email){
    $sql = "INSERT INTO users(username, password, email) VALUES(:username, :password, :email)";
    $query = $pdo->prepare($sql);
    $query->execute(['username' => $username, 'password' => $password, 'email' => $email]);
}
function createTicket($email, $umi, $curr, $wallet){
    $_SESSION['ticket'] = ['email'=> $email, 'umi' => $umi, 'curr' => $curr, 'wallet' => $wallet];
    global $pdo;
    $sql = "INSERT INTO tickets(umi, curr, wallet, email) VALUES(:umi, :curr, :wallet, :email)";
    $query = $pdo->prepare($sql);
    $query->execute(['umi' => $umi, 'curr' => $curr, 'wallet' => $wallet, 'email' => $email]);
}
function getUsr(){
    global $pdo;
    $query = $pdo->query("SELECT * FROM users ORDER BY id");
    echo "<div class='table-usr'><ul>";
    $c = 1;
    while ($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<li>'.$c.' '.$row->email.'</li>';
        $c++;
    }
    echo "</ul></div>";
}
function getTickets(){
    global $pdo;
    $query = $pdo->query("SELECT * FROM tickets ORDER BY id");
    echo "<div class='table-usr'><ul>";
    $c = 1;
    while ($row = $query->fetch(PDO::FETCH_OBJ)){
/*        echo '<li>'.$c.' '.$row->email.'</li>';
        $c++;*/
        var_dump($row);
    }
    echo "</ul></div>";
}


