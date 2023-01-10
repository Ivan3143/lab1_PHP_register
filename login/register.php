<?php
session_start();
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        .image
        {
            width: 25%;
            height: auto;
        }
        .green 
        {
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.08);
        -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.08);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.08);
        color: #fff;
        display:block;
        width:200px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        padding: 8px 16px;
        margin: 20px auto;
        text-decoration: none;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.075);
        -webkit-transition: background-color 0.1s linear;
        -moz-transition: background-color 0.1s linear;
        -o-transition: background-color 0.1s linear;
        transition: background-color 0.1s linear;  
        background-color: rgb( 43, 153, 91 );
        border: 1px solid rgb( 33, 126, 74 ); 
        }
        .zagolovok{
            margin: -125px 0 0 -125px;
            font-size: 80%;
            color: #008000;
            height: 20px;
            position: absolute;
            top: 20%;
            left: 40%;
    
        }
    </style>
</head>
<h1><span class="zagolovok">Автоматический контрольно-пропускной пункт</span></h1>
<img class="image" src="https://sem2006.ru/upload/iblock/8e2/m22x8fi1duzpi2813a2iq0g5aa64jpo2.png"  alt="Логотип КПП">
<body>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post">
        <label>ФИО</label>
        <input type="text" name="name" placeholder="Введите имя пользователя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес почты">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit" class="green">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="/login/authorization.php" target="_blank" >авторизируйтесь</a>!
        </p>
</body>