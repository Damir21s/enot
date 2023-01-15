<?php

    session_start();
    require_once 'connect.php';

    $char_code = $_POST['curr_value'];
    $_SESSION['char_code'] = $char_code;

    if (!empty($char_code)) {
        $db_class = new DB();
        $response = $db_class->select('courses','`value`',"`char_code` = '$char_code'");

        if(mysqli_num_rows($response) > 0){
            $value = mysqli_fetch_assoc($response);
            $curr_course = round(floatval(str_replace(',', '.', $value['value'])), 2);
            $_SESSION['curr_course'] = $curr_course;
            echo $char_code." - ".$curr_course;
            exit;   
        }
    }
?>