<?php
    session_start();
    if(!isset($_SESSION['log_status'])){
        header('location: login.php');
    }
    $title = "Skill";
    require_once 'includes/header-starlight.php';
    require_once 'includes/nav-starlight.php';
    require_once 'includes/db-oop.php';
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashbroad.php">Dashbroad</a>
        <a class="breadcrumb-item" href="user_list.php">User list</a>
        <a class="breadcrumb-item" href="profile.php">Profile</a>
        <a class="breadcrumb-item" href="setting.php">Text Setting</a>
        <span class="breadcrumb-item active">About Skill</span>
      </nav>

      <div class="sl-pagebody">
           <h3>Skill</h3>
    <div class="row mt-3">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h5>Skill List</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                    <?php
                    if(isset($_SESSION['skill_delete'])):?>
                        <div class="alert alert-danger">
                            <?php
                        echo $_SESSION['skill_delete'];
                        unset($_SESSION['skill_delete']);
                        ?>
                        </div>
                        <?php
                    endif;
                    ?>
                        <thead>
                            <tr>
                                <th scope="col">Skill Name</th>
                                <th scope="col">Skill full name and percentage</th>
                                <th scope="col">percentage</th>
                                <?php 
                                if($_SESSION['role_from_login_page'] != "viewer"):?>
                                <th scope="col">Action</th>
                                <?php endif;?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($db->select('skills') as $skill):
                        ?>
                            <tr>
                                <td><?=$skill['skill_name']?></td>
                                <td><?=$skill['skill_full']?></td>
                                <td><?=$skill['percentage']?></td>
                                <?php 
                                if($_SESSION['role_from_login_page'] != "viewer"):?>
                                <td><a href="skill_delete.php?id=<?=$skill['id']?>" class="btn btn-outline-danger">Delete</a></td>
                                <?php endif;?>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php 
        if($_SESSION['role_from_login_page'] == "viewer"):
        else:?>
        <div class="col-4">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Add Skill</h4>
                </div>
                <div class="card-body">
                    <form action="skill_post.php" method="POST">
                    <?php
                    if(isset($_SESSION['skill_succ'])):?>
                        <div class="alert alert-success">
                            <?php
                        echo $_SESSION['skill_succ'];
                        unset($_SESSION['skill_succ']);
                    ?>
                        </div>
                        <?php
                    endif;
                    ?>
                        <?php
                    if(isset($_SESSION['skill_error'])):?>
                        <div class="alert alert-danger">
                            <?php
                        echo $_SESSION['skill_error'];
                        unset($_SESSION['skill_error']);
                        ?>
                        </div>
                        <?php
                    endif;
                    ?>
                        <div class="form-group">
                            <label>skill name</label>
                            <input type="text" class="form-control" name="skill name">
                        </div>
                        <div class="form-group">
                            <label>skill full from and percentage</label>
                            <input type="text" class="form-control" name="skill full">
                        </div>
                        <div class="form-group">
                            <label>percentage</label>
                            <input type="number" class="form-control" name="percentage">
                        </div>
                        <button type="submit" class="btn btn-dark">Add</button>
                    </form>
                </div>

            </div>
        </div>
        <?php endif;?>
    </div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->

    <?php
    require_once 'includes/footer-starlight.php';
?>