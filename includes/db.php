<?php
//Database connection start
    define("HOST_NAME", "localhost");
    define("USER_NAME", "root");
    define("PASSWORD", "");
    define("DATABASE_NAME", "php registration data");
    $db_connect = mysqli_connect(HOST_NAME, USER_NAME, PASSWORD, DATABASE_NAME);  //connection to database (php registration data)
    if(mysqli_connect_errno()){
        echo "<h1>Your Database not Connect something Wrong</h1>";
    }
//Database connection end
?>