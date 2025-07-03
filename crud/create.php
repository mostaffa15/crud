<?php 
//creat data and insert into db php 
include 'index.php';
$fname = $_POST['fname'] ?? '';
$lname=$_POST['lname']?? '';
$age =$_POST['age']??'';
$sql="INSERT INTO `users`( `fname`, `lname`, `age`) VALUES ('[$fname]','[$lname]','[$age]')";
$conn->query($sql);
echo"<br>";
echo 'done';


