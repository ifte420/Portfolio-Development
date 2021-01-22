<?php
require_once 'includes/db-oop.php';
$id = $_GET['id'];
$name = $_GET['image_name'];
unlink("image/brand_image/".$name);
$db->delete("brands", "id=$id");
header('location: brand.php');
?>