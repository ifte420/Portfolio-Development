<?php
    session_start();
    require_once 'includes/db-oop.php';
    $id = $_GET['id'];
    $what_to_do = $_GET['what_to_do'];
    $db->update("services","status='$what_to_do'","id=$id");
    mysqli_query($db_connect, $update_query);
    header('location: service.php');
?> 