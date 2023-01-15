<?php 
    session_start();
    
    if(isset($_SESSION['user'])){
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Конвертор валют</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <form action="registerScript.php" method="post">
        <div style="text-align: center;">
            <h2>Регистрация</h2>
        </div>
        <label>Логин</label>
        <input type="text" name="login" placeholder = "Введите логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder = "Введите пароль">
        <button type="submit">Зарегистрироваться</button>
        <a href="../index.php">Авторизироваться</a>
        <?php
            if(isset($_SESSION['message'])) {
                echo '<p> '.$_SESSION['message'].' </p>';
                unset($_SESSION['message']);
            }
        ?>
    </form>  
</body>
    

