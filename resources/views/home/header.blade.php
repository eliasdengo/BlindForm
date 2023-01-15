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
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="img/logo.png" alt=""> -->
        <h1>BLIND FORUM<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#">Home</a></li>

          <li class="dropdown"><a href=""><span>Start Chat</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="./home/private/Privatechat.html">Private Chat</a></li>
              <li><a href="{{route('groupchat')}}" class="btn-get-started">Group Chat</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Help</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
          </li>
          <li><a href="#howtochat">How To Chat</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#contact">Contact us</a></li>

        </ul>
        </li>

        <li>
            <a href="{{ route('login') }}">Signin</a>
        </li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
