<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MASAK MUSIK STUDIO</title>
    <link rel="shortcut icon" href="assets/images/Logo.ico">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">

</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <h1>

                    <a class="logo-container" href="/">
                        <img src="assets/images/Logo.png" alt="MASMUS logo" title="MASMUS logo" style="height:40px;" />
                    </a>

                    <a class="navbar-brand" href="/">
                        </span>Masak Musik Studio<span class="logo">Music Is Filling, So Cook Good</span></a>

                </h1>
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item {{ ($title === 'index') ? 'active' : '' }}">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ ($title === 'about') ? 'active' : '' }}">
                            <a class="nav-link" href="/about">Tentang</a>
                        </li>
                        <li class="nav-item {{ ($title === 'courses') ? 'active' : '' }}">
                            <a class="nav-link" href="/courses">Layanan</a>
                        </li>
                        <li class="nav-item {{ ($title === 'contact') ? 'active' : '' }}">
                            <a class="nav-link" href="/contact">Kontak</a>
                        </li>
                    </ul>

                    <!--/search-right-->
                    <div class="search-right">
                        <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">

                                <form action="error.html" method="GET" class="search-box">
                                    <input type="search" placeholder="Search" name="search" required="required"
                                        autofocus="">
                                    <button type="submit" class="btn"><span class="fa fa-search"
                                            aria-hidden="true"></span></button>
                                </form>

                            </div>
                            <a class="close" href="#close">×</a>
                        </div>
                        <!-- /search popup -->
                    </div>
                    <div class="top-quote mr-lg-2 text-center">
                        @auth
                            <a href="\dashboard" class="btn login mr-2"><span class="fa fa-user"></span> dashboard admin</a>
                        @else
                            <a href="{{ route('login') }}" class="btn login mr-2"><span class="fa fa-user"></span> login</a>
                        @endauth
                    </div>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container py-1">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--/header-->

    @yield('content')
        
    <!-- footer -->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-md-4">
                <div class="row footer-top-29">
                    <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                        <h6 class="footer-title-29">Info Kontak </h6>
                        <p>Alamat : Gg. Jeruk No.67a, Plangitan, Kec. Pati, Kabupaten Pati, Jawa Tengah 59113.</p>
                        <p class="my-2">Telepon : <a href="tel:+(62)85642011047">0856-4201-1047</a></p>
                        <p>Email : <a href="mailto:masakmusikstudio@gmail.com">masakmusikstudio@gmail.com</a></p>
                        <div class="main-social-footer-29 mt-4">
                            <a href="https://facebook.com/alanwijanarko" class="facebook"><span class="fa fa-facebook"></span></a>
                            <a href="https://instagram.com/masakmusikstudio?igshid=YmMyMTA2M2Y=" class="instagram"><span class="fa fa-instagram"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

                        <ul>
                            <h6 class="footer-title-29">Profesionalitas</h6>
                            <li><a href="/about">Tentang Kami</a></li>
                            <li><a href="#blog"> Informasi Terbaru</a></li>
                            <li><a href="#teacher"> Gabung Mentor </a></li>
                            <li><a href="/courses">Gabung Kelas Musik</a></li>
                            <li><a href="/contact">Hubungi Kami</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
                        <h6 class="footer-title-29">Program</h6>
                        <ul>
                            <li><a href="#traning">Kursus Musik</a></li>
                            <li><a href="#documentation">Rekaman</a></li>
                            <li><a href="#release">Rental Studio</a></li>
                            <li><a href="#customers"> Aransemen</a></li>
                            <li><a href="#helpcenter"> Mixing & Mastering</a></li>
                        </ul>

                    </div>
                    
                </div>
            </div>
        </div>
        <!-- copyright -->
        <section class="w3l-copyright text-center">
            <div class="container">
                <p class="copy-footer-29">© 2022 Masak Musik Studio. Design by <a
                        href="https://instagram.com/masakmusikstudio" target="_blank">
                        Masak Musik Studio</a></p>
            </div>

            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                &#10548;
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- /move top -->
        </section>
        <!-- //copyright -->
    </section>
    <!-- //footer -->

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <script src="assets/js/theme-change.js"></script>

    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats number counter -->

    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function () {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                dots: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    667: {
                        items: 1
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->

    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    768: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: false,
                        loop: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->

    <script src="assets/js/bootstrap.min.js"></script>


</body>

</html>
