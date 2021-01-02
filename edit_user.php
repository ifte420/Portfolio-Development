<?php
    require_once 'includes/db.php';
    require_once 'includes/header.php';
    require_once 'includes/nav.php';
    $user_id = $_GET['id'];
    $select_user =  "SELECT id,full_name, emai_address, gender FROM users WHERE id = $user_id";
    $p = mysqli_query($db_connect, $select_user);
    $assos = mysqli_fetch_assoc($p);
?>
<div class="row mt-3">
    <div class="col-lg-6 m-auto">
        <div class="card mb-3">
            <div class="card-header bg-success text-white text-center">
                <h4>Update Info</h4>
            </div>
            <div class="card-body">
                <form action="edit_user_post.php" method="POST">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="hidden" value="<?=$assos['id']?>" name="id">
                        <input type="hidden" value="<?=$assos['full_name']?>" name="old_full_name">
                        <input type="Text" class="form-control" placeholder="Enter Your Full Name" name="full_name" value="<?php echo $assos['full_name']?>">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Your Gmail" name="email_address" value="<?php echo $assos['emai_address']?>">
                    </div>
                    <div class="form-group">
                        <p>Your Gender:</p>
                        <input type="radio" id="male" name="gender" value="male" <?php
                        if($assos['gender'] == "male"){
                            echo "checked";
                        }
                        ?>>
                        <label for="male">Male</label><br>

                        <input type="radio" id="female" name="gender" value="female" <?php
                        if($assos['gender'] == "female"){
                            echo "checked";
                        }
                        ?>>
                        <label for="female">Female</label><br>

                        <input type="radio" id="other" name="gender" value="other" <?php
                        if($assos['gender'] == "other"){
                            echo "checked";
                        }
                        ?>>
                        <label for="other">Other</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    require_once 'includes/footer.php';
?>
