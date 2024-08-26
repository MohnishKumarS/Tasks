<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "ewebsite";

$conn = new mysqli($servername,$username,$password,$db_name);

if($conn){
    // echo "db connected successfully";
}

?>