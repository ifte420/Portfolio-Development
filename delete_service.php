<?php
    session_start();
    require_once 'includes/db.php';
    $id = $_GET['id'];
    $service_delele = "DELETE FROM services WHERE id=$id";
    mysqli_query($db_connect, $service_delele);
    $_SESSION['service_delete'] ="One service Deleted";
    header('location: service.php');
?>