<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!--twitter og-->
        <meta name="twitter:site" content="@themetags">
        <meta name="twitter:creator" content="@themetags">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Future Basics Company Limited - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
        <meta name="twitter:description" content="Future Basics Company Limited creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
        <meta name="twitter:image" content="#">

        <!--facebook og-->
        <meta property="og:url" content="#">
        <meta name="twitter:title" content="Future Basics Company Limited - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
        <meta property="og:description" content="Future Basics Company Limited creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
        <meta property="og:image" content="#">
        <meta property="og:image:secure_url" content="#">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="600">

        <!--meta-->
        <meta name="description" content="Future Basics Company Limited creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
        <meta name="author" content="ThemeTags">

        <!--favicon icon-->
        <link rel="icon" href="img/fbricon.png" type="image/png" sizes="16x16">

        <!--title-->
        <title>Radarmile - Field Monitoring tool</title>

        <!--google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

        <!--build:css-->
        {{-- <link rel="stylesheet" href="assets/css/main.css"> --}}
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">

        <!-- endbuild -->

        <!--custom css start-->
        {{-- <link rel="stylesheet" href="assets/css/custom.css"> --}}
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <!--custom css end-->
    </head>
    <body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="img/fbricon.png" alt="logo" class="img-fluid preloader-icon" />
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">
        <!--header section start-->
        <!--header start-->
        <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="index.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="img/rlogo-white.png" alt="logo" class="img-fluid logo-white" />
                        <img src="img/rlogo-color.png" alt="logo" class="img-fluid logo-color" />
                    </a>

                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                        <span class="far fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"></span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                            <li><a href="{{ route('about-us') }}" class="nav-link">About</a></li>
                        </ul>
                    </div>

                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="{{ route('documentation') }}" class="btn btn-link text-decoration-none me-2">Documentation</a>
                        <a href="https://www.futurebasics.co.tz/contact-us" class="btn btn-primary">Contact Us</a>
                    </div>

                    <!--offcanvas menu start-->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                        <div class="offcanvas-header d-flex align-items-center mt-4">
                            <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                                <img src="img/logo-color.png" alt="logo" class="img-fluid ps-2" />
                            </a>
                            <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                                <i class="far fa-close"></i>
                            </button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                                <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                                <li><a href="{{ route('about-us') }}" class="nav-link">About</a></li>

                            </ul>
                            <div class="action-btns mt-4 ps-3">
                                <a href="{{ route('documentation') }}" class="btn btn-outline-primary me-2">Documentation</a>
                                <a href="https://www.futurebasics.co.tz/contact-us" class="btn btn-primary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <!--offcanvas menu end-->
                </div>
            </nav>
        </header>
        <!--header end-->
        <!--header section end-->
          <!--about header section start-->
          <section class="about-header-section ptb-120 position-relative overflow-hidden bg-dark" style="background: url('img/page-header-bg.svg')no-repeat center right">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading-wrap d-flex justify-content-between z-5 position-relative">
                            <div class="about-content-left">
                                <div class="about-info mb-5">
                                    <h1 class="fw-bold display-5">Grow your Business & Customer Satisfaction with
                                        Quiety</h1>
                                    <p class="lead">Dynamically disintermediate technically sound technologies with
                                        compelling quality vectors error-free communities. </p>
                                    <a href="career.html" class="btn btn-primary mt-4 me-3">Open Positions</a>
                                    <a href="#our-team" class="btn btn-soft-primary mt-4">Meet Our Team</a>
                                </div>
                                <img src="img/about-img-1.jpg" alt="about" class="img-fluid about-img-first mt-5 rounded-custom shadow">
                            </div>
                            <div class="about-content-right">
                                <img src="img/about-img-2.jpg" alt="about" class="img-fluid mb-5 rounded-custom shadow">
                                <img src="img/about-img-3.jpg" alt="about" class="rounded-custom about-img-last shadow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z-2 py-5">
            </div>
        </section>
        <!--about header section end-->

 <!--feature section two start-->
 <section class="feature-section-two ptb-120 bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="section-heading">
                    <h4 class="h5 text-primary">Our Values</h4>
                    <h2>The Core Values that Drive Everything</h2>
                    <p>Quickly incubate functional channels with multidisciplinary architectures. Authoritatively
                        fabricate formulate exceptional innovation.</p>
                    <ul class="list-unstyled mt-5">
                        <li class="d-flex align-items-start mb-4">
                            <div class="icon-box bg-primary rounded me-4">
                                <i class="fas fa-bezier-curve text-white"></i>
                            </div>
                            <div class="icon-content">
                                <h3 class="h5">Pixel Perfect Design</h3>
                                <p>Progressively foster enterprise-wide systems whereas equity invested
                                    web-readiness harness installed.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="icon-box bg-danger rounded me-4">
                                <i class="fas fa-fingerprint text-white"></i>
                            </div>
                            <div class="icon-content">
                                <h3 class="h5">Unique &amp; Minimal Design</h3>
                                <p>Dramatically administrate progressive metrics without error-free globally
                                    simplify standardized engineer efficient strategic.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="icon-box bg-dark rounded me-4">
                                <i class="fas fa-cog text-white"></i>
                            </div>
                            <div class="icon-content">
                                <h3 class="h5">Efficiency & Accountability</h3>
                                <p>Objectively transition prospective collaboration and idea-sharing without focused
                                    maintain focused niche markets niches.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="feature-img-wrap position-relative d-flex flex-column align-items-end">
                    <ul class="img-overlay-list list-unstyled position-absolute">
                        <li class="d-flex align-items-center bg-white rounded shadow-sm p-3">
                            <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                            <h6 class="mb-0">Create a Free Account</h6>
                        </li>
                        <li class="d-flex align-items-center bg-white rounded shadow-sm p-3">
                            <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                            <h6 class="mb-0">Install Our Tracking Pixel</h6>
                        </li>
                        <li class="d-flex align-items-center bg-white rounded shadow-sm p-3">
                            <i class="fas fa-check bg-primary text-white rounded-circle"></i>
                            <h6 class="mb-0">Start Tracking your Website</h6>
                        </li>
                    </ul>
                    <img src="img/feature-img3.jpg" alt="feature image" class="img-fluid rounded-custom">
                </div>
            </div>
        </div>
    </div>
</section>
<!--feature section two end-->

<!--team section start-->
<section id="our-team" class="team-section ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="section-heading text-center">
                    <h5 class="h6 text-primary">Our Team</h5>
                    <h2>The People Behind Quiety</h2>
                    <p>Intrinsicly strategize cutting-edge before interoperable applications incubate extensive
                        expertise through integrated intellectual capital. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-single-wrap mb-5">
                    <div class="team-img rounded-custom">
                        <img src="img/team/team-1.jpg" alt="team" class="img-fluid position-relative">
                        <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info mt-4 text-center">
                        <h5 class="h6 mb-1">John Sullivan</h5>
                        <p class="text-muted small mb-0">Front End Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-single-wrap mb-5">
                    <div class="team-img rounded-custom">
                        <img src="img/team/team-2.jpg" alt="team" class="img-fluid position-relative">
                        <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info mt-4 text-center">
                        <h5 class="h6 mb-1">John Sullivan</h5>
                        <p class="text-muted small mb-0">Front End Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-single-wrap mb-5">
                    <div class="team-img rounded-custom">
                        <img src="img/team/team-3.jpg" alt="team" class="img-fluid position-relative">
                        <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info mt-4 text-center">
                        <h5 class="h6 mb-1">John Sullivan</h5>
                        <p class="text-muted small mb-0">Front End Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-single-wrap mb-5">
                    <div class="team-img rounded-custom">
                        <img src="img/team/team-4.jpg" alt="team" class="img-fluid position-relative">
                        <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info mt-4 text-center">
                        <h5 class="h6 mb-1">John Sullivan</h5>
                        <p class="text-muted small mb-0">Front End Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-single-wrap mb-5">
                    <div class="team-img rounded-custom">
                        <img src="img/team/team-5.jpg" alt="team" class="img-fluid position-relative">
                        <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info mt-4 text-center">
                        <h5 class="h6 mb-1">John Sullivan</h5>
                        <p class="text-muted small mb-0">Front End Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-single-wrap mb-5">
                    <div class="team-img rounded-custom">
                        <img src="img/team/team-6.jpg" alt="team" class="img-fluid position-relative">
                        <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info mt-4 text-center">
                        <h5 class="h6 mb-1">John Sullivan</h5>
                        <p class="text-muted small mb-0">Front End Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-single-wrap mb-5">
                    <div class="team-img rounded-custom">
                        <img src="img/team/team-7.jpg" alt="team" class="img-fluid position-relative">
                        <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info mt-4 text-center">
                        <h5 class="h6 mb-1">John Sullivan</h5>
                        <p class="text-muted small mb-0">Front End Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-single-wrap mb-5">
                    <div class="team-img rounded-custom">
                        <img src="img/team/team-8.jpg" alt="team" class="img-fluid position-relative">
                        <ul class="list-unstyled team-social-list d-flex flex-column mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info mt-4 text-center">
                        <h5 class="h6 mb-1">John Sullivan</h5>
                        <p class="text-muted small mb-0">Front End Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--team section end-->
 <!--footer section start-->
        <footer class="footer-section">
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top footer-light ptb-120">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="img/rlogo-white.png" alt="logo" class="img-fluid logo-white">
                                    <img src="img/rlogo-color.png" alt="logo" class="img-fluid logo-color">
                                </div>
                                {{-- <p>Our latest news, articles, and resources, we will sent to
                                    your inbox weekly.</p>

                                <form class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                    <input type="text" class="input-newsletter form-control me-2" placeholder="Enter your email" name="email" required="" autocomplete="off">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..." class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form> --}}
                                <div class="ratting-wrap mt-4">
                                    <h6 class="mb-0">10/10 Overall rating</h6>
                                    <ul class="list-unstyled rating-list list-inline mb-0">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Navigation</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="index.html" class="text-decoration-none">Home</a></li>
                                            <li><a href="{{ route('about-us') }}" class="text-decoration-none">About Us</a></li>
                                            <li><a href="{{ route('documentation') }}" class="text-decoration-none">Documentation</a></li>
                                       </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        {{-- <h3>Pages</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="pricing.html" class="text-decoration-none">Pricing</a></li>
                                            <li><a href="blog.html" class="text-decoration-none">Blog</a></li>
                                            <li><a href="blog-single.html" class="text-decoration-none">Blog Details</a></li>
                                            <li><a href="contact-us.html" class="text-decoration-none">Contact</a></li>
                                            <li><a href="career-single.html" class="text-decoration-none">Career Single</a>
                                            </li>
                                            <li><a href="service-single.html" class="text-decoration-none">Services
                                                    Single</a></li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Information</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="https://www.futurebasics.co.tz/contact-us" class="text-decoration-none">Contact</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom footer-light py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">&copy; 2022 Future Basics Company limited Rights Reserved. Developed By <a href="https://futurebasics.co.tz/" class="text-decoration-none">Future Basics Company Limited</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer>
        <!--footer section end-->
    </div>

        <!--build:js-->
        <script src="{{ asset('js/vendors/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/vendors/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/vendors/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/vendors/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/vendors/parallax.min.js') }}"></script>
        <script src="{{ asset('js/vendors/aos.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
         <!--endbuild-->
    </body>
</html>
