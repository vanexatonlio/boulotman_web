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

    <section id="contact" class="section-bg">
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h3>Booking Form</h3>
              <p>Fill the form below to book a service.</p>
            </div>
            
            <div class="form">
              <form action="/book" method="post" role="form">
                    
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-4">    
    <div  class="form-group">
        
            <label  class=" requiredField">
                Choose a specific type for this service<span class="asteriskField">*</span>
            </label>
                
                <div class="">
                    <select name="service_type" class="select form-control" required >
  <option value="" selected>Choose...</option>

  <option value="35">Building from scratch</option>

  <option value="37">Renovation</option>

</select>
 </div>        
    </div>
          </div>
              </div>
                    
                    <div class="form-row">
                      <div class="form-group col-md-6 mb-0">
                        
    
    <div id="div_id_first_name" class="form-group">
        
            <label for="id_first_name" class=" requiredField">
                First name<span class="asteriskField">*</span>
            </label>
                <div class="">
                    <input type="text" name="first_name" placeholder="John" class="textinput textInput form-control" required id="id_first_name">
            
                </div>       
    </div>
     </div>
      <div class="form-group col-md-6 mb-0">
                        
    <div id="div_id_last_name" class="form-group">
        
            <label for="id_last_name" class=" requiredField">
                Last name<span class="asteriskField">*</span>
            </label>
          
                <div class="">
                    <input type="text" name="last_name" placeholder="Doe" class="textinput textInput form-control" required id="id_last_name">
              


                </div>
            
        
    </div>
    


                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6 mb-0">
            
    <div id="div_id_phone_number" class="form-group">
        
            <label for="id_phone_number" class=" requiredField">
                Phone number<span class="asteriskField">*</span>
            </label>
                 
                <div class="">
                    <input type="text" name="phone_number" placeholder="+237 xxx xxx xxx" class="textinput textInput form-control" required id="id_phone_number">
                    

                </div>
            
        
    </div>
    


                      </div>
                      <div class="form-group col-md-6 mb-0">
    
    <div id="div_id_email_address" class="form-group">
        
            <label for="id_email_address" class="">
                Email address
            </label>
                <div class="">
                    <input type="email" name="email_address" placeholder="john@doe.com" class="emailinput form-control" id="id_email_address">
                    
                </div>    
    </div>
      </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-md-12 mb-0">
                                    
    <div id="div_id_home_address" class="form-group">
        
            <label for="id_home_address" class="">
                Address
            </label>
                <div class="">
                    <input type="text" name="home_address" placeholder="Personal Address" class="textinput textInput form-control" id="id_home_address">
                  


                </div>
                
    </div>
    
                            </div>
                        </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-0">
                            <p class="mt-2 text-success">Specify the address where the job will be done</p>
                                <div class="form-row">
                      <div class="form-group col-md-6 mb-0">
                        
    <div id="div_id_city" class="form-group">
        
            <label for="id_city" class="">
                City
            </label>
                
                <div class="">
                    <input type="text" name="city" class="textinput textInput form-control" id="id_city">
                    
                </div>    
    </div>
    
                      </div>
                      <div class="form-group col-md-6 mb-0">

    
    <div id="div_id_neighbourhood" class="form-group">
        
            <label for="id_neighbourhood" class="">
                Neighbourhood
            </label>
        
                <div class="">
                    <input type="text" name="neighbourhood" class="textinput textInput form-control" id="id_neighbourhood">

                </div>
            
        
    </div>
                      </div>
                    </div>
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6 mb-0">
    
    <div id="div_id_job_date" class="form-group">
        
            <label for="id_job_date" class="">
                Date to perform job
            </label>
                   
                <div class="">
                    <input type="date" name="job_date" class="dateinput form-control" id="id_job_date">
                </div>
            
        
    </div>
    


                      </div>
                      <div class="form-group col-md-6 mb-0">
                        
    
    <div id="div_id_job_time" class="form-group">
        
            <label for="id_job_time" class="">
                Time to perform job
            </label>      
            
                <div class="">
                    <input type="time" name="job_time" class="timeinput form-control" id="id_job_time">

                </div>    
    </div>
    
                      </div>
                    </div>

                  <div class="row">
                      <div class="form-group col-md-12">
   
    <div id="div_id_calling_period" class="form-group">
        
            <label for="id_calling_period" class="">
                I would like to receive calls from
            </label>
   
                <div class="">
                    <select name="calling_period" class="select form-control" id="id_calling_period">
  <option value="" selected>Choose...</option>

  <option value="AT">Any time (08:00 AM - 6:00 PM)</option>

  <option value="P1">08:00 AM - 10:00 AM</option>

  <option value="P2">10:00 AM - 12:00 AM</option>

  <option value="P3">12:00 AM - 02:00 PM</option>

  <option value="P4">02:00 PM - 04:00 PM</option>

  <option value="P5">04:00 PM - 06:00 PM</option>

  <option value="P5">06:00 PM - 08:00 PM</option>

</select>

                </div>
                </div>
                      </div>
                  </div>

                    <div class="row">
                      <div class="form-group col-md-12">
    
    <div id="div_id_requirements" class="form-group">
        
            <label for="id_requirements" class="">
                Specify your requirements, if any
            </label>
                <div class="">
                    <textarea name="requirements" cols="40" rows="4" class="textarea form-control" id="id_requirements">
</textarea>
          </div>         
                      </div>
                      </div>
                  </div>
        <div class="form-group">
    <div id="div_id_terms_and_conditions" class="form-check">          
                    <input type="checkbox" name="terms_and_conditions" class="checkboxinput form-check-input" required id="id_terms_and_conditions">
                
                <label for="id_terms_and_conditions" class="form-check-label requiredField">
                    I have read and i accept the terms and conditions.<span class="asteriskField">*</span>
                </label>
        
    </div>
    
        
        </div>
                <div class="text-center"><button class="btn btn-warning pl-3 pr-3 mt-5" type="submit">Book Service Now</button></div>
              </form>
            </div>
          
          </div>
    </section>

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
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
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