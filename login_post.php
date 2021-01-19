<?php
    session_start();
    require_once 'includes/db.php';
    require_once 'includes/db-oop.php';
    $emai_address = $_POST['email_name'];
    $pass = md5($_POST['password']);

if($db->select_count_where("users", "emai_address = '$emai_address' AND password = '$pass'") == 1){
    $_SESSION['log_status'] = "Yes";
    $_SESSION['email_address_from_login_page'] = $emai_address;
    $name_after_assoc = $db->select_assoc("full_name, profile_image, role","users", "WHERE emai_address='$emai_address'");
    $_SESSION['full_name_from_login_page'] = $name_after_assoc['full_name'];
    $_SESSION['profile_image_from_login_page'] = $name_after_assoc['profile_image'];
    $_SESSION['role_from_login_page'] = $name_after_assoc['role'];
    header('location: dashbroad.php');
}
else {
    $_SESSION['dublicate_gmai_err'] = "Your email & password worng! Plz try again";
    header('location: login.php');
}
?>
