<?php
define('root', 'root');

$conn = new mysqli('localhost', root, '', 'harvardc_image_gallery1');

// $sql = "SELECT DISTINCT year FROM image_catg WHERE NOT year =  '' ";
// $res = $conn->query($sql);

// $i = 1;
// if ($res->num_rows > 0) {

//   $cat_years = array();
//   while($row = $res->fetch_assoc()){

//     array_push($cat_years,$row['year']);
//   }


//   $get_years = $conn->query("SELECT years FROM years_cat");

// $years = array();
// while($row = $get_years->fetch_assoc()){
//   echo '<pre>';
// print_r($row);
// echo "</pre>";
//   if( in_array($row['years'],$cat_years)){
//      array_push($years,$row['years']);
//   }else{
//     echo 'yes';
//   }

// }

// }



// print_r($cat_years);
// print_r($years);

// print_r($cat_years);
// echo '<pre>';
// print_r($row['year']);
// echo "</pre>";

$sql = "SELECT DISTINCT year FROM image_catg  WHERE NOT year = '' AND year NOT IN (SELECT DISTINCT years FROM years_cat)";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
  $years = array();
  while ($row = $res->fetch_assoc()) {
    array_push($years, $row['year']);

    $year_add = $conn->query("INSERT INTO years_cat (years) VALUES ('" . $row['year'] . "')");
    echo $year_add;
  }

  print_r($years);
} else {
  // Handle the case when there are no rows in the result set
  echo "No distinct years found in image_catg.";
}
