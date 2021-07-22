<?php
$config = require '_cfg/db/config.php';
$pdo = new PDO(
    'mysql:host=' . $config['host'] . ';dbname=' . $config['name'] . '', $config['user'], $config['password']
);




function login($email, $password){
    $su = require '_cfg/admin.php';
    if ($email == $su['login'] and $password == $su['password']){
        $_SESSION['id'] = '0';
        $_SESSION['username'] = 'Капер';
        $_SESSION['surname'] = 'Ставцов';
        $_SESSION['email'] = $su['login'];
        $_SESSION['balance'] = 1000;
        return;
    }
    global $pdo;
    $query = $pdo->query("SELECT * FROM users WHERE  email = '$email' AND password = '$password'");
    $user = $query->fetch(PDO::FETCH_OBJ);
    if (isset($user->id)){
        $_SESSION['id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['surname'] = $user->surname;
        $_SESSION['email'] = $user->email;
        $_SESSION['balance'] = $user->balance;
    }
    else{
        $_SESSION['message'] = 'Неверный логин или пароль';
    }
}
function updateUD(){
    global $pdo;
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];
    $query = $pdo->query("SELECT * FROM users WHERE  id = '$id' AND username = '$username'");
    $user = $query->fetch(PDO::FETCH_OBJ);
    if (isset($user->id)){
        $_SESSION['id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['surname'] = $user->surname;
        $_SESSION['email'] = $user->email;
        $_SESSION['balance'] = $user->balance;
    }

}

function register( $username, $surname, $password, $email, $promo){
    global $pdo;
    $sql = "INSERT INTO users(username, surname, password, email, promo) VALUES(:username, :surname, :password, :email, :promo)";
    $query = $pdo->prepare($sql);
    $query->execute([
        'username' => $username, 'surname'=>$surname, 'password' => $password, 'email' => $email, 'promo'=>$promo]
    );

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
    $c = 1;
    while ($row = $query->fetch(PDO::FETCH_OBJ)){
        echo $row->email;
        echo "<tr>
            <th scope='row'>".$row->id."</th>
            <td>".$row->username."</td>
            <td>".$row->surname."</td>
            <td>".$row->email."</td>
            <td>".$row->balance."</td>
            <td>".$row->promo."</td>
        </tr>
        ";


        $c++;
    }
}
function getTickets(){
    global $pdo;
    $query = $pdo->query("SELECT * FROM tickets ORDER BY id");
    echo "<div class='table-tickets'><ul>";
    $c = 1;
    while ($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<li>'.$c.' '.$row->email.'</li>';
        $c++;
    }
    echo "</ul></div>";
}
function addEvent(){
    global $pdo;
    $sql = "INSERT INTO events(event, e_type, teem1, teem2, p1, p2, b25, m25, f1_m15, f2_m15, f1_15, f2_15, ts20, ts02, ts21, ts12, k1p1, k1p2, k2p1, k2p2, tc, tnc, date1, time1) 
            VALUES(:event, :e_type, :teem1, :teem2, :p1, :p2, :b25, :m25, :f1_m15, :f2_m15, :f1_15,:f2_15, :ts20, :ts02, :ts21, :ts12, :k1p1, :k1p2, :k2p1, :k2p2, :tc, :tnc, :date1, :time1)";
    $query = $pdo->prepare($sql);
    $query->execute([
            'event' => $_POST['event'],
            'e_type'=> $_POST['e_type'],
            'teem1'=> $_POST['teem1'],
            'teem2' => $_POST['teem2'],
            'p1' => $_POST['p1'],
            'p2'=> $_POST['p2'],
            'b25'=> $_POST['b25'],
            'm25'=> $_POST['m25'],
            'f1_m15'=> $_POST['f1_m15'],
            'f2_m15'=> $_POST['f2_m15'],
            'f1_15'=> $_POST['f1_15'],
            'f2_15'=> $_POST['f2_15'],
            'ts20'=> $_POST['ts20'],
            'ts02'=> $_POST['ts02'],
            'ts21'=> $_POST['ts21'],
            'ts12'=> $_POST['ts12'],
            'k1p1'=> $_POST['k1p1'],
            'k1p2'=> $_POST['k1p2'],
            'k2p1'=> $_POST['k2p1'],
            'k2p2'=> $_POST['k2p2'],
            'tc'=> $_POST['tc'],
            'tnc'=> $_POST['tnc'],
            'date1' => $_POST['date'],
            'time1' => $_POST['time']
        ]
    );
    $_SESSION['message'] = 'Событие добавдено';

}
function editEvent(){
    global $pdo;
    extract($_POST, EXTR_OVERWRITE, '');
    $sql = "UPDATE events SET event = ?, e_type = ?, teem1 = ?, teem2 = ?, p1 = ?, p2 = ?, b25 = ?, m25 = ?, f1_m15 = ?, f2_m15 = ?, f1_15 = ?, f2_15 = ?, ts20 = ?, ts02 = ?, ts21 = ?, ts12 = ?, k1p1 = ?, k1p2 = ?, k2p1 = ?, k2p2 = ?, tc = ?, tnc = ? WHERE id = ?";
    $query = $pdo->prepare($sql);
    $query->execute([
            $_POST['event'],
            $_POST['e_type'],
            $_POST['teem1'],
            $_POST['teem2'],
            $_POST['p1'],
            $_POST['p2'],
            $_POST['b25'],
            $_POST['m25'],
            $_POST['f1_m15'],
            $_POST['f2_m15'],
            $_POST['f1_15'],
            $_POST['f2_15'],
            $_POST['ts20'],
            $_POST['ts02'],
            $_POST['ts21'],
            $_POST['ts12'],
            $_POST['k1p1'],
            $_POST['k1p2'],
            $_POST['k2p1'],
            $_POST['k2p2'],
            $_POST['tc'],
            $_POST['tnc'],
            $_GET['id']
        ]
    );
    $_SESSION['message'] = 'Событие изменено';

}
function getEvents(){
    global $pdo;
    $query = $pdo->query("SELECT * FROM events ORDER BY id DESC ");
    while ($row = $query->fetch(PDO::FETCH_OBJ)){
        echo "
        <tr>
            <th scope='row'>".$row->id."</th>
            <td>".$row->event."</td>
            <td>".$row->e_type."</td>
            <td>".$row->teem1."</td>
            <td>".$row->teem2."</td>
            <td>".$row->p1." / ".$row->p2."</td>
            <td>".$row->b25." / ".$row->m25."</td>
            <td><a href='event-data?id=".$row->id."'>Детали</a></td>
        </tr>
        ";
    }
}
function getEventsByType($type){
    global $pdo;
    if ($type == 'all'){
        $query = $pdo->query("SELECT * FROM events ORDER BY id DESC ");
    }else{
        $query = $pdo->query("SELECT * FROM events WHERE e_type = '$type' ORDER BY id DESC ");
    }
    while ($row = $query->fetch(PDO::FETCH_OBJ)){
        echo "
            <a class='game-block' href='/bet-event?id=".$row->id."'>
            <div class='row w-100'>
                <div class='col-5'>
                    ".$row->event."<br>
                    ".$row->teem1." - ".$row->teem2."
                </div>
                <div class='col'>
                    ".$row->p1."
                </div>
                <div class='col'>
                    ".$row->p2."
                </div>                
                <div class='col'>
                    ".$row->e_type."
                </div>
            </div>
            </a>
        ";
    }
}
function getEventById($id){
    global $pdo;
    $query = $pdo->query("SELECT * FROM events WHERE id = '$id'");
    $row = $query->fetch(PDO::FETCH_OBJ);
    return $row;
}
function dellEvent($id){
    global $pdo;
    $sql = "DELETE FROM `events` WHERE `id` = :id";
    $query = $pdo->prepare($sql);
    $query->execute(['id'=>$id]);
}
function addBet(){
    global $pdo;
    extract($_POST, EXTR_OVERWRITE, '');
    $sql = "INSERT INTO activeBets(eventid, userid, suma, bet, datetime) VALUES(:eventid, :userid, :suma, :bet, :datetime)";
    $query = $pdo->prepare($sql);
    $query->execute([
            'eventid' => $event, 'userid'=> $userid,
            'suma'=> $sum, 'bet' => $bet, 'datetime' => $datetime
        ]
    );
    if ($_SESSION['id'] == 0){
        $balUpd = intval($_SESSION['balance']) - $sum;
        $_SESSION['balance'] = $balUpd;
    }else{
        $balUpd = $_SESSION['balance'] - $sum;
        $sql = "UPDATE users SET balance = ? WHERE id = ?";
        $query = $pdo->prepare($sql);
        $query->execute([
            $balUpd,
            $userid
        ]);
    }

}
function getActiveBets(){
    global $pdo;
    $userid = $_SESSION['id'];
    $query = $pdo->query("SELECT * FROM activeBets WHERE userid = '$userid' ORDER BY id DESC ");
    while ($row = $query->fetch(PDO::FETCH_OBJ)){
        $ev = getEventById($row->eventid);
        $bet = $row->bet;
        $kf = $ev->$bet;
        $status = 'Не рассчитано';
        switch ($row->status){
            case 1:
                $status = 'Ставка прошла';
                break;
            case 2:
                $status = 'Ставка не прошла';
                break;
        }
        echo "
            <a class='game-block' href='/bet-event?id=".$row->id."'>
            <div class='row w-100'>
                <div class='col'>
                    ".$row->datetime."
                </div>
                <div class='col-5'>
                    ".$ev->event."<br>".$ev->teem1."-".$ev->teem2."<br>".replaceBet($row->bet)."
                </div>
                <div class='col'>
                    ".$kf."
                </div>
                <div class='col'>
                    ".$row->suma."
                </div>                  
                <div class='col'>
                    ".$status."
                </div>                

            </div>
            </a>
        ";
    }
}



