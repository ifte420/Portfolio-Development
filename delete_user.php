<?php
    SESSION_start();
    require_once 'includes/db.php';
    $old_user_name = $_POST['old_full_name'];
    $user_id = $_GET['id'];

    $delete_user = "DELETE FROM users WHERE id= $user_id";
    $i = mysqli_query($db_connect,$delete_user);
    if($i){
        $_SESSION['status'] = "$user_id User Delete Successfully";
        header('location: user_list.php');
    }
    else{
        echo "NO";
    }
?>