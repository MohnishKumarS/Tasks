<?php
session_start();
// $_SESSION = [];
//  products list
if (!isset($_SESSION['products'])) {
  $_SESSION['products'] = [
    [
      'id' => 1,
      'name' => '11 Rules For Life: Secrets to Level Up',
      'price' => 300,
      'img' => 'product1.jpg',
      'offer_start_date' => '2024-06-01',
      'offer_end_date' => '2024-08-15',
      'offer_start_time' => '09:00:00',
      'offer_end_time' => '17:00:00',
      'discount_percentage' => 20
    ],
    [
      'id' => 2,
      'name' => 'POCO M6 5G (Orion Blue, 4GB RAM, 128GB Storage)',
      'price' => 200,
      'img' => 'product2.jpg',
      'offer_start_date' => '2024-06-05',
      'offer_end_date' => '2024-07-20',
      'offer_start_time' => '10:00:00',
      'offer_end_time' => '18:00:00',
      'discount_percentage' => 40
    ],
    [
      'id' => 3,
      'name' => 'Leo V | Men and Women Cotton Oversized t Shirt | Solid Oversized t Shirt White',
      'price' => 599,
      'img' => 'product3.webp',
      'offer_start_date' => '2024-06-10',
      'offer_end_date' => '2024-03-25',
      'offer_start_time' => '11:00:00',
      'offer_end_time' => '19:00:00',
      'discount_percentage' => 30
    ]
  ];
}

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
    <div class="productSlider">
      <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
        <div class="carousel-inner">
          <div class="carousel-item active" data-mdb-interval="2000">
            <img src="assets/img/slider/pro-1.jpg" class="d-block w-100" alt="Wild Landscape" />
          </div>
          <div class="carousel-item" data-mdb-interval="2000">
            <img src="assets/img/slider/pro-2.jpg" class="d-block w-100" alt="Camera" />
          </div>
          <div class="carousel-item" data-mdb-interval="3000">
            <img src="assets/img/slider/pro-3.jpg" class="d-block w-100" alt="Exotic Fruits" />
          </div>
        </div>
        <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="container">
      <!-- PRODUCT SHOW -->
      <div class="productBlockShow ">
        <h4 class="mt-5 text-center">LATEST PRODUCT</h4>
          <?php if(count($_SESSION['products']) == 0): ?>
              <div class="text-center">
                <img src="assets/img/empty.webp" alt="no-product">
              </div>
            <?php endif ?>
        <div class="row row-cols-1 row-cols-md-3 g-5 mb-5 pb-5 mt-1">

          <?php
          function getDiscountedPrice($price, $discount_percentage)
          {
            return $price - ($price * ($discount_percentage / 100));
          }
          $setTimer = [];
          foreach ($products as $key=>$val) {
            $currentDateTime = new DateTime();

            if (
              !empty($val['offer_start_date']) && !empty($val['offer_end_date']) &&
              !empty($val['offer_start_time']) && !empty($val['offer_end_time'])
            ) {

              $offerStartDateTime = new DateTime($val['offer_start_date'] . ' ' . $val['offer_start_time']);
              $offerEndDateTime = new DateTime($val['offer_end_date'] . ' ' . $val['offer_end_time']);
              $isActive = ($currentDateTime >= $offerStartDateTime && $currentDateTime <= $offerEndDateTime);

              // Calculate days expired since offer started if active
              $daysExpired = null;
              if ($isActive) {
                $interval = $currentDateTime->diff($offerEndDateTime);
                $setTimer[$key] = $interval ;
                // print_r($setTimer);
                // print_r($interval);
                $daysExpired = $interval->days;
              }
            }
            $discountedPrice = $isActive ? getDiscountedPrice($val['price'], $val['discount_percentage']) : $val['price'];
          ?>
  

            <div class="col">
              <div class="card h-100">
                <img src="assets/img/products/<?= $val['img']  ?>" class="card-img-top" height="350" style="object-fit:contain" alt="product-image" />
                <div class="card-body">
                  <h6 class="card-title"><?= $val['name'] ?></h6>
                  <?php
                  if($isActive){  ?>
                         <p class="card-text text-danger">
                    <b> ₹ </b><b class="fs-1"><?= $discountedPrice ?> </b><span class="text-muted "><s>₹ <?= $val['price'] ?></s></span>
                  </p>
                  
                 <?php }else{ ?>
                  <p class="card-text text-danger">
                    <b> ₹ </b><b class="fs-1"><?= $discountedPrice ?> </b>
                  </p>
                <?php }
                  ?>
             
                  <?php
                  if ($isActive) { ?>
                    <p class="card-text">
                      <span class="badge rounded-pill badge-success fs-6"><?= $val['discount_percentage'] ?>% OFF</span>
                    </p>
                    <div id="timer-<?=$key ?>" class="timer text-primary fw-bold"></div>
                  <?php  }
                  ?>

                </div>
                <div class="card-footer">
                  <small class="text-muted">
                    <?php
                    echo  $isActive ? "<span>Limited Time Deal!</span> <span class='text-danger'>$daysExpired Days Left</span>" : 'No Offer Available';
                    ?>
                  </small>
                </div>
              </div>
            </div>

          <?php    }

          ?>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      let setTimers = <?php echo json_encode($setTimer); ?>;
      console.log(setTimers);
     
      if(setTimers){
        for (let key in setTimers) {
          let timer = setTimers[key];
          let totalSeconds = timer.days * 24 * 3600 + timer.h * 3600 + timer.i * 60 + timer.s;
          console.log(totalSeconds);


          // update a timer display
          function updateTimer(){
            if(totalSeconds <= 0){
              clearInterval(interval);
              return;
            }

                let days = Math.floor(totalSeconds / (24 * 3600));
                let hours = Math.floor((totalSeconds % (24 * 3600)) / 3600);
                let minutes = Math.floor((totalSeconds % 3600) / 60);
                let seconds = totalSeconds % 60;

            document.getElementById('timer-'+key).innerHTML = 
            (hours < 10 ? '0' + hours : hours) +  'h ' + 
            (minutes < 10 ? '0' + minutes : minutes) +  'm ' + 
            (seconds < 10 ? '0' + seconds : seconds) +  's' ;

            totalSeconds--;
          }

         let interval = setInterval(updateTimer, 1000);

 
        }
      }
        
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>
</body>

</html>