<?php
include '../class/UserManager.php';
$userManager = new UserManager();
session_start();
$userName = $_POST['userName'];
$_SESSION['userName'] = $userName;
$password = $_POST['password'];

$dataArrayUser = $userManager->getDataJsonUser('../data/data.json');

foreach ($dataArrayUser as $index => $item) {
    if ($item->email == $userName && $item->password == $password) {
        $_SESSION['login'] = true;
        $_SESSION['firstName'] = $item->firstName;
        header('Location: ../view/home.php');
    } else {
        if ($item->email == $userName) {
            $_SESSION['checkExistedEmail'] = true;
        }
        header('Location: ../view/unsuccessful-login.php');
    }
}