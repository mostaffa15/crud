<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $age = $_POST['age'] ?? '';

    $sql = "INSERT INTO `users`(`fname`, `lname`, `age`) VALUES ('$fname', '$lname', '$age')";

    if (!$conn->query($sql)) {
        echo "Error: " . $conn->error;
    } else {
        echo "<br>create done";
        include 'read.php';
    }
}
var_dump($_POST);
?>