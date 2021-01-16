<?php
    session_start();
        if(!isset($_SESSION['log_status'])){
        header('location: login.php');
    }
    $title = "Testimonial";
    require_once 'includes/header-starlight.php';
    require_once 'includes/nav-starlight.php';
    require_once 'includes/db.php';
    $testimonial_query = "SELECT * FROM testimonial"; 
    $testimonial_db = mysqli_query($db_connect, $testimonial_query);
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashbroad.php">Dashbroad</a>
        <a class="breadcrumb-item" href="user_list.php">User list</a>
        <a class="breadcrumb-item" href="profile.php">Profile</a>
        <a class="breadcrumb-item" href="setting.php">Text Setting</a>
        <a class="breadcrumb-item" href="skill.php">About Skill</a>
        <span class="breadcrumb-item active">Testimonial</span>
      </nav>

      <div class="sl-pagebody">
           <h3 class="text-center">Testimonial</h3>
    <div class="row mt-3">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h5>Testimonial</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                    <?php
                    if(isset($_SESSION['testi_delete'])):?>
                        <div class="alert alert-danger">
                            <?php
                        echo $_SESSION['testi_delete'];
                        unset($_SESSION['testi_delete']);
                    ?>
                        </div>
                    <?php
                    endif;
                    ?>
                        <thead>
                            <tr>
                                <th scope="col">Testimonial Image</th>
                                <th scope="col">Testimonial Says</th>
                                <th scope="col">Testimonial Name</th>
                                <th scope="col">Testimonial Title</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($testimonial_db as $testi):
                        ?>
                            <tr>
                                <td><img src="image/testimonial_image/<?=$testi['testimonial_image']?>" class="img-fluid w-100" alt="not found"></td>
                                <td><?=$testi['testimonial_say']?></td>
                                <td><?=$testi['testimonial_name']?></td>
                                <td><?=$testi['testimonial_title']?></td>
                                <td><a href="testimonial_delete.php?id=<?=$testi['id']?>" class="btn btn-outline-danger">Delete</a></td>
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
                    <h4>Testimonial add</h4>
                </div>
                <div class="card-body">
                    <form action="testimonial_post.php" method="POST" enctype="multipart/form-data">
                    <?php
                    if(isset($_SESSION['fill_err'])):?>
                        <div class="alert alert-danger">
                            <?php
                        echo $_SESSION['fill_err'];
                        unset($_SESSION['fill_err']);
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
                    <?php
                    if(isset($_SESSION['testi_success'])):?>
                        <div class="alert alert-success">
                            <?php
                        echo $_SESSION['testi_success'];
                        unset($_SESSION['testi_success']);
                    ?>
                        </div>
                        <?php
                    endif;
                    ?>
                        <div class="form-group">
                            <label>testimonial image</label>
                            <input type="file" class="form-control-file" name="testi_img">
                        </div>
                        <div class="form-group">
                            <label>testimonial says</label>
                            <input type="text" class="form-control" name="testi_say">
                        </div>
                        <div class="form-group">
                            <label>testimonial_name</label>
                            <input type="text" class="form-control" name="testi_name">
                        </div>
                        <div class="form-group">
                            <label>Testimonial_title</label>
                            <input type="text" class="form-control" name="testi_title">
                        </div>
                        <button type="submit" class="btn btn-dark">Add Testimonial</button>
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