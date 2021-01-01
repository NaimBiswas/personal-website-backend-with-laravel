<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport"
        content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>OnNext - One Page Parallax Template Bootstrap 4</title>
    <meta name="keywords"
        content="">
    <meta name="description"
        content="">
    <meta name="author"
        content="">

    <!-- Site Icons -->
    <link rel="shortcut icon"
        href="{{ asset('asset/fontend') }}/images/favicon.ico"
        type="image/x-icon" />
    <link rel="apple-touch-icon"
        href="{{ asset('asset/fontend') }}/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="{{ asset('asset/fontend') }}/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet"
        href="{{ asset('asset/fontend') }}/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet"
        href="{{ asset('asset/fontend') }}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet"
        href="{{ asset('asset/fontend') }}/css/custom.css">
    <script src="{{ asset('asset/fontend') }}/js/modernizr.js"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

    <body id="page-top"
        class="politics_version">

        <!-- LOADER -->
        <div id="preloader">
            <div id="main-ld">
                <div id="loader"></div>
            </div>
        </div><!-- end loader -->
        <!-- END LOADER -->

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top"
            id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger"
                    href="#page-top">
                    <img class="img-fluid"
                        src="images/logo.png"
                        alt="" />
                </a>
                <button class="navbar-toggler navbar-toggler-right"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarResponsive"
                    aria-controls="navbarResponsive"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse"
                    id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger active"
                                href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger"
                                href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger"
                                href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger"
                                href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger"
                                href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger"
                                href="#team">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger"
                                href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger"
                                href="#contact">Contect Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <a href="#"
            id="scroll-to-top"
            class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

        <!-- ALL JS FILES -->
        <script src="{{ asset('asset/fontend') }}/js/all.js"></script>
        <!-- Camera Slider -->
        <script src="{{ asset('asset/fontend') }}/js/jquery.mobile.customized.min.js"></script>
        <script src="{{ asset('asset/fontend') }}/js/jquery.easing.1.3.js"></script>
        <script src="{{ asset('asset/fontend') }}/js/parallaxie.js"></script>
        <script src="{{ asset('asset/fontend') }}/js/headline.js"></script>
        <!-- Contact form JavaScript -->
        <script src="{{ asset('asset/fontend') }}/js/jqBootstrapValidation.js"></script>
        <script src="{{ asset('asset/fontend') }}/js/contact_me.js"></script>
        <!-- ALL PLUGINS -->
        <script src="{{ asset('asset/fontend') }}/js/custom.js"></script>
        <script src="{{ asset('asset/fontend') }}/js/jquery.vide.js"></script>

    </body>

</html>
