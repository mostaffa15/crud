<?php
$host= "localhost";
$user= "root";
$pass="";
$dbname="crud_Api";

$conn=new mysqli($host , $user , $pass , $dbname );

if($conn->connect_error){
    echo"connection faild" .$conn->connect_error ;
}
echo"hello bata base";
