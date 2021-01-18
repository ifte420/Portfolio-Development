<?php
    session_start();
    require_once 'includes/db.php';
    require_once 'includes/db-oop.php';
    $email_address = $_SESSION['email_address_from_login_page'];
    $encrypt =  md5($_POST['old_password']);

    if($db->select_count_where("users", "emai_address = '$email_address' AND password = '$encrypt'")== 1){
        if($_POST['new_password'] == $_POST['confirm_password']){
            $encrypt_new_password = md5($_POST['new_password']);
            $db->update("users", "password = '$encrypt_new_password'", "emai_address =  '$email_address'");
            $_SESSION['pass_up'] = "You Password Change";
            header('location: profile.php');
        }
        else { 
            $_SESSION['pass_err'] = "New Password did not match with Confirm password";
            header('location: profile.php');
        }
    }
    else {
        $_SESSION['old_err'] = "Your old Password is worng";
        header('location: profile.php');
    }
?>