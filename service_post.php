<?php
    session_start();
    require_once 'includes/db.php';

    $service_icon = $_POST['service_icon'];
    $service_title = $_POST['service_title'];
    $service_description = $_POST['service_description'];

    if($service_icon && $service_title && $service_description){
        $insert_service_query = "INSERT INTO services (service_icon,service_title, service_description) VALUES ('$service_icon', '$service_title', '$service_description')";
        mysqli_query($db_connect, $insert_service_query);
        $_SESSION['service_succ'] = "Service added Successfully!";
        header("location: service.php");
    }
    else{
        $_SESSION['service_error'] = "Fill up all input Service!";
        header("location: service.php");
    }

    // Fact part
    $fact_icon = $_POST['fact_icon'];
    $fact_title = $_POST['fact_title'];
    $fact_description = $_POST['fact_description'];

    if($fact_icon && $fact_title && $fact_description){
        $insert_fact_query = "INSERT INTO fact (fact_icon,fact_title,fact_description) VALUES ('$fact_icon', '$fact_title', '$fact_description')";
        mysqli_query($db_connect, $insert_fact_query);
        $_SESSION['fact_succ'] = "Fact added Successfully!";
    header("location: service.php");
    }
    else{
        $_SESSION['fact_error'] = "Fill up all input fact!";
        header("location: service.php");
    }

?>