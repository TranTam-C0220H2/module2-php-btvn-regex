<?php
include 'class/UserManager.php';
$test1 = 'Tran';
$test2 = 'Aaam';
$test4 = 'trantam.1@gmail.com';
$test5 = '774111Tvt-';
$test6 = '08/31/1991';
$test7 = '0368123456';

$test = new UserManager();
 if ($test->checkFirstName($test1)) {
     echo 1;
 } else {
     echo 0;
 }
if ($test->checkLastName($test2)) {
    echo 1;
} else {
    echo 0;
}

if ($test->checkEmail($test4)) {
    echo 1;
} else {
    echo 0;
}
if ($test->checkPassword($test5)) {
    echo 1;
} else {
    echo 0;
}
if ($test->checkBirthDate($test6)) {
    echo 1;
} else {
    echo 0;
}
if ($test->checkPhoneNUmber($test7)) {
    echo 1;
} else {
    echo 0;
}
