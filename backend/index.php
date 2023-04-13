<?php
$flagAuth =false;

if (!empty($_POST['exit'])){
    setcookie('login', '', time());
    setcookie('password', '', time());
    session_unset();
}
else {

    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        if ($_POST['login'] == 'admin' && $_POST['password'] == '123') $flagAuth = true;
    }


    if ($flagAuth && empty($_COOKIE['login']) && empty($_COOKIE['password'])) {
        setcookie('login', $_POST['login'], time() + 60 * 60);
        setcookie('password', $_POST['password'], time() + 60 * 60);
        session_start();
    }
    else if(isset($_COOKIE['login'])){
        if ($_COOKIE['login'] == 'admin' && $_COOKIE['password'] = '123') $flagAuth = true;
    }
}
