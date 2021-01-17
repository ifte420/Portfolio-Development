<?php
    session_start();
    if(!isset($_SESSION['log_status'])){
        header('location: login.php');
    }
    require_once 'includes/db-oop.php';
    $title = "Service,Fact,Contact";
    require_once 'includes/header-starlight.php';
    require_once 'includes/nav-starlight.php';
    $email_address_from_login_page = $_SESSION['email_address_from_login_page'];
    // $all_services_query = "SELECT * FROM services"; 
    // $all_services_form_db = mysqli_query($db_connect, $all_services_query);
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashbroad.php">Dashbroad</a>
        <a class="breadcrumb-item" href="user_list.php">User list</a>
        <a class="breadcrumb-item" href="profile.php">Profile</a>
        <a class="breadcrumb-item" href="setting.php">Text setting</a>
        <span class="breadcrumb-item active">Service, Fact, Contact</span>
      </nav>

      <div class="sl-pagebody">
            <h3 class="text-center">Service Part</h3>
    <div class="row mt-3">
        <div class="col-8">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Service Item</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <?php
                        if(isset($_SESSION['succ_up'])):?>
                        <div class="alert alert-success">
                            <?php
                            echo $_SESSION['succ_up'];
                            unset($_SESSION['succ_up']);
                        ?>
                        </div>
                        <?php
                        endif;
                        ?>
                        <?php
                        if(isset($_SESSION['service_delete'])):?>
                        <div class="alert alert-danger">
                            <?php
                            echo $_SESSION['service_delete'];
                            unset($_SESSION['service_delete']);
                        ?>
                        </div>
                        <?php
                        endif;
                        ?>
                        <thead>
                            <tr>
                                <th scope="col">Icon</th>
                                <th scope="col">title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($db->select('services') as $service):
                        ?>
                            <tr>
                                <td>
                                    <i class="<?=$service['service_icon']?>"></i>
                                </td>
                                <td><?=$service['service_title']?></td>
                                <td><?=$service['service_description']?></td>
                                <td>
                                    <?php
                                    if($service['status'] == 'active'):?>
                                    <a href="change_service_status.php?id=<?=$service['id']?>&what_to_do=deactive" class="btn btn-sm btn-danger">Mark As Deactive</a>
                                    <?php else:?>

                                    <a href="change_service_status.php?id=<?=$service['id']?>&what_to_do=active" class="btn btn-sm btn-success">Mark as Active</a>
                                    <?php endif;?>
                                </td>
                                <td>
                                    <a href="edit_service.php?id=<?=$service['id']?>" class="btn btn-sm btn btn-outline-primary mb-3">Edit</a>
                                    <a href="delete_service.php?id=<?=$service['id']?>" class="btn btn-sm btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add service part -->
        <div class="col-4">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Add Service</h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_SESSION['service_succ'])){?>
                    <div class="alert alert-success">
                        <?php
                        echo $_SESSION['service_succ'];
                        unset($_SESSION['service_succ']);
                    ?>
                    </div>
                    <?php
                    }
                    ?>
                    <?php
                    if(isset($_SESSION['service_error'])){?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['service_error'];
                        unset($_SESSION['service_error']);
                    ?>
                    </div>
                    <?php
                    }
                    ?>
                    <form action="service_post.php" method="POST">
                        <div class="form-group">
                            <label>service icon</label>
                            <input type="text" class="form-control" name="service_icon">
                            <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">Select A Icon</a>
                        </div>
                        <div class="form-group">
                            <label>service title</label>
                            <input type="text" class="form-control" name="service_title">
                        </div>
                        <div class="form-group">
                            <label>service description</label>
                            <textarea class="form-control" name="service_description" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- fact part -->
    <h3 class="text-center">fact Part</h3>
    <?php
        // $all_fact_query = "SELECT * FROM fact"; 
        // $all_fact_form_db = mysqli_query($db_connect, $all_fact_query);
    ?>
    <div class="row mt-3">
        <div class="col-6">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h4>fact Item</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Icon</th>
                                <th scope="col">title</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($db->select('fact') as $fact):
                            ?>
                            <tr>
                                <td>
                                    <i class="<?=$fact['fact_icon']?>"></i>
                                </td>
                                <td><?=$fact['fact_title']?></td>
                                <td><?=$fact['fact_description']?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Fact add part -->
        <div class="col-6">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white text-center">
                    <h4>Add fact</h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_SESSION['fact_succ'])){?>
                    <div class="alert alert-success">
                        <?php
                        echo $_SESSION['fact_succ'];
                        unset($_SESSION['fact_succ']);
                    ?>
                    </div>
                    <?php
                    }
                    ?>
                    <?php
                    if(isset($_SESSION['fact_error'])){?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['fact_error'];
                        unset($_SESSION['fact_error']);
                    ?>
                    </div>
                    <?php
                    }
                    ?>
                    <form action="service_post.php" method="POST">
                        <div class="form-group">
                            <label>fact icon</label>
                            <input type="text" class="form-control" name="fact_icon">
                            <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">Select A Icon</a>
                        </div>
                        <div class="form-group">
                            <label>fact number</label>
                            <input type="number" class="form-control" name="fact_title">
                        </div>
                        <div class="form-group">
                            <label>fact description</label>
                            <input type="text" class="form-control" name="fact_description">
                        </div>
                        <button type="submit" class="btn btn-dark">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!-- Contact part -->
        <?php
        // $gust_contact = "SELECT * FROM contacts"; 
        // $contact_query = mysqli_query($db_connect, $gust_contact);
        ?>
        <div id="contact" class="row mt-3">
            <div class="col-12 m-auto">
                <h3 class=" text-center">Contact Message</h3>
                <div class="card mb-3">
                    <div class="card-header bg-dark text-white text-center">
                        <h5>Contact Message</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                        <?php
                        if(isset($_SESSION['sms_delete'])){?>
                            <div class="alert alert-danger">
                                <?php
                            echo $_SESSION['sms_delete'];
                            unset($_SESSION['sms_delete']);
                        ?>
                            </div>
                        <?php
                        }
                        ?>
                            <thead>
                                <tr>
                                    <th scope="col">Gust Name</th>
                                    <th scope="col">Gust Email</th>
                                    <th scope="col">Gust Message</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach($db->select('contacts') as $contact):
                            ?>
                                <tr>
                                    <td><?=$contact['gust_name']?></td>
                                    <td><?=$contact['gust_email']?></td>
                                    <td><?=$contact['gust_message']?></td>
                                    <td>
                                        <a href="contact_delete.php?id=<?=$contact['id']?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->

    
    <?php
    require_once 'includes/footer-starlight.php';
?>
