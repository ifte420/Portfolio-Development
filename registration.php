<?php
    session_start();
    if(isset($_SESSION['log_status'])){
        header('location: dashbroad.php');
    }
    $title = "Registration Page";
    require_once 'includes/header-starlight.php';
?>


    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Kufa <span class="tx-info tx-normal">admin</span></div>
        <div class="tx-center mg-b-60">Registration Page</div>
    <form action="Registration_post.php" method="post">
            <?php 
        if(isset($_SESSION['pass_err'])){
        ?>
        <div class="alert alert-danger">
            <?php 
            echo $_SESSION['pass_err'];
            unset($_SESSION['pass_err']);
        ?>
        </div>
        <?php
        }
        ?>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Name" name="full name">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Enter Your Email" name="email_name">
          <?php if(isset($_SESSION['dublicate_gmai_err'])){
            ?>
        <small class="text-danger">
            <?php
                echo $_SESSION['dublicate_gmai_err'];
                unset($_SESSION['dublicate_gmai_err']);
                ?>
        </small>
        <?php
        }?>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter Your password" name="password">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter Your Confirm Password" name="confirm_password">
        </div><!-- form-group -->
        <div class="form-group">
          <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Gender</label>
          <div class="row row-xs">
            <div class="col-lg-4">
                <label class="rdiobox">
                    <input type="radio" name="gender" value="male">
                    <span>Male</span>
                </label>
            </div>
            <div class="col-lg-4">
                <label class="rdiobox">
                    <input type="radio" name="gender" value="female">
                    <span>Female</span>
                </label>
            </div>
            <div class="col-lg-4">
                <label class="rdiobox">
                    <input type="radio" name="gender" value="other">
                    <span>Other</span>
                </label>
            </div>
          </div><!-- row -->
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>
    </form>
        <div class="mg-t-40 tx-center">Already have an account? <a href="login.php" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
















    <?php
    require_once 'includes/footer-starlight.php';
?>