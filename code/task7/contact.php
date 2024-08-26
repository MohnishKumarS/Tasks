<?php
include 'functions/layout_function.php';
$current_page = basename($_SERVER['PHP_SELF']);
$layout = new Layouts("task 7 contact",$current_page);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php $layout->header_links(); ?>
</head>

<body>
  <!-- ============= header ============= -->
  <?php $layout->navbar() ;?>

  <!-- ============= contact us header ============= -->
  <div class="page-header d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>contact</h2>
          <p>
            Odio et unde deleniti. Deserunt numquam exercitationem. Officiis
            quo odio sint voluptas consequatur ut a odio voluptatem. Sit
            dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit
            quaerat ipsum dolorem.
          </p>
        </div>
      </div>
    </div>
  </div>



  <?php
   // <!-- ============= contact us section ============= -->

   $layout->contact_form();
  // <!-- ======= Footer Content ======= --> //
  $layout->footerContent();
  // <!--  ======= script ======= --> //
  $layout->script();

  ?>



</body>

</html>