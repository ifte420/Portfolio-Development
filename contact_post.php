<?php
    session_start();
    require_once 'includes/db.php';
    $gust_name = $_POST['gust_name'];
    $gust_email = $_POST['gust_email'];
    $gust_message = $_POST['gust_message'];

    if($gust_name && $gust_email && $gust_message){
    $insert_contact_query = "INSERT INTO contacts (gust_name,gust_email, gust_message) VALUES ('$gust_name', '$gust_email', '$gust_message')";
    mysqli_query($db_connect, $insert_contact_query);
    $_SESSION['contact_succ'] = "We are receive your message :)";
    header('location: index.php#contact');
    }
    else{
    $_SESSION['contact_err'] = "Please Fill up the form (¬_¬)";
    header('location: index.php#contact'); 
    }
?>