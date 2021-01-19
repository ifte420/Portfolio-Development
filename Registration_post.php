<?php
    session_start();
    require_once 'includes/db.php';
    require_once 'includes/db-oop.php';

    $user_name = $_POST['full_name'];
    $emai_address = $_POST['email_name'];
    $pass = $_POST['password'];
    $cnfm_pass = $_POST['confirm_password'];
    $gender = $_POST['gender'];

    if($pass == $cnfm_pass){
        if($db->select_count_where("users", "emai_address='$emai_address'") == 0){
            $encrypt_password =  md5($pass);
            // $insert_query = "INSERT INTO users (full_name,emai_address, password,gender) VALUES ('$user_name', '$emai_address', '$encrypt_password', '$gender')";
            // mysqli_query($db_connect, $insert_query);
            $db->insert("users", "full_name,emai_address, password,gender", "'$user_name', '$emai_address', '$encrypt_password', '$gender'");
            $_SESSION['registration_log_in'] = "Please Log in";
            header("location: login.php");
        }
        else {
            $_SESSION['dublicate_gmai_err'] = "this email is already been used!";
            header('location: registration.php');
        }
    }
    
    else{
        $_SESSION['pass_err'] = "your password & confirm Password not same plz try again!";
        header('location: registration.php');
    }
?>