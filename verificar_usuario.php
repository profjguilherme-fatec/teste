<?php
    session_start();

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if(($usuario=="guilherme")&&($senha=="1234")){
        $_SESSION['user']=$usuario;
        header('Location:menu.php');
        exit();
    }else{
        header('Location:index.php');
        exit();
    }

?>