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

            <!-- Carousel Inner Content -->
            <div class="carousel-inner">

                {{-- SLIDE 1 --}}
                <div class="carousel-item active" style="min-height: 100vh; position: relative;">
                    <img class="w-100" src="{{ asset('public/img/hero2.webp') }}"
                         fetchpriority="high"
                         alt="Car Repair Service in Dubai - Al Satwa Garage"
                         style="height: 100vh; min-height: 100vh; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1;">
                    <div class="carousel-caption d-flex align-items-center"
                         style="background: linear-gradient(90deg, rgba(0,21,22,.85) 0%, rgba(0,21,22,.40) 100%); position: relative; z-index: 2; min-height: 100vh; top: 0; bottom: 0; left: 0; right: 0; padding: 80px 0 40px 0;">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-12 col-sm-11 col-lg-7 text-center text-lg-start">
                                    <p class="text-white-50 mb-2 animated slideInDown px-2"
                                       style="font-size: calc(0.7rem + 0.3vw); letter-spacing: .14em; text-transform: uppercase; font-weight: 600;">
                                        222 Al Satwa Rd, Dubai &bull; Established 2012 &bull; Open 7AM–10PM Daily
                                    </p>
                                    <h1 class="text-white fw-bold mb-3 animated slideInDown"
                                        style="font-size: clamp(1.6rem, 5vw, 2.8rem); line-height: 1.2;">
                                        Car Repair Service in Dubai -<br class="d-none d-md-block"> Al Satwa's Most Trusted Garage
                                    </h1>
                                    <p class="text-white mb-4 animated slideInDown mx-auto mx-lg-0"
                                       style="font-size: 1.05rem; opacity: .88; max-width: 520px;">
                                        Engine, AC, battery, brakes &amp; diagnostics - done right, at fair prices. Open Sat–Fri, 7AM to 10PM. All makes &amp; models welcome.
                                    </p>
                                        <div class="row g-2 justify-content-center justify-content-lg-start mb-4" style="max-width: 540px; margin: 0 auto;">
                                            <div class="col-6 col-sm-auto">
                                                <a href="tel:0566121423" class="btn btn-primary rounded-pill w-100 px-3 py-2 fw-semibold" style="font-size: 0.85rem; white-space: nowrap;">
                                                    <i class="fa fa-phone-alt me-1"></i>Call 056 612 1423
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-auto">
                                                <a href="https://wa.me/971566121423" class="btn btn-success rounded-pill w-100 px-3 py-2 fw-semibold" style="font-size: 0.85rem; white-space: nowrap;">
                                                    <i class="fab fa-whatsapp me-1"></i>WhatsApp
                                                </a>
                                            </div>
                                            <div class="col-12 col-sm-auto mt-2 mt-sm-0">
                                                <a href="#booking" class="btn btn-outline-light rounded-pill w-100 px-3 py-2 fw-semibold" style="font-size: 0.85rem; white-space: nowrap;">
                                                    <i class="fa fa-calendar me-1"></i>Book a Service
                                                </a>
                                            </div>
                                        </div>
                                    <div class="d-flex flex-wrap gap-2 gap-sm-3 justify-content-center justify-content-lg-start">
                                        @php $badges = [
                                            ['fa-award','12 Years Experience'],
                                            ['fa-users','8,500+ Customers'],
                                            ['fa-star','4.8★ Google Rating'],
                                            ['fa-shield-alt','Workmanship Warranty'],
                                        ]; @endphp
                                        @foreach($badges as $b)
                                        <div class="d-flex align-items-center gap-2 bg-white bg-opacity-10 rounded-pill px-3 py-1">
                                            <i class="fa {{ $b[0] }} text-primary" style="font-size: .85rem;"></i>
                                            <span class="text-white fw-semibold" style="font-size: .78rem;">{{ $b[1] }}</span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SLIDE 2 --}}
                <div class="carousel-item" style="min-height: 100vh; position: relative;">
                    <img class="w-100" src="{{ asset('public/img/hero1.webp') }}"
                         fetchpriority="high"
                         alt="Car Repair Service in Dubai - Al Satwa Garage"
                         style="height: 100vh; min-height: 100vh; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 1;">
                    <div class="carousel-caption d-flex align-items-center"
                         style="background: linear-gradient(90deg, rgba(0,21,22,.85) 0%, rgba(0,21,22,.40) 100%); position: relative; z-index: 2; min-height: 100vh; top: 0; bottom: 0; left: 0; right: 0; padding: 80px 0 40px 0;">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-12 col-sm-11 col-lg-7 text-center text-lg-start">
                                    <p class="text-white-50 mb-2 animated slideInDown px-2"
                                       style="font-size: calc(0.7rem + 0.3vw); letter-spacing: .14em; text-transform: uppercase; font-weight: 600;">
                                        8 Certified Mechanics &bull; Genuine Parts &bull; Transparent Pricing
                                    </p>
                                    <h2 class="text-white fw-bold mb-3 animated slideInDown"
                                        style="font-size: clamp(1.6rem, 5vw, 2.8rem); line-height: 1.2;">
                                        12 Years Fixing Cars in Dubai.<br class="d-none d-md-block"> 8,500+ Satisfied Customers.
                                    </h2>
                                    <p class="text-white mb-4 animated slideInDown mx-auto mx-lg-0"
                                       style="font-size: 1.05rem; opacity: .88; max-width: 520px;">
                                        Certified mechanics. Genuine parts. Written quote before work begins. Most repairs completed same day - no long waits.
                                    </p>
                                        <div class="row g-2 justify-content-center justify-content-lg-start mb-4" style="max-width: 540px; margin: 0 auto;">
                                            <div class="col-6 col-sm-auto">
                                                <a href="tel:0566121423" class="btn btn-primary rounded-pill w-100 px-3 py-2 fw-semibold" style="font-size: 0.85rem; white-space: nowrap;">
                                                    <i class="fa fa-phone-alt me-1"></i>Call 056 612 1423
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-auto">
                                                <a href="https://wa.me/971566121423" class="btn btn-success rounded-pill w-100 px-3 py-2 fw-semibold" style="font-size: 0.85rem; white-space: nowrap;">
                                                    <i class="fab fa-whatsapp me-1"></i>WhatsApp
                                                </a>
                                            </div>
                                            <div class="col-12 col-sm-auto mt-2 mt-sm-0">
                                                <a href="#booking" class="btn btn-outline-light rounded-pill w-100 px-3 py-2 fw-semibold" style="font-size: 0.85rem; white-space: nowrap;">
                                                    <i class="fa fa-calendar me-1"></i>Book a Service
                                                </a>
                                            </div>
                                        </div>
                                    <div class="d-flex flex-wrap gap-2 gap-sm-3 justify-content-center justify-content-lg-start">
                                        @php $badges = [
                                            ['fa-award','12 Years Experience'],
                                            ['fa-users','8,500+ Customers'],
                                            ['fa-star','4.8★ Google Rating'],
                                            ['fa-shield-alt','Workmanship Warranty'],
                                        ]; @endphp
                                        @foreach($badges as $b)
                                        <div class="d-flex align-items-center gap-2 bg-white bg-opacity-10 rounded-pill px-3 py-1">
                                            <i class="fa {{ $b[0] }} text-primary" style="font-size: .85rem;"></i>
                                            <span class="text-white fw-semibold" style="font-size: .78rem;">{{ $b[1] }}</span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

                <!-- Controls (Enhanced for Layering & Version Compatibility) -->
                <button class="carousel-control-prev" type="button" 
                        data-bs-target="#header-carousel" data-target="#header-carousel" 
                        data-bs-slide="prev" data-slide="prev" 
                        style="z-index: 999; position: absolute; top: 50%; transform: translateY(-50%); width: 5%;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" 
                        data-bs-target="#header-carousel" data-target="#header-carousel" 
                        data-bs-slide="next" data-slide="next" 
                        style="z-index: 999; position: absolute; top: 50%; transform: translateY(-50%); width: 5%;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
        </div>
    </div>

    <!-- Additional Sections -->
    @include("sections.service")
    @include("sections.about")
    @include("sections.fact")
    @include("sections.service_two")
    @include("sections.booking")
    @include("sections.team")
    @include("sections.testimonial")
@endsection