<?php
    session_start();
    require_once 'connect.php';

    if (!empty($_POST['login']) && !empty($_POST['password'])){
        $login = $_POST['login'];
        $password = md5($_POST['password']);

        $db_class = new DB();
        $response = $db_class->select('users','*', "`login` = '$login' AND `password` = '$password'");
    
        if(mysqli_num_rows($response) > 0){
            $user = mysqli_fetch_assoc($response);
            $_SESSION['user'] = ["login"=> $user['login']];
            header('Location: profile.php');
        }else{
            $_SESSION['message'] = 'Не верный логин или пароль';
            header('location: ../index.php');
        }
    }else{
        $_SESSION['message'] = 'Введите логин и пароль';
            header('location: ../index.php');
    }
    
?>