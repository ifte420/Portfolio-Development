<?php
    session_start();
    require_once 'includes/db.php';
    $new_name_for_photo = time() . "-" . rand(100,9000);

    $work_title = $_POST['work_title'];
    $work_category = $_POST['work_category'];
    $work_details = $_POST['work_details'];
    $post_by = $_SESSION['email_address_from_login_page'];

    // Thumbail photo
    // Img info
    $thumbail_image_name = $_FILES['work_thumbail_photo']['name'];
    if(!$_FILES['work_thumbail_photo']['name']){
        $_SESSION['img_err'] = "Please select a tumbail picture";
        header('location: work.php');
        die();
    }
    $name_after_explode = explode(".", $thumbail_image_name);
    $extension = end($name_after_explode);

    //supported file.
    $accepted_extension = ['png', 'PNG', 'JPG', 'jpg', 'jpeg', 'JPEG'];
    if(!in_array($extension, $accepted_extension)){
        $_SESSION['format_err'] = "This file format is not supported!";
        header('location: work.php');
        die();
    }
    // Image upload start
    $thumbnail_new_name = $new_name_for_photo . "." . $extension;
    $tmp_location = $_FILES['work_thumbail_photo']['tmp_name']; 
    $new_location = "image/work_image/thumbail/" . $thumbnail_new_name;
    move_uploaded_file($tmp_location, $new_location);



// feature php
    // Img info
    $feature_image_name = $_FILES['work_feature_photo']['name'];
    if(!$_FILES['work_feature_photo']['name']){
        $_SESSION['img_err'] = "Please select a feature picture";
        header('location: work.php');
        die();
    }
    $name_after_explode = explode(".", $feature_image_name);
    $extension = end($name_after_explode);

    //supported file.
    $accepted_extension = ['png', 'PNG', 'JPG', 'jpg', 'jpeg', 'JPEG'];
    if(!in_array($extension, $accepted_extension)){
        $_SESSION['format_err'] = "This file format is not supported!";
        header('location: work.php');
        die();
    }
    // Image upload start
    $feature_new_name = $new_name_for_photo . "_" . "." . $extension;
    $tmp_location = $_FILES['work_feature_photo']['tmp_name']; 
    $new_location = "image/work_image/feature/" . $feature_new_name;
    move_uploaded_file($tmp_location, $new_location);

    $insert_query = "INSERT INTO work (post_by, work_title, work_category, work_details, work_thumbnail_photo, work_feature_photo) VALUES ('$post_by', '$work_title','$work_category' ,'$work_details', '$thumbnail_new_name', '$feature_new_name')";
    mysqli_query($db_connect, $insert_query);
    $_SESSION['work_img'] = "Work successfully added";
    header('location: work.php');
?>