<?php
    session_start();
    if(!isset($_SESSION['log_status'])){
        header('location: login.php');
    }
    $title = "Brand";
    require_once 'includes/header-starlight.php';
    require_once 'includes/nav-starlight.php';
    require_once 'includes/db.php';
    $brand_query = "SELECT * FROM brands"; 
    $brand_db = mysqli_query($db_connect, $brand_query);
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
        <span class="breadcrumb-item active">Brand</span>
      </nav>

      <div class="sl-pagebody">
           <h3>Brand Image</h3>
    <div class="row mt-3">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h5>Brand List</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Brand Image</th>
                            </tr>
                        </thead>
                        <tbody class="bg-secondary">
                            <?php
                            foreach($brand_db as $brand):
                        ?>
                            <tr>
                                <td>
                                <img src="image/brand_image/<?=$brand['brand_image_name']?>" alt="Not Found">
                                </td>
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
                    <h4>Add Brand</h4>
                </div>
                <div class="card-body">
                    <form action="brand_post.php" method="POST" enctype="multipart/form-data">
                        <?php
                    if(isset($_SESSION['brand_image'])):?>
                        <div class="alert alert-success">
                            <?php
                        echo $_SESSION['brand_image'];
                        unset($_SESSION['brand_image']);
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
                            <label>Select Brand Image</label>
                            <input type="file" class="form-control" name="brand_image">
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