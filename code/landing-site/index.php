 <?php
  session_start();

  //  to find geolocation info
  function get_IP_address()
  {
    foreach (array(
      'HTTP_CLIENT_IP',
      'HTTP_X_FORWARDED_FOR',
      'HTTP_X_FORWARDED',
      'HTTP_X_CLUSTER_CLIENT_IP',
      'HTTP_FORWARDED_FOR',
      'HTTP_FORWARDED',
      'REMOTE_ADDR'
    ) as $key) {
      if (array_key_exists($key, $_SERVER) === true) {
        foreach (explode(',', $_SERVER[$key]) as $IPaddress) {
          $IPaddress = trim($IPaddress); // Just to be safe

          if (
            filter_var(
              $IPaddress,
              FILTER_VALIDATE_IP,
              FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE
            )
            !== false
          ) {

            return $IPaddress;
          }
        }
      }
    }
  }

  $ip = get_IP_address();
  // $ip = "92.119.177.90";
  $usr_loc = file_get_contents("http://ip-api.com/json/$ip");

  $get_country = ($usr_loc != '') ? json_decode($usr_loc)->country : null;

  // print_r($get_country);
  ?>
   <?php
  require 'func/layouts.php';

  $layout = new Layouts();

?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>The Best Web Hosting Provider In India |eWallHost</title>
   <meta name="description" content="Looking for cheap and  best web hosting services in India?  Get a free - Domain with hosting and 24/7 support. Choose eWallHost today!">
   <meta name="robots" content="index,all">
   <meta name="googlebot" content="index,follow">
   <meta name="audience" content="all">
   <link rel="stylesheet" href="assets/css/main.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--- Favicon --->
   <link rel="apple-touch-icon" sizes="180x180" href="assets/site/image/favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="assets/site/image/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="192x192" href="assets/site/image/favicon/android-chrome-192x192.png">
   <link rel="icon" type="image/png" sizes="16x16" href="assets/site/image/favicon/favicon-16x16.png">
   <link rel="mask-icon" href="assets/site/image/favicon/safari-pinned-tab.svg" color="#5bbad5">
   <link rel="shortcut icon" href="assets/site/image/favicon/favicon.ico">
 </head>

 <body>
   <div class="space-top"></div>
   <!-- chat whatsapp -->
   <div class="wa-chat">
     <a href="https://wa.me/+919363925757?text=𝗪𝗲𝗹𝗰𝗼𝗺𝗲 𝘁𝗼 𝗲𝗪𝗮𝗹𝗹H𝗼𝘀𝘁! How can we make your hosting experience the best today?" target="_blank" class="wa__link">
       <img src="assets/site/image/common/whatsapp.webp" alt="whatsapp-icon" class="wa__img">
     </a>
   </div>
   <!-- END chat whatsapp -->
   <!-- contact us icon -->
   <div class="contact-ewh">
     <a href="tel:+91 9363925757" class="contact-ewh__link" title="CALL NOW">
       <img src="assets/site/image/hero/contact-us.png" alt="contact-us" class="contact-ewh__img">
     </a>
   </div>
   <!-- End contact us -->
   <!-- NAVBAR -->
   <?= $layout->getSection('nav') ?>
   <!-- END Navbar -->



   <!-- attract section -->
   <section class="attract-sec">
     <div class="attract-sec__overlay"></div>
     <div class="attract-sec__overlay-cloud">
       <img src="assets/site/image/hero/plane.svg" alt="plane" width="150" height="150" class="attract-sec__overlay-cloud_icon plane">
       <img src="assets/site/image/hero/paper.svg" alt="celebrating" width="150" height="150" class="attract-sec__overlay-cloud_icon paper1">
       <img src="assets/site/image/hero/paper.svg" alt="celebrating" width="150" height="150" class="attract-sec__overlay-cloud_icon paper2">
       <img src="assets/site/image/hero/anime.svg" alt="ewall anime" width="150" height="150" class="attract-sec__overlay-cloud_icon anime">
     </div>
     <div class="container">
       <div class="row attract-sec__wrapper ">
         <div class="col-lg-7">
           <div class="attract-sec__content">
             <h1 class="attract-sec__title">Massive Hosting <span class="attract-sec__title-hl"> Sale!</span></h1>
             <h1 class="attract-sec__title low">Grab <span class="attract-sec__title-hl">69% off </span>on Web Hosting
             </h1>
             <div class="attract-sec__desc">
               <div class="attract-sec__item">
                 <img src="assets/site/image/hero/ssl.svg" class="attract-sec__icon" alt="free-ssl" width="150" height="150"> Free SSL
               </div>
               <div class="attract-sec__item">
                 <img src="assets/site/image/hero/backups.svg" class="attract-sec__icon" alt="weekly-backups" width="150" height="150"> Weekly Backups
               </div>
               <div class="attract-sec__item">
                 <img src="assets/site/image/hero/bandwidth.svg" class="attract-sec__icon" alt="unlimited-bandwidth" width="150" height="150"> Unlimited Bandwith
               </div>

             </div>
           </div>
         </div>
         <div class="col-lg-5">
           <!-- success and error message -->
           <?php if (isset($_SESSION['status'])) {
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> ' . $_SESSION['status'] . '
                              </div>';

              unset($_SESSION['status']);
            }
            if (isset($_SESSION['status_failed'])) {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Oops!</strong> ' . $_SESSION['status_failed'] . '
                              </div>';

              unset($_SESSION['status_failed']);
            }

            ?>

           <form action="mail.php" method="post">
             <div class="e-contact">
               <h2 class="e-contact-title">Get Started Today</h2>
               <div class="e-contact_group">
                 <div class="e-contact_label">Name <span class="e-contact_sym">*</span></div>
                 <div class="e-contact_input">
                   <input type="text" class="e-contact_input-field" name="username" placeholder="Enter your name" onkeyup="return this.value=this.value.replace(/[^a-z\s+]/gi,'')" required>
                 </div>
               </div>
               <div class="e-contact_group">
                 <div class="e-contact_label">Email <span class="e-contact_sym">*</span></div>
                 <div class="e-contact_input">
                   <input type="email" class="e-contact_input-field" name="email" placeholder="Enter email" required>
                 </div>
               </div>
               <div class="e-contact_group">
                 <div class="e-contact_label">Mobile <span class="e-contact_sym">*</span></div>
                 <div class="e-contact_input">
                   <input type="text" class="e-contact_input-field" name="mobile" placeholder="Enter mobile no" onkeyup="return this.value=this.value.replace(/[^0-9]/g,'')" required>
                 </div>
               </div>
               <div class="e-contact_group">
                 <div class="e-contact_label">Services </div>
                 <div class="e-contact_select">
                   <select class="e-contact_select-field" name="services">
                     <option selected value="">choose our service</option>
                     <option value="Domain Registration">Domain Registration</option>
                     <option value="Linux Hosting">Linux Hosting</option>
                     <option value="Linux VPS Hosting">Linux VPS Hosting</option>
                     <option value="Cloud Storage Services">Cloud Storage Services</option>
                     <option value="Google Workspace">Google Workspace</option>
                   </select>
                 </div>
               </div>

               <div class="e-contact_group">
                 <div class="e-contact_label">Message </div>
                 <div class="e-contact_input">
                   <textarea name="message" class="e-contact_textarea-field" cols="30" rows="4" placeholder="Briefly describe your message"></textarea>
                 </div>
               </div>
               <div class="e-contact-btn text-center ">
                 <button class="btn-normal w-50" type="submit" name="contact_submit">Send Enquiry</button>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </section>
   <!-- END attract section -->

   <!-- Linux hosting product plans -->
   <section data-product="linux-hosting-with-apache" id="cpanel">
     <h2 class=" sec-title center ">
       Choose your Ideal <span class="sec-title__highlight"> Plan </span>
     </h2>
     <section class="product-plans container">
       <h2 class="product-plans__title sec-title js-product_title" hidden=""></h2>
       <p class="product-plans__desc js-product_desc" hidden=""></p>
       <div class="product-plans__items plans js-product-plans">
         <input class="plan__specs_view-inp js-plan__specs_view-inp" type="checkbox" id="View-more-8ceacbd9-5d2a-452f-b8a9-5eb92c54e2f6" hidden="">

         <div class="plan js-product-plan js-eBasic6ce82b53-a025-4d58-9b61-62d96a4ecde2" style="z-index:10;">

           <div class="plan__basic plan__item">
             <p class="plan__name">eBasic</p>
             <p class="plan__desc">For personal websites</p>
           </div>
           <!-- to show price depends on country -->

           <div class="plan__price plan__item">
             <span class="start">Starting at</span>
             <span class="curr"><?= $get_country == 'India' ? '₹' : '$'; ?></span>
             <span class="main-price"><?= $get_country == 'India' ? 39 : 0.69; ?></span>
             <span class="dur">/mo*</span>
           </div>

           <div class="plan__item plan__off">
             Up to 65% OFF
           </div>
           <div class="plan__specs plan__item">

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Domains: 1</span>
             </span>

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Disk Space: 1 GB</span>
             </span>

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Bandwidth: Unlimited</span>
             </span>

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>MySQL DB: 5</span>
             </span>

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Email Accounts: 5</span>
             </span>
             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Backups: Weekly</span>
             </span>
             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>SSL: Free</span>
             </span>

           </div>
           <!-- <div
            class="plan__billing-cycle plan__item js-product-plan_billing-cycle js-price-dropdown4272f9a1-95eb-4f57-a0ef-31c60429d750">
            <select class="form-select">
              <option>Choose one</option>
              <option selected value="1"><span class="bold-text">₹79</span> <span class="small-text"> /mo</span ></option>
              <option value="1"><span class="bold-text">₹468 </span> <small> /1yr</small></option>
              <option value="1"><span class="bold-text">₹2,799 </span> <small> /2yr</small></option>
              <option value="1"><span class="bold-text">₹4,199 </span> <small> /3yr</small></option>

            </select>
          </div> -->

           <div class="plan__order-btn plan__item">
             <a class="btn-call-to js-product-plan_cart-add" href="tel:+91 9363925757">Call now <i class="fa-solid fa-phone-volume"></i></a>
           </div>

           <div id="IDpidddd4e93f-024c-4f88-b814-81f31db7ef15" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" value="443" name="pid" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDbillingcycleb5f9555e-6603-4fc8-9c9a-28a40948a68e" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" name="billingcycle" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDdomainselecte4c5487d-2c38-4e61-b810-31b46418a272" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" value="1" name="domainselect" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDdomainoption9b6a5376-7fcd-47ae-a1f5-9988bb7814a4" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" name="domainoption" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDdomains4b0b5a11-2103-478f-b466-3b4c798cdd14" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" name="domains[]" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDskipconfig22cc5843-d920-49f0-b2a9-2b8c434e6546" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" value="1" name="skipconfig" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDcprice2bd608b3-39fc-4593-af5d-96067f6c0e08" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" name="cprice" data-submit="" disabled="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div><button class="js-product-submit" hidden=""></button>
         </div>

         <div class="plan js-product-plan js-eProfessional899f2434-8701-4787-b2fb-830116f2e4f1" style="z-index:9;">

           <div class="plan__basic plan__item">
             <p class="plan__name">eProfessional</p>
             <p class="plan__desc">For small blogs</p>
           </div>

           <div class="plan__price plan__item">
             <span class="start">Starting at</span>
             <span class="curr"><?= $get_country == 'India' ? '₹' : '$'; ?></span>
             <span class="main-price"><?= $get_country == 'India' ? 151 : 2.89; ?></span>
             <span class="dur">/mo*</span>
           </div>
           <div class="plan__item plan__off">
             Up to 75% OFF
           </div>
           <div class="plan__specs plan__item">

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Domains: 5</span>
             </span>

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Disk Space: 5 GB</span>
             </span>

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Bandwidth: Unlimited</span>
             </span>

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>MySQL DB: 5</span>
             </span>

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Email Accounts: 5</span>
             </span>
             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Backups: Weekly</span>
             </span>
             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>SSL: Free</span>
             </span>

           </div>
           <!-- <div
            class="plan__billing-cycle plan__item js-product-plan_billing-cycle js-price-dropdown20fe8be5-05e0-4225-a596-7392086dbe62">
            <select class="form-select">
              <option>Choose one</option>
              <option selected value="1"><span class="bold-text">₹399 </span> <small> /mo</small></option>
              <option value="1"><span class="bold-text">₹1,819 </span> <small> /1yr</small></option>
              <option value="1"><span class="bold-text">₹2,879 </span> <small> /2yr</small></option>
              <option value="1"><span class="bold-text">₹3,700 </span> <small> /3yr</small></option>

            </select>
          </div> -->

           <div class="plan__order-btn plan__item">
             <a class="btn-call-to js-product-plan_cart-add" href="tel:+91 9363925757">Call now <i class="fa-solid fa-phone-volume"></i></a>
           </div>

           <div id="IDpide6579bb3-1753-4d8a-84c2-89e7bbcb0515" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" value="444" name="pid" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDbillingcycleffadc710-2dd0-4554-83c7-7d6479157538" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" name="billingcycle" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDdomainselectda5e49a9-28f9-4d10-95b2-7f86559e1e18" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" value="1" name="domainselect" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDdomainoption070f6090-eed1-4296-9f80-a955c5498636" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" name="domainoption" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDdomainsec8bb590-b773-482c-884f-5a67422f6013" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" name="domains[]" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDskipconfiga3ed6de8-b756-451f-989c-1c63a5252e85" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" value="1" name="skipconfig" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDcprice02c7a31c-2f34-434f-bdde-44ee00d5f8fc" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" name="cprice" data-submit="" disabled="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div><button class="js-product-submit" hidden=""></button>
         </div>



         <div class="plan js-product-plan js-eMaxdb49535d-b1db-4a43-acbc-3a403236e02d" style="z-index:7;">

           <div class="plan__basic plan__item">
             <p class="plan__name">eMax</p>
             <p class="plan__desc">For enterprises websites</p>
           </div>

           <div class="plan__price plan__item">
             <span class="start">Starting at</span>
             <span class="curr"><?= $get_country == 'India' ? '₹' : '$'; ?></span>
             <span class="main-price"><?= $get_country == 'India' ? 408 : 6.39; ?></span>
             <span class="dur">/mo*</span>
           </div>
           <div class="plan__item plan__off">
             Up to 60% OFF
           </div>
           <div class="plan__specs plan__item">

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Domains: Unlimited</span>
             </span>

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Disk Space: 100 GB</span>
             </span>

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Bandwidth: Unlimited</span>
             </span>

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>MySQL DB: Unlimited</span>
             </span>

             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Email Accounts: Unlimited</span>
             </span>
             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>Backups: Weekly</span>
             </span>
             <span class="plan__specs-item js-product-plan_specs-item">
               <i class="fas fa-check"></i>
               <span>SSL: Free</span>
             </span>

           </div>
           <!-- <div
            class="plan__billing-cycle plan__item js-product-plan_billing-cycle js-price-dropdown939f5486-1e9f-40db-b497-7abea8ffcf6a">
            <select class="form-select">
              <option>Choose one</option>
              <option selected value="1"><span class="bold-text">₹999 </span> <small> /mo</small></option>
              <option value="1"><span class="bold-text">₹4,899 </span> <small> /1yr</small></option>
              <option value="1"><span class="bold-text">₹7,799</span> <small> /2yr</small></option>
              <option value="1"><span class="bold-text">₹9,500 </span> <small> /3yr</small></option>

            </select>
          </div> -->

           <div class="plan__order-btn plan__item">
             <a class="btn-call-to js-product-plan_cart-add" href="tel:+91 9363925757">Call now <i class="fa-solid fa-phone-volume"></i></a>
           </div>

           <div id="IDpid59351f85-a868-4d46-b716-563b60910f24" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" value="446" name="pid" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDbillingcycle52555249-6e28-4469-9753-8546e34dcd94" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" name="billingcycle" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDdomainselect1fbc5397-b0eb-44f3-aa3c-34c818663b7b" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" value="1" name="domainselect" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDdomainoption1c71db81-28dc-440b-9556-57c84840d3ea" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" name="domainoption" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDdomains688a655e-5a0e-4656-a12e-d8e21b39ca85" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" name="domains[]" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDskipconfig0a9b7bbe-bd61-40a7-a863-860be6a25444" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" value="1" name="skipconfig" data-submit="" disabled="" required="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div>
           <div id="IDcprice2ad640df-2322-4ae4-8525-390778c93cfc" class="null__item new-form__item" hidden="">
             <div class="form-ele textbox js-form-ele no-label" data-disabled="">
               <div class="form-ele__inp-wrapper">

                 <input type="hidden" class="form-ele__inp textbox__inp js-form-ele__inp js-textbox__inp" name="cprice" data-submit="" disabled="">
               </div>
               <div class="form-ele__helper js-form-ele__helper" hidden=""></div>
             </div>
           </div><button class="js-product-submit" hidden=""></button>
         </div>
       </div>
     </section>
   </section>
   <!-- END product plans -->




   <!-- other service -->
   <!-- <div class="service-block">
     <h2 class="features-des-5__title sec-title center">
       Our Additional <span class="sec-title__highlight">Hosting Solutions </span>
     </h2>
     <div class="container">
       <div class="row">
         <div class=" service-block_wrapper col-lg-4 mb-5 mb-lg-0">
           <div class="">
             <div class="service-block__img-wrap">
               <img class="service-block__img" src="assets/site/image/pages/homepage/why/vps-datacenter.svg" width="150px" height="150px" alt="vps-datacenter" loading="lazy">
             </div>
             <div class="service-block__title">
               <a href="tel:+91 9363925757">VPS Hosting </a>
             </div>
             <div class="service-block__desc">
               Power and flexibility are at your fingertips. Several data center options will help you decide what your
               site needs. You can experience 10 GBPS in Finland and Germany and other data centers for 1GBPS include
               <strong>India, Singapore, South Africa, Switzerland, Canada, USA and Singapore</strong>.
             </div>
           </div>
         </div>
         <div class=" service-block_wrapper col-lg-4 mb-5 mb-lg-0">
           <div class="">
             <div class="service-block__img-wrap">
               <img class="service-block__img" src="assets/site/image/pages/homepage/why/google-workspaces.svg" width="150px" height="150px" alt="google-workspaces" loading="lazy">
             </div>
             <div class="service-block__title">
               <a href="tel:+91 9363925757">Google Workspace</a>
             </div>
             <div class="service-block__desc">
               A seamless professional touch for your business. Experience real-time collaboration, advanced admin
               control, and data migration without worrying about data loss.
             </div>
           </div>
         </div>
         <div class=" service-block_wrapper col-lg-4 ">
           <div class="">
             <div class="service-block__img-wrap">
               <img class="service-block__img" src="assets/site/image/pages/homepage/why/cloud-storage.svg" width="150px" height="150px" alt="cloud-storage-services" loading="lazy">
             </div>
             <div class="service-block__title">
               <a href="tel:+91 9363925757">Cloud Storage Services</a>
             </div>
             <div class="service-block__desc">
               Get India's best Cloud Storage Services such as storage box and storage share with high data protection,
               flexible access, backups, and quick configuration.
             </div>
           </div>
         </div>
       </div>
     </div>
   </div> -->
   <?= $layout->services(); ?>
   <!-- END other service -->

   <!-- why choose  -->
   <!-- <section class="features-des-5">
     <div class="container">
       <h2 class="features-des-5__title sec-title center">
         Why Choose <span class="sec-title__highlight">eWallHost </span> Web Hosting ?
       </h2>
       <div class="features-des-5__items">
         <div class="features-des-5__item">
           <div class="features-des-5__img-wrapper">
             <img class="features-des-5__img" src="assets/site/image/pages/homepage/why/ssl-free.svg" width="150px" height="150px" loading="lazy" alt="Free SSL">
           </div>
           <div class="features-des-5__item-content">
             <p class="features-des-5__sub-title sec-title_inner">
               Free SSL
             </p>
             <p class="features-des-5__txt">
               Ensure that your customer’s data and website are secure.
             </p>
           </div>
         </div>
         <div class="features-des-5__item">
           <div class="features-des-5__img-wrapper">
             <img class="features-des-5__img" src="assets/site/image/pages/homepage/why/soft-install.svg" width="150px" height="150px" loading="lazy" alt="Softaculous Installer">
           </div>
           <div class="features-des-5__item-content">
             <p class="features-des-5__sub-title sec-title_inner">
               Softaculous Installer
             </p>
             <p class="features-des-5__txt">
               Quick application download is integrated with Control Panel, and users can access apps.
             </p>
           </div>
         </div>
         <div class="features-des-5__item">
           <div class="features-des-5__img-wrapper">
             <img class="features-des-5__img" src="assets/site/image/pages/homepage/why/scalability.svg" width="150px" height="150px" loading="lazy" alt="Scalability">
           </div>
           <div class="features-des-5__item-content">
             <p class="features-des-5__sub-title sec-title_inner">
               Scalability
             </p>
             <p class="features-des-5__txt">
               Easily scale up resources to match your website's needs.
             </p>
           </div>
         </div>
         <div class="features-des-5__item">
           <div class="features-des-5__img-wrapper">
             <img class="features-des-5__img" src="assets/site/image/pages/homepage/why/wordpress.svg" width="150px" height="150px" loading="lazy" alt="WordPress">
           </div>
           <div class="features-des-5__item-content">
             <p class="features-des-5__sub-title sec-title_inner">
               WordPress
             </p>
             <p class="features-des-5__txt">
               Create your own website with ease using our 1-click WordPress installation.
             </p>
           </div>
         </div>
         <div class="features-des-5__item">
           <div class="features-des-5__img-wrapper">
             <img class="features-des-5__img" src="assets/site/image/pages/homepage/why/low-cost.svg" width="150px" height="150px" loading="lazy" alt="Cheap Pricing">
           </div>
           <div class="features-des-5__item-content">
             <p class="features-des-5__sub-title sec-title_inner">
               Cheap Pricing
             </p>
             <p class="features-des-5__txt">
               All our plans are low-cost and have exceptional features.
             </p>
           </div>
         </div>
         <div class="features-des-5__item">
           <div class="features-des-5__img-wrapper">
             <img class="features-des-5__img" src="assets/site/image/pages/homepage/why/control-panel.svg" width="150px" height="150px" loading="lazy" alt="control-panel">
           </div>
           <div class="features-des-5__item-content">
             <p class="features-des-5__sub-title sec-title_inner">
               Control Panel
             </p>
             <p class="features-des-5__txt">
               Effortlessly manage files, emails, and more using cPanel or DirectAdmin.
             </p>
           </div>
         </div>

       </div>
     </div>
   </section> -->
   <!-- END why choose -->

   <!-- faQ -->
   <section class="faqs">
     <div class="container">
       <h2 class="faqs__title sec-title">Frequently Asked Questions</h2>
       <div class="faqs__items">
         <div class="faqs__item">
           <p class="faqs__sub-title sec-title_inner">
             <span class="faqs__sub-tite_img"> </span>
             Why Choose eWallHost Web Hosting Services?
           </p>
           <p class="faqs__txt">
             If you are looking for affordable web hosting services without breaking the bank, then you can consider
             eWallHost web hosting as an ideal option, as it is a one-stop shop where all your web hosting needs will be
             met without a huge investment. In addition, we have an experienced technical support team to help you from
             start to finish and ensure an unforgettable hosting journey.
           </p>
         </div>
         <div class="faqs__item">
           <p class="faqs__sub-title sec-title_inner">
             <span class="faqs__sub-tite_img"> </span>
             What is cPanel hosting?
           </p>
           <p class="faqs__txt">
             cPanel is one of the most popular control panels in the web hosting world that allows website owners to
             manage their domains, emails, and websites from a single interface. Compared to other control panels, it
             has
             been highly recommended to users because of its user-friendly interface that simplifies complex tasks so
             that you can easily manage your web hosting.
           </p>

         </div>
         <div class="faqs__item">
           <p class="faqs__sub-title sec-title_inner">
             <span class="faqs__sub-tite_img"> </span>
             Why choose Linux hosting with cPanel?
           </p>
           <p class="faqs__txt">
             The reason you must consider Linux hosting with cPanel is that it offers you versatility and scalability,
             allowing a website to easily expand its hosting resources as their sites grow in terms of traffic and data.
             cPanel allows users to conveniently upgrade their hosting plans, add additional domains, and allocate
             resources to meet their specific requirements.
           </p>
         </div>
         <div class="faqs__item">
           <p class="faqs__sub-title sec-title_inner">
             <span class="faqs__sub-tite_img"> </span>
             What types of websites does Shared Linux hosting support?
           </p>
           <p class="faqs__txt">
             Linux Shared Hosting will support websites built with PHP, MySQL, Python, or Perl.
           </p>
         </div>
       </div>
     </div>
   </section>
   <!-- END faQ -->

   <!-- client view -->
   <?= $layout->clients(); ?>
   <!-- <section class="clients">
     <div class="container">
       <h2 class="clients__title sec-title center">
         Trusted by Over <span class="sec-title__highlight">20,000 Customers</span>
       </h2>
       <p class="clients__sub-title">
         We serve all types of customers from individuals to small businesses to
         enterprises customers.
       </p>
       <div class="clients__items">
         <div class="clients__item child1">
           <img src="assets/site/image/pages/homepage/clients/syscogen.png" alt="Syscogen" width="150px" height="33px" loading="lazy">
         </div>
         <div class="clients__item">
           <img src="assets/site/image/pages/homepage/clients/colors.png" alt="colors" width="150px" height="48px" loading="lazy">
         </div>
         <div class="clients__item">
           <img src="assets/site/image/pages/homepage/clients/prithviraj.png" alt="Prithviraj" width="150px" height="150px" loading="lazy">
         </div>
         <div class="clients__item">
           <img src="assets/site/image/pages/homepage/clients/harvard.png" alt="harvard" width="150px" height="150px" loading="lazy">
         </div>
         <div class="clients__item">
           <img src="assets/site/image/pages/homepage/clients/chess-in-lakecity.png" alt="chess-in-lakecity" width="150px" height="150px" loading="lazy">
         </div>
         <div class="clients__item">
           <img src="assets/site/image/pages/homepage/clients/shiftco.png" alt="chess-in-lakecity" width="150px" height="150px" loading="lazy">
         </div>
       </div>
     </div>
   </section> -->
   <!-- END client view -->




   <!-- SCRIPT -->
   <script src="assets/js/main.js"></script>
 </body>

 </html>