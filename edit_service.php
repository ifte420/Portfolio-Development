<?php
    require_once 'includes/db.php';
    require_once 'includes/header.php';
    require_once 'includes/nav.php';
    $service_id = $_GET['id'];
    $service_selete_query = "SELECT id,service_icon, service_title, service_description FROM services WHERE id=$service_id";
    $connect = mysqli_query($db_connect, $service_selete_query);
    $assoc = mysqli_fetch_assoc($connect);
?>

<div class="row mt-3">
    <div class="col-lg-6 m-auto">
        <div class="card mb-3">
            <div class="card-header bg-success text-white text-center">
                <h4>Service Info</h4>
            </div>
            <div class="card-body">
                <form action="edit_service_post.php" method="POST">
                    <div class="form-group">
                        <label>Service Icon</label>
                        <input type="hidden" name="id" value="<?=$assoc['id']?>">
                        <input type="Text" class="form-control" placeholder="Service icon" name="service_icon" value="<?=$assoc['service_icon']?>">
                        <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">Selete Icon</a>
                    </div>
                    <div class="form-group">
                        <label>Service Title</label>
                        <input type="text" class="form-control" placeholder="service title" name="service_title" value="<?=$assoc['service_title']?>">
                    </div>
                    <div class="form-group">
                        <label>Service Description</label>
                        <input type="text" class="form-control" placeholder="service description" name="service_description" value="<?=$assoc['service_description']?>">
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
