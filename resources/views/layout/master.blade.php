<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DXB Car Repair</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('public/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">


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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2 .nav_clr_upr{"></small>
                    <small>Bar Dubai, Dubai, United Arab Emirates</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2 .nav_clr_upr{"></small>
                    <small>Service 24/7</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2 .nav_clr_upr{"></small>
                    <small>+971 05 6495 4359</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary nav_clr"><i class="fa fa-car me-3"></i>DXB Car Repair</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse .nav-link" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#service" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a> -->
                    <!-- <div class="dropdown-menu fade-up m-0">
                    </div> -->
                </div>
                <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
            </div>
            <a href="#booking" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Booking<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->



    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-8 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-4">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Bar Dubai, Dubai, United Arab Emirates</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+971 05 6495 4359</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>shafiqmkhokan@gmail.com</p>
                </div>
                <div class="col-lg-5 col-md-4">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">We Provide 24x7 Service At Your Place</h6>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">Diagnostic Test</a>
                    <a class="btn btn-link" href="">Engine Servicing</a>
                    <a class="btn btn-link" href="">Tires Replacement</a>
                    <a class="btn btn-link" href="">Oil Changing</a>
                    <a class="btn btn-link" href="">Car Battery Change</a>
                    <a class="btn btn-link" href="">Car AC Servicing</a>
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
    <script>
    $(document).ready(function(){
      $('.nav-link').click(function(){
        debugger;
        $('.collapse').removeClass('show');
      });
    });
    @if(Session::has('succcess'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
    toastr.success("{{ session('succcess') }}");
    @endif
  </script>

    <!-- Template Javascript -->
    <script src="{{asset('public/js/main.js')}}"></script>

</body>

</html>
