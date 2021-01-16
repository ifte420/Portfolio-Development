<?php
    session_start();
    require_once 'includes/db.php';
    $title = "Profile";
    require_once 'includes/header-starlight.php';
    require_once 'includes/nav-starlight.php';
    $email_address_from_login_page = $_SESSION['email_address_from_login_page'];
    $select_profile_pic_query = "SELECT profile_image FROM users WHERE emai_address='$email_address_from_login_page'";
?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashbroad.php">Dashbroad</a>
        <a class="breadcrumb-item" href="user_list.php">User list</a>
        <span class="breadcrumb-item active">Profile</span>
      </nav>
      <div class="sl-pagebody">
            <div class="row mt-3">
            <div class="col-6">
                <div class="card mb-3">
                    <div class="card-header bg-dark text-white text-center">
                        <h4>Change Your Profile Picture</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img width="100px" class="rounded-circle border border-dark" src="image/profile image/<?=mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_image']?>" alt="Not found">
                            <?php
                        if(mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_image'] != "default.png"):
                            ?>
                            <br>
                            <a href="delete_profile_img.php?picture_name=<?=mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_image']?>" class="btn btn-danger btn-sm">Delete Profile Pic</a>
                            <?php
                            endif;
                            ?>
                        </div>
                        <form action="profile_image_post.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">New Image</label>
                                    <input type="file" class="form-control" name="new_profile_image">
                                </div>
                                <button type="submit" class="btn btn-dark">Change Now</button>
                            </div>
                        </form>
                           <?php 
                            if(isset($_SESSION['pic_size'])){
                            ?>
                            <div class="alert alert-danger">
                                <?php 
                                echo $_SESSION['pic_size'];
                                unset($_SESSION['pic_size']);
                            ?>
                            </div>
                            <?php
                            }
                            ?>
                           <?php 
                            if(isset($_SESSION['pic_err'])){
                            ?>
                            <div class="alert alert-danger">
                                <?php 
                                echo $_SESSION['pic_err'];
                                unset($_SESSION['pic_err']);
                            ?>
                            </div>
                            <?php
                            }
                            ?>
                    </div>
                </div>
            </div>

            <!-- password Change part -->
            <div class="col-6">
                <div class="card mb-3">
                    <div class="card-header bg-dark text-white text-center">
                        <h4>Password Change</h4>
                    </div>
                    <div class="card-body">
                        <form action="profile_post.php" method="POST">
                        <?php 
                            if(isset($_SESSION['pass_up'])){
                            ?>
                            <div class="alert alert-success">
                                <?php 
                                echo $_SESSION['pass_up'];
                                unset($_SESSION['pass_up']);
                            ?>
                            </div>
                            <?php
                            }
                            ?>
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
                        <?php 
                            if(isset($_SESSION['old_err'])){
                            ?>
                            <div class="alert alert-danger">
                                <?php 
                                echo $_SESSION['old_err'];
                                unset($_SESSION['old_err']);
                            ?>
                            </div>
                            <?php
                            }
                            ?>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">old Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="old_password">
                                </div>
                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <input type="password" class="form-control" id="new_password" name="new_password">
                                </div>
                                <div class="form-group">
                                <label class="ckbox" class="form-check-label" for="2">
                                    <input class="mr-2" type="checkbox" id="2" onclick="showPasswordFunc()">
                                    <span>Show Password</span>
                                    <script>
                                        function showPasswordFunc() {
                                            var x = document.getElementById("new_password");
                                            if (x.type === "password") {
                                                x.type = "text";
                                            } else {
                                                x.type = "password";
                                            }
                                        }

                                    </script>
                                </label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="confirm_password">
                                </div>
                                <button type="submit" class="btn btn-dark">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


<?php
    require_once 'includes/footer-starlight.php';
?>
