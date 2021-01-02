<?php
    session_start();
    require_once 'includes/db.php';
    $email_address = $_SESSION['email_address_from_login_page'];
    $encrypt =  md5($_POST['old_password']);

    $check_query = "SELECT COUNT(*) AS total FROM users WHERE emai_address = '$email_address' AND password = '$encrypt'";

    if(mysqli_fetch_assoc(mysqli_query($db_connect,$check_query))['total'] == 1){
        if($_POST['new_password'] == $_POST['confirm_password']){
            $encrypt_new_password = md5($_POST['new_password']);
            $password_update_query = "UPDATE users SET password = '$encrypt_new_password' WHERE emai_address =  '$email_address'";
            mysqli_query($db_connect, $password_update_query);
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