<?php

// ----- connect database ----

$conn = new mysqli('localhost','root','','ufc_yash');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$table = 'count_yash';
$get_it = json_decode(file_get_contents("php://input"));
// print_r($get_it);
if(isset($get_it->get)){
  $sql = "SELECT * from $table";
  $res = $conn->query($sql);


  if($res->num_rows > 0){
    $query = "SELECT * from $table WHERE id = 1";
    $resD  = $conn->query($query);

    $row = $resD->fetch_assoc();
   $output = json_encode($row);
   echo $output;
  }else{
    $row = array('count' => 1);
    $output = json_encode($row);
    echo $output;
  }
}
// ----- get count from db


// ----- add  count to db 
if(isset($_POST['count']) && $_POST['count'] != ''){
  
  $total  =(int) $_POST['count'];

$sql = "SELECT * from ". $table  ;
$res = $conn->query($sql);

$res_no = $res->num_rows;

if($res_no > 0)
{
  $sql = "UPDATE $table SET count = $total,created_at = CURRENT_TIMESTAMP WHERE id = 1 ";
  $res = $conn->query($sql);
  if($res === true){
    echo 'success';
 }
}
else
{
   $sql = "INSERT INTO $table  VALUES (null , 1 , CURRENT_TIMESTAMP)";
   $res = $conn->query($sql);
   if($res === true){
      echo 'success';
   }
}
}








?>