<?php
    session_start();
    require_once 'includes/db.php';
    $id = $_GET['id'];
    $testi_delele = "DELETE FROM testimonial WHERE id=$id";
    mysqli_query($db_connect, $testi_delele);
    $_SESSION['testi_delete'] ="One testimonial item  Deleted";
    header('location: testimonial.php');
?>