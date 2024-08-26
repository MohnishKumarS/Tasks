<?php
include 'functions/layout_function.php';
$current_page = basename($_SERVER['PHP_SELF']);
$layout = new Layouts("task 7 services",$current_page);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php $layout->header_links(); ?>
</head>

<body>
  <!-- ============= header ============= -->
  <?php $layout->navbar();  ?>

  <!-- ============= services  header ============= -->
  <div class="page-header d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Services</h2>
          <p>
            Odio et unde deleniti. Deserunt numquam exercitationem. Officiis
            quo odio sint voluptas consequatur ut a odio voluptatem. Sit
            dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit
            quaerat ipsum dolorem.
          </p>

          <?php $layout->contact_btn(); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- ============= services section ============= -->
  <section id="services" class="services">
    <div class="container">
      <div class="row gy-4">
        <div class="col-xl-3 col-md-6">
          <div class="service-item position-relative">
            <i class="fa-solid fa-heart-pulse"></i>
            <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
            <p>
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi
            </p>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="service-item position-relative">
            <i class="fa-regular fa-square-full"></i>
            <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
            <p>
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi
            </p>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="service-item position-relative">
            <i class="fa-solid fa-calendar-days"></i>

            <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
            <p>
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi
            </p>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="service-item position-relative">
            <i class="fa-solid fa-tower-broadcast"></i>
            <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
            <p>
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============= pricing section ============= -->

  <section class="pricing mt-5" id="pricing">
    <div class="container">
      <div class="section-header">
        <h2>Prices</h2>
        <p>Check my adorable pricing</p>
      </div>

      <div class="row gy-4 gx-lg-5">
        <div class="col-lg-6">
          <div class="pricing-item d-flex justify-content-between">
            <h3>Portrait Photography</h3>
            <h4>$160.00</h4>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="pricing-item d-flex justify-content-between">
            <h3>Fashion Photography</h3>
            <h4>$300.00</h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="pricing-item d-flex justify-content-between">
            <h3>Sports Photography</h3>
            <h4>$200.00</h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="pricing-item d-flex justify-content-between">
            <h3>Still Life Photography</h3>
            <h4>$120.00</h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="pricing-item d-flex justify-content-between">
            <h3>Wedding Photography</h3>
            <h4>$500.00</h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="pricing-item d-flex justify-content-between">
            <h3>Photojournalism</h3>
            <h4>$200.00</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============= TESTIMONIAL ============= -->
  <?php $layout->testimonials();

  // ======= Footer ======= //

  $layout->footerContent();

  // ======= scripts ======= //
  $layout->script();
  ?>

  <script>

  </script>
</body>

</html>