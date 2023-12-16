@extends('layout.master')

@section('content')
    @if(session()->has('success'))
    <?php dd("hello"); ?>
        {{-- <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('success') }}</div> --}}
    @endif
        <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5" id="home">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('public/img/img2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">

                                <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">We Provide 24x7 Roadside Assistance service</h1>
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Wiithin 30 minutes!!</h5>

                                    <div class="elementor-button-wrapper">
                                    <button class="button">
                                    <a href="tel:0564954359">
                                    <i class="bi bi-telephone-outbound"></i>
                                    <span class="elementor-button-text">Call Us</span>
                                    </a>
                                    </button>

                                    <button class="button">
                                    <a href="https://wa.me/0564954359">
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
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">EXPRESS CAR SERVICES 24x7 AT YOUR PLACE</h1>
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">REACH YOUR DESTINATION SAFE AND IN COMFORT</h5>
                                    <button class="button">
                                    <a href="tel:0564954359">
                                    <i class="bi bi-telephone-outbound"></i>
                                    <span class="elementor-button-text">Call Us</span>
                                    </a>
                                    </button>

                                    <button class="button">
                                    <a href="https://wa.me/0564954359">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
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
