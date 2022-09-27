<?php
include 'assets/php/db.php';

if(isset($_POST["register-submit"])){
    // echo "heloooo";
    
    $username = $_POST["username"];
    $email  = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gen"];

    // echo $gender;
    $dup = mysqli_query($conn,"SELECT * from userdetails where username = '$username' and password = '$password' ");

    if(mysqli_num_rows($dup) > 0){
        echo "<script>alert('User already registered');</script>";

    }else{
        $sql = "INSERT INTO userdetails (username,gender,email,`password`) VALUES ('$username',' $gender','$email','$password')";   

        $result = $conn->query($sql);
        if($result){
            // echo "<script>alert('REGISTER SUCCESSFUL');</script>";
            header("location:login.php");
        }else{
            echo "failed";
        };
    
    
    }
    

   

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            <h1 class="text-center mb-2 fw-bold text-white">Register</h1>
            <div>
                <form  method="post">
                    <div class="mt-2">
                        <label for="" class="form-label">Name :</label>
                        <input type="text" class="form-control w-100" name="username" required>
                    </div>

                    <div class="mt-2">
                        <label for="" class="form-label">email :</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>

                    <div class="mt-2">
                        <label for="" class="form-label">Select gender :</label>
                        <div>
                            <input type="radio" name="gen" value="male" required>
                            <label for="" class="form-label">Male</label>
                            <input type="radio" name="gen" value="female" required>
                            <label for="" class="form-label">Female</label>
                            <input type="radio" name="gen" value="others" required>
                            <label for="" class="form-label">others</label>
                        </div>
                    </div>

                    <div class="mt-2">
                        <label for="" class="form-label">password :</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>

                    <div>
                        <button class="btn btn-success form-control rounded-pill mt-3" name="register-submit">Submit</button>
                    </div>

                    <div class='mt-3'>
                    <a href="login.php" class="text-center">Already have an account ?</a>
                    </div>

                </form>
            </div>
        </div>


    </header>



    <script src="assets/js/a.js"></script>

</body>

</html>