<?php


class Layouts
{
    public   $title_tag;
    public   $nav_active;

    public function __construct($title, $nav_active)
    {
        $this->title_tag = $title;
        $this->nav_active = $nav_active;
    }

    public function __destruct()
    {

        $this->title_tag = null;
        $this->nav_active = null;
    }

    /* ======================================================= 
                 header_links  
=======================================================  */
    public function header_links()
    {
?>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> <?php echo $this->title_tag; ?></title>
        <!-- bootstrap css -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&
    family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&
    family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet" />
        <!-- main css -->
        <link rel="stylesheet" href="assets/css/style.css" />
        <!-- glightbox css -->
        <link rel="stylesheet" href="assets/css/glightbox.min.css" />
        <!-- font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php
    }
    /* ======================================================= 
                   navbar  
=======================================================  */
    public function navbar()
    {
    ?>
        <header id="header" class="header">
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <nav class="navbar navbar-expand-lg fixed-top">
                    <a href="index.php" class="navbar-brand d-flex align-items-center me-auto me-xl-0">
                        <i class="fa-solid fa-camera-retro"></i>
                        <h1>PhotoFolio</h1>
                    </a>

                    <div class="mx-auto">
                        <div class="offcanvas offcanvas-end order-1 order-md-2" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbar2Label"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="mx-auto">
                                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                                        <li class="nav-item">
                                            <a class="nav-link <?php echo ($this->nav_active === 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php echo ($this->nav_active === 'about.php') ? 'active' : ''; ?>" href="about.php">About</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle
                                              <?php echo ($this->nav_active === 'gallery.php') ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Gallery
                                            </a>
                                            <ul class="dropdown-menu">

                                                <li><a class="dropdown-item " href="gallery.php">Nature</a></li>
                                                <li><a class="dropdown-item " href="gallery.php">People</a></li>
                                                <li>
                                                    <a class="dropdown-item " href="gallery.php">Architecture</a>
                                                </li>
                                                <li><a class="dropdown-item " href="gallery.php">Animals</a></li>
                                                <li><a class="dropdown-item " href="gallery.php">Sports</a></li>
                                                <li><a class="dropdown-item " href="gallery.php">Travel</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php echo ($this->nav_active === 'services.php') ? 'active' : ''; ?> " href="services.php">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php echo ($this->nav_active === 'contact.php') ? 'active' : ''; ?> " href="contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="header-social-links order-1">
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <button class="navbar-toggler order-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
                            <span class="navbar-toggler-icon order-2">
                                <i class="fa-solid fa-bars"></i>
                            </span>
                        </button>
                    </div>
                </nav>
            </div>
        </header>
    <?php
    }
    /* ======================================================= 
                  gallery_box  
=======================================================  */

    public function gallery_box()
    {
    ?>
        <section id="gallery" class="gallery">
            <div class="container-fluid">
                <div class="row gy-3 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-2.jpg" title="Gallery 2" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-3.jpg" title="Gallery 3" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-4.jpg" title="Gallery 4" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-5.jpg" title="Gallery 5" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-6.jpg" title="Gallery 6" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-7.jpg" title="Gallery 7" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-8.jpg" title="Gallery 8" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-9.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-9.jpg" title="Gallery 9" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-10.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-10.jpg" title="Gallery 10" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-11.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-11.jpg" title="Gallery 11" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-12.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-12.jpg" title="Gallery 12" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-13.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-13.jpg" title="Gallery 13" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-14.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-14.jpg" title="Gallery 14" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-15.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-15.jpg" title="Gallery 15" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="assets/img/gallery/gallery-16.jpg" class="img-fluid" alt="" />
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="assets/img/gallery/gallery-16.jpg" title="Gallery 16" class="glightbox preview-link">
                                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                                </a>
                                <a href="gallery-single.php" class="details-link">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php
    }

    /* ======================================================= 
                  testimonials  
=======================================================  */

    public function testimonials()
    {
    ?>
        <section id="testimonials" class="testimonials mt-5">
            <div class="container">
                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>What they are saying</p>
                </div>

                <div class="testimonial-slide swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <p>
                                    Proin iaculis purus consequat sem cure digni ssim donec
                                    porttitora entum suscipit rhoncus. Accusantium quam, ultricies
                                    eget id, aliquam eget nibh et. Maecen aliquam, risus at
                                    semper.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="" />
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <p>
                                    Export tempor illum tamen malis malis eram quae irure esse
                                    labore quem cillum quid cillum eram malis quorum velit fore
                                    eram velit sunt aliqua noster fugiat irure amet legam anim
                                    culpa.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="" />
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <p>
                                    Enim nisi quem export duis labore cillum quae magna enim sint
                                    quorum nulla quem veniam duis minim tempor labore quem eram
                                    duis noster aute amet eram fore quis sint minim.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="" />
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <p>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa
                                    multos export minim fugiat minim velit minim dolor enim duis
                                    veniam ipsum anim magna sunt elit fore quem dolore labore
                                    illum veniam.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="" />
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <p>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua
                                    veniam tempor noster veniam enim culpa labore duis sunt culpa
                                    nulla illum cillum fugiat legam esse veniam culpa fore nisi
                                    cillum quid.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="" />
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

    <?php
    }

    /* ======================================================= 
                contact_form  
=======================================================  */

    public function contact_form()
    {
    ?>
        <section id="contact" class="contact">
            <div class="container">
                <div class="row justify-content-center gy-4">
                    <div class="col-lg-3">
                        <div class="info-item d-flex">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex">
                            <i class="fa-solid fa-envelope"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="info-item d-flex">
                            <i class="fa-solid fa-mobile-screen"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" name="" class="form-control" id="" />
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" name="" class="form-control" id="" />
                                </div>
                                <div class="col-md-12 form-group mt-3">
                                    <input type="text" name="" class="form-control" id="" />
                                </div>
                                <div class="col-md-12 form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <?php
    }

    /* ======================================================= 
                contact_btn  
=======================================================  */

    public function contact_btn()
    {
    ?>
        <a href="contact.php" class="btn-get-started" id="contact-btn">Available for hire</a>
    <?php
    }

    /* ======================================================= 
                footerContent  
=======================================================  */

    public function footerContent()
    {
    ?>
        <footer class="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved
                </div>
                <div class="credits">Designed by <a href="#">BootstrapMade</a></div>
            </div>
        </footer>

    <?php
    }
    /* ======================================================= 
                   script  
=======================================================  */
    public function script()
    {
    ?>

        <!-- bootstrap js -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- glightbox js -->
        <script src="assets/js/glightbox.min.js"></script>
        <!-- custom js -->
        <script src="assets/js/script.js"></script>


<?php
    }
}



?>