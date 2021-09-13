<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Go Express Alliance</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('h_assets/favicon.ico') }}" type="image/png">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ asset('h_assets/css/magnific-popup.css') }}">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('h_assets/css/slick.css') }}">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('h_assets/css/LineIcons.css') }}">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('h_assets/css/bootstrap.min.css') }}">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('h_assets/css/default.css') }}">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('h_assets/css/style.css') }}">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                       
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('h_assets/images/GEA-Logo.png') }}" alt="Logo">
                        </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#services">Services</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                        
                        <!-- <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li><a class="solid" href="#">Download</a></li>
                            </ul>
                        </div> -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    
    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
                <li data-target="#carouselThree" data-slide-to="1"></li>
                <li data-target="#carouselThree" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Distribution Network</h1>
                                    <p class="text">Go Express Alliance brings its customers outstanding global coverage, while leveraging on its wide distribution network.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="{{ route('tracker') }}">Track item</a></li>
                                        <!-- <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="{{ asset('h_assets/images/slider/1.png') }}" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Security & Shipping</h1>
                                    <p class="text">Whether you’re importing or exporting, working with GAE will plug you into a network of experts across the globe with assurance of security.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="{{ route('tracker') }}">Track item</a></li>
                                        <!-- <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li> -->
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="{{ asset('h_assets/images/slider/2.png') }}" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Freight Services </h1>
                                    <p class="text">We have access to all levels of transportation network and an amazing system well suited for your immediate needs.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="track/track-item.html">Track item</a></li>
                                        <!-- <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li> -->
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="{{ asset('h_assets/images/slider/3.png') }}" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>

            <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                <i class="lni lni-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                <i class="lni lni-arrow-right"></i>
            </a>
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->
    
    <!--====== FEATRES TWO PART START ======-->

    <section id="services" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Our Services</h3>
                        <p class="text">These are some of the key services we offer.</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Road Transport</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-brush"></i>
                                <img class="shape" src="{{ asset('h_assets/images/f-shape-1.svg') }}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">We provides a variety of value added services that enhances and distinguishes Road Transport as a separate as well as an independent segment amongst all our activities.</p>
                            <!-- <a class="features-btn" href="#">LEARN MORE</a> -->
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Project Logistics</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-layout"></i>
                                <img class="shape" src="{{ asset('h_assets/images/f-shape-1.svg') }}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Our objective is to ensure controlled logistical activities relating to all materials and equipment, whether sourced from the company, constructor or other stakeholders at large.</p>
                            <!-- <a class="features-btn" href="#">LEARN MORE</a> -->
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">International Freight</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-bolt"></i>
                                <img class="shape" src="{{ asset('h_assets/images/f-shape-1.svg') }}" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">We aims to be the local and global logistics partner offering competitive range of International Freight Forwarding services expediting every shipment seamlessly with complete visibility.</p>
                            <!-- <a class="features-btn" href="#">LEARN MORE</a> -->
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Contact</h3>
                        <p class="text">Get in touch with us. We would love to hear from you.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-map mt-30">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div> 
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text"> Elizabeth St, Melbourne<br>1202 Australia.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">hello@goexpressalliance.com</p>
                                <p class="text">support@goexpressalliance.com</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">+333 789-321-654</p>
                                <p class="text">+333 985-458-609</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                        <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Leave <span>A Message.</span></h4>
                        
                        <form id="contact-form" action="assets/contact.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Name</label>
                                        <div class="input-items default">
                                            <input name="name" type="text" placeholder="Name">
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Email</label>
                                        <div class="input-items default">
                                            <input type="email" name="email" placeholder="Email">
                                            <i class="lni lni-envelope"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input mt-25">
                                        <label>Massage</label>
                                        <div class="input-items default">
                                            <textarea name="massage" placeholder="Massage"></textarea>
                                            <i class="lni lni-pencil-alt"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="form-input light-rounded-buttons mt-30">
                                        <button class="main-btn light-rounded-two">Send Message</button>
                                    </div> <!-- form input -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html"><img src="{{ asset('h_assets/images/GEA-Logo.png') }}" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->
                    <div class="footer-support text-center">
                        <span class="number">+8801234567890</span>
                        <span class="mail">support@goexpressalliance.com</span>
                    </div>
                    <div class="copyright text-center mt-35">
                        <p class="text">Copyright 2021 <a href="#">Go Express Alliance.</a> All Right Reserved.</p>
                    </div> 
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== Jquery js ======-->
    <script src="{{ asset('h_assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('h_assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('h_assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('h_assets/js/bootstrap.min.js') }}"></script>
    
    <!--====== Slick js ======-->
    <script src="{{ asset('h_assets/js/slick.min.js') }}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('h_assets/js/jquery.magnific-popup.min.js') }}"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('h_assets/js/ajax-contact.js') }}"></script>
    
    <!--====== Isotope js ======-->
    <script src="{{ asset('h_assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('h_assets/js/isotope.pkgd.min.js') }}"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('h_assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('h_assets/js/scrolling-nav.js') }}"></script>
    
    <!--====== Main js ======-->
    <script src="{{ asset('h_assets/js/main.js') }}"></script>
    
</body>

</html>
