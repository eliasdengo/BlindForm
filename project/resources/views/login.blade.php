<!DOCTYPE html>
<head>

  <!-- Vendor CSS Files -->
  <link href="../home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../home/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../home/assets/css/main.css" rel="stylesheet">
</head>
<body>
    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="container d-flex justify-content-center justify-content-md-between">
          <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a
                href="mailto:contact@example.com">contact@example.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+251999...</span></i>
          </div>
          <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
          </div>
        </div>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="../home/index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1>BLIND FORUM<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="../home/index.html">Home</a></li>

            <li class="dropdown"><a href="#"><span>Start Chat</span> <i
                  class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="../home/private/Privatechat.html">Private Chat</a></li>
                <li><a href="../home/Group/Groupchat.html">Group Chat</a></li>

              </ul>
            </li>
            <li><a href="{{ route('login') }}">Signin</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->




  </section>


</section>



  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="../home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../home/assets/vendor/aos/aos.js"></script>
<script src="../home/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../home/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="../home/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../home/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../home/assets/js/main.js"></script>



@extends('layout')
@section('content')
<main class="login-form">
    <div  class="cotainer">
        <div class="row justify-content-center">

                <div class="card">

                    @if(\Session::has('message'))
                        <div class="alert alert-info">
                            {{\Session::get('message')}}
                        </div>
                    @endif







                        <!-- ======= Contact Section ======= -->
                        <section id="contact" class="contact">
                          <div class="container" data-aos="fade-up">

                            <div class="section-header">
                              <h2>Sign In</h2>
                              <p></p>
                            </div>

                            <div class="row gx-lg-0 gy-4">

                              <div class="col-lg-4">

                                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                                  <div class="info-item d-flex">
                                    <i class=""></i>
                                    <div>
                                      <h4>Admin</h4>
                                    </div>
                                  </div><!-- End Info Item -->
                                </div>

                              </div>

                              <div class="col-lg-8">
                                <form method="POST" action="{{ route('postlogin') }}"  role="form" class="php-email-form">
                                    @csrf
                                    <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" autofocus><br>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required><br>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                    </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label><br>
                                        </div>

                                </div>
                                  <div class="text-left"><button type="submit">Log in</button></div>
                                </form>
                              </div><!-- End Contact Form -->

                            </div>

                          </div>
                        </section>


          </div>
                    </div>
                </div>

        </div>
    </div>
</main>
@endsection
</body>
