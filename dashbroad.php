<?php
    session_start();
    if(!isset($_SESSION['log_status'])){
        echo "Your are not allow";
        header('location: login.php');
        die();
    }
    $title = "Dashboard";
    require_once 'includes/header-starlight.php';
    require_once 'includes/nav-starlight.php';
    require_once 'includes/db.php';
    $email_address_from_session = $_SESSION['email_address_from_login_page'];
    $name_select_query  = "SELECT full_name FROM users WHERE emai_address = '$email_address_from_session'";
?>




    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <!-- <a class="breadcrumb-item" href="index.html">Starlight</a> -->
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">
        <div class="card bd-0">
            <div class="card-header card-header-default bg-primary">
                Welcome, to our dashbroad
            </div><!-- card-header -->
            <div class="card-body bd bd-t-0 rounded-bottom">
                <h1>Welcome, to our dashbroad</h1>
                <h2>Your Name: <?=mysqli_fetch_assoc(mysqli_query($db_connect, $name_select_query))['full_name']?></h2>
                <h2>Your Email: <?=$_SESSION['email_address_from_login_page']?></h2>
                <h2>Your Role: <?=$_SESSION['role_from_login_page'];?></h2>
            </div><!-- card-body -->
        </div><!-- card -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


<?php
    require_once 'includes/footer-starlight.php'
?>