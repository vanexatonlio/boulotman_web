<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')|Boulot Man</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v3.1.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
   <div class="content">
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">BoulotMan</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="/">Home</a></li>
              <li><a href="/service">services</a></li>
              <li><a href="/about-us">About Us</a></li>
              <li><a href="/contact-us">Contact Us</a></li>
             

            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <br><br>


        <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">OUR SERVICES</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class=" col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Engineering</li>
            <li data-filter=".filter-card">Information Technology</li>
            <li data-filter=".filter-web">House Keeping & Baby Sitting</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-4 portfolio-item filter-app" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/construction.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/construction.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Building Construction</a></h4>

               <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>

            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 portfolio-item filter-app" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/electricity.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/electricity.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Electricity</a></h4>

               <a href="/book-service/building-construction" class="btn btn-warning mb-0 mt-3 ">Book Service</a>

            </div>
          </div>
        </div>

       <div class="col-lg-4 col-md-4 portfolio-item filter-app" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/carpentry.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/carpentry.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Carpentry</a></h4>

               <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>

            </div>
          </div>
        </div>
        <br><br><br><br><br>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/painting.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/painting.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Painting</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 portfolio-item filter-app" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/mechanics.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/mechanics.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Mechanic</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/repair.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/repair.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Repair services</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 portfolio-item filter-app" style="height:400px; ">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/plumbing.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/plumbing.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Plumbing</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 portfolio-item filter-web" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/web3.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/web3.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Pressing-Dry Cleaning </a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/refrigeration.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/refrigeration.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Refrigeration</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/digit.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/digit.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 2"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Digital marketing</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 portfolio-item filter-web" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/web2.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/web2.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 2"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Nanny</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="height:400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/auto.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/auto.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="App 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Auto Mechanics</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 portfolio-item filter-card" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/software.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/software.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 1"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Software Development</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/graphic.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/graphic.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Graphic Design</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>
         <div class="col-lg-4 col-md-4 portfolio-item filter-card" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/webdev.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/webdev.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Web design and Development</a></h4>
         <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a> </div>
          </div>
        </div> 
        <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/database.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/database.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Database Management</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 portfolio-item filter-card" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/cloud.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/cloud.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Cloud Computing</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 portfolio-item filter-card" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/network.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/network.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Networking</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 portfolio-item filter-card" style="height: 400px;">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/computer.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/computer.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info" style="height: 110px;">
              <h4><a href="portfolio-details.html">Computer Repair</a></h4>
              <a href="/book" class="btn btn-warning mb-0 mt-3 ">Book Service</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/web1.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">House Keeping</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>
         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{asset('frontend/assets/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
              <a href="{{asset('frontend/assets/img/portfolio/web1.jpg')}}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Deep Cleaning</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>

      </div>

      </div>
    </section><!-- End Portfolio Section -->
 <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>BoulotMan</h3>
            <p>BoulotMan is a virtual booking company for Technicians and Engineers around Cameroon and Other CEMAC Countries to serve without dislocating residents.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="/">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/about-us">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="/service">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
             Bonamoussadi, Bloc L <br>
             Douala, Bonamoussadi<br>
              Cameroon <br>
              <strong>Phone:</strong>  +237 691 58 27 18<br>
              <strong>Email:</strong> boulotman237@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BoulotMan</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
       BoulotMan <a href="https://bootstrapmade.com/">2020 </a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
</div>
  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
  @yield('scripts')

</body>
