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
                                <img src="{{ asset('public/img/logo.webp') }}" alt="Logo" class="logo-img me-2"
                                    style="width: 60px; height: auto;">
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
                            <a href="{{ route('mechanical-services') }}" class="nav-item nav-link">Mechanical Services</a>
                            <a href="{{ route('car-electrical-services') }}" class="nav-item nav-link">Car Electrical
                                Services</a>
                            <a href="{{ route('vehicle-inspection') }}" class="nav-item nav-link">Vehicle Inspection</a>
                            <a href="{{ route('engine-oil-change') }}" class="nav-item nav-link">Engine Oil Change</a>
                            <a href="{{ route('car-brake-pad-replacement') }}" class="nav-item nav-link">Car Brake Pad
                                Replacement</a>
                            <a href="{{ route('car-maintenance') }}" class="nav-item nav-link">Car Maintenance</a>
                        </nav>
                    </div>
                </div>
            </div>



            <!-- Carousel Content -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('public/img/hero2.webp') }}" alt="Roadside Assistance
                                        Anywhere in Dubai"
                        style="height: 100vh; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Roadside Assistance
                                        Anywhere in Dubai</h1>
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Within 30 minutes!</h5>
                                    <div class="elementor-button-wrapper d-flex gap-2 flex-wrap justify-content-lg-start justify-content-center"
                                        style="max-width:100%; align-items:center;">
                                        <!-- CALL BUTTON -->
                                        <a href="tel:0566121423" class="btn btn-primary rounded-pill shadow-sm" style="display:inline-flex; align-items:center; justify-content:center;
                                            padding:10px 22px; font-size:16px;
                                            white-space:nowrap; width:auto;
                                            flex:0 0 auto; flex-shrink:0;">

                                            <i class="bi bi-telephone-outbound me-2"></i>
                                            <span>Call Us</span>
                                        </a>
                                        <!-- WHATSAPP BUTTON -->
                                        <a href="https://wa.me/971566121423" class="btn btn-success rounded-pill shadow-sm"
                                            style="display:inline-flex; align-items:center; justify-content:center;
                                            padding:10px 22px; font-size:16px;
                                            white-space:nowrap; width:auto;
                                            flex:0 0 auto; flex-shrink:0;">
                                            <i class="fab fa-whatsapp me-2"></i>
                                            <span>WhatsApp Us</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('public/img/hero1.webp') }}" alt="Best Car Repair Services in Dubai"
                        style="height: 100vh; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Best Car Repair Services
                                        at Your in Dubai</h1>
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Available Every Day!
                                    </h5>
                                    <div class="elementor-button-wrapper d-flex gap-2 flex-wrap justify-content-lg-start justify-content-center"
                                        style="max-width:100%; align-items:center;">
                                        <!-- CALL BUTTON -->
                                        <a href="tel:0566121423" class="btn btn-primary rounded-pill shadow-sm" style="display:inline-flex; align-items:center; justify-content:center;
                                            padding:10px 22px; font-size:16px;
                                            white-space:nowrap; width:auto;
                                            flex:0 0 auto; flex-shrink:0;">

                                            <i class="bi bi-telephone-outbound me-2"></i>
                                            <span>Call Us</span>
                                        </a>
                                        <!-- WHATSAPP BUTTON -->
                                        <a href="https://wa.me/971566121423" class="btn btn-success rounded-pill shadow-sm"
                                            style="display:inline-flex; align-items:center; justify-content:center;
                                            padding:10px 22px; font-size:16px;
                                            white-space:nowrap; width:auto;
                                            flex:0 0 auto; flex-shrink:0;">
                                            <i class="fab fa-whatsapp me-2"></i>
                                            <span>WhatsApp Us</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
@endsection