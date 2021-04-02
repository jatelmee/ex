<?php
if ($_SESSION['username'] != $su['login']){
    echo '<script>document.location.href = "/";</script>';
}
