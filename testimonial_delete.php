<?php
    session_start();
    require_once 'includes/db-oop.php';
    $id = $_GET['id'];
    $image_name = $_GET['testi_img'];
    unlink("image/testimonial_image/".$image_name);
    $db->delete("testimonial", "id=$id");
    $_SESSION['testi_delete'] ="One testimonial item  Deleted";
    header('location: testimonial.php');
?>