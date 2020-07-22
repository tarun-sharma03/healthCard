<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>CodeMonk</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="manifest" href="site.webmanifest" />
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/slicknav.css" />
  <link rel="stylesheet" href="assets/css/flaticon.css" />
  <link rel="stylesheet" href="assets/css/gijgo.css" />
  <link rel="stylesheet" href="assets/css/animate.min.css" />
  <link rel="stylesheet" href="assets/css/animated-headline.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="assets/css/themify-icons.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/nice-select.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>


<body>

  <!-- Preloader Start -->
  <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
          <img src="assets/img/logo/loader.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Preloader Start End -->

  <header>
    <!-- Header Start -->
    <div class="header-area">
      <div class="main-header header-sticky">
        <div class="container-fluid">
          <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-xl-2 col-lg-2 col-md-1">
              <div class="logo">
                <a href="index.php">
                  <img src="assets/img/logo/logo.png" alt="" width="200" height="50">
                </a>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10">
              <div class="menu-main d-flex align-items-center justify-content-end">
                <!-- Main-menu -->
                <div class="main-menu f-right d-none d-lg-block">
                  <nav>
                    <ul id="navigation">
                      <li><a href="#">Home</a></li>
                      <li><a href="#about">About Us</a></li>
                      <li>
                        <a href="">Hospitals</a>
                        <ul class="submenu">
                          <li><a href="#hospitalModal" data-toggle="modal">Login</a></li>
                          <li><a href="hospital/register.php">Registration form for Hospital</a></li>
                          <li><a href="hospital/registerDoctor.php">Registration form for doctors</a></li>
                        </ul>
                      </li>
                      <li><a href="#contact">Contact</a></li>
                    </ul>
                  </nav>
                </div>
                <div class="header-right-btn f-right d-none d-lg-block ml-30">
                  <a href="#loginModal" data-toggle="modal" class="btn header-btn">Register/ Login</a>
                </div>
              </div>
            </div>

            <!-- Mobile Menu -->
            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->
  </header>


  <!-- Modal for hospital login -->

  <div id="hospitalModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="col-11 modal-title text-center"><strong> Login Form </strong></h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <form class="needs-validation" method="POST" action="hospital/functionality/loginAct.php">
            <div class="form-group row">
              <div class="col-md-12 mb-3">
                <label class=""></label>
                <a href="#">

                  <img class="d-block mx-auto mb-4" src="assets/img/logo/logo.png" alt="" width="300" height="75">
                </a>


              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 mb-3">
                <label class=""></label>
                <h2 class="center"> Hospital Login </h2>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6 mb-3">
                <label for="firstName">
                  <h2>User name</h2>
                </label>
                <input type="text" name="userName" class="form-control" id="userName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid user name is required.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="password">
                  <h2>Password</h2>
                </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid password is required.
                </div>
              </div>
            </div>




            <div class="form-group row">
              <div class="offset-md-0 col-md-6">
                <button type="submit" name="submit" class="btn btn-primary">
                  Login
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>

              </div>
            </div>
            <br>
            <br>
            <div class="form-group row">
              <div class="offset-md-0 col-md-5">
                <label for=""></label>
                <h2>Not A Registered Hospital ?</h2>
              </div>
              <div class="col-md-2">
                <a href="hospital/register.php" role="button" class="btn btn-secondary btn-xs">Register Here!</a>
              </div>
            </div>

            <div class="my-5 pt-5 text-muted text-center text-small">
              <p class="mb-1">&copy; 2020 CodeMonk</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
              </ul>

            </div>
          </form>
        </div>


      </div>
    </div>
  </div>


  <!--  modal for patient login -->
  <!-- use correct comments damn it -->

  <div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="col-11 modal-title text-center"><strong> Login Form </strong></h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate method="POST" action="#">
            <div class="form-group row">
              <div class="col-md-12 mb-3">
                <label class=""></label>
                <a href="#">

                  <img class="d-block mx-auto mb-4" src="assets/img/logo/logo.png" alt="" width="300" height="75">
                </a>


              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 mb-3">
                <label class=""></label>
                <h2 class="center"> Login Information </h2>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6 mb-3">
                <label for="firstName">
                  <h2>User name</h2>
                </label>
                <input type="text" name="userName" class="form-control" id="userName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid user name is required.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="password">
                  <h2>Password</h2>
                </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid password is required.
                </div>
              </div>
            </div>




            <div class="form-group row">
              <div class="offset-md-0 col-md-6">
                <button type="submit" class="btn btn-primary">
                  Login
                </button>

                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>

              </div>
            </div>
            <br>
            <br>
            <div class="form-group row">
              <div class="offset-md-0 col-md-4">
                <label for=""></label>
                <h2>Not A Registered User ?</h2>
              </div>
              <div class="col-md-2">
                <a href="patient/userRegister.php" role="button" class="btn btn-secondary btn-xs">Register Here!</a>
              </div>
            </div>

            <div class="my-5 pt-5 text-muted text-center text-small">
              <p class="mb-1">&copy; 2020 CodeMonk</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
              </ul>

            </div>
          </form>
        </div>


      </div>
    </div>
  </div>


  <!-- modal for doctor login -->
  <div id="doctorModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="col-11 modal-title text-center"><strong> Login Form </strong></h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate method="POST" action="functionality/userLoginAct.php">
            <div class="form-group row">
              <div class="col-md-12 mb-3">
                <label class=""></label>
                <a href="#">

                  <img class="d-block mx-auto mb-4" src="assets/img/logo/logo.png" alt="" width="300" height="75">
                </a>


              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 mb-3">
                <label class=""></label>
                <h2 class="center"> Doctor Login </h2>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6 mb-3">
                <label for="firstName">
                  <h2>User name</h2>
                </label>
                <input type="text" name="userName" class="form-control" id="userName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid user name is required.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="password">
                  <h2>Password</h2>
                </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid password is required.
                </div>
              </div>
            </div>




            <div class="form-group row">
              <div class="offset-md-0 col-md-6">
                <button type="submit" class="btn btn-primary">
                  Login
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>

              </div>
            </div>
            <br>
            <br>
            <div class="form-group row">
              <div class="offset-md-0 col-md-4">
                <label for=""></label>
                <h2>Not A Registered Doctor?</h2>
                <br>
                <label for="">
                  <h2>Contact Your Hospital!!<h2>
                </label>
              </div>
            </div>

            <div class="my-5 pt-5 text-muted text-center text-small">
              <p class="mb-1">&copy; 2020 CodeMonk</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
              </ul>

            </div>
          </form>
        </div>


      </div>
    </div>
  </div>






  <main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
      <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="hero__caption">
                  <span>Committed to success</span>
                  <h1 class="cd-headline letters scale">
                    We care about your
                    <strong class="cd-words-wrapper">
                      <b class="is-visible">health</b>
                      <b>diet</b>
                      <b>fitness</b>
                    </strong>
                  </h1>
                  <a href="#contact" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">
                    Contact Us <i class="ti-arrow-right"></i>
                  </a>

                  <a href="https://www.covid19india.org/" target="_blank" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">
                    Corona Tracker <i class="ti-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Single Slider -->
      </div>
    </div>
    <!-- slider Area End-->

    <!--? About Start-->
    <section id="about">
      <div class="about-area section-padding2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="about-caption mb-50">
                <!-- Section Tittle -->
                <div class="section-tittle section-tittle2 mb-35">
                  <span>Hello world !</span>
                  <h2>Welcome To Our Online Hospital Service</h2>
                </div>
                <p>
                  Afraid of going to the hospital in these corona times?
                  <br>Solve your queries regarding any health issues online by reaching out to doctors in your city.
                </p>
                <div class="about-btn1 mb-30">
                  <a href="#loginModal" data-toggle="modal" class="btn about-btn">
                    Patient Portal<i class="ti-arrow-right"></i>
                  </a>
                </div>
                <div class="about-btn1 mb-30">
                  <a href="#hospitalModal" data-toggle="modal" class="btn about-btn2">
                    Hospital Portal<i class="ti-arrow-right"></i>
                  </a>
                </div>
                <div class="about-btn1 mb-30">
                  <a href="#doctorModal" data-toggle="modal" class="btn about-btn">
                    Doctor Portal<i class="ti-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About  End-->

    <!--? All startups Start -->
    <div class="all-starups-area testimonial-area fix">
      <!-- left Contents -->
      <div class="starups">
        <!--? Testimonial Start -->
        <div class="h1-testimonial-active">
          <!-- Single Testimonial -->
          <div class="single-testimonial text-center">
            <!-- Testimonial Content -->
            <div class="testimonial-caption">
              <div class="testimonial-top-cap">
                <p>
                  “In these corona times, I feel scared to go to hospitals for minor illnesses. This platform is a great rescue option.”
                </p>
              </div>
              <!-- founder -->
              <div class="testimonial-founder d-flex align-items-center justify-content-center">
                <div class="founder-img">
                  <img src="assets/img/gallery/Homepage_testi.png" alt="">
                </div>
                <div class="founder-text">
                  <span>Abcdef Ghi</span>
                  <p>---</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Testimonial End -->
      </div>
      <!--Right Contents  -->
      <div class="starups-img"></div>
    </div>
    <!--All startups End -->
  </main>

  <footer id="contact">
    <!--? Footer Start-->
    <div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.jpg">
      <div class="container">
        <div class="footer-top footer-padding">
          <div class="row d-flex justify-content-between">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
              <div class="single-footer-caption mb-50">
                <!-- logo -->
                <div class="footer-logo">
                  <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt="" height="75" width="200"></a>
                </div>

              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-5">
              <div class="single-footer-caption mb-50">
                <div class="footer-tittle">
                  <h4>About Us</h4>
                  <div class="footer-pera">
                    <p class="info1">
                      We are a team from Thapar Institute of Engineering and Technology.
                    </p>
                    <p class="info1">
                      Tarun Kumar Dixit <br>
                      Ansh Garg <br>
                      Taranjot Singh <br>
                      Sukhwmit Kaur
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
              <div class="single-footer-caption mb-50">
                <div class="footer-number mb-50">
                  <h4><span>+91 </span>7885 3222</h4>
                  <p>youremail@gmail.com</p>
                </div>
                <!-- Form -->
                <div class="footer-form">
                  <div id="mc_embed_signup">
                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                      <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                      <div class="form-icon">
                        <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                          Send
                        </button>
                      </div>
                      <div class="mt-10 info"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End-->
  </footer>

  <!-- Scroll Up -->
  <div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
  </div>

  <!-- JS here -->

  <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <!-- Jquery, Popper, Bootstrap -->
  <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="./assets/js/popper.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <!-- Jquery Mobile Menu -->
  <script src="./assets/js/jquery.slicknav.min.js"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="./assets/js/owl.carousel.min.js"></script>
  <script src="./assets/js/slick.min.js"></script>
  <!-- One Page, Animated-HeadLin -->
  <script src="./assets/js/wow.min.js"></script>
  <script src="./assets/js/animated.headline.js"></script>
  <script src="./assets/js/jquery.magnific-popup.js"></script>

  <!-- Date Picker -->
  <script src="./assets/js/gijgo.min.js"></script>
  <!-- Nice-select, sticky -->
  <script src="./assets/js/jquery.nice-select.min.js"></script>
  <script src="./assets/js/jquery.sticky.js"></script>

  <!-- counter , waypoint -->
  <script src="./assets/js/jquery.counterup.min.js"></script>
  <script src="./assets/js/waypoints.min.js"></script>
  <script src="./assets/js/jquery.countdown.min.js"></script>
  <!-- contact js -->
  <script src="./assets/js/contact.js"></script>
  <script src="./assets/js/jquery.form.js"></script>
  <script src="./assets/js/jquery.validate.min.js"></script>
  <script src="./assets/js/mail-script.js"></script>
  <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

  <!-- Jquery Plugins, main Jquery -->
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/main.js"></script>
</body>


</html>