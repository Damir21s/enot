<?php
    class DB {
        protected $db_name = 'test';
        protected $db_user = 'root';
        protected $db_pass = '';
        protected $db_host = 'localhost';
    
        public function connect() {
            $connect  = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            if(!$connect){
                die('Error connect db');
            }
            return $connect;
        }
        
        public function select($table, $fields, $where) {
            $sql = "SELECT $fields FROM $table WHERE $where";
            $response = mysqli_query($this->connect(), $sql);
            return $response;
        }
        
        public function delete($table) {
            $sql = "DELETE FROM $table";
            mysqli_query($this->connect(), $sql);
        }
        
        public function insert($data, $table) {
            $columns = "";
            $values = "";
            foreach ($data as $column => $value) {
                $columns .= ($columns == "") ? "" : ", ";
                $columns .= "`".$column."`";
                $values .= ($values == "") ? "" : ", ";
                $values .= "'".$value."'";
            }
        
            $sql = "insert into $table ($columns) values ($values)";
            mysqli_query($this->connect(), $sql) or die(mysqli_error($this->connect()));
        }
    }
?>
