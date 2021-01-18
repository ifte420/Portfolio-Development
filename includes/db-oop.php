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
    function select3key($what_to_select,$table_name, $another_write){
        $select_query = "SELECT $what_to_select FROM $table_name $another_write";
        $from_db = mysqli_query($this->db_connect(), $select_query);
        return $from_db;
    }
    function select_assoc($what_to_select,$table_name, $another_write){
        $select_query = "SELECT $what_to_select FROM $table_name $another_write";
        $from_db = mysqli_fetch_assoc(mysqli_query($this->db_connect(), $select_query));
        return $from_db;
    }
    function select_count($table_name){
        $select_count_query = "SELECT COUNT(*) as total FROM $table_name";
        $from_db = mysqli_fetch_assoc(mysqli_query($this->db_connect(), $select_count_query));
        return $from_db['total'];
    }
    function delete($table_name, $where_delete){
        $delete_query = "DELETE FROM $table_name WHERE $where_delete";
        $form_db = mysqli_query($this->db_connect(), $delete_query);
        return $form_db;
    }
    function delete_all($table_name){
        $delete_all_query = "DELETE FROM $table_name";
        $form_db = mysqli_query($this->db_connect(), $delete_all_query);
        return $form_db;
    }
}

$db = new DB;
?>