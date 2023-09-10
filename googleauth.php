<?php
session_start();

if(!isset($_SESSION['ucode']) || (isset($_SESSION['ucode']) && empty($_SESSION['ucode']))){
    if(strstr($_SERVER['PHP_SELF'], 'main.php') === false)
    header('location:main.php');
}else{
    if(strstr($_SERVER['PHP_SELF'], 'index.php') === false)
    header('location:index.php');
}
