<?php


class UserManager
{
    function checkFirstName($firstName)
    {
        $regexp = '/^[A-Z]{1}[a-z]+$/';
        if (preg_match($regexp, $firstName)) {
            return true;
        } else {
            return false;
        }
    }

    function checkLastName($lastName)
    {
        $regexp = '/^[A-Z]{1}[a-z]+$/';
        if (preg_match($regexp, $lastName)) {
            return true;
        } else {
            return false;
        }
    }

    function checkEmail($email)
    {
        $regexp = '/^\w+[a-zA-Z0-9\.]*[^\.]@[a-z]+\.[a-z]+$/';
        if (preg_match($regexp, $email)) {
            return true;
        } else {
            return false;
        }
    }

    function checkPassword($password)
    {
        $regexp1 = '/^[\w@!\^\-\$%]{8,}$/';
        $regexp2 = '/[A-Z]{1}/';
        $regexp3 = '/\d{1}/';
        $regexp4 = '/[@!\^\$%\-]{1}/';
        if (preg_match($regexp1, $password) && preg_match($regexp2, $password) && preg_match($regexp3, $password) && preg_match($regexp4, $password)) {
//          if (preg_match($regexp1,$password)) {
            return true;
        } else {
            return false;
        }
    }

    function checkBirthDate($birthDate)
    {
        $regexp1 = '/^20[01]{1}\d{1}\-\d{2}\-\d{2}$/';
        $regexp2 = '/^19\d{2}\-\d{2}\-\d{2}$/';
        if (preg_match($regexp1, $birthDate) || preg_match($regexp2, $birthDate)) {
            return true;
        } else {
            return false;
        }
    }

    function checkPhoneNUmber($phoneNumber)
    {
        $regexp1 = '/^03[2-9]{1}\d{7}$/';
        $regexp2 = '/^09[0-46-8]{1}\d{7}$/';
        $regexp3 = '/^08[1-689]{1}\d{7}$/';
        $regexp4 = '/^07[06-9]{1}\d{7}$/';
        if (preg_match($regexp1, $phoneNumber) || preg_match($regexp2, $phoneNumber) || preg_match($regexp3, $phoneNumber) || preg_match($regexp4, $phoneNumber)) {
            return true;
        } else {
            return false;
        }
    }

    function getDataJsonUser($fileJsonName)
    {
        $dataJsonUser = file_get_contents($fileJsonName);
        return json_decode($dataJsonUser);
    }

    function saveDataJsonUser($user, $fileJsonName)
    {
        $dataUser = [
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'birthDate' => $user->getBirthDate(),
            'phoneNumber' => $user->getPhoneNumber()
        ];
        $dataArrayUser = $this->getDataJsonUser($fileJsonName);
        array_push($dataArrayUser, $dataUser);
        $dataJsonUser = json_encode($dataArrayUser);
        file_put_contents($fileJsonName, $dataJsonUser);
    }

    function changeDataJsonUser($fileJsonName,$dataArrayUser) {
        $dataJsonUser = json_encode($dataArrayUser);
        file_put_contents($fileJsonName, $dataJsonUser);
    }
}