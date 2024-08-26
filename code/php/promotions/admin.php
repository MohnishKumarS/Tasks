<?php
session_start();

$products = $_SESSION['products'];
// print_r($products);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Promotions Products</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" />
</head>

<body>
  <div class="page-wrapper">
    <!-- NAVBAR -->
    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>

          <!-- Collapsible wrapper -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
              <img src="assets/img/pro-logo.png" width="40" height="auto" alt="Product Logo" loading="lazy" />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class=" btn btn-danger" href="admin.php">Admin</a>
              </li>
            </ul>
            <!-- Left links -->
          </div>

        </div>
        <!-- Container wrapper -->
      </nav>
      <!-- Navbar -->
    </header>

    <div class="container">

      <!-- PRODUCT CREATE -->
      <div class="productBlockAdd">
        <div class="status-pop">
          <?php
          if (isset($_SESSION['status'])) {
            echo '<div class="alert alert-success">' . $_SESSION['status'] . '</div>';
            unset($_SESSION['status']);
          }
          ?>

        </div>
        <h5 class="mt-5 mb-3">Create Product Promotional Offers</h5>
        <form action="form.php" method="post" enctype="multipart/form-data">
          <div class="row gy-4">
            <div class="col-lg-4">
              <div class="form-outline" data-mdb-input-init>
                <input type="text" class="form-control form-control-lg" id="name" name="name" onkeyup="this.value = this.value.replace(/[^a-z\s]/gi,'')" required />
                <label class="form-label">Name</label>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-outline" data-mdb-input-init>
                <input type="text" class="form-control form-control-lg" id="price" name="price" onkeyup="this.value = this.value.replace(/[^0-9]/g,'')" required />
                <label class="form-label">Price</label>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="" data-mdb-input-init>
                <input type="file" class="form-control form-control-lg" id="image" name="image"  required />
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-outline" data-mdb-input-init>
                <input type="date" class="form-control form-control-lg" id="startDate" name="startDate" />
                <label class="form-label">Start Date</label>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-outline" data-mdb-input-init>
                <input type="date" class="form-control form-control-lg" id="endDate" name="endDate" />
                <label class="form-label">End Date</label>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-outline" data-mdb-input-init>
                <input type="time" class="form-control form-control-lg" id="startTime" name="startTime" />
                <label class="form-label">Start Time</label>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-outline" data-mdb-input-init>
                <input type="time" class="form-control form-control-lg" id="endTime" name="endTime" />
                <label class="form-label">End Time</label>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-outline" data-mdb-input-init>
                <input type="number" class="form-control form-control-lg" id="percentage" name="percentage" />
                <label class="form-label">Offer percentage</label>
              </div>
            </div>
            <div class="col-lg-12">
              <input type="text" name="product-id" id="product-id" hidden>
              <button type="submit" class="btn btn-primary" data-mdb-ripple-init name="product-create" id="product-btn" value="true">Create Product</button>
            </div>
          </div>
        </form>
      </div>
      <!-- PRODUCT LIST -->
      <div class="productBlockList py-5 mb-5">
        <h5 class="mt-5 mb-3">Product List</h5>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Img</th>
                <th width="20%">Name</th>
                <th>Price</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th width="5%">Percentage</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

              if (count($products) > 0) {
                foreach ($products as $val) {
    
              ?>
                  <tr class="align-middle">
                    <td><?= $val['id']; ?></td>
                    <td>
                      <img src="assets/img/products/<?= $val['img'] ?>" width="90" alt="product-image">
                    </td>
                    <td><?= $val['name']; ?></td>
                    <td><?= $val['price']; ?></td>
                    <td><?= $val['offer_start_date']; ?></td>
                    <td><?= $val['offer_end_date']; ?></td>
                    <td><?= $val['offer_start_time']; ?></td>
                    <td><?= $val['offer_end_time']; ?></td>
                    <td><?= $val['discount_percentage'] ? $val['discount_percentage'] . "%" :  '-' ?></td>
                    <td>
                      <button onclick="editProduct(<?= $val['id']  ?>)" class="btn btn-primary btn-sm" data-mdb-ripple-init>
                      <i class="fa-solid fa-pen-to-square"></i>
                      </button>
                      <form action="form.php" method="post" class="d-inline">
                        <input type="hidden" name="product-id" value="<?= $val['id'] ?>" >
                      <button type="submit"  class="btn btn-danger btn-sm" data-mdb-ripple-init name="product-delete" value="true">
                      <i class="fa-solid fa-trash-can"></i></button>
                      </form>
                     
                    </td>
                  </tr>
                  </tr>
              <?php    }
              }
              ?>
            </tbody>
          </table>

        </div>

        <script>
          function editProduct(id) {
            // console.log(id);
            // scrollTop
            window.scrollTo({ top: 0, behavior: 'smooth' });

            let products = <?= json_encode($products) ?>;
            let product = products.find(p => p.id == id);
           
            document.getElementById("product-id").value = product.id;
            document.getElementById('name').value = product.name;
            document.getElementById('price').value = product.price;
            document.getElementById('startDate').value = product.offer_start_date;
            document.getElementById('endDate').value = product.offer_end_date;
            document.getElementById('startTime').value = product.offer_start_time;
            document.getElementById('endTime').value = product.offer_end_time;
            document.getElementById('percentage').value = product.discount_percentage;
            document.getElementById('image').removeAttribute('required');
            let submitBtn = document.getElementById('product-btn');
            submitBtn.innerHTML = 'Update Product';
            submitBtn.setAttribute('name', 'product-update');
            submitBtn.className = 'btn btn-success';

            let inputs = document.querySelectorAll('.productBlockAdd input');
            inputs.forEach(input => {
              input.classList.add('active');
              input.style.opacity = 1;
            })
            // console.log(inputs);
          }
        </script>


      </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>
</body>

</html>