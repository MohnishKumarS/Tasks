<?php
session_start();
require './config/connectDB.php';

if(isset($_POST['create_emp']) ){
  
  $name = $conn->real_escape_string($_POST['name']);
  $email = $conn->real_escape_string($_POST['email']);
  $mobile = $_POST['mobile'];
  // $mobile = is_integer($mobile);
  // echo $mobile;
  if($name == '' || $email == '' || $mobile == ''){
    $res = ['status'=> 'failed','message'=> 'Please enter all fields are required'];
    echo json_encode($res);
    return false;
  }
    $sql = "INSERT INTO employees VALUES (null, ?, ?, ?,CURRENT_TIMESTAMP)";
    $res = $conn->prepare($sql);
    $res->bind_param('ssi',$name,$email,$mobile);

    if($res->execute()){
      $res = ['status'=>'success','message'=> 'Employee created successfully'];
      echo json_encode($res);
    }

  
  
}


// ---- delete emplotyee id

if(isset($_GET['deleteID']) && !empty($_GET['deleteID'])){
  
  $empId = $_GET['deleteID'];

  $sql = "DELETE FROM employees WHERE id = '$empId'";
  $res = $conn->query($sql);
  if($res === TRUE){
    $_SESSION['status'] = 'success';
    $_SESSION['message'] = 'Employee deleted successfully';

    header('Location: index.php');
  } 
}





?>