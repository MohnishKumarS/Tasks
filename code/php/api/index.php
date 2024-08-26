<?php

// $curl = curl_init();

// curl_setopt_array($curl, [
// 	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/matches/v1/upcoming",
// 	CURLOPT_RETURNTRANSFER => true,
// 	CURLOPT_ENCODING => "",
// 	CURLOPT_MAXREDIRS => 10,
// 	CURLOPT_TIMEOUT => 30,
// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 	CURLOPT_CUSTOMREQUEST => "GET",
// 	CURLOPT_HTTPHEADER => [
// 		"X-RapidAPI-Host: cricbuzz-cricket.p.rapidapi.com",
// 		"X-RapidAPI-Key: 37088127bdmshcca6eb1127af18bp152f13jsne826bd0aa60f"
// 	],
// ]);

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
// 	echo "cURL Error #:" . $err;
// } else {
// 	// echo $response;
//   $res = json_decode($response,true);
//   // $final = $res['typeMatches'];

// }
// We will fetch ALL pages of the Countries List
// For a real live scenario, try to optimize your consumption
// $countriesList = array();
// $offset = 0;
// $maxOffset = 1;
// while($offset<$maxOffset) {
//     $json_result = file_get_contents('https://api.cricapi.com/v1/matches?apikey=ece81b1f-a9bb-46a5-9601-b458b0267385&offset='.$offset);
//     $j = json_decode($json_result);
//     if($j->status != "success") {
//         die("FAILED TO GET A SUCCESS RESULT");
//     }
//     $maxOffset = $j->info->totalRows;
    
//     $offset += count($j->data);
//     $countriesList = array_merge($countriesList,$j->data);

//     echo '<pre>';
//     print_r($countriesList);
// }

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://zenquotes.io/api/quotes/");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($curl);
curl_close($curl);

    echo '<pre>';
    print_r($output);
    echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <h2>Current matches</h2>

    <div><a href="">Upcoming</a></div>

    <div class="row">
      <div class="col-lg-8">




        <div class="match-fix">
          <h3 class='bg-light p-2 fs-5'>India</h3>

          <div>
            <strong>India ,</strong> <span class="text-muted"></span>
            <p class="text-muted">Nov 28 • 7:00 PM at Guwahati, Barsapara Cricket Stadium</p>

            <div class="btn btn-light border border-2 ">
              Match Facts
            </div>
            <hr>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>

</html>