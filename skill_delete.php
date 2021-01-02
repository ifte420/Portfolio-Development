<?php
    session_start();
    require_once 'includes/db.php';
    $id = $_GET['id'];
    $skill_delele = "DELETE FROM skills WHERE id=$id";
    mysqli_query($db_connect, $skill_delele);
    $_SESSION['skill_delete'] ="One skill Deleted";
    header('location: skill.php');
?>