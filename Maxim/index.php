<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="abdullahSyedJavaScript.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="abdullahSyedStyles.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Maxim - v4.7.0
  * Template URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <a href="index.php">
          <img src="assets/img/logo.png" width="50" alt="">
        </a>
        <h1><a href="index.html">EAGLEWALL</a></h1>
      </div>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li>
          <a class="nav-link scrollto active" href="index.html">Home</a>
        </li>
        <li>
          <a class="nav-link scrollto active" href="sponsors.html">Sponsors</a>
        </li>
        <li>
          <a class="nav-link scrollto active" href="members.php">Members</a>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">

    <br /><br /> <br /><br /><br /><br />
    <br /><br /> <br /><br /><br /><br /><br />

    <div class="container">

      <div class="card">
        <div class="card-body">

          <h4 class="card-title">Sign In</h4>
          <br />

          <form method="POST" action="process.php" class="needs-validation">

            <div class="form-outline mb-4">
              <input type="text" name="phone" class="form-control form-control-md" placeholder="Phone no." required pattern="[0-9+ ()]+" />
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" class="form-control form-control-md" placeholder="Password" required />
            </div>

            <div class="pt-1 mb-4">
              <center>
                <button class="btn btn-dark btn-lg btn-block" name="sub" type="submit">Login</button>
              </center>
            </div>

          </form>
        </div>
      </div>
    </div>

    <br /><br /> <br /><br /><br />
    <br /><br /> <br /><br /><br />
    <br /><br /> <br />

  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

        <div class="footer-info">
          <center>
            <h3>EagleWall</h3>
            <p>
              A108 Adam Street <br>
              NY 535022, USA<br><br>
              <strong>Phone:</strong> +1 5589 55488 55 <br>
              <strong>Email:</strong> abdullahsyed@eaglewall.com
            </p>
          </center>
        </div>

        <div class="copyright">
          <strong><span>Abdullah Syed Webmaster</span></strong>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/ -->
          9th May 2022
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->


  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
