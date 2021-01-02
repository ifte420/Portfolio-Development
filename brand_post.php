<?php
    session_start();
    require_once 'includes/db.php';
    $new_name_for_photo = time() . "-" . rand(100,900);

    $image_name = $_FILES['brand_image']['name'];
    if(!$_FILES['brand_image']['name']){
        $_SESSION['img_err'] = "Please select a picture";
        header('location: brand.php');
        die();
    }
    $name_after_explode = explode(".", $image_name);
    $extension = end($name_after_explode);

    //supported file.
    $accepted_extension = ['png', 'PNG', 'JPG', 'jpg', 'jpeg', 'JPEG'];
    if(!in_array($extension, $accepted_extension)){
        $_SESSION['format_err'] = "This file format is not supported!";
        header('location: brand.php');
        die();
    }
    // Image upload start
    $image_new_name = $new_name_for_photo . "." . $extension;
    $tmp_location = $_FILES['brand_image']['tmp_name']; 
    $new_location = "image/brand_image/" . $image_new_name;
    move_uploaded_file($tmp_location, $new_location);
    // Image upload end
    $insert_brand_image = "INSERT INTO brands (brand_image_name) VALUES ('$image_new_name')";
    mysqli_query($db_connect, $insert_brand_image);
    $_SESSION['brand_image'] = "Brand image successfully added";
    header('location: brand.php');
?>