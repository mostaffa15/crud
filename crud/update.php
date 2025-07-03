<?php
include 'index.php';
$id = $_POST['id']??''; //from user
$name = $_POST['name']??'';
$email = $_POST['email']??'';
$sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
$conn->query($sql);
?>
