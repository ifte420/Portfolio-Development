<?php
    session_start();
    require_once 'includes/db.php';
    $sms_id = $_GET['id'];
    $sms_delele = "DELETE FROM contacts WHERE id=$sms_id";
    mysqli_query($db_connect, $sms_delele);
    $_SESSION['sms_delete'] ="One Message Deleted";
    header('location: service.php#contact');
?>