<?php
    session_start();
    if(isset($_SESSION['log_status'])){
        header('location: dashbroad.php');
    }
    $title = "Log In Page";
    require_once 'includes/header-starlight.php';
?>


    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Kufa <span class="tx-info tx-normal">admin</span></div>
        <div class="tx-center mg-b-60">Professional portfolio Template Design</div>
        <?php 
        if(isset($_SESSION['registration_log_in'])){
        ?>
        <div class="alert alert-primary">
            <?php 
            echo $_SESSION['registration_log_in'];
            unset($_SESSION['registration_log_in']);
        ?>
        </div>
        <?php
        }
        ?>
        <form action="login_post.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="email_name" placeholder="Enter your Email">
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
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            <!-- <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a> -->
            </div><!-- form-group -->
            <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>

        <div class="mg-t-60 tx-center">Not yet a member? <a href="registration.php" class="tx-info">Sign Up</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

<?php
    require_once 'includes/footer-starlight.php';
?>
