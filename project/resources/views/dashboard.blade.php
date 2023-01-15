<!DOCTYPE html>
<html>
<head>
    <title>BlindForum ChatApp System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="Viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no"/>

  <!-- Vendor CSS Files -->
  <link href="home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="home/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="home/assets/css/main.css" rel="stylesheet">
</head>
<body>

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
          <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
              <i class="bi bi-envelope d-flex align-items-center"><a
                  href="mailto:contact@example.com">blindforumchat@gmail.com</a></i>
              <i class="bi bi-phone d-flex align-items-center ms-4"><span>+25191199...</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
          </div>
      </section>
    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          <a href="./home/index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="img/logo.png" alt=""> -->
            <h1>BLIND FORUM<span>.</span></h1>
          </a>
          <nav id="navbar" class="navbar">
            <ul>
              <li><a href="../home/index.html">Home</a></li>

              <li class="dropdown"><a href="#"><span>Start Chat</span> <i
                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="./home/private/Privatechat.html">Private Chat</a></li>
                  <li><a href="./home/Group/Groupchat.html">Group Chat</a></li>
                </ul>
              </li>

            <li>
                <a href="{{ route('topics.create') }}">Add Topics</a>
            </li>
            <li>
                <a href="{{ route('register-user') }}">Add Admin</a>
            </li>

            <li class="dropdown"><a href="#"><span>Setting</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
              </li>
              <li><a href=" ">Profile</a></li>
              <li><a class="nav-link" href="{{ route('signout') }}">Logout</a></li>
            </ul>
            </li>

            </ul>
          </nav><!-- .navbar -->

          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
      </header>
    <!-- End Header -->







    <div class="container"><br/><br/>
    <div class="row">
    <p><h3>Hello :  {{ Auth::user()->name }} </h3> </p>
    </div>
    </div>
    @yield('content')
</body>
</html>
