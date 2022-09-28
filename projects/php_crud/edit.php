<?php
//  if(isset($_GET['id'])){
    
//  }
include 'assets/db/db.php';
 $id =  $_GET['id'];

 $sql = "SELECT * from employee where id = $id";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();


 if(isset($_POST['update'])){
    echo "hello";
    $name = $_POST['username'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    // echo $name;
    $new = "UPDATE employee set username = '$name',age = '$age', gender = '$gender' where id = $id";
    $update = $conn->query($new);
    if($update){
        header("location:emp_list.php?msg=Data Updated successfully");
    }else{
        echo "failed";
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
                        <input type="text" name="username"  class="w-25 form-control " value="<?php echo $row['username'] ?>">
                    </div>
                    <div class="mt-3">
                        <input type="text" name="age"  class="w-25 form-control" value="<?php echo $row['age'] ?>">
                    </div>
                </center>
                <div class="mt-3">
                    <label for="" class="form-label" >Select a gender : </label><br>
                    <input type="radio" name="gender" value="male" <?php echo ($row['gender'] == 'male')?"checked":"";  ?>>
                    <label for="" class="form-label">Male</label>
                    <input type="radio" name="gender" value="female"  <?php echo ($row['gender'] == 'female')?"checked":"";  ?>>
                    <label for="">Female</label>
                    <input type="radio" name="gender" value="others"  <?php echo ($row['gender'] == 'others')?"checked":"";  ?>>
                    <label for="">Others</label>
                </div>
                <div class="mt-3">
                    <input type="file" name="img" id="" >
                </div>
                <div class="mt-3">
                    <button type="submit" name="update"  class="btn btn-success px-5">Update</button>
                    <a href="emp_list.php" name="submit"  class="btn btn-danger px-5">Cancel</a>
                </div>
            </form>
        </div>
    </div>



</body>

</html>