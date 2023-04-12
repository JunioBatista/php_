<?php
    session_start();
    $erro = "";
    if(!isset($_POST['login']) or ($_POST['login']==""))
        $erro = 'preencha o login';
    elseif(!isset($_POST['senha']) or ($_POST['senha']==""))
        $erro = 'preencha o login';
    else {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        if($login!="admin" or $senha!="1234")
            $erro = 'login ou senha inválidos!';
        else {
            $_SESSION['usuario'] = 'administrador'
        }
    }

    if($erro!="")
        header("location: form.php?erro=$erro", true, 301)
    else 
        header("location: protegida.php", true ,301)
?>