<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Include Bootstrap's CSS and JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11224625343"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-11224625343');
    </script>

    <!-- Event snippet for Phone call lead (1) conversion page -->
    <script>
        gtag('event', 'conversion', { 'send_to': 'AW-11224625343/HyL3CL-Nmq8YEL_hqOgp' });
    </script>




    <meta charset="utf-8">
    <title>Dubai Car Repair Service</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{$meta_keywords}}" name="keywords">
    <meta content="{{$meta_description}}" name="description">

    <!-- Favicon -->
    <link href="{{asset('public/img/favicon.ico')}}" rel="icon">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/counterup/1.0.0/jquery.counterup.min.js"></script>


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('public/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/lib/owlcarousel/assets/owl.carousel.min.css')}} " rel="stylesheet">
    <link href="{{asset('public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />



    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!-- Custom CSS for the Navbar -->
    <style>
        .navbar-brand h2 {
            font-size: 1.25rem;
            /* Adjust the size to align with the button */
        }

        .navbar-toggler {
            padding: 0.25rem 0.5rem;
            /* Adjust the padding to control alignment */
        }

        .navbar-toggler-icon {
            font-size: 1.5rem;
            /* Adjust icon size */
        }

        /* Ensure perfect alignment on all screen sizes */
        @media (max-width: 991.98px) {
            .navbar-brand h2 {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <a href="https://api.whatsapp.com/send?phone=971566121423" class="float" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-light">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2 .nav_clr_upr{"></small>
                    <small>222 Al Satwa Rd - Al Satwa - Dubai - United Arab Emirates</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2 .nav_clr_upr{"></small>
                    <small>Sat–Fri, 7 AM–11:30 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2 .nav_clr_upr{"></small>
                    <small>056-6121423</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-0 d-none d-lg-flex">
        <div class="container-fluid d-flex align-items-center justify-content-between px-4 px-lg-5">
            <!-- Brand and Logo -->
            <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center">
                <img src="{{asset('public/img/logo.webp')}}" alt="Logo" class="logo-img me-3"
                    style="width: 50px; height: auto;">
                <h2 class="mb-0">Dubai Car Repair Service</h2>
            </a>

            <!-- Trigger Button for MMENU -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{route('about') }}" class="nav-item nav-link">About</a>

                <!-- Dropdown Menu for Services -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Service
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('mechanical-services')}}">Mechanical Services</a>
                        </li>
                        <li><a class="dropdown-item" href="{{route('car-electrical-services')}}">Car Electrical
                                Services</a></li>
                        <li><a class="dropdown-item" href="{{route('vehicle-inspection')}}">Vehicle Inspection</a></li>
                        <li><a class="dropdown-item" href="{{route('engine-oil-change')}}">Engine Oil Change</a></li>
                        <li><a class="dropdown-item" href="{{route('car-brake-pad-replacement')}}">Car Brake Pad
                                Replacement</a></li>
                    </ul>
                </div>


                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
            </div>
            <a href="#booking" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Booking<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- nav-mobile -->
    <div class="d-flex d-lg-none nav-mobile position-absolute" style="right:0 ;z-index:100">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <i class="bi bi-text-indent-left"></i>
        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                    images, lists, etc.
                </div>
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


    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-8 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115493.43018679877!2d55.19476726826947!3d25.231208851415023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f438155692891%3A0x85f09a9921e1c24c!2sDXB%20Car%20Repair%20%7C%20Home%20%26%20Roadside%20Assistance%20-%20Dubai!5e0!3m2!1sen!2sbd!4v1698087133026!5m2!1sen!2sbd"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-4 col-md-4">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Al Satwa, Dubai, United Arab Emirates</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>056-6121423</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>rahidur11@gmail.com</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="{{route('mechanical-services')}}">Mechanical Services</a>
                    <a class="btn btn-link" href="{{route('car-electrical-services')}}">Car Electrical Services</a>
                    <a class="btn btn-link" href="{{route('vehicle-inspection')}}">Vehicle Inspection</a>
                    <a class="btn btn-link" href="{{route('engine-oil-change')}}">Engine Oil Change</a>
                    <a class="btn btn-link" href="{{route('car-brake-pad-replacement')}}">Car Brake Pad Replacement</a>
                </div>
                <div class="row  mt-5 align-items-center">
                    <div class="col-2">
                        <img class="img-fluid mt-2" style="width:110px" src="{{asset('public/img/c1.png')}}">
                    </div>
                    <div class="col-2">
                        <img class="img-fluid" style="width:120px" src="{{asset('public/img/c2.png')}}">
                    </div>
                    <div class="col-2">
                        <img class="img-fluid" style="width:100px" src="{{asset('public/img/c3.png')}}">
                    </div>
                    <div class="col-2">
                        <img class="img-fluid" style="width:100px" src="{{asset('public/img/c4.png')}}">
                    </div>
                    <div class="col-2">
                        <img class="img-fluid" style="width:120px" src="{{asset('public/img/c5.png')}}">
                    </div>
                    <div class="col-2">
                        <img class="img-fluid" style="width:100px" src="{{asset('public/img/c6.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('public/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('public/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('public/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('public/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('public/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('public/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>

        $(document).ready(function () {
            $('.counter-up').counterUp({
                delay: 10, // Delay in milliseconds
                time: 1000 // Animation duration in milliseconds
            });
        });
    </script>


    <script>
        $(document).ready(function () {
            $('.nav-link').click(function () {
                $('.collapse').removeClass('show');
            });
        });
        @if(Session::has('succcess'))
            toastr.options =
            {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('succcess') }}");
        @endif
    </script>

    <!-- Template Javascript -->
    <script src="{{asset('public/js/main.js')}}"></script>
    @yield('script')

</body>

</html>