@extends('layouts.public')
@section('content')

 <!-- Services Start -->
{{-- <div class="container-xxl py-5">
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
</div> --}}
<!-- Services End -->




<!-- Services Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-6 fw-bold">Our Services</h2>
      <p class="text-primary fs-5">Comprehensive 3D Printing Solutions</p>
    </div>
    <div class="row g-4">
      <!-- Filaments & 3D Printers -->
      <div class="col-md-6">
        <div class="bg-white rounded shadow p-4 h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-cubes fa-2x text-info me-3" style="color: #18acdc !important"></i>
              <h5 class="mb-0 fw-bold">Filaments & 3D Printers</h5>
            </div>
            <p class="text-muted">High-quality filaments for 3D printers, tailored to your needs and budget.</p>
            <ul class="list-unstyled ps-3">
              <li class="mb-2"><i class="fas fa-palette text-info me-2" style="color: #18acdc !important"></i> Custom color options</li>
              <li class="mb-2"><i class="fas fa-ruler-combined text-info me-2" style="color: #18acdc !important"></i> Custom size available</li>
              <li class="mb-2"><i class="fas fa-tag text-info me-2" style="color: #18acdc !important"></i> Lower price than competitors</li>
              <li class="mb-2"><i class="fas fa-leaf text-success me-2" style="color: #18acdc !important"></i> Environmentally friendly materials</li>
            </ul>
          </div>
          <div class="mt-4">
            <a href="/contact" class="btn btn-info text-white px-4">Request a Quote</a>
          </div>
        </div>
      </div>

      <!-- Plastic Bottle Disposal -->
      <div class="col-md-6">
        <div class="bg-white rounded shadow p-4 h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="d-flex align-items-center mb-3">
              <i class="fas fa-recycle fa-2x text-success me-3" style="color: #18acdc !important"></i>
              <h5 class="mb-0 fw-bold">Plastic Bottle Disposal</h5>
            </div>
            <p class="text-muted">Helping companies dispose of plastic bottles responsibly and earn carbon credits.</p>
            <ul class="list-unstyled ps-3">
              <li class="mb-2"><i class="fas fa-leaf text-success me-2" style="color: #18acdc !important"></i> Environmentally friendly process</li>
              <li class="mb-2"><i class="fas fa-coins text-info me-2" style="color: #18acdc !important"></i> Earn carbon credits for your business</li>
              <li class="mb-2"><i class="fas fa-building text-info me-2" style="color: #18acdc !important"></i> Tailored for companies and organizations</li>
            </ul>
          </div>
          <div class="mt-4">
            <a href="/contact" class="btn btn-info text-white px-4" >Contact for Service</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Environmental Commitment -->
<section class="py-5 bg-white">
  <div class="container text-center">
    <h2 class="fw-bold text-info mb-3">Our Environmental Commitment</h2>
    <p class="text-muted mb-4 fs-5">
      We are dedicated to reducing plastic waste and supporting a circular economy. By choosing our services, you help protect the environment and promote sustainability.
    </p>
    <div class="d-flex justify-content-center flex-wrap gap-3 mt-3">
      <span class="badge bg-success fs-6 py-2 px-3"><i class="fas fa-leaf me-2"></i>Eco-Friendly</span>
      <span class="badge bg-primary fs-6 py-2 px-3"><i class="fas fa-recycle me-2"></i>Recycling Partner</span>
      <span class="badge bg-warning text-dark fs-6 py-2 px-3"><i class="fas fa-certificate me-2"></i>Carbon Credit Provider</span>
    </div>
  </div>
</section>

@endsection