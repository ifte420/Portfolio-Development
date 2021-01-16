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
    function select_count($table_name){
        $select_count_query = "SELECT COUNT(*) as total FROM $table_name";
        $from_db = mysqli_fetch_assoc(mysqli_query($this->db_connect(), $select_count_query));
        return $from_db['total'];
    }
}

$db = new DB;


?>