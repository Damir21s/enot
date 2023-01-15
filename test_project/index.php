<?php 
    session_start();
    require_once 'cron.php';
    
    if(isset($_SESSION['user'])){
        header('Location: src/profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Конвертор валют</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="src/autorizScript.php" method="post">
        <div style="text-align: center;">
            <h2>Авторизация</h2>
        </div>
        <label>Логин</label>
        <input type="text" name="login" placeholder = "Введите логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder = "Введите пароль">
        <button type="submit">Войти</button>
        <a href="src/register.php">Зарегистрироваться</a>
        <?php
            if(isset($_SESSION['message'])) {
                echo '<p> '.$_SESSION['message'].' </p>';
                unset($_SESSION['message']);
            }
        ?>
    </form>  
</body>
    

