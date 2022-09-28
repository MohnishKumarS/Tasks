<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/53a10f910c.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <?php
  include 'index.html';
  
  // echo $msg;
 
  ?>

  <div class="container">
    <div class="mt-5">
      <h2 class="fw-bold text-center"><em>Employee List</em></h2>
    </div>

    <?php
    if(isset($_GET['msg'])){
      $msg = $_GET['msg'];
       echo "<div class='alert alert-success' role='alert'>
       $msg
     </div>";
    }

    ?>



    <table class="table table-hover mt-5">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Image</th>
          <th scope="col">Username</th>
          <th scope="col">Age</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php
                   include 'assets/db/db.php';

                   $sql = "SELECT * from employee";
                   $result = $conn->query($sql);
                   if($result->num_rows > 0){
                     while($row = $result->fetch_assoc()){
                      // echo $row['username'].'<br>';
                      // echo $row["id"];
                       echo " <tr>
                       <th scope='row'>$row[id]</th>
                       <td>$row[image]</td>
                       <td>$row[username]</td>
                       <td>$row[age]</td>
                       <td>$row[gender]</td>
                       <td>
                         <a href='edit.php?id=$row[id]' class='btn btn-primary' name='edit'>Edit</a>
                         <a href='delete.php?id=$row[id]' class='btn btn-danger ms-2 '>Delete</a>
                       </td>
                     </tr>";
                     }
                   }else{
                     echo "0 results";
                   }
              ?>



      </tbody>
    </table>
  </div>

</body>

</html>