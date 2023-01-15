<?php
    session_start();
    require_once 'connect.php';

    if (!empty($_POST['login']) && !empty($_POST['password'])){
        $login = $_POST['login'];
        $password = md5($_POST['password']);
        
        $db_class = new DB();
        $response = $db_class->select('users','*', "`login` = '$login'");
    
        if(mysqli_num_rows($response) > 0){
            $_SESSION['message'] = 'Пользователь с таким логином существует';
            header('Location: register.php');
        }else{
            $userData = array();
            $userData['id'] = 0;
            $userData['login'] = $login;
            $userData['password'] = $password;

            $db_class->insert($userData,'users');
            $_SESSION['message'] = 'Вы зарегистрировались';
            header('Location: ../index.php');
        }
    }else{
        $_SESSION['message'] = 'Введите логин и пароль';
        header('location: register.php');
    }
?>
