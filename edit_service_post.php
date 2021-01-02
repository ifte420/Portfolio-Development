<?php
    session_start();
    require_once 'includes/db.php';
    $id = $_POST['id'];
    $icon = $_POST['service_icon'];
    $title = $_POST['service_title'];
    $description = $_POST['service_description'];
    $update_query = "UPDATE services SET service_icon= '$icon', service_title='$title', service_description='$description' WHERE id=$id";
    mysqli_query($db_connect, $update_query);
    $_SESSION['succ_up'] = "Service item successfully update";
    header('location: service.php');
?>