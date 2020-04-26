<?php
include '../class/User.php';
include '../class/UserManager.php';
session_start();
$firstName = $_POST['firstName'];
$_SESSION['firstName'] = $firstName;
$lastName = $_POST['lastName'];
$_SESSION['lastName'] = $lastName;
$email = $_POST['email'];
$_SESSION['email'] = $email;
$password = $_POST['password'];
$_SESSION['password'] = $password;
$confirmPassword = $_POST['confirmPassword'];
$_SESSION['confirmPassword'] = $confirmPassword;
$birthDate = $_POST['birthDate'];
$_SESSION['birthDate'] = $birthDate;
$phoneNumber = $_POST['phoneNumber'];
$_SESSION['phoneNumber'] = $phoneNumber;
$_SESSION['checkExistedEmail'] = false;

$userManager = new UserManager();
$dataArrayUser = $userManager->getDataJsonUser('../data/data.json');
$checkInfoUser = 0;
foreach ($dataArrayUser as $item) {
    if ($item->email == $email) {
        $_SESSION['email'] = '';
        $_SESSION['checkExistedEmail'] = true;
        $checkInfoUser++;
    }
}
if (!$userManager->checkFirstName($firstName)) {
    $_SESSION['firstName'] = '';
    $checkInfoUser++;
}
if (!$userManager->checkLastName($lastName)) {
    $_SESSION['lastName'] = '';
    $checkInfoUser++;
}
if (!$userManager->checkEmail($email)) {
    $_SESSION['email'] = '';
    $checkInfoUser++;
}
if (!$userManager->checkPassword($password)) {
    $_SESSION['password'] = '';
    $checkInfoUser++;
}
if (!$userManager->checkBirthDate($birthDate)) {
    $_SESSION['birthDate'] = '';
    $checkInfoUser++;
}
if (!$userManager->checkPhoneNUmber($phoneNumber)) {
    $_SESSION['phoneNumber'] = '';
    $checkInfoUser++;
}
if ($_SESSION['password'] != $_SESSION['confirmPassword']) {
    $_SESSION['confirmPassword'] ='';
    $checkInfoUser++;
}

if ($checkInfoUser!=0) {
    header('Location: ../view/registration.php');
} else {
    $_SESSION['login'] = true;
    $user = new User();
    $user->setFirstName($firstName);
    $user->setLastName($lastName);
    $user->setEmail($email);
    $user->setPassword($password);
    $user->setBirthDate($birthDate);
    $user->setPhoneNumber($phoneNumber);

    $userManager->saveDataJsonUser($user,'../data/data.json');
    header('Location: ../view/home.php');
}
