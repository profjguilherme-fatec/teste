<?php
    session_start();

    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        exit();
    }


    echo "Olá ".$_SESSION['user'];

?>