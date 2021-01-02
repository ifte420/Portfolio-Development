<?php
    session_start();
    require_once 'includes/db.php';
    $emai_address = $_POST['email_name'];
    $pass = md5($_POST['password']);

    $count_query = "SELECT COUNT(*) AS total FROM users WHERE emai_address = '$emai_address' AND password = '$pass'";

    $from_db = mysqli_query($db_connect, $count_query);
    $after_assoc = mysqli_fetch_assoc($from_db);

if($after_assoc['total'] == 1){
    $_SESSION['log_status'] = "Yes";
    $_SESSION['email_address_from_login_page'] = $emai_address;
    $name_query = "SELECT full_name, profile_image, role FROM users WHERE emai_address='$emai_address'";
    $name_db = mysqli_query($db_connect, $name_query);
    $name_after_assoc = mysqli_fetch_assoc($name_db);
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
