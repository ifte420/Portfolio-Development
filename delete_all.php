<?php
    SESSION_start();
    require_once 'includes/db-oop.php';
    $db->delete_all("users");
    $_SESSION['status'] ="All Users Delete Successfully";
    header('location: user_list.php');
?>