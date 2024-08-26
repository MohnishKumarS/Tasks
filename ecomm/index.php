<?php
require "assets/php/db.php";
session_start();
// echo  $_SESSION["name"] ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/53a10f910c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery.js"></script>
   
</head>

<body>
    
    <div id="shows">

    </div>



    <nav class="navbar navbar-expand-lg navbar-light " id="navbar"
        style="background-image: linear-gradient(to right,rgb(224, 166, 166),rgb(241, 241, 169));">
        <div class="container-fluid">
            <img src="assets/image/logo2.png" width="100" height="70" alt="">
            <a class="navbar-brand fs-4 fw-bold " href="#">Shopi <span id="head">fy</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto ">
                    <li class="nav-item mx-4 fw-bold fs-5 ">
                        <a class="nav-link " aria-current="page" href="#"><i
                                class="fa-solid fa-house me-2 fs-5 text-dark"></i>Home</a>
                    </li>
                    <li class="nav-item mx-4 fw-bold fs-5 ">
                        <a class="nav-link" href="" id="deals">


                            <i class="fa-solid fa-bolt me-2 fs-5 text-dark"></i>Deals</a>
                    </li>
                    <li class="nav-item mx-4 fw-bold fs-5  dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-4 fw-bold fs-5 ">
                        <a class="nav-link" href="#"><i class="fa-solid fa-gear me-2 fs-5 text-dark"></i>Setting</a>
                    </li>
                </ul>
                <i class="fa-solid fa-cart-shopping fs-3 me-2"></i>

                
                    <?php
                    if(isset($_SESSION["name"])){
                    //  
                    // echo  $_SESSION["name"];
                    echo '<a class="btn btn-primary rounded fw-bold " href="logout.php"><i class="fa-sharp fa-solid fa-user me-1"></i>
                         logout</a>';

                    }
                    else{
                        // echo '<a class="btn btn-primary rounded fw-bold " href="register.php"><i class="fa-sharp fa-solid fa-user me-1"></i>
                        // register</a>';
                        echo "nouser";
                    }

                    ?>

                    
            </div>
        </div>
    </nav>


    <!-- --------------------------scroll----------------------- -->

    <div> 

        <button class="btn btn-success rounded-circle" id="scroll-btn"><i
                class="fa-solid fa-arrow-up fs-5"></i></button>
    </div>

    <!-- -----------=-------------------section --------------------------->


    <section id="home">
        <img src="assets/image/a3.jpg" class="img-fluid w-100" id="img1" alt="">

    </section>


    <div class="container">
        
         <!-- ---------------------first------------------ -->

    <div>
       <div class="d-flex  justify-content-start mt-4">
        <h1 class="fw-bold">Today's Deals  </h1>
        <a href="" class="mt-3 ms-5 text-dark fs-5">See all <i class="fa-solid fa-arrow-right ms-2 fs-5"></i></a>
       </div>

      <div class="d-flex justify-content-between" id="category">
        <div>
            <img src="assets/image/category/c1.jpg" width="200"  alt="">
            <p class="text-center mt-2 fw-bold text-secondary">Smart Watch</p>
        </div>
        <div>
            <img src="assets/image/category/c2.jpg" width="200"  alt="">
            <p class="text-center mt-2 fw-bold text-secondary">Mobiles</p>
        </div>
        <div>
            <img src="assets/image/category/c3.jpg" width="200"  alt="">
            <p class="text-center mt-2 fw-bold text-secondary">Shoes</p>
        </div>
        <div>
            <img src="assets/image/category/c4.jpg" width="200"  alt="">
            <p class="text-center mt-2 fw-bold text-secondary">Cycles</p>
        </div>
        <div>
            <img src="assets/image/category/c5.jpg" width="200"  alt="">
            <p class="text-center mt-2 fw-bold text-secondary">Sunglass</p>
        </div>
        <div>
            <img src="assets/image/category/c6.jpg" width="200"  alt="">
            <p class="text-center mt-2 fw-bold text-secondary">Airboats</p>
        </div>
      </div>
        
    </div>

    


         <!-- --------------------------marquee------------------------------ -->
        <div class="mt-3">

            <marquee behavior="scroll" direction="right" scrollamount="10" id="marq">The Sale is live now!!! Don't Miss it.</marquee>
            
            <img name="slide" class="w-50 " height="500" >
            
        </div>

        <div class="mt-3">
            <h1 class="border border-dark  rounded-3 p-2 fw-bold text-white text-center"
                style="background-color:#fa9702"> Blockbuster Deals all <span class="text-danger">70%</span> off</h1>
        </div>

        <section>
            <div class="row mt-3 " id="gif">
                <div class="col-md-6 col-12" >
                    <img src="assets/image/a7.png" class="" id="gifs" alt="">
                    <!-- <h4 id="sale" class="">Sale is live for Prime members</h4> -->

                </div>

                <div class="col-12 col-md-6 p-4" style="background:#4e76a0";>
                    <p class="text-white fs-5">amazon prime</p>

                    <h3 class="text-white ">Unlimited FREE fast delivery, videos, music, gaming & more</h3>

                    <p class="text-white mt-3">Prime members enjoy unlimited free, fast delivery on eligible items,
                        video streaming, ad-free music, free in-game content, exclusive access to deals & more.</p>

                    <button class="btn btn-warning btn-lg p-2 ">Login to join prime</button>

                    <p class="text-white mt-3" style="font-size:13px;">By signing up for a Prime membership, you agree
                        to the Amazon Prime Terms and Conditions.</p>

                </div>
            </div>
        </section>


        <div class="mt-4">
            <h1 class="border border-warning fw-bold  text-center" style="background-color:#fa9702"> Great Indian
                Festival | Brands in Focus upto <span class="text-danger">70%</span> off</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-1 " id="col">

            </div>

        </div>


    </div>



    <footer style="background:rgb(23,35,55)" class="mt-4">
        <div class="row row-cols-1 row-cols-md-6 row-cols-sm-2 text-white p-5">

            <div class="col">
                <p>ABOUT</p>
                <ul class="list-unstyled">

                    <li>Contact Us</li>
                    <li> About Us</li>
                    <li>Careers</li>
                    <li>Flipkart Stories</li>
                    <li> Flipkart Wholesale</li>

                </ul>
            </div>

            <div class="col">
                <p>HELP</p>
                <ul class="list-unstyled">

                    <li>Contact Us</li>
                    <li> About Us</li>
                    <li>Careers</li>
                    <li>Flipkart Stories</li>
                    <li> Flipkart Wholesale</li>

                </ul>
            </div>

            <div class="col">
                <p>POLICY</p>
                <ul class="list-unstyled">

                    <li>Contact Us</li>
                    <li> About Us</li>
                    <li>Careers</li>
                    <li>Flipkart Stories</li>
                    <li> Flipkart Wholesale</li>

                </ul>
            </div>

            <div class="col">
                <p>SOCIAL</p>
                <ul class="list-unstyled">

                    <li>Contact Us</li>
                    <li> About Us</li>
                    <li>Careers</li>
                    <li>Flipkart Stories</li>
                    <li> Flipkart Wholesale</li>

                </ul>
            </div>

            <div class="col">
                <p>MAIL US</p>
                <ul class="list-unstyled">

                    <li>Flipkart Internet Private Limited,

                        Buildings Alyssa, Begonia &

                        Clove Embassy Tech Village,

                        Outer Ring Road, Devarabeesanahalli Village,

                        Bengaluru, 560103,

                        Karnataka, India</li>


                </ul>
            </div>

            <div class="col">
                <p>Registered Office</p>
                <ul class="list-unstyled">

                    <li>Flipkart Internet Private Limited,

                        Buildings Alyssa, Begonia &

                        Clove Embassy Tech Village,

                        Outer Ring Road, Devarabeesanahalli Village,

                        Bengaluru, 560103,

                        Karnataka, India

                        CIN : U51109KA2012PTC066107

                        Telephone: 044-45614700</li>


                </ul>
            </div>

        </div>
        <hr style="color:aliceblue" class="">

        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6 text-white p-3">
            <div class="col">
                <p class="text-white">Become a Seller</p>
            </div>
            <div class="col">
                <p class="text-white">Advertise</p>
            </div>
            <div class="col">
                <p class="text-white">Gift Cards</p>
            </div>
            <div class="col">
                <p class="text-white">Help Center</p>
            </div>
            <div class="col">
                <p class="text-white">© 2007-2022 ShopiFY.com</p>
            </div>
            <div class="col d-flex justify-content-around  ">
                <p><i class="fa-brands fa-facebook text-white fs-6"></i></p>
                <p><i class="fa-brands fa-instagram text-white fs-6"></i></p>
                <p><i class="fa-brands fa-youtube text-white fs-6"></i></p>
                <p><i class="fa-brands fa-google text-white fs-6"></i></p>
                <p><i class="fa-brands fa-twitter text-white fs-6"></i></p>
                <p><i class="fa-brands fa-whatsapp text-white fs-6"></i></p>
            </div>
        </div>

    </footer>







    <script src="assets/js/a.js"></script>



</body>

</html>