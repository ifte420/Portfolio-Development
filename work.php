<?php
    session_start();
    if(!isset($_SESSION['log_status'])){
        header('location: login.php');
    }
    $title = "My Work";
    require_once 'includes/header-starlight.php';
    require_once 'includes/nav-starlight.php';
    require_once 'includes/db.php';
    $work_query = "SELECT * FROM work"; 
    $work_db = mysqli_query($db_connect, $work_query);
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashbroad.php">Dashbroad</a>
        <a class="breadcrumb-item" href="user_list.php">User list</a>
        <a class="breadcrumb-item" href="profile.php">Profile</a>
        <a class="breadcrumb-item" href="setting.php">Text Setting</a>
        <a class="breadcrumb-item" href="skill.php">About Skill</a>
        <a class="breadcrumb-item" href="testimonial.php">Testimonial</a>
        <a class="breadcrumb-item" href="brand.php">Brand</a>
        <span class="breadcrumb-item active">Work</span>
      </nav>

      <div class="sl-pagebody">
           <h3>Brand Image</h3>
    <div class="row mt-3">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h5>Work List</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">post by</th>
                                <th scope="col">work title</th>
                                <th scope="col">work details</th>
                                <th scope="col">work category</th>
                                <th scope="col">Work thumbail photo</th>
                                <th scope="col">work feature photo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($work_db as $work):
                        ?>
                        <tr>
                            <td><?=$work['post_by']?></td>
                            <td><?=$work['work_title']?></td>
                            <td><?=$work['work_details']?></td>
                            <td><?=$work['work_category']?></td>
                            <td><img class="img-fluid w-100" src="image/work_image/thumbail/<?=$work['work_thumbnail_photo']?>" alt="Not Found"></td>
                            <td><img class="img-fluid w-100" src="image/work_image/feature/<?=$work['work_feature_photo']?>" alt="Not Found"></td>
                        </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Add Work</h4>
                </div>
                <div class="card-body">
                    <form action="work_post.php" method="POST" enctype="multipart/form-data">
                        <?php
                    if(isset($_SESSION['work_img'])):?>
                        <div class="alert alert-success">
                            <?php
                        echo $_SESSION['work_img'];
                        unset($_SESSION['work_img']);
                    ?>
                        </div>
                        <?php
                    endif;
                    ?>
                        <?php
                    if(isset($_SESSION['img_err'])):?>
                        <div class="alert alert-danger">
                            <?php
                        echo $_SESSION['img_err'];
                        unset($_SESSION['img_err']);
                    ?>
                        </div>
                        <?php
                    endif;
                    ?>
                        <?php
                    if(isset($_SESSION['format_err'])):?>
                        <div class="alert alert-danger">
                            <?php
                        echo $_SESSION['format_err'];
                        unset($_SESSION['format_err']);
                    ?>
                        </div>
                        <?php
                    endif;
                    ?>
                    <div class="form-group">
                        <label>Work Title</label>
                        <input type="text" class="form-control" name="work_title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Work details</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="work_details"></textarea>
                    </div>
                    <div class="form-group">
                        <label>work category</label>
                        <input type="text" class="form-control" name="work_category">
                    </div>
                    
                    <div class="form-group">
                        <label>Work thumbnail photo</label>
                        <input type="file" class="form-control-file" name="work_thumbail_photo">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Work feature photo</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="work_feature_photo">
                    </div>
                        <button type="submit" class="btn btn-dark">Add</button>
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