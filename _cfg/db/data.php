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
    $_SESSION['id'] = $user->id;
    $_SESSION['username'] = $user->username;
    $_SESSION['email'] = $user->email;
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
function getData($pdo){
    $query = $pdo->query("SELECT * FROM users");
    while ($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<li>'.$row->email.'</li>';
    }
}


