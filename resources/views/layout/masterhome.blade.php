<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /* ==========================================================================
           FINAL COMPREHENSIVE MOBILE SPACING & IMAGE STRETCH FIX
           ========================================================================== */
        @media (max-width: 991.98px) {
            /* 1. Viewport boundary locking */
            html, body {
                width: 100% !important;
                max-width: 100% !important;
                overflow-x: hidden !important; 
                margin: 0 !important;
                padding: 0 !important;
            }

            /* 2. Force containers to use maximum mobile horizontal space */
            .container, 
            .container-sm, 
            .container-md, 
            .container-lg, 
            .container-xl, 
            .container-xxl {
                width: 100% !important;
                max-width: 100% !important;
                padding-left: 6px !important;   /* Minimal elegant margin */
                padding-right: 6px !important;  /* Minimal elegant margin */
                margin-left: auto !important;
                margin-right: auto !important;
            }

            /* 3. Horizontal layout row balancing */
            .row {
                margin-left: -4px !important;
                margin-right: -4px !important;
                width: auto !important;
            }

            /* 4. Column block card width maximizing */
            div[class^="col-"] {
                padding-left: 4px !important;
                padding-right: 4px !important;
            }

            /* 5. Tightened section vertical spacing gaps */
            .py-5, 
            #service.py-5, 
            #about.py-5, 
            #fact.py-5, 
            #booking.py-5,
            .service.py-5,
            .team.py-5,
            .testimonial.py-5 {
                padding-top: 1.75rem !important;
                padding-bottom: 1.75rem !important;
            }

            .text-center.mx-auto.mb-5, 
            .section-title.mb-5,
            .mb-5 {
                margin-bottom: 1.25rem !important;
            }

            /* 6. AGGRESSIVE IMAGE CORRECTION: Forces full bleed inside service cards */
            .service-item,
            .service-item .position-relative,
            .service-item .overflow-hidden,
            #service .overflow-hidden,
            #service_two .overflow-hidden {
                width: 100% !important;
                max-width: 100% !important;
                min-width: 100% !important;
                display: block !important; /* Overrides any flex-shrinking behaviors */
                padding: 0 !important;
                margin: 0 !important;
            }

            /* Target the image directly and force it to span wall-to-wall */
            .service-item img,
            #service img,
            #service_two img,
            div[class^="col-"] .overflow-hidden img {
                width: 100% !important;
                max-width: 100% !important;
                min-width: 100% !important;
                height: 220px !important;     /* Uniform thumbnail height on phones */
                object-fit: cover !important;  /* Elegant, un-distorted dynamic cropping */
                display: block !important;
            }

            /* Clean typography margin adjustments inside description cards */
            .service-item .p-4 {
                padding: 1rem !important;      /* Frees text reading boundaries */
            }

            /* Remove duplicate template arrows from footer links */
            .footer .btn-link::before {
                content: none !important;
                display: none !important;
            }
        }
    </style>
    
    <link rel="preload" fetchpriority="high" as="image" href="{{ asset('public/img/hero2.webp') }}" type="image/webp">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>

    <meta charset="utf-8">
    <title>{{ $meta_title ?? 'Car Repair Service in Dubai | Al Satwa - 12 Years, 8,500+ Fixed' }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $meta_keywords ?? 'car repair dubai, auto workshop al satwa, car maintenance dubai, professional mechanic dubai, car service dubai' }}" name="keywords">
    <meta content="{{ $meta_description ?? 'Trusted car repair in Dubai since 2012. Engine, AC, battery, brakes & diagnostics. 8 certified mechanics at 222 Al Satwa Rd. Open 7AM–10PM. Call 056 612 1423.' }}" name="description">

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

        "description": "Dubai Car Repair Service is a professional auto repair workshop in Al Satwa, Dubai offering engine repair, AC service, diagnostics, battery replacement, brake service, oil change and mobile car repair across Dubai. Trusted since 2012 with certified mechanics and fast service.",

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/counterup/1.0.0/jquery.counterup.min.js" defer></script>

    <!-- Custom CSS for the Navbar -->
    <style>
        .navbar-brand h2 {
            font-size: 1.25rem;
        }

        .navbar-toggler {
            padding: 0.25rem 0.5rem;
        }

        .navbar-toggler-icon {
            font-size: 1.5rem;
        }

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

            <!-- Mobile Navbar Offcanvas Trigger Button (Visible only on mobile) -->
            <button class="custom-menu-toggle d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <i class="bi bi-list"></i>
            </button>
        </div>

        <!-- Navbar Links (Desktop) -->
        <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-0 d-flex justify-content-center align-items-center gap-4">
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

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="locationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Location
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="locationDropdown">
                        <li><a class="dropdown-item" href="#">Al Satwa Car</a></li>
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
            <div class="d-flex align-items-stretch" style="margin-top: -8px; margin-bottom: -8px;">
                <a href="{{ route('contact') }}" class="btn btn-primary d-inline-flex align-items-center justify-content-center rounded-0 px-4" style="position: relative; z-index: 9999; pointer-events: auto !important; background-color: #001d23; color: #ffffff; font-weight: bold; border: none;">
                    BOOKING <i class="fa fa-arrow-right ms-3"></i>
                </a>
            </div>
        </div>

        <!-- Mobile Navbar -->
        <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasMenuLabel">
                    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                        <img src="{{ asset('public/img/logo.webp') }}" alt="Logo" class="logo-img me-2" style="width: 60px; height: auto;">
                        <span>Dubai Car Repair Service</span>
                    </a>
                </h5>
                <button type="button" class="custom-close-button" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="offcanvas-body">
                <nav class="nav flex-column gap-2">
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">About</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle d-flex justify-content-between align-items-center" id="mobileServiceDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu border-0 ps-3 bg-light" aria-labelledby="mobileServiceDropdown">
                            <li><a class="dropdown-item py-2" href="{{route('car-battery-replacement-dubai')}}">Car Battery Replacement Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{route('car-ac-repair-dubai')}}">Car AC Repair Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{route('car-inspection-dubai')}}">Car Inspection Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{route('car-engine-service-dubai')}}">Car Engine Service Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{route('tyre-replacement-dubai')}}">Tyre Replacement Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{route('engine-oil-change-dubai')}}">Engine Oil Change Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{route('mobile-car-repair-dubai')}}">Mobile Car Repair Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{route('car-repair-dubai')}}">Car Repair Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{route('car-maintenance-dubai')}}">Car Maintenance Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{route('roadside-assistance-dubai')}}">Roadside Assistance Dubai</a></li>
                        </ul>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle d-flex justify-content-between align-items-center" id="mobileLocationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Location
                        </a>
                        <ul class="dropdown-menu border-0 ps-3 bg-light" aria-labelledby="mobileLocationDropdown">
                            <li><a class="dropdown-item py-2" href="#">Al Satwa Car</a></li>
                            <li><a class="dropdown-item py-2" href="#">Al Quoz</a></li>
                            <li><a class="dropdown-item py-2" href="#">Deira</a></li>
                            <li><a class="dropdown-item py-2" href="#">Al Barsha</a></li>
                            <li><a class="dropdown-item py-2" href="#">Jumeirah</a></li>
                            <li><a class="dropdown-item py-2" href="#">Business Bay</a></li>
                            <li><a class="dropdown-item py-2" href="#">Dubai Marina</a></li>
                            <li><a class="dropdown-item py-2" href="#">Mirdif</a></li>
                        </ul>
                    </div>
                    
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Booking</a>
                </nav>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Column 1: Map (Left) -->
                <div class="col-lg-4 col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.644202007923!2d55.2771888!3d25.2312177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f438155692891%3A0x85f09a9921e1c24c!2sDubai%20Car%20Repair%20Service%20%7C%20Car%20Battery%20Change%20Dubai%20%7C%20Car%20Engine%20Service%20Dubai!5e1!3m2!1sen!2sbd!4v1779290540911!5m2!1sen!2sbd" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Column 2: Business Address Details (Middle) -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>222 Al Satwa Rd - Al Satwa - Dubai</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>056-6121423</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>contact@dubaicarrepairservice.com</p>

                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social me-2" href="https://www.facebook.com/share/17eHKHA45x/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social me-2" href="https://www.instagram.com/dubaicarrepairservice?igsh=MW5mOXFscXRpZWp0cg=="><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.pinterest.com/dubaicarrepairservice/"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>

                <!-- Column 3: Our Services (Right) -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Service</h4>
                    <div class="d-flex flex-column gap-1">
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{route('car-battery-replacement-dubai')}}"><i class="fa fa-angle-right me-2"></i>Car Battery Replacement Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{route('car-ac-repair-dubai')}}"><i class="fa fa-angle-right me-2"></i>Car AC Repair Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{route('car-inspection-dubai')}}"><i class="fa fa-angle-right me-2"></i>Car Inspection Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{route('car-engine-service-dubai')}}"><i class="fa fa-angle-right me-2"></i>Car Engine Service Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{route('tyre-replacement-dubai')}}"><i class="fa fa-angle-right me-2"></i>Tyre Replacement Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{route('engine-oil-change-dubai')}}"><i class="fa fa-angle-right me-2"></i>Engine Oil Change Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{route('mobile-car-repair-dubai')}}"><i class="fa fa-angle-right me-2"></i>Mobile Car Repair Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{route('car-repair-dubai')}}"><i class="fa fa-angle-right me-2"></i>Car Repair Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{route('car-maintenance-dubai')}}"><i class="fa fa-angle-right me-2"></i>Car Maintenance Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{route('roadside-assistance-dubai')}}"><i class="fa fa-angle-right me-2"></i>Roadside Assistance Dubai</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</body>
</html>