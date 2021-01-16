<?php
class DB {
    function db_connect(){
        return $db_connect = mysqli_connect('localhost', 'root', '', 'php registration data');
    }
    function select($table_name){
        $select_query = "SELECT * FROM $table_name";
        $from_db = mysqli_query($this->db_connect(), $select_query);
        return $from_db;
    }
}

$db = new DB;


?>