<?php
if(uid()){
    redirect();
}
?>
<script>
    $(()=>{
        const alert = $('#alert');
        if (!$('div').is('.message')){
            alert.addClass('none');
        }
    })
</script>
<div class="container">
    <div class=" login-form">
        <div class="alert alert-danger w-100 mw-500" id="alert" role="alert">
            <?php if (isset($_SESSION['message']) and $_SESSION['message'] != ''):?>
                <div class="message">
                    <?=$_SESSION['message']?>
                </div>
            <?php endif;?>
        </div>
    </div>


    <div class="login-form">
        <form class="flex-column m-3 " action="/login" method="post">
            <h3 class="text-center mt-4">Авторизация</h3>
            <div class="form-group">
                <label for="email">Email адрес</label>
                <input type="email" class="form-control" id="email" name="email"  placeholder="Введите email">
                <small class="form-text text-muted">Мы никогда никому не передадим вашу электронную почту.</small>
            </div>

            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль">
            </div>

            <input name="check" type="submit" class="btn-outline-info btn mt-4 w-100" value="Войти" id="btn">

            <p class="form-text m-3">Если у Вас нет номера игрового счета, пройдите, пожалуйста, <a href="/register">процедуру регистрации</a>.</p>

        </form>
    </div>


</div>
