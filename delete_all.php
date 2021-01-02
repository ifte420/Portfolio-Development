<?php
    SESSION_start();
    require_once 'includes/db.php';

    $delete_all_user = "DELETE FROM users";
    $i = mysqli_query($db_connect,$delete_all_user);
    if($i){
        $_SESSION['status'] ="All Users Delete Successfully";
        header('location: user_list.php');
    }
    else{
        echo "NO";
    }
?>