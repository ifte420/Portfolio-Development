<?php
    session_start();
    if(!isset($_SESSION['log_status'])){
        header('location: login.php');
    }
    $title = "Text Setting";
    require_once 'includes/header-starlight.php';
    require_once 'includes/nav-starlight.php';
    require_once 'includes/db-oop.php';
    // $text_setting_query = "SELECT * FROM text_setting"; 
    // $text_query = mysqli_query($db_connect, $text_setting_query);
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashbroad.php">Dashbroad</a>
        <a class="breadcrumb-item" href="user_list.php">User list</a>
        <a class="breadcrumb-item" href="profile.php">Profile</a>
        <span class="breadcrumb-item active">Text Setting</span>
      </nav>

      <div class="sl-pagebody">
            <h3 class="text-center">All Text Document</h3>
    <div class="row mt-3">
        <div class="col-6 m-auto">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Text Setting</h4>
                </div>
                <div class="card-body">
                    <form action="setting_post.php" method="POST">
                    <?php
                    if(isset($_SESSION['setting_status'])){?>
                    <div class="alert alert-success">
                        <?php
                        echo $_SESSION['setting_status'];
                        unset($_SESSION['setting_status']);
                    ?>
                    </div>
                <?php
                }
                ?>
                <?php foreach($db->select('text_setting') as $text_setting):?>
                    <div class="form-group">
                        <label class="form-check-label" for="exampleCheck1"><?=$text_setting['setting_name']?></label>
                        <input type="text" class="form-control" id="exampleCheck1" value="<?=$text_setting['setting_value']?>" name="<?=$text_setting['setting_name']?>">
                    </div>
                <?php endforeach; ?>
                    <button type="submit" class="btn btn-dark">Update Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <?php
    require_once 'includes/footer-starlight.php';
?>