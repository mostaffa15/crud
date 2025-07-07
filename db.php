<?php
$host ="localhost";
$user="root";
$pass='';
$name="crud_api";
$conn= new mysqli($host , $user , $pass , $name );
if(!$conn){
    echo " not connected ";

}
else{
    echo "connected";
};
