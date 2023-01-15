<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="Viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no" />
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
                    <li><a href="">Home</a></li>

                    <li class="dropdown"><a href="#"><span>Start Chat</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="../private/Privatechat.html">Private Chat</a></li>
                            <li><a href="{{route('groupchat')}}" class="btn-get-started">Group Chat</a></li>

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
                                <h4>{{ $topic->topic }} GROUP</h4>
                                <span id="topic" hidden>{{ $topic->id }}</span>
                                <span id="user" hidden>{{ $user->id }}</span>
                            </div>
                        </div>
                        <div class="info-item d-flex">
                            <i class="" id='onlineplace'>{{ $online }}</i>
                            <div>
                                <h4>Online</h4>


                            </div>

                        </div><!-- End Info Item -->

                        <!-- Example single danger button -->


                    </div>





                </div>

                <div class="col-lg-8">

                    <div class="messageContainer" id="messageContainer">
                        @foreach ($messages as $message)
                            @if ($user->id === $message->customer_id)
                                <div id="myPrivateMessage" class="mySingleMessage">
                                    <div class="myMessage">{{ $message->message }}</div>
                                </div>
                            @else
                                <div class="singleMessage" id="otPrivateMessage">
                                    <div class="messageAvatar">
                                        <div class="av">{{ $message->customer_id }}</div>
                                    </div>
                                    <div class="othersMessage">{{ $message->message }}</div>
                                </div>
                            @endif
                        @endforeach

                    </div>

                    <div class="columns">


                        <form id="my_Form" class="php-email-form">

                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="message">
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                                <a href="{{ route('endMessage', [$topic->id, $user->id]) }}">End Message</a>
                            </div>
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
    <script type="text/javascript">
        const topicf = <?php echo $topic; ?>;
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        const topic = {!! json_encode($topic) !!};
        var online = document.getElementById('onlineplace');
        var number = {!! json_encode($online) !!};
        // console.log(x.topic);

        const conn = window.Echo.channel('public.customer' + topic.id)

        conn.listen('.newUser', (e) => {
            number += 1;
            online.innerHTML = number;
            alert('1 new user just arived to the group');
        });

        const logedout = window.Echo.channel('public.customerOut' + topic.id);

        logedout.listen('.logedout', (e) => {
            number -= 1;
            online.innerHTML = number;
            alert('1 new user just Leaved the group');
        });

        const newmess = window.Echo.channel('public.newMessage' + topic.id);
        newmess.subscribed(() => {
            console.log('subscribed to new message');
        });
        newmess.listen('.newMessage', (message) => {
            //  otmess.innerHTML +=
            //      '<div class="othersMessage">' + mess.value + "</div>";


            const main = document.createElement("div");
            main.classList.add("singleMessage");
            main.setAttribute('id', 'otPrivateMessage');
            const ava = document.createElement("div");
            ava.classList.add("messageAvatar");
            main.appendChild(ava);
            const av = document.createElement("div");
            av.classList.add("av");
            ava.appendChild(av);
            const otmess = document.createElement("div");
            otmess.classList.add("othersMessage");
            main.appendChild(otmess);

            av.textContent = message.userId;
            otmess.textContent = message.message;
            document.getElementById("messageContainer").appendChild(main);
        });



        //addig new message to the owner of the message
    </script>

</body>

</html>
