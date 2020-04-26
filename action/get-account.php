<?php
include '../class/UserManager.php';
session_start();
$phoneNumber = $_POST['phoneNumber'];
$userName = $_POST['userName'];
$_SESSION['userName'] = '';
$userManager = new UserManager();
$_SESSION['dataArrayUser'] = $userManager->getDataJsonUser('../data/data.json');
foreach ($_SESSION['dataArrayUser'] as $item) {
    if ($item->phoneNumber == $phoneNumber && $item->email == $userName) {
        header('Location: ../view/new-password.php');
        break;
    } else {
        if ($item->email == $userName) {
            $_SESSION['userName'] = $userName;
            $_SESSION['phoneNumber'] = false;
        }
        header('Location: ../view/forget-password.php');
    }
}

