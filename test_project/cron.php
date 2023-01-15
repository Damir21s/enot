<?php
    require_once 'src/connect.php';

    $file = simplexml_load_file("http://www.cbr.ru/scripts/XML_daily.asp?date_req=".date("d/m/Y"));

    class TableDeleteAutoIncr extends DB{
        public function autoIncrement($table, $count){
            mysqli_query($this->connect(), "ALTER TABLE $table AUTO_INCREMENT=$count");    
        }
    }

    $db_class = new TableDeleteAutoIncr();
    $db_class->delete('courses');
    $db_class->autoIncrement('courses', 1);

    foreach ($file AS $el){
        $valutes = array();
        $valutes['id'] = 0;
        $valutes['char_code'] = strval($el->CharCode);
        $valutes['name'] = strval($el->Name);
        $valutes['value'] = strval($el->Value); 
        $db_class->insert($valutes, 'courses');
    }  
?>