<?php
session_start();
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
<form action="../action/get-account.php" method="post">
    User Name:
    <input type="text" name="userName" value="<?php echo $_SESSION['userName'] ?>">
    <?php
    if ($_SESSION['userName'] === '') {
        echo 'Email is empty';
    }
    ?>
    <br>
    Phone Number:
    <input type="number" name="phoneNumber">
    <?php
    if (isset($_SESSION['phoneNumber'])) {
        echo 'Phone Number fail!';
    }
    ?>
    <br>
    <input type="submit" value="Ok">
</form>
</body>
</html>