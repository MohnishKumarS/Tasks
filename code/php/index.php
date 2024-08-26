<table>
        <tbody>
            <script>
                for (let i = 1; i <= 10; i++) {
                    document.write('<tr>');
                    for (let j = 1; j <= 10; j++) {
                        document.write(`<td>${i * j}</td>`);
                    }
                    document.write('</tr>');
                }
            </script>
        </tbody>
    </table>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
<script>
    let splitTime = 82307;
    let tos = splitTime.toString()
    // console.log(typeof tos);

    // ===== STRINGS ===
    // let ext= 'www.example.com/public_html/index.php';  // index.php    // let sp = data.split('/').slice(-1).join();
    let ext = 'www.example.com/public_html/index.php'; // index    // let sp =  data.substring(data.lastIndexOf('/')+1,data.lastIndexOf('.'));
    let lastWordCount = "  Hello worlds "; // count : 5               // let sp = data.trim().split(/\s+/).slice(-1).join().length            
    let exUsername = "rayy@example.com"; // rayy                      // let sp = data.split(/[@]/g)[0];    
    let passGenerate = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'; // random 6,8 character  //   console.log($arrData.join('').slice(0,6));
    let strChange = 'the quick brown fox jumps over the lazy dog.'; // that quick    // let sp = data.replace(/the/,'that');
    let str1 = 'football';
    let str2 = 'footboll';
    let putArr = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
    // console.log(putArr.split('\n'));
    let next_cha = 'k';  //    let charCode = data.charCodeAt(0);  let nextCharCode = data == 'z' ? 'a'.charCodeAt(0) : charCode + 1; console.log(String.fromCharCode(nextCharCode));
    let orgString ='The brown fox';  // add quick b/t the brown   let res = data.split(' '); res.splice(1,0,'quick');
    let zeroRem = '0005234402.123';  // let res = data.replace(/^0+/,'') or Number(data).toString()
    let splChar =  '\"1+2/3*2:2-3/4*3';  // let res = data.match(/\d/g).join(' ')

    // ===== REG EX ====
   let strr = 'The quick brown fox123 $123,34.00A';  // let res = data.match(/\d+/g);

  //  ====== MATH ======
  let $marks1;
  let $marks2 = [350,340,356,330,321];  // let res = data.flat(); Math.min(...res)
  let $marks3 = [630,340,570,635,434,255,298];

  // ====== LOOP ==========
  let outhy = 1-2-3-4-5-6-7-8-9-10;   // let count = '';  for (let i = 1; i <= 10; i++)  count += i + (i < 10 ? '-' : ''); 
  let fout = "w3rresource";      //  let res=  data.split('r').length-1;

  //  ======= ARRAY ========
  let month_temp  = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
  68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 19, 73];
  let check_prime = 10;
    function result(data) {
     
      const primes = [];
      
      // for (let i = 2; i <= Math.sqrt(data); i++) {
      //   console.log(i);
      //   if (data % i === 0) {
      //     console.log(false);
      //   }
      // }
      // for (let i = 2; i <= 10; i++) {
      //   let primeC = true;
      //   for (let j = 2; j < i; j++) {
      //     // console.log(i);
      //    if(i % j == 0){
      //     primeC = false;
      //     break;
      //    }
          
      //   }
      //   if(primeC){
      //     primes.push(i)
      //   }
      // }
      // console.log(primes);
    }
    result(check_prime)
</script>

<?php
echo PHP_OS;
echo realpath(dirname(__FILE__)) . "<br>";
// echo basename(__FILE__);
 $uri = $_SERVER['REQUEST_URI'];
//  echo $uri;
// Define a JSON-encoded string representing a nested associative array
$a = '{"Title": "The Cuckoos Calling",
      "Author": "Robert Galbraith",
      "Detail": { 
                  "Publisher": "Little Brown"
                 }
     }';

// Decode the JSON string into a PHP associative array
$j1 = json_decode($a, true);
// print_r($j1);
// $name = 'moni is good boy';
$no = 1;

// echo ucfirst($name);
$path = 'www.example.com/public_html/index.php'; // Assigns a string containing a file path to the variable $path
$file_name = substr(strrchr($path, "/"), 1);     // Finds the last occurrence of '/' in $path and extracts the substring after it
// echo $file_name . "<br>";

$mailid  = 'rayy@example.com';     // Assigns an email address to the variable $mailid
$user = strstr($mailid, '@', true); // Finds the first occurrence of '@' in $mailid and returns the substring before it
echo $user . "<br>";
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1) . "<br>";


$str1 = 'football';
$str2 = 'footboll';

// Calculate the position of the first difference between the two strings
$str_pos = strspn($str1 ^ $str2, "\0");

// Output the position of the first difference along with the characters at that position
printf(
    'First difference between two strings at position %d: "%s" vs "%s"',
    $str_pos,
    $str1[$str_pos],
    $str2[$str_pos]
);
printf("\n");

$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";

// Explode the multi-line string into an array using "" as the delimiter
$arra1 = explode("\n", $str);

// Display the array containing the lines of the song
print_r($arra1);



$cha = 'b';
$next_cha = ++$cha;
// echo $next_cha;


$my_str = 'The quick brown fox jumps over the lazy dog///';
// Define the original string.

echo rtrim($my_str, '/')."<br>";

$json = 
'{
"uglify-js": "1.3.4"
, "jshint": "0.9.1"
, "recess": "1.1.8"
, "connect": "2.1.3"
, "hogan.js": "2.0.0"
}';
$json = '{"number": 123456789012345678901234567890}';

print_r(json_decode($json));


$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.themoviedb.org/3/movie/popular?language=en-US&page=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIwYjA0YjBlYzBlMDEzNjkzYTM1YWFiMjI2ZDQ2NDg1NyIsInN1YiI6IjY2NDcyOTI4ZTJlYTA3NDNhNDFjZmQ5OSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.4CKTKtUAEWRATwksFYfOr7dbPpFhnExyMLUEwx1W608",
    "accept: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo "<pre>";
   print_r($response);
   echo "</pre>";
}
// $x= 3;
// function set(){
//   global $x;
//   echo $y = $x + "2";
//   echo __FUNCTION__;
//   echo "fun";
// }
// set();
// echo $y;
// $color = "red,green,white";
// // $x = 100;  
// $x = 'lee';
// $y = "100";
// $$x = "Moni" ;
// echo $lee;
// echo ${"100"};
// var_dump($x !== $y);
?>