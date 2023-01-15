<?php
    session_start();
    require_once 'connect.php';

    $char_code = $_POST['char_code'];
    $_SESSION['char_code'] = $char_code;

    if (!empty($char_code)) {
        $db_class = new DB();
        $response = $db_class->select('courses','`value`',"`char_code` = '$char_code'");

        if(mysqli_num_rows($response) > 0){
            $value = mysqli_fetch_assoc($response);
            $_SESSION['curr_course'] = round(floatval(str_replace(',', '.', $value['value'])), 2);
            
            if (!empty($_POST['current_value']) && empty($_POST['rub_value'])){
                $_SESSION['current_value'] = $_POST['current_value'];
                $_SESSION['rub_value'] = round(floatval(str_replace(',', '.', $value['value']))*floatval(str_replace(',', '.', $_POST['current_value'])), 2);
            }else if (empty($_POST['current_value']) && !empty($_POST['rub_value'])){    
                $_SESSION['rub_value'] = $_POST['rub_value'];
                $_SESSION['current_value'] = round(floatval(str_replace(',', '.', $_POST['rub_value']))/floatval(str_replace(',', '.', $value['value'])), 2);
            }else{
                $_SESSION['message'] = 'Заполните либо выбранную валюту, либо рубли';
            }
            header('location: profile.php');    
        }
    }else{
        $_SESSION['message'] = 'Выберите валюту';
        header('location: profile.php');    
    }
?>
