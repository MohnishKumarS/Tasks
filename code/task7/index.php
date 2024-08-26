<?php
include 'functions/layout_function.php';
$current_page = basename($_SERVER['PHP_SELF']);
$layout = new Layouts("task 7 home",  $current_page);
echo $layout->header_links();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php $layout->header_links(); ?>
</head>

<body>

<?php $layout->navbar();  ?>
  <!-- ======= Hero Section ======= -->

  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>
            I'm <span>Jenny Wilson</span> a Professional Photographer from New
            York City
          </h2>
          <p>
            Blanditiis praesentium aliquam illum tempore incidunt debitis
            dolorem magni est deserunt sed qui libero. Qui voluptas amet.
          </p>
          <?php $layout->contact_btn(); 
          ?>

        </div>
      </div>
    </div>
  </section>

  <!-- ======= Gallery Section ======= -->
  <?php $layout->gallery_box();
  ?>

  <!-- ======= Footer ======= -->
  <?php
  
  $layout->footerContent();
  $layout->script();
  ?>



</body>

</html>