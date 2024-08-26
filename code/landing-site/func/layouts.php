<?php

class Layouts
{

  public $title;
  private $section = [];
  public $clients;

  public function __construct()
  {
    $this->section['nav'] = '<nav class="main-nav js-main-nav sticky">
    <div class="main-nav__top">
      <div class="container">
        <ul class="main-nav__items">

          <li class="main-nav__item enquiry">
            <a class="main-nav__item-link" href="tel:+91 9363925757"><i class="fas fa-phone"></i>&nbsp;&nbsp;Enquiry Now : +91 9363925757</a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-nav__bottom">
      <div class="container">
        <div class="main-nav__items">
          <span class="main-nav__item left">
            <a class="main-nav__logo-link" href="tel:+91 9363925757"><img class="main-nav__logo" src="assets/site/image/common/ewallhost-logo.svg" alt="eWallHost" width="300px" height="107px" title="eWallHost" /></a>
          </span>
          <span class="main-nav__item ham-wrapper" style="border-left: 1px solid #80808033; margin-left: 10px;visibility: hidden">
            <button class="main-nav__ham main-nav__item-link" style="color: #454d54; font-weight: 400">
              <i class="fas fa-bars"></i> Menu
            </button>
          </span>
          <div class="" data-name="bottom-menu">
            <button class="main-nav__bottom-menu-close main-nav__bottom-menu-item main-nav__item-link dropdown-toggle" data-toggle="dropdown">
              <span>X</span>
            </button>
            <button class="main-nav__bottom-menu-back main-nav__bottom-menu-item main-nav__item-link dropdown-toggle" data-toggle="dropdown">
              <span><i class="fas fa-arrow-left"></i>  Back</span>
            </button>
            <div class="main-nav__bottom-menu-item title">All Products</div>
            <div class="menu-right-items">
              <span class="main-nav__item dropdown">
                <a class="main-nav__item-link dropdown-toggle js-main-nav_item-link" id="navbarDropdown" href="tel:+91 9363925757" role="a" data-toggle="dropdown">

                  <span>Domain</span>
                </a>

              </span>
              <span class="main-nav__item dropdown">
                <a class="main-nav__item-link dropdown-toggle js-main-nav_item-link" data-toggle="dropdown" href="tel:+91 9363925757">

                  <span>Hosting</span>
                </a>

              </span>
              <span class="main-nav__item dropdown">
                <a class="main-nav__item-link dropdown-toggle js-main-nav_item-link" data-toggle="dropdown" href="tel:+91 9363925757">

                  <span>Server</span>
                </a>

              </span>

              <span class="main-nav__item dropdown email">
                <a class="main-nav__item-link dropdown-toggle js-main-nav_item-link" data-toggle="dropdown" href="tel:+91 9363925757">

                  <span>Email</span>
                </a>

              </span>
              <span class="main-nav__item dropdown security">
                <a class="main-nav__item-link dropdown-toggle js-main-nav_item-link" data-toggle="dropdown" href="tel:+91 9363925757">

                  <span>Security</span>
                </a>

              </span>

              <!-- <span class="main-nav__item">
               <button class="main-nav-item" href="https://www.ewallhost.com/offers-zone">
                 <img class="main-nav__dropdown-img offerico" src="assets/site/image/common/header/offer.svg"
                   alt="offers icon" width="18" height="18" /> 
                 <span>Offers</span>
               </button>
             </span> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>';

  }



  public function getSection($sectionName)
  {
    // return $sectionName;
    if(isset($this->section[$sectionName])){
      return $this->section[$sectionName];
    }else{
      return null;
    }
  }

  public function services()
  {
    $html =  <<<HTML
       <div class="service-block">
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
   </div>
  HTML;

    return $html;
  }


  public function clients()
  {
    $this->clients = '<section class="clients">
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
  </section>';
    return $this->clients;
  }
}
