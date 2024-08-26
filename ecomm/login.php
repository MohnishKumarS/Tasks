<?php
require 'assets/php/db.php';
session_start();


if(isset($_POST["login-submit"])){
    // echo "hii";

    $username = $_POST["username"];
    $password = $_POST["password"];
    $_SESSION["name"] = $username;
    
    // echo $password;

    $sql = "SELECT username,password,admin FROM userdetails WHERE username = '$username'  AND password = '$password'"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
   

    if($result -> num_rows > 0){
       $admin =  $row["admin"];
        // header('location:index.html');
        if($admin == 0){
            header("location:index.php");
        }else{
            header("location:admin/index.html");
        }
        
    }else{
        echo "<script>alert('invalid user detail');</script>";
    }



    }


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/53a10f910c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style2.css">
    <script src="assets/js/jquery.js"></script>
    
</head>

<body>

    <header>
        <div class="login">
            <h1 class="text-center mb-2 fw-bold text-white">Login</h1>
            <div>
                <form  method="post" name="login-form" >
                    <div class="mt-2">
                        <label for="" class="form-label">Name :</label>
                        <input type="text" class="form-control w-100" name="username">
                    </div>


                    <div class="mt-2">
                        <label for="" class="form-label">password :</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div>
                        <button class="btn btn-success form-control rounded-pill mt-3  fw-bold" type="submit" name="login-submit" >Signin</button>
                       
                    </div>

                    <div class="mt-2">
                        <a href="register.php" class="">Create a new account ?</a>
                    </div>

                </form>
            </div>
        </div>


    </header>



<script src="assets/js/a.js"></script>

</body>

</html>