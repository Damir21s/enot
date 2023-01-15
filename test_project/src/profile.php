<?php
    session_start();

    if (!$_SESSION['user']) {
        header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Конвертор валют</title>
    <link rel="stylesheet" href="../style.css">
    <script src = "http://code.jquery.com/jquery-latest.js"></script>
</head>

<body>
    <form action="convertor.php" method="post">
        <div style="display: flex;">
            <select id="current" name="char_code" style="margin-right: 10px;" oninput="test()">
                <?php
                require_once 'connect.php';

                $db_class = new DB();
                $response = $db_class->select('courses', '`id`,`char_code`', true);

                while ($row = mysqli_fetch_assoc($response)) {
                ?>
                    <option value="<?= $row['char_code'] ?>"><?= $row['char_code'] ?></option>
                <? } ?>
            </select>
            <label id="current_value"></label>
        </div>

        <input type="number" name="current_value" step="0.01" min="0" placeholder="0,00" 
            value=<?php echo isset($_SESSION['current_value']) ?  $_SESSION['current_value'] :  null; unset($_SESSION['current_value']) ?>>
        <label>Рубли</label>
        <input type="text" name="rub_value" step="0.01" min="0" placeholder="0,00" 
            value=<?php echo isset($_SESSION['rub_value']) ?  $_SESSION['rub_value'] :  null; unset($_SESSION['rub_value']) ?>>
        <button type="submit">Сконвертировать</button>

        <?php
            if (isset($_SESSION['message'])) {
                echo '<p> ' . $_SESSION['message'] . ' </p>';
                unset($_SESSION['message']);
            }
        ?>
        <a href="logout.php" style="color: #000000;">Выход</a>
    </form>
</body>

<script>
    let select = document.getElementById('current');
    document.addEventListener('input', test());
    function test(){
        $.ajax({
            type: "POST",
            url: 'getCurrentValute.php' ,
            data: {"curr_value": select.value},
            success: function(a){
                console.log(a);
                if(a) {
                    document.getElementById('current_value').innerHTML = 'Текущий курс: ' + a;
                }else{
                    document.getElementById('current_value').innerHTML = '';
                }
            }
        });    
    }
</script>