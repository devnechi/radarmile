@extends('layouts.pub_header')

@section('content')
        <!--hero section start-->
        <section class="hero-section ptb-120 bg-purple text-white" style="background: url('img/app-two-mockup-bg.png')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-xl-between align-items-center">
                    <div class="col-lg-5 col-xl-5 col-xl-5 col-md-10">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                            <h5 class="text-warning">Collect, Analyze and Report</h5>
                            <h1 class="fw-bold display-5">Your Field Project Monitoring Tool</h1>
                            <p class="lead">
                                With  projects implemented in multiple areas with multiple actors,
                                 it has never been easier  to manage front-line activities,
                                  measure impact and make strategic  decisions with reliable
                                   and accurate data from the field. The app automates data collection,
                                    reporting and ensures beneficiaries are impacted directly.
                            </p>
                            <div class="action-btns mt-5">
                                <a href="{{ route('documentation') }}" class="btn btn-outline-light">Learn More</a>
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
                            <h2>Explore Radarmile Capabilities</h2>
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
                                        <a href="{{ route('capabilities-details') }}" class="link-with-icon text-decoration-none">View Details <i class="far fa-arrow-right"></i></a>
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
                                        <a href="{{ route('capabilities-details') }}" class="link-with-icon text-decoration-none">View Details <i class="far fa-arrow-right"></i></a>
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
                                        <a href="{{ route('capabilities-details') }}" class="link-with-icon text-decoration-none">View Details <i class="far fa-arrow-right"></i></a>
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
                                        <a href="{{ route('capabilities-details') }}" class="link-with-icon text-decoration-none">View Details <i class="far fa-arrow-right"></i></a>
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
                                <h2>Improve how you track field operations and progress utilizing Modern technologies
                                </h2>
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
        <section class="app-two-cta ptb-120 text-white bg-purple" style="background-image: url('img/hero-dot-bg.png')">
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
        <section class="app-two-download-cta ptb-120" style="background: url('img/app-download-cta.png')no-repeat center center / cover">
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


        @endsection
