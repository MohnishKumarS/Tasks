<?php
include 'assets/db/db.php';
if(isset($_POST['submit'])){
    // echo "success";
    $username = $_POST['username'];
    $age = $_POST["age"];
    $gender = $_POST['gender'];
    $img = $_POST['img'];
    // echo $img;

    if($username == '' ){
        echo "Please fill the form";
    }else{
        $sql = "INSERT INTO employee (username,age,gender,`image`) VALUES('$username','$age','$gender','$img')";
        $result = $conn->query($sql);
    }

}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Employee</title>
    <?php
    require "assets/link/bootstrap.html";
    ?>
</head>

<body>

    <?php
        include 'index.html';
    ?>


    <div class="container bg-light mt-5">

        <div class=" text-center p-5">
            <form action="" method="post" enctype="multipart/form-data" autocomplete='off'>
                <div class="mt-3">
                    <h3><em>Create Employee Form</em></h3>
                </div>
                <center>
                    <div class="mt-3">
                        <input type="text" name="username" placeholder="Username" class="w-25 form-control " required>
                    </div>
                    <div class="mt-3">
                        <input type="text" name="age" placeholder="Enter Your Age" class="w-25 form-control" required>
                    </div>
                </center>
                <div class="mt-3">
                    <label for="" class="form-label" >Select a gender : </label><br>
                    <input type="radio" name="gender" value="male" required>
                    <label for="" class="form-label">Male</label>
                    <input type="radio" name="gender" value="female" required>
                    <label for="">Female</label>
                    <input type="radio" name="gender" value="others" required>
                    <label for="">Others</label>
                </div>
                <div class="mt-3">
                    <input type="file" name="img" id="" required>
                </div>
                <div class="mt-3">
                    <input type="submit" name="submit" value="Submit" class="btn btn-success px-5">
                </div>
            </form>
        </div>
    </div>



</body>

</html>