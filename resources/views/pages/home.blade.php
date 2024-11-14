@extends('layout.masterhome')

@section('content')
@if(session()->has('success'))
    <?php    dd("hello"); ?>
    {{-- <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close"
            data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{
        session()->get('success') }}</div> --}}
@endif
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5" id="home">
    <div id="header-carousel" class="carousel slide position-relative" data-bs-ride="carousel">
        <!-- nav-mobile -->
        {{-- This is a Blade comment

        <div class="d-flex d-lg-none nav-mobile position-absolute" style="right:0 ;z-index:100">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <i class="bi bi-text-indent-left"></i>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel"><!-- Brand and Logo -->
                        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center">
                            <img src="{{asset('public/img/logo.webp')}}" alt="Logo" class="logo-img me-3"
                                style="width: 50px; height: auto;">
                            <h2 class="mb-0">Dubai Car Repair Service</h2>
                        </a>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="dropdown mt-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- nav-mobile-end -->
        --}}

        <!-- nav-mobile -->
        <div class="d-flex d-lg-none nav-mobile position-absolute" style="right: 10px; z-index: 100;">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"
                aria-controls="offcanvasMenu">
                <i class="bi bi-list"></i>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasMenuLabel">
                        <!-- Brand and Logo -->
                        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                            <img src="{{ asset('public/img/logo.webp') }}" alt="Logo" class="logo-img me-2"
                                style="width: 40px; height: auto;">
                            <span>Dubai Car Repair Service</span>
                        </a>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <nav class="nav flex-column">
                        <a href="{{route('home') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{route('about') }}" class="nav-item nav-link">About</a>
                        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </nav>
                    <hr>
                    <div class="dropdown mt-3">
                        <button class="btn btn-secondary dropdown-toggle w-100" type="button" data-bs-toggle="dropdown">
                            Service
                        </button>
                        <ul class="dropdown-menu w-100">
                            <li><a class="dropdown-item" href="{{route('mechanical-services')}}">Mechanical Services</a>
                            </li>
                            <li><a class="dropdown-item" href="{{route('car-electrical-services')}}">Car Electrical
                                    Services</a></li>
                            <li><a class="dropdown-item" href="{{route('vehicle-inspection')}}">Vehicle Inspection</a>
                            </li>
                            <li><a class="dropdown-item" href="{{route('engine-oil-change')}}">Engine Oil Change</a>
                            </li>
                            <li><a class="dropdown-item" href="{{route('car-brake-pad-replacement')}}">Car Brake Pad
                                    Replacement</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('public/img/img2.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">

                                <!-- <h6 class="text-white text-uppercase mb-3 animated slideInDown">From Dubai Car Repair Service</h6> -->
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">We Provide Roadside
                                    Assistance Anywhere In The Dubai City</h1>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Wiithin 30 minutes!!
                                </h5>

                                <div class="elementor-button-wrapper">
                                    <button class="button">
                                        <a href="tel:0566121423">
                                            <i class="bi bi-telephone-outbound"></i>
                                            <span class="elementor-button-text">Call Us</span>
                                        </a>
                                    </button>

                                    <button class="button">
                                        <a href="https://wa.me/971566121423">
                                            <i aria-hidden="true" class="fab fa-whatsapp"></i>
                                            <span class="elementor-button-text">WhatsApp Us</span>
                                        </a>
                                    </button>
                                </div>

                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                <!-- <img class="img-fluid" src="{{asset('public/img/carousel-1.png')}}" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('public/img/img1.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-10 col-lg-7 text-center text-lg-start">
                                <h6 class="text-white text-uppercase mb-3 animated slideInDown">Our Main Goal</h6>
                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">EXPRESS CAR SERVICES AT
                                    YOUR PLACE</h1>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">AVAILABLE EVERY DAY!!
                                </h5>
                                <button class="button">
                                    <a href="tel:0566121423">
                                        <i class="bi bi-telephone-outbound"></i>
                                        <span class="elementor-button-text">Call Us</span>
                                    </a>
                                </button>

                                <button class="button">
                                    <a href="https://wa.me/971566121423">
                                        <i aria-hidden="true" class="fab fa-whatsapp"></i>
                                        <span class="elementor-button-text">WhatsApp Us</span>
                                    </a>
                                </button>
                                <!-- <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a> -->
                            </div>
                            <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                <!-- <img class="img-fluid" src="{{asset('public/img/carousel-2.png')}}" alt=""> -->
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
<!-- Carousel End -->


@include("sections.service")

@include("sections.about")

@include("sections.fact")

@include("sections.service_two")

@include("sections.booking")

@include("sections.team")

@include("sections.testimonial")


@endsection