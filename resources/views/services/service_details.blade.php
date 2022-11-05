@extends('layouts.pub_header')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header-services py-5 mb-5">
        <div class="container py-5">
            {{-- <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav> --}}
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">How we can help</h1>
            </div>
            <div class="row g-0 service-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-9.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Step 1: Consultation</h4>
                        <p class="mb-4">
                            Meeting with client to
                            understand their project
                            and requirements
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-10.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Step 2: Research</h4>
                        <p class="mb-4">
                            Investigation on how
                            RADARMILE can be
                            implemented for the client.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-11.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Step 3: Full Customisation</h4>
                        <p class="mb-4">
                            Fully customising the RADARMILE
                            tool to fit the clients' context
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-12.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Step 4: Testing</h4>
                        <p class="mb-4">
                            Testing and
                            troubleshooting in the
                            real world.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-13.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Step 5: Integration</h4>
                        <p class="mb-4">
                            Introducing the
                            RADARMILE tool into the
                            clients' project.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-14.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Step 6: Training</h4>
                        <p class="mb-4">
                            Educating the client and
                            staff on how to use the
                            RADARMILE tool.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-15.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Step 7: Deployment</h4>
                        <p class="mb-4">
                            Releasing the ready-to-go
                            RADARMILE tool for the client to
                            begin independently using it.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/icon-16.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Step 8: Support & Maintenance</h4>
                        <p class="mb-4">
                            Stand-by support
                            throughout the use of
                            RADARMILE.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


@endsection
