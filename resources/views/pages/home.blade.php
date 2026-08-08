@extends('layout.masterhome')

@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible text-center">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ session()->get('success') }}
        </div>
    @endif

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5" id="home">
        <div id="header-carousel" class="carousel slide position-relative" data-bs-ride="carousel">

            <!-- Mobile Navigation -->
            <div class="d-flex d-lg-none nav-mobile position-absolute" style="right: 10px; z-index: 100;">
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasMenuLabel">
                            <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                                <img src="{{ asset('public/img/logo.webp') }}" alt="Dubai Car Repair Service Logo" class="logo-img me-2" width="60" height="60" style="width: 60px; height: auto;">
                                <span>Dubai Car Repair Service</span>
                            </a>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <nav class="nav flex-column">
                            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                            <!-- Services -->
                            <a href="{{ route('car-inspection-dubai') }}" class="nav-item nav-link">Car Inspection Dubai</a>
                            <a href="{{ route('car-engine-service-dubai') }}" class="nav-item nav-link">Car Engine Service Dubai</a>
                            <a href="{{ route('mobile-car-repair-dubai') }}" class="nav-item nav-link">Mobile Car Repair Dubai</a>
                            <a href="{{ route('engine-oil-change-dubai') }}" class="nav-item nav-link">Engine Oil Change Dubai</a>
                            <a href="{{ route('tyre-replacement-dubai') }}" class="nav-item nav-link">Tyre Replacement Dubai</a>
                            <a href="{{ route('car-maintenance-dubai') }}" class="nav-item nav-link">Car Maintenance Dubai</a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Modern High-Speed Hero Section -->
            <section class="hero-wrapper position-relative text-white overflow-hidden" style="min-height: 100vh; background-color: #001516;">
                
                <!-- Background Image with High LCP Priority -->
                <img class="position-absolute top-0 start-0 w-100 h-100"
                    src="{{ asset('public/img/hero2.webp') }}"
                    fetchpriority="high"
                    loading="eager"
                    alt="Car Repair Service in Dubai - Al Satwa Garage"
                    style="object-fit: cover; object-position: center; z-index: 1;">

                <!-- Gradient Overlay & Content Container -->
                <div class="position-relative d-flex align-items-center w-100 min-vh-100 py-5 py-lg-0" 
                    style="z-index: 2; background: linear-gradient(180deg, rgba(0, 21, 22, 0.92) 0%, rgba(0, 21, 22, 0.75) 50%, rgba(0, 21, 22, 0.95) 100%);">
                    
                    <div class="container py-4">
                        <div class="row justify-content-center justify-content-lg-start">
                            <div class="col-12 col-md-10 col-lg-7 text-center text-lg-start">
                                
                                <!-- Sub-header Pill Tag -->
                                <div class="d-inline-flex align-items-center bg-white bg-opacity-10 border border-white border-opacity-10 rounded-pill px-3 py-1 mb-3">
                                    <p class="text-white-50 mb-0" style="font-size: clamp(0.68rem, 2vw, 0.8rem); letter-spacing: .12em; text-transform: uppercase; font-weight: 600;">
                                        222 Al Satwa Rd, Dubai &bull; Established 2012 &bull; Open 7AM–10PM Daily
                                    </p>
                                </div>

                                <!-- Main Heading -->
                                <h1 class="text-white fw-bold mb-3" style="font-size: clamp(1.75rem, 5vw, 3rem); line-height: 1.25; letter-spacing: -0.02em;">
                                    Car Repair Service in Dubai -<br class="d-none d-md-block"> Al Satwa's Most Trusted Garage
                                </h1>

                                <!-- Paragraph Description -->
                                <p class="text-white-50 mb-4 mx-auto mx-lg-0" style="font-size: clamp(0.95rem, 2.5vw, 1.1rem); line-height: 1.6; max-width: 520px;">
                                    Engine, AC, battery, brakes &amp; diagnostics - done right, at fair prices. Open Sat–Fri, 7AM to 10PM. All makes &amp; models welcome.
                                </p>

                                <!-- CTA Buttons (Perfectly Aligned PC & Mobile) -->
                                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-2 mb-4">
                                    <a href="tel:+971 56 612 1423" class="btn btn-primary rounded-pill px-3 py-2 fw-semibold shadow-sm flex-grow-1 flex-sm-grow-0 text-center" style="font-size: 0.88rem; white-space: nowrap;">
                                        <i class="fa fa-phone-alt me-1"></i>Call +971 56 612 1423
                                    </a>
                                    <a href="https://wa.me/971566121423" class="btn btn-success rounded-pill px-3 py-2 fw-semibold shadow-sm flex-grow-1 flex-sm-grow-0 text-center" style="font-size: 0.88rem; white-space: nowrap;">
                                        <i class="fab fa-whatsapp me-1"></i>WhatsApp
                                    </a>
                                    <a href="#booking" class="btn btn-outline-light rounded-pill px-3 py-2 fw-semibold flex-grow-1 flex-sm-grow-0 text-center" style="font-size: 0.88rem; white-space: nowrap;">
                                        <i class="fa fa-calendar me-1"></i>Book a Service
                                    </a>
                                </div>

                                <!-- Trust Badges -->
                                <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-lg-start">
                                    @php $badges = [
                                        ['fa-award','12 Years Experience'],
                                        ['fa-users','8,500+ Customers'],
                                        ['fa-star','4.8★ Google Rating'],
                                        ['fa-shield-alt','Workmanship Warranty'],
                                    ]; @endphp
                                    @foreach($badges as $b)
                                    <div class="d-flex align-items-center gap-2 bg-white bg-opacity-10 backdrop-blur border border-white border-opacity-10 rounded-pill px-3 py-1">
                                        <i class="fa {{ $b[0] }} text-primary" style="font-size: .85rem;"></i>
                                        <span class="text-white fw-semibold" style="font-size: .78rem;">{{ $b[1] }}</span>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <!-- Additional Sections -->
    @include("sections.service")
    @include("sections.about")
    @include("sections.fact")
    @include("sections.service_two")
    @include("sections.booking")
    @include("sections.team")
    @include("sections.testimonial")
@endsection