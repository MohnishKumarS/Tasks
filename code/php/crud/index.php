<?php
session_start();
require './config/connectDB.php';
// print_r($_SESSION)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Employee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

  <div class="wrapper">
    <div class="container">
      <div class="card mt-5 shadow">
        <div class="card-head p-4">
          <h3 class='float-start'>Employee</h3>
          <button class='float-end btn btn-success' data-bs-toggle="modal" data-bs-target="#createEmployee">
            <i class="bi bi-patch-plus"></i> Add Employee
          </button>
        </div>
        <div class="card-body">
          <!-- ---------- SESSION MESSAGE ------- -->
          <?php
          if(isset($_SESSION['status'])){ ?>
            <div class="alert alert-<?= $_SESSION['status']?> alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> <?=$_SESSION['message'] ?>.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <?php
         unset($_SESSION['status']);  
         }
          ?>
          <!-- --------- SUCCESS MESSAGE ---------- -->
          <div class="alert alert-success d-none">

          </div>

          <!-- ----------- DISPLAY RECORD -------- -->
          <div id="emp-table">
            <table class="table table-striped table-bordered text-center ">
              <thead>
                <tr >
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>mobile</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                    $query = "SELECT * FROM employees";
                    $res = $conn->query($query);

                    if($res->num_rows > 0){
                      $i = 1;
                      while($row = $res->fetch_assoc()){ ?>
                        <!-- // echo "<tr>";
                        // echo "<td>".$row['id']."</td>";
                        // echo "<td>".$row['name']."</td>";
                        // echo "<td>".$row['email']."</td>";
                        // echo "<td>".$row['mobile']."</td>";
                        // echo "<td><a href='editEmployee.php?id=".$row['id']."' class='btn btn-primary'>Edit</a> | <a href='deleteEmployee.php?id=".$row['id']."' class='btn btn-danger'>Delete</a></td>";
                        // echo "</tr>"; -->
                        <tr class="align-middle">
                          <th><?=$i++ ?></th>
                          <td><?=$row['name'] ?></td>
                          <td><?=$row['email'] ?></td>
                          <td><?=$row['mobile'] ?></td>
                          <td>
                            <a href="editEmployee.php?id=<?=$row['id'] ?>" class="btn btn-primary mx-2 btn-sm">Edit</a> |
                            <a href="code.php?deleteID=<?=$row['id'] ?>" class="btn btn-danger mx-2 btn-sm">Delete</a>
                          </td>
                        </tr>
                   <?php   }
                    }else { ?>
                        <tr>
                          <th colspan="5">
                          <div class="text-center py-5">
                          <img src="./assets/image/empty-data.webp" alt="empty-data" class="img-fluid">
                          <h2 class="text-danger">NO DATA FOUND</h2>
                        </div>
                          </th>
                        </tr>
                  <?php  }
                  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="createEmployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Create New</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger d-none">

          </div>
          <form action="" method="post" id="create-employee">
            <div class='mb-3'>
              <label for="" class='form-label'>Employee Name :</label>
              <input type="text" class='form-control' name='name' onkeyup="return this.value=this.value.replace(/[^a-z\s+]/gi,'')" required>
            </div>
            <div class='mb-3'>
              <label for="" class='form-label'> Email :</label>
              <input type="email" class='form-control' name='email'>
            </div>
            <div class='mb-3'>
              <label for="" class='form-label'> mobile :</label>
              <input type="text" class='form-control' name='mobile' maxlength='10' onkeyup="return this.value = this.value.replace(/[^0-9]/g,'')" pattern="[0-9]{10}" required title="Please enter 10digit mobile no">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>



  <script>
    $(document).ready(function() {
      $('#create-employee').on('submit', function(e) {
        e.preventDefault();
        console.log('true');
        var formData = new FormData(this);
        formData.append('create_emp', true);
        //     for (const [key, value] of formData.entries()) {
        //   console.log(`${key}: ${value}`);
        // }

        // --- AJAX POST ----

        $.ajax({
          url : 'code.php',
          method: 'POST',
          data:formData,
          processData: false,
          contentType: false,
          // dataType:'json',
          success: function(data) {
            console.log(data);
            var res = JSON.parse(data);
            console.log(res);
            if(res.status == 'success') {
              $('#create-employee')[0].reset();
              $('#createEmployee').modal('hide');
              $('#createEmployee .alert').addClass('d-none');
              // $('.alert-danger').addClass('d-none');
              $('.alert-success').removeClass('d-none');
              $('.alert-success').text(res.message);
              $('.alert-success').fadeIn(3000);
              $('.alert-success').fadeOut(7000);
              $('#emp-table').load(location.href + ' #emp-table')
          
            }else{
              $('#createEmployee .alert').removeClass('d-none');
              $('#createEmployee .alert').text(res.message);
            }
          }
        })

      })
    })
  </script>

</body>

</html>