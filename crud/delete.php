<?php
include 'index.php';
$id =$_GET['id']??'';
$sql="DELETE FROM users WHERE id=$id";
$conn->query($sql);
//

