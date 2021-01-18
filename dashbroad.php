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
    require_once 'includes/db-oop.php';
    $email_address_from_session = $_SESSION['email_address_from_login_page'];
    $name_select_oop_query = $db->select_assoc("full_name","users","WHERE emai_address = 'ifte@gmail.com'");
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
                <h2>Your Name: <?=$name_select_oop_query['full_name']?></h2>
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