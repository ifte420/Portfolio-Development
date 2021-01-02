<?php
    session_start();
    require_once 'includes/db.php';

    $skill_name = $_POST['skill_name'];
    $skill_full = $_POST['skill_full'];
    $percentage = $_POST['percentage'];
    if($skill_name && $skill_full && $percentage){
        $insert_skill_query = "INSERT INTO skills (skill_name,skill_full,percentage) VALUES ('$skill_name', '$skill_full', $percentage)";
        mysqli_query($db_connect, $insert_skill_query);
        $_SESSION['skill_succ'] = "Skill added Successfully!";
        header("location: skill.php");
    }
    else{
        $_SESSION['skill_error'] = "Fill up all input Service!";
        header("location: skill.php");
    }

?>