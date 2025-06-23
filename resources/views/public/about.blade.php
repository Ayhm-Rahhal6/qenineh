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
            <div class="col-lg-6 wow fadeInUp text-center" data-wow-delay="0.1s">
                <img src="img/logo-q1.png" alt="Qenineh Logo" class="img-fluid" style="max-width: 300px;">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-6 text-primary mb-3">Who We Are</h1>
                <p class="lead">Qenineh is a bold startup converting plastic bottle waste into high-quality, eco-friendly 3D printing filaments.</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fas fa-recycle fa-lg text-info me-3"></i> Eco-friendly filament production</li>
                    <li class="mb-3"><i class="fas fa-circle-notch fa-lg text-info me-3"></i> Supporting a circular economy</li>
                    <li><i class="fas fa-lightbulb fa-lg text-info me-3"></i> Promoting local innovation & job creation</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Vision Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 order-lg-2 wow fadeInUp text-center" data-wow-delay="0.1s">
                <img src="img/vision12.png" alt="Vision" class="img-fluid" style="max-width: 300px;">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-6 text-primary mb-3">Our Vision</h1>
                <p class="lead">Becoming a regional leader in turning plastic waste into economic resources, and positioning Jordan as a hub for sustainable 3D printing.</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fas fa-globe-asia fa-lg text-info me-3"></i> Transforming waste into value</li>
                    <li class="mb-3"><i class="fas fa-industry fa-lg text-info me-3"></i> Making Jordan a sustainability hub</li>
                    <li><i class="fas fa-seedling fa-lg text-info me-3"></i> Building a zero-waste future</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Mission Start -->
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp text-center" data-wow-delay="0.1s">
                <img src="img/mission11.png" alt="Mission" class="img-fluid" style="max-width: 300px;">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-6 text-primary mb-3">Our Mission</h1>
                <p class="lead">To reduce pollution by recycling bottles into sustainable 3D filaments, boosting local innovation and green economy.</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fas fa-trash-restore-alt fa-lg text-info me-3"></i> Reduce plastic pollution</li>
                    <li class="mb-3"><i class="fas fa-cogs fa-lg text-info me-3"></i> High-quality eco-friendly filaments</li>
                    <li><i class="fas fa-people-carry fa-lg text-info me-3"></i> Drive innovation & job creation</li>
                </ul>
            </div>
        </div>
    </div>
</div>

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