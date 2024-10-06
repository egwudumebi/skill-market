<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Experts Profile &mdash; SkillMart</title>
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
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">SkillMart</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ $expert->profile ? asset($expert->profile) : asset('assets/img/avatar.png') }}" alt="User Image">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ $expert->fullname }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ $expert->fullname }}</h6>
              <span>{{ $expert->job_title ? $expert->job_title : 'Job Title: Not Specified' }}</span>
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
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="{{ $expert->profile ? asset($expert->profile) : asset('assets/img/avatar.png') }}" alt="User Image">
              <h2>{{ $expert->fullname }}</h2>
              <h3>{{ $expert->job_title ? $expert->job_title : 'Job Title: Not Specified' }}</h3>
              <h2 style="text-decoration: underline">Sub skills</h2>
              @if($expert->sub_skills)
                <ul style="list-style: none">
                  @foreach($expert->sub_skills as $sub_skill)
                    <li><code style="color: #000">{{ $sub_skill }}</code></li>
                  @endforeach
                </ul>
              @else
                <ul style="list-style: none">
                    <li><code style="color: #000">No Skills listed</code></li>
                </ul>
              @endif
              <div class="social-links mt-2">
                <a target="_blank" href="{{ $expert->twitter ? $expert->twitter : '#' }}" class="twitter"><i class="bi bi-twitter"></i></a>
                <a target="_blank" href="{{ $expert->facebook ? $expert->facebook : '#' }}" class="facebook"><i class="bi bi-facebook"></i></a>
                <a target="_blank" href="{{ $expert->instagram ? $expert->instagram : '#' }}" class="instagram"><i class="bi bi-instagram"></i></a>
                <a target="_blank" href="{{ $expert->linkedin ? $expert->linkedin : '#' }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <a target="_blank" href="{{ $expert->whatsapp ? $expert->whatsapp : '#' }}" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic">{{ $expert->bio ? $expert->bio : '...' }}</p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">{{ $expert->fullname }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">{{ $expert->company ? $expert->company : 'Not Specified' }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8">{{ $expert->job_title ? $expert->job_title : 'Not Specified' }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">{{ $expert->country ? $expert->country : 'Not Specified' }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">{{ $expert->address ? $expert->address : 'Not Specified' }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">{{ $expert->phone ? $expert->phone : 'Not Specified' }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{ $expert->email }}</div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="POST" action="{{ route('profile.edit') }}" enctype="multipart/form-data">
                    @csrf

                    {{-- Error message  --}}
                    @if ($errors->any())
                    <x-error-alert />
                    @else 
                        @if (session()->has('status'))
                        {{-- Success message --}}
                            <x-success-alert />
                        @endif
                    @endif


                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="{{ $expert->profile ? asset($expert->profile) : asset('assets/img/avatar.png') }}" alt="User Image">
                        <div class="pt-2">
                            <input type="file" name="profile" id="">
                            {{-- <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i><input type="file" name="profile" id=""></a> --}}
                          {{-- <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a> --}}
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullname" type="text" class="form-control" id="fullName" value="{{ $expert->fullname }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label for="UserName" class="col-md-4 col-lg-3 col-form-label">User Name</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="username" type="text" class="form-control" id="userName" value="{{ $expert->username }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-md-4 col-lg-3 col-form-label">Gender</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" name="gender" aria-label="Default select example" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-md-4 col-lg-3 col-form-label">Domain</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" name="domain_id" id="domain-dropdown" aria-label="Default select example" required>
                              <option value="">Select your Domain</option>
                            @foreach($domains as $domain)
                              <option value="{{ $domain->id }}">{{ $domain->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-md-4 col-lg-3 col-form-label">Sub-skills</label>
                        <div class="col-md-8 col-lg-9">
                          <select class="form-select" name="sub_skills[]" id="subskill-dropdown" aria-label="Default select example" multiple required>
                              <option value="">Select your Sub-skills</option>
                          </select>
                        </div>
                      </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="bio" class="form-control" id="about" style="height: 100px">{{ $expert->bio ? $expert->bio : '' }}</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="company" value="{{ $expert->company ? $expert->company : '' }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job Title</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job_title" type="text" class="form-control" id="Job" value="{{ $expert->job_title ? $expert->job_title : '' }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="{{ $expert->country ? $expert->country : '' }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="{{ $expert->address ? $expert->address : '' }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="{{ $expert->phone ? $expert->phone : '' }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="{{ $expert->email ? $expert->email : '' }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="{{ $expert->twitter ? $expert->twitter : '' }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="{{ $expert->facebook ? $expert->facebook : '' }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="{{ $expert->instagram ? $expert->instagram : '' }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="{{ $expert->linkedin ? $expert->linkedin : '' }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Whatsapp" class="col-md-4 col-lg-3 col-form-label">Whatsapp Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="whatsapp" type="text" class="form-control" id="whatsapp" value="{{ $expert->whatsapp ? $expert->whatsapp : '' }}">
                        </div>
                      </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
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

  {{-- Delete a review (by the author) --}}
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      
      // Select all delete buttons with the class 'delete-review'
      const domain = document.getElementById('domain-dropdown');
      const subskill_dropdown = document.getElementById('subskill-dropdown');
      const domain_id = domain.value
      domain.addEventListener('change', async () => {
        const domain_id = domain.value;
        console.log(domain_id)
        const fetchRouteBase = "{{ url('/subskill/') }}";
        const url = `${fetchRouteBase}/${domain_id}`;
        const token = document.querySelector('input[name="_token"]').value;
        console.log(url);

        const res = await fetch(url, {
          method: "GET",
          headers: {
            'X-CSRF-Token': token,
          }
        });

        const output = await res.json();
        if (output['success']) {
          // alert(output['message'])
           // Clear existing options
           subskill_dropdown.innerHTML = '<option value="" disabled selected>--Select a Subskill--</option>';
          // Populate new options
          output['data'].forEach(subskill => {
                const option = document.createElement('option');
                option.value = subskill;
                option.textContent = subskill;
                subskill_dropdown.appendChild(option);
            });

            // Enable the dropdown if it was disabled
            subskill_dropdown.disabled = false;

          
        } else {
          alert(output['message']);
        }
      });
            
    });
  </script>

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