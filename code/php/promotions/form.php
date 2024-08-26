<?php
session_start();
$products = $_SESSION['products'];
print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] === "POST") {
  if (isset($_POST['product-create'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $offer_start_date = $_POST['startDate'] ?: null;
    $offer_end_date = $_POST['endDate'] ?: null;
    $offer_start_time = $_POST['startTime'] ?: null;
    $offer_end_time = $_POST['endTime'] ?: null;
    $discount_percentage = $_POST['percentage'] ?: null;

    // store image
    define('SITE_ROOT', realpath(dirname(__FILE__)));
    $target_dir = SITE_ROOT . "/assets/img/products/";
    $fileType = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    $imgName = uniqid() . '.' . $fileType;
    $destinate = $target_dir . $imgName;
    move_uploaded_file($_FILES['image']['tmp_name'], $destinate);

    $products[] = [
      'id' => count($products) + 1,
      'name' => $name,
      'price' => $price,
      'img' => $imgName,
      'offer_start_date' => $offer_start_date,
      'offer_end_date' => $offer_end_date,
      'offer_start_time' => $offer_start_time,
      'offer_end_time' => $offer_end_time,
      'discount_percentage' => $discount_percentage
    ];

    $_SESSION['products'] = $products;
    $_SESSION['status'] = 'Product Added successfully <i class="fa-solid fa-thumbs-up"></i>';
    header('Location: admin.php');
    exit();
  }

  if (isset($_POST['product-update'])) {
    $proId = $_POST['product-id'];

    foreach ($products as &$product) {

      if ($product['id'] == $proId) {
        $product['name'] = $_POST['name'];
        $product['price'] = $_POST['price'];
        $product['offer_start_date'] = $_POST['startDate'] ?: null;
        $product['offer_end_date'] = $_POST['endDate'] ?: null;
        $product['offer_start_time'] = $_POST['startTime'] ?: null;
        $product['offer_end_time'] = $_POST['endTime'] ?: null;
        $product['discount_percentage'] = $_POST['percentage'] ?: null;

        // store image
        if ($_FILES['image']['name']) {
          $oldPath = 'assets/img/products/' . $product['img'];
          if (file_exists($oldPath)) {
            unlink($oldPath);
          }
          define('SITE_ROOT', realpath(dirname(__FILE__)));
          $target_dir = SITE_ROOT . "/assets/img/products/";
          $fileType = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
          $imgName = uniqid() . '.' . $fileType;
          $destinate = $target_dir . $imgName;
          move_uploaded_file($_FILES['image']['tmp_name'], $destinate);

          $product['img'] = $imgName;
        }


        break;
      }
    }

    $_SESSION['products'] = $products;

    $_SESSION['status'] = 'Product Updated successfully <i class="fa-solid fa-square-check"></i> ';
    header('Location: admin.php');
    exit();
  }

  if (isset($_POST['product-delete'])) {
    $deleteProductId  = $_POST['product-id'];

    foreach ($products as $key => $product) {
      if ($product['id'] == $deleteProductId) {
        unset($_SESSION['products'][$key]);
        // Re-index the array to avoid gaps in the indices
        $_SESSION['products'] = array_values($_SESSION['products']);
        break;
      }
    }
    $_SESSION['status'] = 'Product Deleted successfully <i class="fa-solid fa-circle-check"></i>';
    header('Location: admin.php');
    exit();
  }
}
