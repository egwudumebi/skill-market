<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Market - Skill Market System</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="services-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('assets/img/logo.png') }}" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1 class="sitename">SkillMart</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}">Home<br></a></li>
          <li><a href="{{ url('/about') }}">About</a></li>
          <li><a href="{{ url('/services') }}" class="active">Market</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
          <li><a href="{{ url('/register') }}">Register</a></li>
          <li><a href="{{ url('/login') }}">Login</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Services</h1>
              <p class="mb-0">At SkillMart, we offer a range of services designed to connect talent with opportunity. Our platform allows professionals to create detailed profiles, search for job opportunities, and connect directly with recruiters. For recruiters, we provide powerful tools to find, evaluate, and hire top talent efficiently. Additionally, we offer career resources and networking opportunities to help users enhance their skills and advance their careers.</p>
              <a href="{{ url('/recruiter/home') }}" class="cta-btn">Explore Deeper<br></a>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="current">Services</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container">

        <div class="row gy-4">

          @foreach($domains as $domain)

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-gear icon"></i></div>
                <h4><a href="{{ url("/view/$domain->id") }}" class="stretched-link">{{ $domain->name }}</a></h4>
                <p>{{ Str::limit($domain->description, 80) }}</p>
              </div>
            </div><!-- End Service Item -->

          @endforeach

        </div>

      </div>

    </section><!-- /Services Section -->

  </main><!-- End #main -->

  <!-- Footer -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">SkillMart</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href="#"><i class="bi bi-twitter-x"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
