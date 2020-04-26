<?php
session_start();
if (isset($_SESSION['login'])) {
    echo "Welcome ".$_SESSION['firstName'].'!';
    session_destroy();
} else {
    header('Location: ../index.php');
}