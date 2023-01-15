<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="Viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+25199..</span></i>
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
      <a href="../index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>BLIND FOREM<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.html">Home</a></li>

          <li class="dropdown"><a href="#"><span>Start Chat</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="../private/Privatechat.html">Private Chat</a></li>
              <li><a href="/group">Group Chat</a></li>

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
  <!-- ======= Hero Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Group chat</h2>
        <p></p>
      </div>

      <div class="row gx-lg-0 gy-4">

        <div class="col-lg-4">

          <div class="info-container d-flex flex-column align-items-center justify-content-center">




            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>{{$groupName->topic.'group '.$custom->id}}</h4>


              </div>
            </div>
            <div class="info-item d-flex">
              <i class="">{{$online}}</i>
              <div>
                <h4>Online</h4>


              </div>

            </div><!-- End Info Item -->



            <!-- Example single danger button -->



            <!-- Example single danger button -->


          </div>





        </div>

        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div></div>
            <div class="form-group mt-3">
              <div class="messageContainer" name="message" rows="15">
                @foreach($messages as $message)
                    @if($message->customer_id==$custom->id)
                    <span class="sendersMessage"><span class="circleUserSender">{{$custom->id}}</span><span class="messageSender">{{$message->message}}</span></span>
                    @else
                    <span class="othersMessage"><span class="circleUser">{{$message->customer_id}}</span><span class="message">{{$message->message}}</span></span>
                    @endif
               @endforeach
            </div>
            </div>
            <div class="columns">
                <form action="" method="GET">
                  @csrf
                   <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject">
                    </div>
                    <div class="text-center">
                 <button type="submit" id="sendMessage" formaction="/messages/{{$custom->id}}/{{$groupName->id}}">Send Message</button>
                 <a href="/delete/{{$custom->id}}" class="contact">End Message</a>
                </div>
              </form>




          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>
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
    <script>
      // window.addEventListener('load',function(){
      //     Echo.channel('post.'+ ${groupName->id})
      //         .listen('newMessage',()=>{
      //           alert('this is me');
      //         });
      // });
      // const sendMessage= getElementById('sendMessage');
      // sendMessage.addEventListener('onClick', function (e) {
      //  e.preventDefault(); 
        
      // });
      Echo.channel(topic)
           .listen('newMessage',(e)=>{
            console.log('working');
            alert('qm working');
           })

    </script>
</body>

</html>
