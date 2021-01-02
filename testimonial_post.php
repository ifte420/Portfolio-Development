<?php
    session_start();
    require_once 'includes/db.php';
    $testi_img = $_FILES['testi_img'];
    $testi_say = $_POST['testi_say'];
    $testi_name = $_POST['testi_name'];
    $testi_title = $_POST['testi_title'];
    $new_name_for_photo = time() . "-" . rand(100,500);

    if($testi_img && $testi_say && $testi_name && $testi_title){
        $image_name = $_FILES['testi_img']['name'];
        $name_after_explode = explode(".", $image_name);
        $extension = end($name_after_explode);

        // //supported file.
        $accepted_extension = ['png', 'PNG', 'JPG', 'jpg', 'jpeg', 'JPEG'];
        if(!in_array($extension, $accepted_extension)){
            $_SESSION['format_err'] = "This file format is not supported!";
            header('location: testimonial.php');
            die();
        }
    // Image upload start
    $image_new_name = $new_name_for_photo . "." . $extension;
    $tmp_location = $_FILES['testi_img']['tmp_name']; 
    $new_location = "image/testimonial_image/" . $image_new_name;
    move_uploaded_file($tmp_location, $new_location);
    // Image upload end
    
    echo $insert_testimonial = "INSERT INTO testimonial (testimonial_image, testimonial_say, testimonial_name, testimonial_title) VALUES ('$image_new_name','$testi_say', '$testi_name', '$testi_title')";
    mysqli_query($db_connect, $insert_testimonial);
    $_SESSION['testi_success'] = "Testimonial successfully added";
    header('location: testimonial.php');
    }
    else{
         $_SESSION['fill_err'] = "Please Fill up all the input";
        header('location: testimonial.php');
    }


    
?>