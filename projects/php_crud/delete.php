<?php
 include 'assets/db/db.php';
$id = $_GET['id'];

// echo "$id";
$sql = "DELETE from employee where id = $id";
$delete = $conn->query($sql);

if($delete){
    header("location:emp_list.php");
}


?>