@extends('layouts.public')
@section('content')

       <!-- Header Start -->
    {{-- <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="img/logo-q1.png"
                        alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/logo-q1.png" alt="" style="width:300px !important; height: 300px !important; ">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">About Us</h1>
                        <p >
                            Qenineh is a startup focused on recycling plastic bottle waste and converting it into 3D printing filaments. This contributes to reducing the harmful impact of plastic waste on the environment and also helps in economic development.
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Eco-friendly filament production</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Supports a circular economy</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Promotes local innovation & job creation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Vision Start -->
    <div class="container-xxl py-5 ">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">Vision</h1>
                        <p class=" fs-5 mb-4" style="font-size: 16px !important;">
                            To become a regional leader in transforming plastic waste into innovative economic resources, 
                            making Jordan a hub for sustainable 3D printing solutions, and contributing to a future with 
                            less plastic and zero waste.
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Transforming plastic waste into valuable resources</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Establishing Jordan as a hub for sustainable 3D printing</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>Contributing to a future with zero plastic waste</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/vision12.png" alt="Vision Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Vision End -->






<!-- Mission Start -->
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid" src="img/mission11.png" alt="Qenineh Logo" style="width:300px !important; height: 300px !important; ">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h1 class="display-6">Mission</h1>
                    <p class="fs-5 mb-4" style="font-size: 16px !important;">
                        At QENINEH, we strive to reduce environmental pollution by collecting and recycling plastic bottles 
                        into high-quality, eco-friendly, and affordable 3D printing filaments. We are committed to building 
                        a sustainable circular economy that fosters industrial innovation, creates job opportunities, and 
                        promotes a culture of local, responsible production.
                    </p>
                    <div class="d-flex align-items-center mb-2">
                        <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                        <span>Reducing environmental pollution through recycling</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                        <span>Producing high-quality and eco-friendly 3D filaments</span>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                        <span>Fostering innovation and local job creation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mission End -->





   <!-- Founder Start -->
<div class="container-xxl py-5 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-lg p-5 wow fadeInUp" data-wow-delay="0.1s" style="border-radius: 2rem;">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
                            <img src="img/founder.png" alt="Founder Photo" 
                                class="img-fluid" 
                                style="width: 250px; height: 250px; object-fit: contain; 
                                        background-color: #f8f9fa;
                                        box-shadow: 0 4px 24px rgba(24,172,220,0.15);">
                        </div>

                        <div class="col-md-8">
                            <h2 class="mb-2" style="font-size: 2.5rem; font-weight: 700;">Omar Nasireh</h2>
                            <h5 class="text-primary mb-4" style="font-size: 1.5rem; font-weight: 500;">Founder & CEO</h5>
                            <p class="mb-0 fs-5" style="line-height: 2; font-size: 16px !important;">Driven by a passion for sustainability and innovation, our founder established QENINEH to transform plastic waste into valuable resources. With a vision for a cleaner planet and a thriving local industry, they lead the company towards a future where technology and responsibility go hand in hand.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Founder End -->


@endsection