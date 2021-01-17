<?php
    SESSION_start();
    require_once 'includes/db-oop.php';
    $old_user_name = $_POST['old_full_name'];
    $user_id = $_GET['id'];

    $db->delete("users", "id=$user_id");
    if($db->delete("users", "id=$user_id")){
        $_SESSION['status'] = "$user_id User Delete Successfully";
        header('location: user_list.php');
    }
    else{
        echo "NO";
    }
?>