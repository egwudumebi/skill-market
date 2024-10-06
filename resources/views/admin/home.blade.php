<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin's Home - SkillMart</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('user/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('user/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('user/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('user/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('user/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('user/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('user/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('user/assets/img/logo.png') }}" alt="">
        <span class="d-none d-lg-block">SkillMart</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('assets/img/avatar.png') }}" alt="User Image">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('/logout') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ url('/admin/home') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ url('/admin/recruiters') }}">
            <i class="bi bi-user"></i>
            <span>Recruiters</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ url('/admin/experts') }}">
            <i class="bi bi-user"></i>
            <span>Experts</span>
            </a>
        </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/admin/home') }}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-6">
          <div class="row">
            <!-- Recruiters population -->
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{ asset('domains/technology/1.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Number of Recruiters</h5>
                    <h1 class="card-text" style="align-self: center">{{ $num_recruiters }}</h1>
                  </div>
                </div>
              </div>
            </div><!-- Recruiters population -->

            <!-- Experts population -->
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{ asset('domains/law/1.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Number of Experts</h5>
                    <h1 class="card-text">{{ $num_experts }}</h1>
                  </div>
                </div>
              </div>
            </div><!-- End Card with an image on left -->
          </div>
        </div><!-- Experts population -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>SkillMart</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('user/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('user/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('user/assets/js/main.js') }}"></script>

</body>

</html>