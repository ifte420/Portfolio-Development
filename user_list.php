<?php
    session_start();
    $title = "All Users";
    require_once 'includes/header-starlight.php';
    require_once 'includes/nav-starlight.php';
    require_once 'includes/db-oop.php';
    // $select_query = "SELECT id,full_name,emai_address,gender FROM users";
    // $data_from_db = mysqli_query($db_connect,$select_query);
    // $after_assoc = mysqli_fetch_assoc($data_from_db);
    // print_r($after_assoc);
?>


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashbroad.php">Dashbroad</a>
        <span class="breadcrumb-item active">User List</span>
      </nav>

      <div class="sl-pagebody">
        <div class="row mt-3">
            <div class="col-lg-10 m-auto">
                <div class="card mb-3">
                    <div class="card-header bg-secondary text-white text-center">
                        <h4>User Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success text-center">
                            Our Total Useres: <?=$db->select('users')->num_rows?></div>
                        <div class="text-center mb-3">
                            <a href="delete_all.php" class="btn btn-danger btn-lg">Delete All</a>
                        </div>
                        <?php 
                        if(isset($_SESSION['status'])){
                            ?>
                        <div class="alert alert-danger text-center">
                            <?php
                                echo $_SESSION['status'];
                                unset($_SESSION['status']);
                                ?>
                        </div>
                        <?php
                        }
                    ?>
                        <?php 
                        if(isset($_SESSION['success_sms'])){
                            ?>
                        <div class="alert alert-success text-center">
                            <?php
                                    echo $_SESSION['success_sms'];
                                    unset($_SESSION['success_sms']);
                                ?>
                        </div>
                        <?php
                        }
                    ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Serial Number</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $serial_no = 1;
                            foreach($db->select('users') as $user_info):
                            ?>
                            <tr>
                                <td><?=$serial_no++?></td>
                                <td> <?=$user_info[('id')];?> </td>
                                <td> <?=ucwords($user_info[('full_name')]); ?> </td>
                                <td> <?=$user_info[('emai_address')]; ?> </td>
                                <td> <?=ucfirst($user_info[('gender')]);?> </td>
                                <td>
                                    <a href="edit_user.php?id=<?=$user_info['id'];?>" class="btn btn-outline-info btn-sm">Edit</a>

                                    <a href="delete_user.php?id= <?=$user_info['id'];?>" class="btn btn-outline-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php
                            endforeach;
                            ?>
                                <?php if($db->select('users')->num_rows == 0){?>
                                <tr class="bg-danger">
                                    <td colspan="6" class="text-center text-white"> NO Data Available</td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
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
