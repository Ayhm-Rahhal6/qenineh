@extends('layouts.public')
@section('content')

 <!-- Services Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6">Our Services</h1>
            <p class="text-primary fs-5 mb-5">Comprehensive 3D Printing Solutions</p>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Service 1 -->
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light p-5 text-center h-100">
                    <img class="img-fluid mb-4" src="img/icon-7.png" alt="">
                    <h5 class="mb-3">3D Printers & Filaments</h5>
                    <p>High-quality, eco-friendly 3D printing filaments made from recycled plastic bottles, along with reliable 3D printers. Our offerings support:</p>
                    <ul class="text-start d-inline-block">
                        <li>Custom color options</li>
                        <li>Various filament sizes</li>
                        <li>Lower prices</li>
                        <li>Environmentally friendly materials</li>
                    </ul>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-light p-5 text-center h-100">
                    <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                    <h5 class="mb-3">Carbon Credit & Plastic Disposal</h5>
                    <p>Support your sustainability goals with:</p>
                    <ul class="text-start d-inline-block">
                        <li>Carbon credit documentation and support</li>
                        <li>Services for companies to dispose of plastic bottles responsibly</li>
                        <li>Full collection and processing operations</li>
                        <li>Sustainability reports for corporate clients</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


@endsection