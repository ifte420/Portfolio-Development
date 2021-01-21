<?php
    session_start();
    require_once 'includes/db-oop.php';

    $skill_name = $_POST['skill_name'];
    $skill_full = $_POST['skill_full'];
    $percentage = $_POST['percentage'];
    if($skill_name && $skill_full && $percentage){
        $db->insert("skills", "skill_name,skill_full,percentage", "'$skill_name', '$skill_full', $percentage");
        $_SESSION['skill_succ'] = "Skill added Successfully!";
        header("location: skill.php");
    }
    else{
        $_SESSION['skill_error'] = "Fill up all input Service!";
        header("location: skill.php");
    }

?>