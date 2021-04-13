<?php
if(uid()){
    redirect();
}
?>
<div class="container">
    <div class="mess-box">
        <?php if (isset($_SESSION['message']) and $_SESSION['message'] != ''):?>
            <div class="message">
                <?=$_SESSION['message']?>
            </div>
        <?php endif;?>
    </div>

    <div class="second-block">
        <h3>Вход</h3>
    </div>
    <form action="/login" method="post" class="login-block">
        <input name="email" type="text" placeholder="E-mail" autofocus>
        <input name="password" type="password" placeholder="Пароль">
        <input name="check" type="submit" value="Вход" id="btn">
    </form>
</div>
