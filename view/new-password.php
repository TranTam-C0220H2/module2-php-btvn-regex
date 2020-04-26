<?php
include '../class/UserManager.php';
session_start();
$userManager = new UserManager();
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
if (isset($password)) {
if ($userManager->checkPassword($password)) {
    if ($password == $confirmPassword) {
        foreach ($_SESSION['dataArrayUser'] as $index => $item) {
            $item->password = $password;
            $_SESSION['firstName'] = $item->firstName;
        }
        $userManager->changeDataJsonUser('../data/data.json',$_SESSION['dataArrayUser']);
        $_SESSION['login'] = true;
        header('Location: ../view/home.php');
    } else {
        echo 'Confirm password different password!!!';
    }
} else {
    echo 'Password is invalid!!!';
}
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        New Password: <input type="password" name="password"><br>
        Confirm New Password: <input type="password" name="confirmPassword"><br>
        <input type="submit" value="Change">
</form>
</body>
</html>
