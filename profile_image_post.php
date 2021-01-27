<?php
    session_start();
    require_once 'includes/db-oop.php';
    $image_name = $_FILES['new_profile_image']['name'];
    if(!$_FILES['new_profile_image']['name']){
        $_SESSION['pic_err'] = "Please Select a Picture";
        header('location: profile.php');
        die();
    }
    $name_after_explode = explode(".", $image_name);
    $extension = end($name_after_explode);
    $accepted_extension = ['png', 'PNG', 'JPG', 'jpg', 'jpeg', 'JPEG'];
    if(!in_array($extension, $accepted_extension)){
        $_SESSION['pic_err'] = "This file format is not supported!";
        header('location: profile.php');
        die();
    }
    // (1000 >= 1000);
    if($_FILES['new_profile_image']['size'] > 500000){
        $_SESSION['pic_size'] = " Your file size Absolutely 500KB less than.";
        header('location: profile.php');
        die();
    }
    // Id number ber korlam
    $email_address_from_login_page = $_SESSION['email_address_from_login_page'];
    $get_id_query = $db->select_assoc("id, profile_image", "users", "WHERE emai_address='$email_address_from_login_page'");
    $user_id = $get_id_query['id'];
    $db_profile_image_name = $get_id_query['profile_image'];

    if($db_profile_image_name != "default.png"){
        unlink("image/profile image/" . $db_profile_image_name);
    }
    // Image upload start
    $image_new_name = $user_id . "." . $extension;
    $tmp_location = $_FILES['new_profile_image']['tmp_name']; 
    $new_location = "image/profile image/" . $image_new_name;
    move_uploaded_file($tmp_location, $new_location);
    // Image upload end

    //database update start
    $db->update("users", "profile_image='$image_new_name'", "emai_address='$email_address_from_login_page'");
    $_SESSION['service_delete'] = "Rrand Image added successfully";
    header('location: profile.php');
    //database update end
?>