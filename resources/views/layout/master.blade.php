<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $meta_title ?? 'Car Repair Service in Dubai | Al Satwa - 12 Years, 8,500+ Fixed' }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $meta_keywords ?? 'car repair dubai, auto workshop al satwa, car maintenance dubai, professional mechanic dubai, car service dubai' }}" name="keywords">
    <meta content="{{ $meta_description ?? 'Trusted car repair in Dubai since 2012. Engine, AC, battery, brakes & diagnostics. 8 certified mechanics at 222 Al Satwa Rd. Open 7AM–10PM. Call 056 612 1423.' }}" name="description">

    <!-- Style Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('public/img/logo-round.png')}}" rel="icon" type="image/webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{asset('public/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0WGTVV66H6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-0WGTVV66H6');
    </script>
    <style>
        /* ==========================================================================
           FINAL COMPREHENSIVE MOBILE SPACING & IMAGE STRETCH FIX
           ========================================================================== */
        @media (max-width: 991.98px) {
            html, body {
                width: 100% !important;
                max-width: 100% !important;
                overflow-x: hidden !important; 
                margin: 0 !important;
                padding: 0 !important;
            }
            .container, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
                width: 100% !important;
                max-width: 100% !important;
                padding-left: 6px !important;
                padding-right: 6px !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            .row {
                margin-left: -4px !important;
                margin-right: -4px !important;
                width: auto !important;
            }
            div[class^="col-"] {
                padding-left: 4px !important;
                padding-right: 4px !important;
            }
            .py-5, #service.py-5, #about.py-5, #fact.py-5, #booking.py-5, .service.py-5, .team.py-5, .testimonial.py-5 {
                padding-top: 1.75rem !important;
                padding-bottom: 1.75rem !important;
            }
            .text-center.mx-auto.mb-5, .section-title.mb-5, .mb-5 {
                margin-bottom: 1.25rem !important;
            }
            .service-item, .service-item .position-relative, .service-item .overflow-hidden, #service .overflow-hidden, #service_two .overflow-hidden {
                width: 100% !important;
                max-width: 100% !important;
                min-width: 100% !important;
                display: block !important;
                padding: 0 !important;
                margin: 0 !important;
            }
            .service-item img, #service img, #service_two img, div[class^="col-"] .overflow-hidden img {
                width: 100% !important;
                max-width: 100% !important;
                min-width: 100% !important;
                height: 220px !important;
                object-fit: cover !important;
                display: block !important;
            }
            .service-item .p-4 {
                padding: 1rem !important;
            }
            .navbar-brand h2 {
                font-size: 1rem;
            }
        }

        /* Navbar Layout Refinements */
        .navbar-brand h2 {
            font-size: 1.25rem;
        }
        .navbar-toggler {
            padding: 0.25rem 0.5rem;
        }
        .navbar-toggler-icon {
            font-size: 1.5rem;
        }

        /* Remove duplicate template arrows from footer links */
        .footer .btn-link::before {
            content: none !important;
            display: none !important;
        }
    </style>

    <script type="application/ld+json">
        @verbatim
        {
        "@context": "https://schema.org",
        "@type": ["AutoRepair", "LocalBusiness"],
        "@id": "https://dubaicarrepairservice.com/#localbusiness",
        "name": "Dubai Car Repair Service",
        "alternateName": [
            "Dubai Car Repair",
            "Dubai Auto Repair Workshop"
        ],
        "url": "https://dubaicarrepairservice.com/",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://dubaicarrepairservice.com/"
        },

        "telephone": "+971566121423",
        "email": "contact@dubaicarrepairservice.com",

        "image": "https://dubaicarrepairservice.com/public/img/logo.webp",
        "logo": {
            "@type": "ImageObject",
            "url": "https://dubaicarrepairservice.com/public/img/logo.webp"
        },

        "description": "Dubai Car Repair Service is a professional auto repair workshop in Al Satwa, Dubai offering engine repair, AC service, diagnostics, battery replacement, brake service, oil change and mobile car repair across Dubai. Trusted since 2012 with certified mechanics and fast service."

        "priceRange": "AED 50 - AED 2,500",
        "currenciesAccepted": "AED",
        "paymentAccepted": ["Cash", "Credit Card", "Debit Card"],

        "address": {
            "@type": "PostalAddress",
            "streetAddress": "222 Al Satwa Rd - Al Satwa",
            "addressLocality": "Dubai",
            "addressRegion": "Dubai",
            "postalCode": "00000",
            "addressCountry": "AE"
        },

        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.23121,
            "longitude": 55.27718
        },

        "hasMap": "https://www.google.com/maps?cid=9651383983944090188",

        "openingHoursSpecification": [
            {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"
            ],
            "opens": "07:00",
            "closes": "22:00"
            }
        ],

        "areaServed": [
            { "@type": "City", "name": "Dubai" },
            { "@type": "Place", "name": "Al Satwa" },
            { "@type": "Place", "name": "Al Quoz" },
            { "@type": "Place", "name": "Dubai Marina" },
            { "@type": "Place", "name": "Business Bay" },
            { "@type": "Place", "name": "Jumeirah Village Circle" },
            { "@type": "Place", "name": "Al Barsha" },
            { "@type": "Place", "name": "Downtown Dubai" },
            { "@type": "Place", "name": "Dubai Silicon Oasis" },
            { "@type": "Place", "name": "International City" }
        ],

        "knowsAbout": [
            "Car Engine Repair",
            "Car AC Repair",
            "Car Battery Replacement",
            "Car Diagnostics",
            "Brake Repair",
            "Oil Change Service",
            "Car Inspection",
            "Car Maintenance",
            "Transmission Repair",
            "Mobile Car Repair"
        ],

        "contactPoint": [
            {
            "@type": "ContactPoint",
            "telephone": "+971566121423",
            "contactType": "customer service",
            "areaServed": "AE",
            "availableLanguage": ["English", "Arabic"]
            }
        ],

        "sameAs": [
            "https://www.facebook.com/share/17eHKHA45x/",
            "https://www.instagram.com/dubaicarrepairservice",
            "https://www.pinterest.com/dubaicarrepairservice/",
            "https://wa.me/971566121423"
        ],

        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Auto Repair Services in Dubai",
            "itemListElement": [
            {
                "@type": "Service",
                "@id": "https://dubaicarrepairservice.com/car-engine-service-dubai#service",
                "name": "Car Engine Service",
                "url": "https://dubaicarrepairservice.com/car-engine-service-dubai",
                "provider": {
                "@id": "https://dubaicarrepairservice.com/#localbusiness"
                },
                "areaServed": "Dubai"
            },
            {
                "@type": "Service",
                "@id": "https://dubaicarrepairservice.com/mobile-car-repair-dubai#service",
                "name": "Mobile Car Repair",
                "url": "https://dubaicarrepairservice.com/mobile-car-repair-dubai",
                "provider": {
                "@id": "https://dubaicarrepairservice.com/#localbusiness"
                },
                "areaServed": "Dubai"
            },
            {
                "@type": "Service",
                "@id": "https://dubaicarrepairservice.com/car-ac-repair-dubai#service",
                "name": "Car AC Repair",
                "url": "https://dubaicarrepairservice.com/car-ac-repair-dubai",
                "provider": {
                "@id": "https://dubaicarrepairservice.com/#localbusiness"
                },
                "areaServed": "Dubai"
            },
            {
                "@type": "Service",
                "@id": "https://dubaicarrepairservice.com/car-battery-replacement-dubai#service",
                "name": "Car Battery Replacement",
                "url": "https://dubaicarrepairservice.com/car-battery-replacement-dubai",
                "provider": {
                "@id": "https://dubaicarrepairservice.com/#localbusiness"
                },
                "areaServed": "Dubai"
            },
            {
                "@type": "Service",
                "@id": "https://dubaicarrepairservice.com/car-maintenance-dubai#service",
                "name": "Car Maintenance",
                "url": "https://dubaicarrepairservice.com/car-maintenance-dubai",
                "provider": {
                "@id": "https://dubaicarrepairservice.com/#localbusiness"
                },
                "areaServed": "Dubai"
            }
            ]
        }
        }
    @endverbatim
    </script>
</head>

<body>
    <!-- WhatsApp Floating Action Element -->
    <a href="https://api.whatsapp.com/send?phone=971566121423" class="float" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Topbar Start -->
    <div class="container-fluid bg-light">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>222 Al Satwa Rd - Al Satwa - Dubai - United Arab Emirates</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Sat–Fri, 7 AM–10:00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>056-6121423</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-0">
        <div class="container-fluid d-flex align-items-center justify-content-between px-4 px-lg-5">
            <!-- Brand and Logo -->
            <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center">
                <img src="{{asset('public/img/logo.webp')}}" alt="Logo" class="logo-img me-3" style="width: 60px; height: auto;">
                <h2 class="mb-0">Dubai Car Repair Service</h2>
            </a>

            <!-- Mobile Navbar Toggle Button -->
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Elements Wrapper -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto p-0 gap-4 align-items-center">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>

                    <!-- Dropdown Menu for Services -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('car-battery-replacement-dubai')}}">Car Battery Replacement Dubai</a></li>
                            <li><a class="dropdown-item" href="{{route('car-ac-repair-dubai')}}">Car AC Repair Dubai</a></li>
                            <li><a class="dropdown-item" href="{{route('car-inspection-dubai')}}">Car Inspection Dubai</a></li>
                            <li><a class="dropdown-item" href="{{route('car-engine-service-dubai')}}">Car Engine Service Dubai</a></li>
                            <li><a class="dropdown-item" href="{{route('tyre-replacement-dubai')}}">Tyre Replacement Dubai</a></li>
                            <li><a class="dropdown-item" href="{{route('engine-oil-change-dubai')}}">Engine Oil Change Dubai</a></li>
                            <li><a class="dropdown-item" href="{{route('mobile-car-repair-dubai')}}">Mobile Car Repair Dubai</a></li>
                            <li><a class="dropdown-item" href="{{route('car-repair-dubai')}}">Car Repair Dubai</a></li>
                            <li><a class="dropdown-item" href="{{route('car-maintenance-dubai')}}">Car Maintenance Dubai</a></li>
                            <li><a class="dropdown-item" href="{{route('roadside-assistance-dubai')}}">Roadside Assistance Dubai</a></li>
                        </ul>
                    </div>

                    <!-- Dropdown Menu for Locations -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="locationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Location
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="locationDropdown">
                            <li><a class="dropdown-item" href="#">Al Satwa</a></li>
                            <li><a class="dropdown-item" href="#">Al Quoz</a></li>
                            <li><a class="dropdown-item" href="#">Deira</a></li>
                            <li><a class="dropdown-item" href="#">Al Barsha</a></li>
                            <li><a class="dropdown-item" href="#">Jumeirah</a></li>
                            <li><a class="dropdown-item" href="#">Business Bay</a></li>
                            <li><a class="dropdown-item" href="#">Dubai Marina</a></li>
                            <li><a class="dropdown-item" href="#">Mirdif</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- CTA Booking Action Button -->
                <div class="d-flex align-items-stretch nav-btn-wrapper">
                    <a href="{{ route('contact') }}" class="btn btn-primary d-inline-flex align-items-center justify-content-center rounded-0 px-4" style="background-color: #001d23; color: #ffffff; font-weight: bold; border: none; height: 100%;">
                        BOOKING <i class="fa fa-arrow-right ms-3"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-8 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.644202007923!2d55.2771888!3d25.2312177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f438155692891%3A0x85f09a9921e1c24c!2sDubai%20Car%20Repair%20Service%20%7C%20Car%20Battery%20Change%20Dubai%20%7C%20Car%20Engine%20Service%20Dubai!5e1!3m2!1sen!2sbd!4v1779290540911!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-4 col-md-4">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Al Satwa, Dubai, United Arab Emirates</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>056-6121423</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>contact@dubaicarrepairservice.com</p>

                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social me-2" href="https://www.facebook.com/share/17eHKHA45x/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social me-2" href="https://www.instagram.com/dubaicarrepairservice?igsh=MW5mOXFscXRpZWp0cg=="><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.pinterest.com/dubaicarrepairservice/"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="{{route('car-battery-replacement-dubai')}}">Car Battery Replacement Dubai</a>
                    <a class="btn btn-link" href="{{route('car-ac-repair-dubai')}}">Car AC Repair Dubai</a>
                    <a class="btn btn-link" href="{{route('car-inspection-dubai')}}">Car Inspection Dubai</a>
                    <a class="btn btn-link" href="{{route('car-engine-service-dubai')}}">Car Engine Service Dubai</a>
                    <a class="btn btn-link" href="{{route('tyre-replacement-dubai')}}">Tyre Replacement Dubai</a>
                    <a class="btn btn-link" href="{{route('engine-oil-change-dubai')}}">Engine Oil Change Dubai</a>                 
                    <a class="btn btn-link" href="{{route('mobile-car-repair-dubai')}}">Mobile Car Repair Dubai</a>
                    <a class="btn btn-link" href="{{route('car-repair-dubai')}}">Car Repair Dubai</a>
                    <a class="btn btn-link" href="{{route('car-maintenance-dubai')}}">Car Maintenance Dubai</a>    
                    <a class="btn btn-link" href="{{route('roadside-assistance-dubai')}}">Roadside Assistance Dubai</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Dependencies -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="{{asset('public/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('public/lib/easing/easing.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/counterup/1.0.0/jquery.counterup.min.js" defer></script>
    <script src="{{asset('public/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('public/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('public/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function () {
            // Counter initialization
            if ($.fn.counterUp) {
                $('.counter-up').counterUp({
                    delay: 10,
                    time: 1000
                });
            }

            // Collapse Mobile Nav on Link Selection
            $('.navbar-nav .nav-link:not(.dropdown-toggle)').click(function () {
                $('.navbar-collapse').collapse('hide');
            });
        });

        // Feedback Message Toast Notification Runtime
        @if(Session::has('succcess'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('succcess') }}");
        @endif
    </script>
</body>
</html>