<?php
include 'functions/layout_function.php';
$current_page = basename($_SERVER['PHP_SELF']);
$layout = new Layouts("task 7 gallery",$current_page);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php $layout->header_links(); ?>
</head>

<body>

  <!-- ============= header ============= -->
  <?php $layout->navbar();  ?>


  <!-- ============= gallery header ============= -->
  <div class="page-header d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Nature (16 images)</h2>
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




  <?php
  // <!-- =============  Gallery Section ======= -->
   $layout->gallery_box();

  // <!-- ======= Footer Content ======= --> //
  $layout->footerContent();
  // <!--  ======= script ======= --> //
  $layout->script();

  ?>


</body>

</html>