<?php
    session_start();
    require_once 'includes/db-oop.php';
    $id = $_GET['id'];
    // $sms_delele = "DELETE FROM contacts WHERE id=$sms_id";
    // mysqli_query($db_connect, $sms_delele);
    $db->delete("contacts","$id");
    $_SESSION['sms_delete'] ="One Message Deleted";
    header('location: service.php#contact');
?>