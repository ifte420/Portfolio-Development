<?php
    require_once 'includes/db-oop.php';
    $picture_name = $_GET['picture_name'];
    unlink("image/profile image/" . $picture_name);

    $db->update("users", "profile_image='default.png'", "profile_image='$picture_name'");

    header('location: profile.php');
?>