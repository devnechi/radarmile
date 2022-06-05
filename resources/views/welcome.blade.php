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
            <nav class="navbar navbar-expand-xl navbar-dark sticky-header">
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
                            <li><a href="{{ url('/') }}" class="nav-link">About</a></li>
                        </ul>
                    </div>

                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="login.html" class="btn btn-link text-decoration-none me-2">Documentation</a>
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
                                <li><a href="pricing.html" class="nav-link">About</a></li>

                            </ul>
                            <div class="action-btns mt-4 ps-3">
                                <a href="login.html" class="btn btn-outline-primary me-2">Documentation</a>
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

        <!--hero section start-->
        <section class="hero-section ptb-120 bg-purple text-white" style="background:
      url('img/app-two-mockup-bg.png')no-repeat
      center center / cover">
            <div class="container">
                <div class="row justify-content-xl-between align-items-center">
                    <div class="col-lg-5 col-xl-5 col-xl-5 col-md-10">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                            <h5 class="text-warning">Visualize, Analyze and Decide</h5>
                            <h1 class="fw-bold display-5">Your Field Project Monitoring Tool</h1>
                            <p class="lead">
                                With  projects implemented in multiple areas with multiple actors,
                                 it has never been easier  to manage front-line activities,
                                  measure impact and make strategic  decisions with reliable
                                   and accurate data from the field. The app automates data collection,
                                    reporting and ensures beneficiaries are impacted directly.
                            </p>
                            <div class="action-btns mt-5">
                                <a href="about-us.html" class="btn btn-outline-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 mt-5">
                        <div class="hero-app-img position-relative text-center">
                            <img src="img/fullheadphone.png" alt="app screen" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!-- app two feature start -->
        <section class="app-two-feature ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading text-center">
                            <h2>Explore Your Premium Features</h2>
                            <p>
                                Implement flexible technology solutions that fit your business processes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-10">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="app-two-single-feature d-md-flex align-items-start mb-30">
                                    <div class="app-two-single-feature-icon box-one me-3 mb-4 mb-md-0">
                                        <i class="far fa-file-edit"></i>
                                    </div>
                                    <div class="app-two-single-feature-content">
                                        <h3 class="h5">A Tailored Solution</h3>
                                        <p>
                                            We understand businesses operate differently, have different SOP's.
                                            Radarmile Team assess and build a solution that fits you business operations.
                                        </p>
                                        <a href="service-single.html" class="link-with-icon text-decoration-none">View Details <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="app-two-single-feature d-md-flex align-items-start mb-30">
                                    <div class="app-two-single-feature-icon box-two me-3 mb-4 mb-md-0">
                                        <i class="far fa-bell"></i>
                                    </div>
                                    <div class="app-two-single-feature-content">
                                        <h3 class="h5">Cross platforms compatibility</h3>
                                        <p>
                                            We understand the need to be available in most devices for easier accessibility,
                                             we build solutions that are available all devices.
                                        </p>
                                        <a href="service-single.html" class="link-with-icon text-decoration-none">View Details <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="app-two-single-feature d-md-flex align-items-start mb-30">
                                    <div class="app-two-single-feature-icon box-three me-3 mb-4 mb-md-0">
                                        <i class="far fa-pen-nib"></i>
                                    </div>
                                    <div class="app-two-single-feature-content">
                                        <h3 class="h5">Automated reports</h3>
                                        <p>
                                            Authoritatively syndicate focused ideas whereas revolutionary
                                            outsourcing.
                                        </p>
                                        <a href="service-single.html" class="link-with-icon text-decoration-none">View Details <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="app-two-single-feature d-md-flex align-items-start mb-30">
                                    <div class="app-two-single-feature-icon box-four me-3 mb-4 mb-md-0">
                                        <i class="far fa-cloud-download-alt"></i>
                                    </div>
                                    <div class="app-two-single-feature-content">
                                        <h3 class="h5">Data analytics</h3>
                                        <p>
                                            Rapid data visualisation capabilities, that supports data analysis and visualisation.
                                        </p>
                                        <a href="service-single.html" class="link-with-icon text-decoration-none">View Details <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- app two feature end -->

        <!-- app two feature two start -->
        <section class="app-two-feature-two pt-60 pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-xl-6 col-md-12">
                        <div class="app-two-feature-two-img">
                            <img src="img/phoneheader.png" alt="feature image" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="app-two-feature-two-right">
                            <div class="feature-content-wrap">
                                <h4 class="h6">More Features</h4>
                                <h2>Improve productivity and Maximize impact by utilizing Modern technologies </h2>
                                <p>
                                    Automating business processes, real-time communication and transparency improves
                                    business decision making significantly, with a tool like Radarmile its has never
                                    been easier to manage and execute programs that are executed
                                     and  monitor in multiple areas.
                                </p>
                            </div>
                            <div class="app-two-feature-two-content">
                                <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4">
                                    <li class="py-1">
                                        <i class="fad fa-check-circle me-2"></i>User friendly UI/UX
                                    </li>
                                    <li class="py-1">
                                        <i class="fad fa-check-circle me-2"></i>Customized options
                                    </li>
                                    <li class="py-1">
                                        <i class="fad fa-check-circle me-2"></i>Tracing and indexing
                                    </li>
                                    <li class="py-1">
                                        <i class="fad fa-check-circle me-2"></i>Data  visualization
                                    </li>
                                    <li class="py-1">
                                        <i class="fad fa-check-circle me-2"></i>Data Security
                                    <li class="py-1">
                                        <i class="fad fa-check-circle me-2"></i>Data Syncronization
                                    </li>
                                </ul>
                                <div class="action-btns mt-5">
                                    <a href="about-us.html" class="btn app-two-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- app two feature two end -->

        <!-- app two feature three start -->
        <section class="app-two-feature-three bg-light ptb-120">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-5 col-xl-5 col-sm-12">
                        <div class="app-two-feature-three-left">
                            <div class="app-content-feature-wrap">
                                <h2>We provide tailored Radarmile solutions that fit your business</h2>
                                <p>
                                    We understand different businesses, organizations
                                     and programs have different procedures on how they operate,
                                     execute and monitor operation, We create tailored solutions
                                     that fits your business processes.
                                </p>
                            </div>
                            <div class="accordion faq-accordion mt-5" id="accordionExample">
                                <div class="accordion-item active border-0">
                                    <h5 class="accordion-header" id="faq-1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true">
                                            <i class="far fa-bell pe-3"></i> How do i get my own Tailored Radarmile solution?
                                        </button>
                                    </h5>

                                    <div id="collapse-1" class="accordioncollapse collapse show" aria-labelledby="faq-1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Dramatically formulate cross-unit products with web-enabled
                                            action items. Quickly maximize extensible methods of
                                            empowerment.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-0">
                                    <h5 class="accordion-header" id="faq-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false">
                                            <i class="far fa-command pe-3"></i>
                                            Do I need to have background  on Digital Solution Technologies?
                                        </button>
                                    </h5>
                                    <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Continually innovate technically sound internal or "organic"
                                            sources with market positioning content. Completely drive
                                            optimal intellectual.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-0">
                                    <h5 class="accordion-header" id="faq-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false">
                                            <i class="fas fa-link pe-3"></i>
                                            What do I need to get started?
                                        </button>
                                    </h5>
                                    <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Phosfluorescently deliver cooperative testing procedures after
                                            integrated communities. Dramatically simplify
                                            resource-leveling models with unique.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-sm-12">
                        <div class="app-two-feature-three-img position-relative text-center mt-5 mt-lg-0">
                            <div class="feature-three-shape">
                                <img src="img/app-two-feature-blob-shape.png" alt="app screen" class="feature-three-blob img-fluid" />
                            </div>
                            <img src="img/pg/main-pn.png" alt="app screen" class="position-relative z-5" />
                            <div class="img-peice d-none d-lg-block">
                                <img src="img/pg/atc.png" alt="app screen" class="img-one position-absolute custom-shadow" />
                                <img src="img/pg/on-gon.png" alt="app screen" class="img-two position-absolute custom-shadow" />
                                <img src="img/pg/tran.png" alt="app screen" class="img-three position-absolute custom-shadow" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- app two feature three end -->

        <!-- app two feature three start -->
        <section class="app-two-cta ptb-120 text-white bg-purple" style="background-image:
      url('img/hero-dot-bg.png')">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-xl-6">
                        <div class="app-two-mockup position-relative text-center pe-5">
                            <img src="img/boostinfo.png" alt="" class="img-fluid position-relative z-5" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-md-10">
                        <div class="app-two-cta-right px-md-0 pt-5 pt-md-0">
                            <div class="section-heading text-white">
                                <h2 class="text-white">
                                    Powerful Solutions for Your Business Needs
                                </h2>
                                <p>
                                    Radarmile enables project leaders, organisations and companies to
                                     have a wide and clear understanding of what is happening on the ground,
                                     The tool enables stakeholders to collect,
                                     manage and make strategic decisions  with the use of data.
                                </p>
                            </div>
                            <div class="cta-count">
                                <ul class="list-unstyled d-flex">
                                    <li class="me-4">
                                        <h3 class="text-white mb-0">72k+</h3>
                                        <span>Happy users</span>
                                    </li>
                                    <li class="me-4">
                                        <h3 class="text-white mb-0">16</h3>
                                        <span>Good reviews</span>
                                    </li>
                                    <li class="me-4">
                                        <h3 class="text-white mb-0">28k+</h3>
                                        <span>App download</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="action-btns mt-5">
                                <a href="contact-us.html" class="btn btn-outline-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- app two feature three end -->

        <!-- app two customer review start -->
        <section class="cutomer-review-app-two ptb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-12">
                        <div class="mb-4 mb-sm-5">
                            <h2>Our Happy Clients say about us.</h2>
                            <p class="m-0">
                                Our goal is to improve efficiency and operational capabilities for our clients,
                                 with our solution our clients have shown record results in productivity and service delivery
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 text-end d-none d-lg-block">
                        <div class="appTwoReviewSwiper-Controller ms-md-auto position-relative">
                            <span class="swiper-button-next"></span>
                            <span class="swiper-button-prev"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container appTwoReviewSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide position-relative">
                                    <div class=" single-review-slider p-lg-5 p-4 bg-white rounded-custom border my-lg-4">
                                        <ul class="review-rate mb-1 list-unstyled list-inline">
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                        </ul>
                                        <h5 class="h6">5 review average in our app</h5>
                                        <p>
                                            Blinding shot excuse my french willia david tosser jeffrey
                                            bubble and sque bleeder mush.
                                        </p>
                                        <div class="d-flex align-items-center">
                                            <img src="img/testimonial/app-testimonial-1.png" class="img-fluid me-3 rounded-circle" width="50" alt="user" />
                                            <div class="author-info">
                                                <h6 class="mb-0">Chauffina Carr</h6>
                                                <small>Founder</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide position-relative">
                                    <div class=" single-review-slider p-lg-5 p-4 bg-white rounded-custom border my-lg-4">
                                        <ul class="review-rate mb-1 list-unstyled list-inline">
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                        </ul>
                                        <h5 class="h6">35+ minutes per session</h5>
                                        <p>
                                            Blinding shot excuse my french willia david tosser jeffrey
                                            bubble and sque bleeder mush.
                                        </p>
                                        <div class="d-flex align-items-center">
                                            <img src="img/testimonial/app-testimonial-2.png" class="img-fluid me-3 rounded-circle" width="50" alt="user" />
                                            <div class="author-info">
                                                <h6 class="mb-0">Hugh Saturation</h6>
                                                <small>UX Designer</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide position-relative">
                                    <div class=" single-review-slider p-lg-5 p-4 bg-white rounded-custom border my-lg-4">
                                        <ul class="review-rate mb-1 list-unstyled list-inline">
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                        </ul>
                                        <h5 class="h6">$0.00 everything is FREE</h5>
                                        <p>
                                            Blinding shot excuse my french willia david tosser jeffrey
                                            bubble and sque bleeder mush.
                                        </p>
                                        <div class="d-flex align-items-center">
                                            <img src="img/testimonial/app-testimonial-3.png" class="img-fluid me-3 rounded-circle" width="50" alt="user" />
                                            <div class="author-info">
                                                <h6 class="mb-0">Richard Tea</h6>
                                                <small>Manager</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- app two customer review end -->

        <!-- app two video promo start -->
        <section class="video-promo-with-icon">
            <div class="container">
                <div class="video-bg-with-icon" style="background: url('img/video-bg.jpg')no-repeat center center / cover">
                    <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="popup-youtube"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="video-promo-icon-wrapper bg-light pt-80 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-xl-3 col-md-6 mt-4 mt-md-4 mt-lg-0">
                            <div class="single-icon-box p-0 p-lg-4">
                                <i class="far fa-chart-pie-alt icon-one"></i>
                                <h5 class="h6">Feature Rich</h5>
                                <p>Get access to a variety of features that enable to automate business processes..</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-3 col-md-6 mt-4 mt-md-4 mt-lg-0">
                            <div class="single-icon-box p-0 p-lg-4">
                                <i class="far fa-pen-nib icon-two"></i>
                                <h5 class="h6">User friendly</h5>
                                <p>Built with the end user in mind.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-3 col-md-6 mt-4 mt-md-4 mt-lg-0">
                            <div class="single-icon-box p-0 p-lg-4">
                                <i class="far fa-chart-network icon-three"></i>
                                <h5 class="h6">Stay Connected</h5>
                                <p>Clear visualisation of field activities.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-3 col-md-6 mt-4 mt-md-4 mt-lg-0">
                            <div class="single-icon-box p-0 p-lg-4">
                                <i class="far fa-bezier-curve icon-four"></i>
                                <h5 class="h6">Progress Web Services</h5>
                                <p>Online and Offline data collection capabilities.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- app two video promo end -->

        <!-- app two download cta start -->
        <section class="app-two-download-cta ptb-120" style="background: url('img/app-download-cta.png')no-repeat
        center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-xl-6 col-md-10">
                        <div class="section-heading text-center">
                            <h2 class="text-white">Get The App Now and Start Learning Today</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-12">
                        <div class="action-btns mt-3">
                            <ul class="list-unstyled text-center">
                                <li class="d-inline-block me-2 mb-lg-0">
                                    <a class="
                        d-flex
                        align-items-center
                        text-decoration-none
                        rounded
                        active
                      " href="#"><i class="fab fa-apple pe-2"></i>
                                        <span>Available on the <span>App Store</span></span></a>
                                </li>
                                <li class="d-inline-block me-2 mb-lg-0">
                                    <a class="d-flex align-items-center text-decoration-none rounded" href="#"><i class="fab fa-google-play pe-2"></i>
                                        <span>Available on the <span>Google Play</span></span></a>
                                </li>
                                <li class="d-inline-block mb-lg-0">
                                    <a class="d-flex align-items-center text-decoration-none rounded" href="#"><i class="fab fa-windows pe-2"></i>
                                        <span>Available on the <span>Google Play</span></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- app two download cta end -->

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
                                    <img src="img/logo-white.png" alt="logo" class="img-fluid logo-white">
                                    <img src="img/logo-color.png" alt="logo" class="img-fluid logo-color">
                                </div>
                                <p>Our latest news, articles, and resources, we will sent to
                                    your inbox weekly.</p>

                                <form class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                    <input type="text" class="input-newsletter form-control me-2" placeholder="Enter your email" name="email" required="" autocomplete="off">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..." class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form>
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
                                        <h3>Primary Pages</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="index.html" class="text-decoration-none">Home</a></li>
                                            <li><a href="about-us.html" class="text-decoration-none">About Us</a></li>
                                            <li><a href="services.html" class="text-decoration-none">Services</a></li>
                                            <li><a href="career.html" class="text-decoration-none">Career</a></li>
                                            <li><a href="integrations.html" class="text-decoration-none">Integrations</a>
                                            </li>
                                            <li><a href="integration-single.html" class="text-decoration-none">Integration Single</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Pages</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="pricing.html" class="text-decoration-none">Pricing</a></li>
                                            <li><a href="blog.html" class="text-decoration-none">Blog</a></li>
                                            <li><a href="blog-single.html" class="text-decoration-none">Blog Details</a></li>
                                            <li><a href="contact-us.html" class="text-decoration-none">Contact</a></li>
                                            <li><a href="career-single.html" class="text-decoration-none">Career Single</a>
                                            </li>
                                            <li><a href="service-single.html" class="text-decoration-none">Services
                                                    Single</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Template</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="contact-us.html" class="text-decoration-none">Contact</a></li>
                                            <li><a href="support.html" class="text-decoration-none">Support</a></li>
                                            <li><a href="support-single.html" class="text-decoration-none">Support Single</a></li>
                                            <li><a href="team.html" class="text-decoration-none">Our Team</a></li>
                                            <li><a href="client-review.html" class="text-decoration-none">Customer Review</a></li>
                                            <li><a href="career-single.html" class="text-decoration-none">Career Single</a>
                                            </li>
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
                                <p class="mb-lg-0 mb-md-0">&copy; 2022 Future Basics Company limited Rights Reserved. Designed By <a href="https://futurebasics.co.tz/" class="text-decoration-none">Future Basics Company Limited</a></p>
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
