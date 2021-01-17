<?php
    session_start();
    require_once 'includes/db-oop.php';
    $id = $_GET['id'];
    $db->delete("skills", "id=$id");
    $_SESSION['skill_delete'] ="One skill Deleted";
    header('location: skill.php');
?>