<?php
    session_start();
    require_once 'includes/db.php';

    $id = $_POST['id'];
    $user_name = $_POST['full_name'];
    $old_user_name = $_POST['old_full_name'];
    $emai_address = $_POST['email_address'];
    $gender = $_POST['gender'];

    $update_query = "UPDATE users SET full_name= '$user_name', emai_address= '$emai_address', gender = '$gender' WHERE id = $id";

    mysqli_query($db_connect, $update_query);
    $_SESSION['success_sms'] = "$old_user_name edited successfully to $user_name";
    header("location: user_list.php");
?>