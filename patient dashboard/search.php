<?php include "fxn.php" ?>

<!DOCTYPE html>
<html lang="en">
<!-- doccure/search.html  30 Nov 2019 04:12:16 GMT -->

<head>
  <meta charset="utf-8" />
  <title>CodeMonk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

  <!-- Datetimepicker CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />

  <!-- Select2 CSS -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css" />

  <!-- Fancybox CSS -->
  <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

  <!-- ajax script do not delete  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    <!-- Header -->
    <header class="header"></header>
    <!-- /Header -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-md-8 col-12">
            <h2 class="breadcrumb-title">Search for a Doctor</h2>
          </div>
          <div class="col-md-4 col-12 d-md-block d-none">
            <div class="sort-by">
              <a href="patient-dashboard.html"> <span class="sort-title">Home</span> </a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
            <!-- side bar div for use maybe  -->
          </div>

          <div class="col-md-12 col-lg-8 col-xl-9">
            <!-- main content area  -->

            <form class="form" method="POST" action="submitQuery.php">
              <div class="row">
                <label class="col-4" for="State"><b>State</b></label>
                <select class="col-8" name="State" type="select" id="State_c" required>
                  <option value="" selected disabled>Select State</option>
                  <?php $states = getThis("SELECT `id`,`name` FROM `states` WHERE `country_id` = '101'");
                  for ($i = 0; $i < sizeof($states); $i++) {
                  ?>
                    <option value="<?php echo $states[$i]['id']; ?>"><?php echo $states[$i]['name']; ?>
                    </option>
                  <?php
                  }
                  ?>
                </select>
              </div>

              <br />

              <div class="row">
                <label class="col-4" for="City"><b>City</b></label>
                <select class="col-8" name="City" type="select" id="City_c" required>
                  <option value="" selected disabled>Select State First</option>
                </select>
              </div>
              <br />
              <div class="row">
                <label class="col-4" for="Hospital"><b>Hospital</b></label>
                <select class="col-8" name="Hospital" type="select" id="Hospital_c" required>
                  <option value="" selected disabled>Select City First</option>
                </select>
              </div>

              <br />
              <div class="row">
                <label class="col-4" for="Doctor"><b>Doctor</b></label>
                <select class="col-8" name="Doctor" type="select" id="Doctor_c" required>
                  <option value="" selected disabled>Select Hospital First</option>
                </select>
              </div>
              <br />

              <br />

              <br />

              <div class="row">
                <div class="col-4"></div>
                <button type="submit" class="col-8 btn logout">
                  <i class="fas fa-bookmark"></i> Submit Query
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /Page Content -->

    <!-- Footer -->
    <footer class="footer">
      <!-- Footer Top -->
      <div class="footer-top">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-5">
              <!-- Footer Widget -->
              <div class="footer-widget footer-about">
                <h1>CodeMonk</h1>
                <div class="footer-about-content">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.
                  </p>
                  <div class="social-icon">
                    <ul>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fab fa-dribbble"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- /Footer Widget -->
            </div>

            <div class="col-lg-6 col-md-1"></div>

            <!-- Footer Widget -->

            <div class="col-lg-3 col-md-5">
              <!-- Footer Widget -->
              <div class="footer-widget footer-contact">
                <h2 class="footer-title">Contact Us</h2>
                <div class="footer-contact-info">
                  <div class="footer-address">
                    <span><i class="fas fa-map-marker-alt"></i></span>
                    <p>
                      3556 Beech Street, San Francisco,<br />
                      California, CA 94108
                    </p>
                  </div>
                  <p>
                    <i class="fas fa-phone-alt"></i>
                    +1 315 369 5943
                  </p>
                  <p class="mb-0">
                    <i class="fas fa-envelope"></i>
                    CodeMonk@example.com
                  </p>
                </div>
              </div>
              <!-- /Footer Widget -->
            </div>
          </div>
        </div>
      </div>
      <!-- /Footer Top -->

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div class="container-fluid">
          <!-- Copyright -->
          <div class="copyright">
            <div class="row">
              <div class="col-md-3 col-lg-3">
                <div class="copyright-text">
                  <p class="mb-0">&copy CodeMonk</p>
                </div>
              </div>
              <div class="col-lg-5 col-md-1"></div>
              <div class="col-md-6 col-lg-3">
                <!-- Copyright Menu -->
                <div class="copyright-menu">
                  <ul class="policy-menu">
                    <li>
                      <a href="term-condition.html">Terms and Conditions</a>
                    </li>
                    <li><a href="privacy-policy.html">Policy</a></li>
                  </ul>
                </div>
                <!-- /Copyright Menu -->
              </div>
            </div>
          </div>
          <!-- /Copyright -->
        </div>
      </div>
      <!-- /Footer Bottom -->
    </footer>
    <!-- /Footer -->
  </div>
  <!-- /Main Wrapper -->

  <!-- jQuery -->
  <script src="assets/js/jquery.min.js"></script>

  <!-- Bootstrap Core JS -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Sticky Sidebar JS -->
  <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
  <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

  <!-- Select2 JS -->
  <script src="assets/plugins/select2/js/select2.min.js"></script>

  <!-- Datetimepicker JS -->
  <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

  <!-- Fancybox JS -->
  <script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>
</body>

<!-- doccure/search.html  30 Nov 2019 04:12:16 GMT -->

</html>

<script type="text/javascript">
  $(document).ready(function() {
    $("#State_c").change(function() {
      var StateID = $("#State_c").val();
      $.ajax({
        url: "worldData.php",
        method: "post",
        data: "State=" + StateID,
      }).done(function(states) {
        cities = JSON.parse(states);
        $("#City_c").empty();
        $("#City_c").append("<option disabled selected>Select City</option>");
        cities.forEach(function(city) {
          $("#City_c").append(
            "<option value=" + city.id + ">" + city.name + "</option>"
          );
        });
        $("#City_c").append("<option value=0>My option is not listed</option>");
      });
    });

    $("#City_c").change(function() {
      var CityID = $("#City_c").val();
      $.ajax({
        url: "worldData.php",
        method: "post",
        data: "City=" + CityID,
      }).done(function(cities) {
        hospitals = JSON.parse(cities);
        $("#Hospital_c").empty();
        $("#Hospital_c").append(
          "<option disabled selected>Select Hospital</option>"
        );
        hospitals.forEach(function(hospital) {
          $("#Hospital_c").append(
            "<option value=" +
            hospital.id +
            ">" +
            hospital.hospitalName +
            "</option>"
          );
        });
        $("#Hospital_c").append(
          "<option value=0>My option is not listed</option>"
        );
      });
    });

    $("#Hospital_c").change(function() {
      var HospitalID = $("#Hospital_c").val();
      $.ajax({
        url: "worldData.php",
        method: "post",
        data: "Hospital=" + HospitalID,
      }).done(function(hospitals) {
        doctors = JSON.parse(hospitals);
        $("#Doctor_c").empty();
        $("#Doctor_c").append(
          "<option disabled selected>Select Doctor</option>"
        );
        doctors.forEach(function(doctor) {
          $("#Doctor_c").append(
            "<option value=" +
            doctor.id +
            ">" +
            doctor.fullName +
            "(" +
            doctor.qualification +
            ")" +
            ", " +
            doctor.department +
            "</option>"
          );
        });
        $("#Doctor_c").append(
          "<option value=0>My option is not listed</option>"
        );
      });
    });
  });
</script>