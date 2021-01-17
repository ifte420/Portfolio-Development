<?php
    session_start();
    require_once 'includes/db-oop.php';
    $id = $_GET['id'];
    $db->delete("services", "id=$id");
    $_SESSION['service_delete'] ="One service Deleted";
    header('location: service.php');
?>