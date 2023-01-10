<?php

    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = md5($_POST['password'].'qwerty');

        mysqli_query($connect, "INSERT INTO `registeredusers` (`id`, `name`, `login`, `email`, `password`) VALUES (NULL, '$name', '$login', '$email', '$password')");
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../authorization.php');

?>
