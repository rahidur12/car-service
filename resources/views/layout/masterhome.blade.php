<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $meta_title ?? 'Car Repair Service in Dubai | Al Satwa - 12 Years, 8,500+ Fixed' }}</title>
    <meta content="{{ $meta_keywords ?? 'car repair dubai, auto workshop al satwa, car maintenance dubai, professional mechanic dubai, car service dubai' }}" name="keywords">
    <meta content="{{ $meta_description ?? 'Trusted car repair in Dubai since 2012. Engine, AC, battery, brakes & diagnostics. 8 certified mechanics at 222 Al Satwa Rd. Open 7AM–10PM. Call 056 612 1423.' }}" name="description">

    <!-- Favicon -->
    <link href="{{ asset('public/img/logo-round.png') }}" rel="icon" type="image/png">

    {{-- ============================================================
         STEP 1 — PRECONNECT: Tell the browser about all CDN origins
         BEFORE any resource requests start. This saves ~300-600ms.
    ============================================================ --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

    {{-- ============================================================
         STEP 2 — PRELOAD LCP IMAGE: Highest-priority hint so the
         browser fetches hero2.webp before any CSS blocks rendering.
         This directly eliminates the 1,600ms resource load delay.
    ============================================================ --}}
    <link rel="preload" fetchpriority="high" as="image" href="{{ asset('public/img/hero2.webp') }}" type="image/webp">

    {{-- ============================================================
         STEP 3 — CRITICAL CSS INLINE: Bootstrap + our mobile fixes
         inlined so ZERO render-blocking requests for above-the-fold
         layout. We load Bootstrap from CDN but non-blocking below.
         Instead we put only the tiny critical rules needed to paint
         the navbar and hero without a flash of unstyled content.
    ============================================================ --}}
    <style>
        /* ── Critical above-the-fold styles (inlined to eliminate render-blocking) ── */

        /* Base reset */
        *, *::before, *::after { box-sizing: border-box; }
        html, body { margin: 0; padding: 0; width: 100%; overflow-x: hidden; }

        /* Navbar skeleton — visible instantly before Bootstrap loads */
        .navbar { background: #fff; box-shadow: 0 2px 8px rgba(0,0,0,.08); padding: 0; display: flex; position: relative; z-index: 1030; }
        .navbar-brand { display: flex; align-items: center; text-decoration: none; padding: 8px 16px; }
        .navbar-brand h2 { font-size: 1.25rem; margin: 0; color: #001d23; font-family: Barlow, sans-serif; font-weight: 700; }
        .logo-img { width: 60px; height: 60px; object-fit: contain; }

        /* Hero skeleton — prevents layout shift on LCP image */
        #home, #header-carousel, .carousel-item { min-height: 100vh; }

        /* WhatsApp float button */
        .float {
            position: fixed; width: 50px; height: 50px; bottom: 24px; right: 24px;
            background: #25D366; color: #fff; border-radius: 50%; text-align: center;
            font-size: 28px; line-height: 50px; z-index: 9999; text-decoration: none;
            box-shadow: 0 4px 16px rgba(37,211,102,.45);
        }

        /* Mobile layout lock */
        @media (max-width: 991.98px) {
            html, body { width: 100% !important; max-width: 100% !important; overflow-x: hidden !important; }
            .container, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
                width: 100% !important; max-width: 100% !important;
                padding-left: 6px !important; padding-right: 6px !important;
            }
            .row { margin-left: -4px !important; margin-right: -4px !important; width: auto !important; }
            div[class^="col-"] { padding-left: 4px !important; padding-right: 4px !important; }
            .py-5, #service.py-5, #about.py-5, #fact.py-5, #booking.py-5,
            .service.py-5, .team.py-5, .testimonial.py-5 {
                padding-top: 1.75rem !important; padding-bottom: 1.75rem !important;
            }
            .text-center.mx-auto.mb-5, .section-title.mb-5, .mb-5 { margin-bottom: 1.25rem !important; }
            .service-item, .service-item .position-relative, .service-item .overflow-hidden,
            #service .overflow-hidden, #service_two .overflow-hidden {
                width: 100% !important; max-width: 100% !important; min-width: 100% !important;
                display: block !important; padding: 0 !important; margin: 0 !important;
            }
            .service-item img, #service img, #service_two img,
            div[class^="col-"] .overflow-hidden img {
                width: 100% !important; max-width: 100% !important; min-width: 100% !important;
                height: 220px !important; object-fit: cover !important; display: block !important;
            }
            .service-item .p-4 { padding: 1rem !important; }
            .navbar-brand h2 { font-size: 1rem; }
        }

        /* Navbar refinements */
        .navbar-toggler { padding: 0.25rem 0.5rem; }
        .navbar-toggler-icon { font-size: 1.5rem; }

        /* Footer link arrow fix */
        .footer .btn-link::before { content: none !important; display: none !important; }

        /* Logo CLS fix — reserve exact space before image loads */
        .logo-img { width: 60px; height: 60px; }
    </style>

    {{-- ============================================================
         STEP 4 — NON-BLOCKING CSS: Load all stylesheets asynchronously
         using media="print" onload trick. This removes ALL render-
         blocking CSS requests (saves the full 2,950ms identified).
         Noscript fallbacks ensure CSS loads if JS is disabled.
    ============================================================ --}}

    {{-- Bootstrap CSS (non-blocking) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></noscript>

    {{-- Font Awesome (non-blocking) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
          media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"></noscript>

    {{-- Bootstrap Icons (non-blocking) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
          media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"></noscript>

    {{-- Owl Carousel CSS (non-blocking — only needed after scroll) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"></noscript>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"></noscript>

    {{-- Toastr CSS (non-blocking — only shown on form submit) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"></noscript>

    {{-- Animate.css (non-blocking — WOW.js triggers on scroll) --}}
    <link rel="stylesheet" href="{{ asset('public/lib/animate/animate.min.css') }}"
          media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="{{ asset('public/lib/animate/animate.min.css') }}"></noscript>

    {{-- Tempusdominus (datepicker — only needed near booking form) --}}
    <link rel="stylesheet" href="{{ asset('public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"
          media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="{{ asset('public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"></noscript>

    {{-- Site stylesheet (non-blocking) --}}
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}"
          media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="{{ asset('public/css/style.css') }}"></noscript>

    {{-- ============================================================
         STEP 5 — GOOGLE FONTS with font-display=swap
         swap ensures text renders immediately in system font,
         then swaps to Barlow/Ubuntu when loaded. No invisible text.
    ============================================================ --}}
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
          rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"></noscript>

    {{-- ============================================================
         STEP 6 — SCHEMA MARKUP (unchanged, SEO-critical)
    ============================================================ --}}
    <script type="application/ld+json">
    @verbatim
    {
        "@context": "https://schema.org",
        "@type": ["AutoRepair", "LocalBusiness"],
        "@id": "https://dubaicarrepairservice.com/#localbusiness",
        "name": "Dubai Car Repair Service",
        "alternateName": ["Dubai Car Repair", "Dubai Auto Repair Workshop"],
        "url": "https://dubaicarrepairservice.com/",
        "mainEntityOfPage": { "@type": "WebPage", "@id": "https://dubaicarrepairservice.com/" },
        "telephone": "+971566121423",
        "email": "contact@dubaicarrepairservice.com",
        "image": "https://dubaicarrepairservice.com/public/img/logo.webp",
        "logo": { "@type": "ImageObject", "url": "https://dubaicarrepairservice.com/public/img/logo.webp" },
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
        "geo": { "@type": "GeoCoordinates", "latitude": 25.23121, "longitude": 55.27718 },
        "hasMap": "https://www.google.com/maps?cid=9651383983944090188",
        "openingHoursSpecification": [{
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        }],
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
        "knowsAbout": ["Car Engine Repair","Car AC Repair","Car Battery Replacement","Car Diagnostics","Brake Repair","Oil Change Service","Car Inspection","Car Maintenance","Transmission Repair","Mobile Car Repair"],
        "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "+971566121423",
            "contactType": "customer service",
            "areaServed": "AE",
            "availableLanguage": ["English", "Arabic"]
        }],
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
                { "@type": "Service", "@id": "https://dubaicarrepairservice.com/car-engine-service-dubai#service", "name": "Car Engine Service", "url": "https://dubaicarrepairservice.com/car-engine-service-dubai", "provider": { "@id": "https://dubaicarrepairservice.com/#localbusiness" }, "areaServed": "Dubai" },
                { "@type": "Service", "@id": "https://dubaicarrepairservice.com/mobile-car-repair-dubai#service", "name": "Mobile Car Repair", "url": "https://dubaicarrepairservice.com/mobile-car-repair-dubai", "provider": { "@id": "https://dubaicarrepairservice.com/#localbusiness" }, "areaServed": "Dubai" },
                { "@type": "Service", "@id": "https://dubaicarrepairservice.com/car-ac-repair-dubai#service", "name": "Car AC Repair", "url": "https://dubaicarrepairservice.com/car-ac-repair-dubai", "provider": { "@id": "https://dubaicarrepairservice.com/#localbusiness" }, "areaServed": "Dubai" },
                { "@type": "Service", "@id": "https://dubaicarrepairservice.com/car-battery-replacement-dubai#service", "name": "Car Battery Replacement", "url": "https://dubaicarrepairservice.com/car-battery-replacement-dubai", "provider": { "@id": "https://dubaicarrepairservice.com/#localbusiness" }, "areaServed": "Dubai" },
                { "@type": "Service", "@id": "https://dubaicarrepairservice.com/car-maintenance-dubai#service", "name": "Car Maintenance", "url": "https://dubaicarrepairservice.com/car-maintenance-dubai", "provider": { "@id": "https://dubaicarrepairservice.com/#localbusiness" }, "areaServed": "Dubai" }
            ]
        }
    }
    @endverbatim
    </script>

    {{-- ============================================================
         STEP 7 — GOOGLE ANALYTICS: Moved to end of <head> with
         async so it never blocks rendering. gtag inline script is
         tiny and harmless here.
    ============================================================ --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0WGTVV66H6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-0WGTVV66H6');
    </script>
</head>

<body>

    {{-- WhatsApp Float Button --}}
    <a href="https://api.whatsapp.com/send?phone=971566121423" class="float" target="_blank" rel="noopener" aria-label="WhatsApp Chat">
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
    <div class="container-fluid d-flex align-items-center justify-content-between px-3 px-sm-4 px-lg-5">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center pe-2">
            <img src="{{ asset('public/img/logo.webp') }}"
                 alt="Dubai Car Repair Service Logo"
                 class="logo-img me-2 me-sm-3 flex-shrink-0"
                 width="60" height="60"
                 style="width:60px;height:60px;object-fit:contain;">
            
            <h2 class="mb-0 fs-6 fs-sm-5 fs-lg-2 text-nowrap">Dubai Car Repair Service</h2>
        </a>

        <button class="custom-menu-toggle d-lg-none flex-shrink-0" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"
                aria-controls="offcanvasMenu" aria-label="Open navigation menu">
            <i class="bi bi-list" style="font-size:1.6rem;"></i>
        </button>
    </div>

        <!-- Desktop Navbar Links -->
        <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-0 d-flex justify-content-center align-items-center gap-4">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">Service</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('car-battery-replacement-dubai') }}">Car Battery Replacement Dubai</a></li>
                        <li><a class="dropdown-item" href="{{ route('car-ac-repair-dubai') }}">Car AC Repair Dubai</a></li>
                        <li><a class="dropdown-item" href="{{ route('car-inspection-dubai') }}">Car Inspection Dubai</a></li>
                        <li><a class="dropdown-item" href="{{ route('car-engine-service-dubai') }}">Car Engine Service Dubai</a></li>
                        <li><a class="dropdown-item" href="{{ route('tyre-replacement-dubai') }}">Tyre Replacement Dubai</a></li>
                        <li><a class="dropdown-item" href="{{ route('engine-oil-change-dubai') }}">Engine Oil Change Dubai</a></li>
                        <li><a class="dropdown-item" href="{{ route('mobile-car-repair-dubai') }}">Mobile Car Repair Dubai</a></li>
                        <li><a class="dropdown-item" href="{{ route('car-repair-dubai') }}">Car Repair Dubai</a></li>
                        <li><a class="dropdown-item" href="{{ route('car-maintenance-dubai') }}">Car Maintenance Dubai</a></li>
                        <li><a class="dropdown-item" href="{{ route('roadside-assistance-dubai') }}">Roadside Assistance Dubai</a></li>
                    </ul>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="locationDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">Location</a>
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

            <div class="d-flex align-items-stretch" style="margin-top:-8px;margin-bottom:-8px;">
                <a href="{{ route('contact') }}"
                   class="btn btn-primary d-inline-flex align-items-center justify-content-center rounded-0 px-4"
                   style="background-color:#001d23;color:#fff;font-weight:bold;border:none;">
                    BOOKING <i class="fa fa-arrow-right ms-3"></i>
                </a>
            </div>
        </div>

        <!-- Mobile Offcanvas Menu -->
        <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1"
             id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasMenuLabel">
                    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                        <img src="{{ asset('public/img/logo.webp') }}" alt="Dubai Car Repair Service Logo"
                             class="logo-img me-2" width="60" height="60"
                             style="width:60px;height:60px;object-fit:contain;">
                        <span>Dubai Car Repair Service</span>
                    </a>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <nav class="nav flex-column gap-2">
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">About</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle d-flex justify-content-between align-items-center"
                           id="mobileServiceDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Service</a>
                        <ul class="dropdown-menu border-0 ps-3 bg-light" aria-labelledby="mobileServiceDropdown">
                            <li><a class="dropdown-item py-2" href="{{ route('car-battery-replacement-dubai') }}">Car Battery Replacement Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('car-ac-repair-dubai') }}">Car AC Repair Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('car-inspection-dubai') }}">Car Inspection Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('car-engine-service-dubai') }}">Car Engine Service Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('tyre-replacement-dubai') }}">Tyre Replacement Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('engine-oil-change-dubai') }}">Engine Oil Change Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('mobile-car-repair-dubai') }}">Mobile Car Repair Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('car-repair-dubai') }}">Car Repair Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('car-maintenance-dubai') }}">Car Maintenance Dubai</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('roadside-assistance-dubai') }}">Roadside Assistance Dubai</a></li>
                        </ul>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle d-flex justify-content-between align-items-center"
                           id="mobileLocationDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Location</a>
                        <ul class="dropdown-menu border-0 ps-3 bg-light" aria-labelledby="mobileLocationDropdown">
                            <li><a class="dropdown-item py-2" href="#">Al Satwa</a></li>
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
                <!-- Column 1: Map — lazy loaded iframe, does NOT block page render -->
                <div class="col-lg-4 col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.644202007923!2d55.2771888!3d25.2312177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f438155692891%3A0x85f09a9921e1c24c!2sDubai%20Car%20Repair%20Service%20%7C%20Car%20Battery%20Change%20Dubai%20%7C%20Car%20Engine%20Service%20Dubai!5e1!3m2!1sen!2sbd!4v1779290540911!5m2!1sen!2sbd"
                            width="100%" height="250" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            title="Dubai Car Repair Service Location Map"></iframe>
                </div>

                <!-- Column 2: Address -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>222 Al Satwa Rd - Al Satwa - Dubai</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>056-6121423</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>contact@dubaicarrepairservice.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social me-2" href="https://www.facebook.com/share/17eHKHA45x/" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social me-2" href="https://www.instagram.com/dubaicarrepairservice?igsh=MW5mOXFscXRpZWp0cg==" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.pinterest.com/dubaicarrepairservice/" rel="noopener" aria-label="Pinterest"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>

                <!-- Column 3: Services -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Service</h4>
                    <div class="d-flex flex-column gap-1">
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{ route('car-battery-replacement-dubai') }}"><i class="fa fa-angle-right me-2"></i>Car Battery Replacement Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{ route('car-ac-repair-dubai') }}"><i class="fa fa-angle-right me-2"></i>Car AC Repair Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{ route('car-inspection-dubai') }}"><i class="fa fa-angle-right me-2"></i>Car Inspection Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{ route('car-engine-service-dubai') }}"><i class="fa fa-angle-right me-2"></i>Car Engine Service Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{ route('tyre-replacement-dubai') }}"><i class="fa fa-angle-right me-2"></i>Tyre Replacement Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{ route('engine-oil-change-dubai') }}"><i class="fa fa-angle-right me-2"></i>Engine Oil Change Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{ route('mobile-car-repair-dubai') }}"><i class="fa fa-angle-right me-2"></i>Mobile Car Repair Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{ route('car-repair-dubai') }}"><i class="fa fa-angle-right me-2"></i>Car Repair Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{ route('car-maintenance-dubai') }}"><i class="fa fa-angle-right me-2"></i>Car Maintenance Dubai</a>
                        <a class="btn btn-link p-0 text-start text-light text-decoration-none" href="{{ route('roadside-assistance-dubai') }}"><i class="fa fa-angle-right me-2"></i>Roadside Assistance Dubai</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    {{-- ============================================================
         STEP 8 — ALL JS DEFERRED: Every script loads after HTML
         is parsed. jQuery first, then dependents. Bootstrap already
         has defer. WOW/easing/owl run after DOM ready.
    ============================================================ --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="{{ asset('public/lib/wow/wow.min.js') }}" defer></script>
    <script src="{{ asset('public/lib/easing/easing.min.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/counterup/1.0.0/jquery.counterup.min.js" defer></script>
    <script src="{{ asset('public/lib/owlcarousel/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('public/lib/tempusdominus/js/moment.min.js') }}" defer></script>
    <script src="{{ asset('public/lib/tempusdominus/js/moment-timezone.min.js') }}" defer></script>
    <script src="{{ asset('public/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" defer></script>
    {{-- Removed duplicate owl.carousel CDN — already loaded from local lib above --}}

    <script>
        // Run after all deferred scripts are ready
        document.addEventListener('DOMContentLoaded', function () {
            // WOW animations (scroll-triggered)
            if (typeof WOW !== 'undefined') {
                new WOW().init();
            }

            // Counter animations
            if (typeof jQuery !== 'undefined' && typeof jQuery.fn.counterUp !== 'undefined') {
                jQuery('.counter-up').counterUp({ delay: 10, time: 1000 });
            }

            // Collapse mobile nav on link click
            document.querySelectorAll('.offcanvas .nav-link:not(.dropdown-toggle)').forEach(function(link) {
                link.addEventListener('click', function () {
                    var offcanvas = document.getElementById('offcanvasMenu');
                    if (offcanvas && typeof bootstrap !== 'undefined') {
                        bootstrap.Offcanvas.getInstance(offcanvas)?.hide();
                    }
                });
            });
        });

        // Toastr notification
        @if(Session::has('succcess'))
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof toastr !== 'undefined') {
                toastr.options = { "closeButton": true, "progressBar": true };
                toastr.success("{{ session('succcess') }}");
            }
        });
        @endif
    </script>
</body>
</html>