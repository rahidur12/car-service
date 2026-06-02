@extends('layout.masterhome')
@php
    $meta_title       = 'About Us | Dubai Car Repair Service - 12 Years in Al Satwa, Dubai';
    $meta_description = 'Learn about Dubai Car Repair Service - 12 years serving Dubai drivers from our Al Satwa garage. 8 certified mechanics, 8,500+ happy customers, transparent pricing. All makes & models.';
    $meta_keywords    = 'about Dubai Car Repair Service, car garage Al Satwa, trusted car repair Dubai, certified mechanics Dubai, car service Al Satwa Dubai, auto repair garage Dubai';
@endphp

@section('content')

{{-- ═══════════════════════════════════════════
     HERO BANNER - About Page
════════════════════════════════════════════ --}}
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
     style="background: linear-gradient(135deg, #001516 0%, #001516 60%, #001516 100%); min-height:320px; display:flex; align-items:center;">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <p class="display-4 text-white mb-2" style="font-size:.85rem; letter-spacing:.1em; text-transform:uppercase; font-weight:600;">
                    Trusted Since 2012 · Al Satwa, Dubai
                </p>
                <h1 class="display-4 text-white fw-bold mb-3">
                    About Dubai Car Repair Service
                </h1>
                <p class="text-white-50 mb-2 mb-4" style="font-size:1.1rem; opacity:.85; max-width:560px; margin:0 auto;">
                    12 years of honest, expert car care at 222 Al Satwa Road - serving drivers across all Dubai areas.
                </p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     SECTION 1 - OUR STORY / WHO WE ARE
     (Competitors: DXB Mechanic, Al Satwa Trading miss this;
      ranking sites like Fasttrack & Car Aid all have rich story sections)
════════════════════════════════════════════ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">

            {{-- Image col --}}
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s" style="min-height:420px;">
                <div class="position-relative h-100">
                    <img class="w-100 h-100 rounded-3 shadow"
                         src="{{ asset('public/img/about 1.webp') }}"
                         alt="Dubai Car Repair Service Garage - Al Satwa Dubai"
                         style="object-fit:cover; min-height:420px;">
                    {{-- Floating badge --}}
                    <div class="position-absolute bottom-0 start-0 m-4 bg-primary text-white rounded-3 px-4 py-3 shadow"
                         style="min-width:160px;">
                        <div class="fw-bold" style="font-size:2rem; line-height:1;">12</div>
                        <div style="font-size:.8rem; opacity:.9; line-height:1.3;">Years Serving<br>Dubai Drivers</div>
                    </div>
                </div>
            </div>

            {{-- Content col --}}
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <span class="d-inline-block border #001516 rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem; letter-spacing:.06em; text-transform:uppercase;">Our Story</span>
                <h2 class="fw-bold mb-4" style="line-height:1.3;">
                    Al Satwa's Trusted Car Repair Garage - Honest Service Since 2012
                </h2>
                <p class="mb-3" style="color:#444; line-height:1.8;">
                    Dubai Car Repair Service was founded in 2012 with a single mission: give every Dubai driver access to <strong>honest, expert car care at a fair price</strong> - without the upsells, hidden charges, or long waits that frustrate so many people at bigger workshops.
                </p>
                <p class="mb-3" style="color:#444; line-height:1.8;">
                    From our workshop at <strong>222 Al Satwa Road</strong>, we have grown from a small team into a trusted garage with <strong>8 certified mechanics</strong> and over <strong>8,500 satisfied customers</strong> across Dubai. Drivers come to us from Jumeirah, Bur Dubai, Karama, Downtown Dubai, Business Bay, DIFC, Al Quoz, Al Barsha, and beyond - because they know they'll leave with a car that actually runs better, and a receipt that matches the quote they were given.
                </p>
                <p class="mb-4" style="color:#444; line-height:1.8;">
                    We service <strong>all makes and models</strong> - Toyota, Nissan, Honda, BMW, Mercedes-Benz, Audi, Kia, Hyundai, Mitsubishi, Land Rover, Jeep, Ford, and Chevrolet. Whether it's a quick battery swap or a full engine overhaul, our team treats every car - and every customer - with the same care and attention.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill px-4 py-2">
                        <i class="fa fa-phone-alt me-2"></i>Contact Us
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-dark rounded-pill px-4 py-2">
                        Book a Service <i class="fa fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     SECTION 2 - OUR MISSION & VALUES
     (Competitors DXB Mechanic & Al Satwa Trading skip this entirely;
      top-ranking sites like Fix Car Dubai all have this)
════════════════════════════════════════════ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border #001516 rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem; letter-spacing:.06em; text-transform:uppercase;">Our Mission &amp; Values</span>
            <h2 class="fw-bold mb-2">What We Stand For</h2>
            <p class="text-muted" style="font-size:.95rem;">
                Every decision we make at our Al Satwa garage comes back to three core promises to our customers.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white rounded-3 p-4 h-100 shadow-sm text-center">
                    <div class="mx-auto mb-4 d-flex align-items-center justify-content-center bg-primary rounded-circle"
                         style="width:64px; height:64px;">
                        <i class="fa fa-shield-alt fa-lg text-white"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Honesty First</h4>
                    <p class="text-muted mb-0" style="line-height:1.8;">
                        We give you a clear, itemised quote before a single bolt is turned. If the work costs less than estimated, you pay less. If we find something unexpected, we call you first - always. No surprises. No pressure.
                    </p>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="bg-white rounded-3 p-4 h-100 shadow-sm text-center">
                    <div class="mx-auto mb-4 d-flex align-items-center justify-content-center bg-primary rounded-circle"
                         style="width:64px; height:64px;">
                        <i class="fa fa-award fa-lg text-white"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Quality Without Compromise</h4>
                    <p class="text-muted mb-0" style="line-height:1.8;">
                        We use manufacturer-approved parts and fluids on every job - not cheap alternatives that fail early. Dubai's heat is hard on cars; the parts we fit are chosen to last in UAE conditions, not just to get through today.
                    </p>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white rounded-3 p-4 h-100 shadow-sm text-center">
                    <div class="mx-auto mb-4 d-flex align-items-center justify-content-center bg-primary rounded-circle"
                         style="width:64px; height:64px;">
                        <i class="fa fa-clock fa-lg text-white"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Respect for Your Time</h4>
                    <p class="text-muted mb-0" style="line-height:1.8;">
                        Dubai drivers are busy. We work fast - most standard repairs are completed within 30 minutes to a few hours. We're open 7 AM to 10 PM, 7 days a week, so you never have to rearrange your schedule around us.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     SECTION 3 - WHY CHOOSE US
     (6-point grid - every top competitor has this;
      your current about page has none)
════════════════════════════════════════════ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border #001516 rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem; letter-spacing:.06em; text-transform:uppercase;">Why Choose Us</span>
            <h2 class="fw-bold mb-2">Why Dubai Drivers Trust Our Garage</h2>
            <p class="text-muted" style="font-size:.95rem;">
                There are dozens of garages in Dubai. Here's why drivers keep coming back to us at Al Satwa.
            </p>
        </div>

        <div class="row g-4">

            @php
            $reasons = [
                ['icon'=>'fa-map-marker-alt','title'=>'Prime Al Satwa Location',
                 'text'=>'222 Al Satwa Road is one of the most accessible workshop addresses in Dubai - minutes from Sheikh Zayed Road, Jumeirah, Bur Dubai, Karama, Downtown Dubai, and DIFC. Free parking right outside.'],
                ['icon'=>'fa-certificate','title'=>'Certified, Experienced Mechanics',
                 'text'=>'All 8 of our mechanics are certified technicians with specialisation across Japanese, European, American, and Korean vehicles. OBD-II diagnostic scanners, hydraulic lifts, and precision tooling - we have the kit to back the expertise.'],
                ['icon'=>'fa-car','title'=>'All Makes &amp; Models Accepted',
                 'text'=>'Toyota · Nissan · Honda · Mitsubishi · BMW · Mercedes-Benz · Audi · Kia · Hyundai · Land Rover · Jeep · Ford · Chevrolet. If it drives on Dubai roads, we service it.'],
                ['icon'=>'fa-receipt','title'=>'Zero Hidden Charges',
                 'text'=>'You receive a full written quote before any work begins. The price on your quote is the price on your invoice - not a penny more. We believe transparency is the foundation of any lasting customer relationship.'],
                ['icon'=>'fa-bolt','title'=>'Fast, Same-Day Service',
                 'text'=>'Most repairs - oil changes, battery replacements, AC recharges, brake jobs - are completed the same day. Complex engine work is handled as quickly as possible without rushing quality.'],
                ['icon'=>'fa-star','title'=>'4.8★ Rating · 23+ Google Reviews',
                 'text'=>'Our reputation is built on real results and honest service. Check our Google reviews and you\'ll find consistent praise for our communication, speed, fair pricing, and the quality of work delivered.'],
            ];
            @endphp

            @foreach($reasons as $i => $r)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="{{ ($i * 0.1 + 0.1) }}s">
                <div class="d-flex h-100 border rounded-3 p-4">
                    <div class="flex-shrink-0 me-3 mt-1">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle"
                             style="width:48px; height:48px;">
                            <i class="fa {{ $r['icon'] }} text-white"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2">{!! $r['title'] !!}</h5>
                        <p class="text-muted mb-0" style="font-size:.9rem; line-height:1.7;">{!! $r['text'] !!}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     SECTION 4 - OUR SERVICES SUMMARY
     (Links back to service pages - boosts internal SEO)
════════════════════════════════════════════ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border #001516 rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem; letter-spacing:.06em; text-transform:uppercase;">What We Do</span>
            <h2 class="fw-bold mb-2">Our Car Repair &amp; Maintenance Services in Dubai</h2>
            <p class="text-muted" style="font-size:.95rem;">
                From routine maintenance to complex repairs - all under one roof at our Al Satwa workshop.
            </p>
        </div>

        <div class="row g-3">
        @php
        $services = [
            ['route'=>'car-inspection-dubai',          'icon'=>'fa-search',       'name'=>'Car Inspection Dubai',                'desc'=>'Multi-point check covering engine, brakes, tyres, fluids & electrics.'],
            ['route'=>'car-engine-service-dubai',      'icon'=>'fa-cog',          'name'=>'Engine Repair &amp; Service Dubai',   'desc'=>'Tune-ups, overhauls, timing belts & fuel system repairs.'],
            ['route'=>'tyre-replacement-dubai',        'icon'=>'fa-tools',        'name'=>'Tyre Replacement &amp; Alignment',    'desc'=>'All brands, computerised alignment & balancing.'],
            ['route'=>'engine-oil-change-dubai',       'icon'=>'fa-oil-can',      'name'=>'Engine Oil &amp; Filter Change',      'desc'=>'Correct grade oil for UAE heat. Quick turnaround.'],
            ['route'=>'car-battery-replacement-dubai', 'icon'=>'fa-battery-full', 'name'=>'Car Battery Replacement Dubai',       'desc'=>'On-the-spot test & premium replacement. No towing.'],
            ['route'=>'car-ac-repair-dubai',           'icon'=>'fa-snowflake',    'name'=>'Car AC Repair &amp; Gas Refill',      'desc'=>'Compressor, refrigerant & cooling system experts.'],
            ['route'=>'car-repair-dubai',              'icon'=>'fa-circle',       'name'=>'Brake Pad Replacement Dubai',         'desc'=>'Pads, rotors, fluid & full brake system service.'],
            ['route'=>'mobile-car-repair-dubai',       'icon'=>'fa-bolt',         'name'=>'Mobile Car Repair Dubai',             'desc'=>'On-site advanced electrical diagnostics, complex wiring fixes, sensor replacements, and ECU troubleshooting.'],
            ['route'=>'roadside-assistance-dubai',             'icon'=>'fa-laptop-code',  'name'=>'Advanced Roadside Assistance in Dubai',      'desc'=>'OBD-II scan, fault codes & printed health report.'],
        ];
        @endphp

            @foreach($services as $s)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <a href="{{ route($s['route']) }}" class="text-decoration-none">
                    <div class="d-flex align-items-start bg-white border rounded-3 p-3 h-100"
                         style="transition:box-shadow .2s; cursor:pointer;"
                         onmouseover="this.style.boxShadow='0 4px 16px rgba(0,0,0,.1)'"
                         onmouseout="this.style.boxShadow='none'">
                        <div class="flex-shrink-0 me-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle"
                                 style="width:42px; height:42px;">
                                <i class="fa {{ $s['icon'] }} text-white" style="font-size:.9rem;"></i>
                            </div>
                        </div>
                        <div>
                            <div class="fw-semibold text-dark mb-1" style="font-size:.95rem;">{!! $s['name'] !!}</div>
                            <div class="text-muted" style="font-size:.82rem; line-height:1.5;">{!! $s['desc'] !!}</div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</div>

{{-- ═══════════════════════════════════════════
     SECTION 5 - BOTTOM CTA BANNER
     (Converts readers who made it through the page)
════════════════════════════════════════════ --}}
<div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s"
     style="background: linear-gradient(135deg, #001516 40%, #001516 100%);">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 text-center text-lg-start">
                <h2 class="fw-bold text-white mb-2">
                    Ready to Get Your Car Fixed at Our Al Satwa Garage?
                </h2>
                <p class="text-white-50 mb-0" style="font-size:1rem;">
                    Open 7 AM – 10 PM, every day · 222 Al Satwa Rd, Dubai · All makes &amp; models welcome
                </p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-end">
                    <a href="tel:0566121423" class="btn btn-primary rounded-pill px-4 py-3 fw-semibold">
                        <i class="fa fa-phone-alt me-2"></i>Call 056-6121423
                    </a>
                    <a href="https://wa.me/971566121423" class="btn btn-success rounded-pill px-4 py-3 fw-semibold">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     SECTION 6 - TEAM / MECHANICS
     (Competitors skip this - it's an E-E-A-T signal Google rewards)
════════════════════════════════════════════ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border #001516 rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem; letter-spacing:.06em; text-transform:uppercase;">Our Team</span>
            <h2 class="fw-bold mb-2">8 Certified Mechanics Ready to Help You</h2>
            <p class="text-muted" style="font-size:.95rem;">
                Every technician at our Al Satwa garage is fully certified and trained across multiple vehicle platforms.
            </p>
        </div>

        <div class="row g-4 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <img src="{{ asset('public/img/about 2.webp') }}"
                     alt="Certified Car Mechanics at Dubai Car Repair Service - Al Satwa"
                     class="img-fluid rounded-3 shadow w-100"
                     style="width:888px; height:592px; object-fit:cover; max-height:450px;"
                     onerror="this.style.visibility='hidden'">
            </div>
            
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <h3 class="fw-bold mb-4">What Makes Our Mechanics Different</h3>
                @php
                $points = [
                    'Certified technicians specialising in Japanese, European &amp; American vehicles',
                    'OBD-II diagnostic training - we read fault codes competitors miss',
                    'Hands-on experience with Toyota, Nissan, BMW, Mercedes &amp; more since 2012',
                    'Continuous training on new model platforms entering the UAE market',
                    'Customer communication standards - we explain the problem, not just the bill',
                    'Dubai\'s extreme heat expertise - we know what fails in 45°C and how to prevent it',
                ];
                @endphp
                <ul class="list-unstyled mb-4">
                    @foreach($points as $p)
                    <li class="d-flex align-items-start mb-3">
                        <div class="flex-shrink-0 me-3 mt-1">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle"
                                 style="width:28px; height:28px; min-width:28px;">
                                <i class="fa fa-check text-white" style="font-size:.7rem;"></i>
                            </div>
                        </div>
                        <span style="color:#444; font-size:.95rem; line-height:1.7;">{!! $p !!}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="tel:0566121423" class="btn btn-primary rounded-pill px-4 py-2">
                    <i class="fa fa-phone-alt me-2"></i> Call 056-6121423
                </a>
            </div>
        </div>

    </div>
</div>

{{-- ═══════════════════════════════════════════
     SECTION 7 - CAR BRANDS WE SERVICE
     (DAScenter ranks partly because it lists brands -
      Google maps branded searches to service pages)
════════════════════════════════════════════ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border #001516 rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem; letter-spacing:.06em; text-transform:uppercase;">Car Brands</span>
            <h2 class="fw-bold mb-2">All Car Makes &amp; Models Serviced in Dubai</h2>
            <p class="text-muted" style="font-size:.95rem;">
                Japanese, European, American, and Korean - if it drives in Dubai, we fix it at our Al Satwa workshop.
            </p>
        </div>

        @php
        $brands = [
            ['name'=>'Toyota',       'origin'=>'Japanese'],
            ['name'=>'Nissan',       'origin'=>'Japanese'],
            ['name'=>'Honda',        'origin'=>'Japanese'],
            ['name'=>'Mitsubishi',   'origin'=>'Japanese'],
            ['name'=>'Lexus',        'origin'=>'Japanese'],
            ['name'=>'BMW',          'origin'=>'European'],
            ['name'=>'Mercedes-Benz','origin'=>'European'],
            ['name'=>'Audi',         'origin'=>'European'],
            ['name'=>'Volkswagen',   'origin'=>'European'],
            ['name'=>'Porsche',      'origin'=>'European'],
            ['name'=>'Kia',          'origin'=>'Korean'],
            ['name'=>'Hyundai',      'origin'=>'Korean'],
            ['name'=>'Ford',         'origin'=>'American'],
            ['name'=>'Chevrolet',    'origin'=>'American'],
            ['name'=>'Jeep',         'origin'=>'American'],
            ['name'=>'Land Rover',   'origin'=>'British'],
        ];
        @endphp

        <div class="row g-3 justify-content-center">
            @foreach($brands as $brand)
            <div class="col-6 col-md-3 col-lg-2">
                <div class="border rounded-3 py-3 text-center bg-white"
                     style="font-size:.875rem; font-weight:600; color:#0d1b2a;">
                    {{ $brand['name'] }}
                    <div style="font-size:.72rem; color:#888; font-weight:400; margin-top:2px;">{{ $brand['origin'] }}</div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

{{-- ═══════════════════════════════════════════
     SECTION 8 - CUSTOMER TESTIMONIALS
     (Social proof + Reviews schema trigger)
════════════════════════════════════════════ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border #001516 rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem; letter-spacing:.06em; text-transform:uppercase;">Customer Reviews</span>
            <h2 class="fw-bold mb-2">What Our Customers Say</h2>
            <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                <span style="font-size:1.1rem; color:#f59e0b;">★★★★★</span>
                <span class="fw-bold" style="font-size:1.1rem;">4.8</span>
                <span class="text-muted" style="font-size:.9rem;">· From Google Reviews</span>
            </div>
        </div>

        <div class="row g-4">

            @php
            $reviews = [
                ['name'=>'Vivek Kumar Gautam', 'area'=>'Al Barsha',
                 'text'=>'Top-notch service! My car battery was replaced in no time. The team were professional, quick, and the price was exactly what they quoted. Highly recommend Dubai Car Repair Service!'],
                ['name'=>'Mohammad Ashek', 'area'=>'Business Bay',
                 'text'=>'Efficient and reliable! They handled my car engine service professionally. Gave me a full breakdown of what was needed before starting - best car repair garage in Dubai.'],
                ['name'=>'Muhammad Isa', 'area'=>'Karama',
                 'text'=>'Great experience. I called them for car AC repair in Dubai and they fixed the issue fast and professionally. Will definitely use them again for all my car service needs.'],
                ['name'=>'Shahariar Hosen', 'area'=>'Downtown Dubai',
                 'text'=>'Fast service, great result. Drove in with an engine warning light, left 45 minutes later with a full diagnostic report and the problem fixed. Very satisfied.'],
                ['name'=>'MD. Shehub', 'area'=>'Jumeirah',
                 'text'=>'Most pleasant, honest staff I\'ve dealt with at any garage in Dubai. Didn\'t try to add unnecessary repairs. Fixed what needed fixing and nothing more. I recommend this garage to everyone.'],
                ['name'=>'Ahmed K.', 'area'=>'Al Satwa',
                 'text'=>'Been coming here for 3 years. The team knows my car better than I do at this point. Fair prices every time. The only garage in Dubai I trust with my Toyota Land Cruiser.'],
            ];
            @endphp

            @foreach($reviews as $i => $rev)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="{{ ($i * 0.1 + 0.1) }}s">
                <div class="bg-white border rounded-3 p-4 h-100 shadow-sm d-flex flex-column justify-content-between">
                    <div>
                        <div class="text-warning mb-3" style="font-size:1rem;">★★★★★</div>
                        <p class="text-muted mb-4" style="font-size:.9rem; line-height:1.8; font-style:italic;">
                            "{{ $rev['text'] }}"
                        </p>
                    </div>
                    
                    <div class="d-flex align-items-center gap-3 mt-auto">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle text-white fw-bold"
                             style="width:42px; height:42px; flex-shrink:0; font-size:.9rem;">
                            {{ strtoupper(substr($rev['name'], 0, 1)) }}
                        </div>
                        <div>
                            <div class="fw-semibold" style="font-size:.9rem; color:#0d1b2a;">{{ $rev['name'] }}</div>
                            <div class="text-muted" style="font-size:.78rem;">
                                <i class="fa fa-map-marker-alt me-1"></i>{{ $rev['area'] }}, Dubai
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     SECTION 9 - FAQ
     (Adds FAQ schema content, captures long-tail searches,
      reduces bounce by answering objections on-page.
      No competitor in Al Satwa has this on their About page.)
════════════════════════════════════════════ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border #001516 rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem; letter-spacing:.06em; text-transform:uppercase;">FAQ</span>
            <h2 class="fw-bold mb-2">Frequently Asked Questions</h2>
            <p class="text-muted" style="font-size:.95rem;">
                Everything you need to know about our car repair service in Dubai before you visit.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="faqAccordion">

                    @php
                    $faqs = [
                        [
                            'q' => 'Where is Dubai Car Repair Service located?',
                            'a' => 'We are located at 222 Al Satwa Road, Al Satwa, Dubai, UAE. Al Satwa is one of the most centrally accessible areas in the city - a short drive from Sheikh Zayed Road, Jumeirah, Bur Dubai, Karama, Downtown Dubai, and DIFC. Free parking is available directly outside the workshop.',
                        ],
                        [
                            'q' => 'What are your working hours?',
                            'a' => 'We are open Saturday to Friday, 7:00 AM to 10:00 PM - every day of the week including weekends and UAE public holidays. Walk-ins are always welcome, or you can book a service online.',
                        ],
                        [
                            'q' => 'Do you service all car makes and models?',
                            'a' => 'Yes - we work on all major car makes including Toyota, Nissan, Honda, Mitsubishi, Lexus, BMW, Mercedes-Benz, Audi, Volkswagen, Porsche, Kia, Hyundai, Ford, Chevrolet, Jeep, and Land Rover. Our 8 certified mechanics are trained across Japanese, European, American, Korean, and British vehicle platforms.',
                        ],
                        [
                            'q' => 'How much does car repair cost at your garage?',
                            'a' => 'Our prices range from AED 50 for simple checks up to AED 2,500 for complex engine work. More importantly, we always give you a full written quote before any work begins - so you know exactly what you\'re paying for. We accept cash, credit card, and debit card. No hidden charges, ever.',
                        ],
                        [
                            'q' => 'How long does a typical car repair take?',
                            'a' => 'Most routine services - oil changes, battery replacements, AC gas refills, brake pad replacements - are completed within 30 minutes to 2 hours. Engine diagnostics with a printed health report typically take 1–2 hours. Complex mechanical or electrical work may take longer; we will always give you an honest time estimate upfront.',
                        ],
                        [
                            'q' => 'Do you offer a warranty on your repairs?',
                            'a' => 'Yes. All repairs carried out at our Al Satwa workshop are backed by a parts and labour warranty. If the same issue recurs after our repair within the warranty period, we will fix it at no additional charge. Our goal is to get the job right the first time - every time.',
                        ],
                        [
                            'q' => 'Can I get a car diagnostic test without booking a specific repair?',
                            'a' => 'Absolutely. Our advanced OBD-II diagnostic service is available as a standalone service. We scan your vehicle\'s computer system, identify all fault codes and hidden issues, and give you a printed vehicle health report. This is a great option if your warning light is on and you\'re not sure what\'s wrong.',
                        ],
                        [
                            'q' => 'Why is Dubai\'s heat so hard on car batteries and AC systems?',
                            'a' => 'UAE summer temperatures regularly exceed 45°C, which accelerates battery fluid evaporation, weakens the battery\'s charge capacity, and puts extreme strain on AC compressors and refrigerant levels. Most car batteries in Dubai last 2–3 years rather than the 4–5 years typical in cooler climates. We recommend a battery health check every 12 months and an AC system inspection before summer each year.',
                        ],
                        [
                            'q' => 'Do I need an appointment or can I just walk in?',
                            'a' => 'Both options work perfectly. Walk-ins are always welcome at 222 Al Satwa Road - if you\'re nearby and your car needs attention, just come in. If you\'d like to guarantee a specific time slot or have a complex repair planned, you can book in advance through our website or by calling 056-6121423.',
                        ],
                        [
                            'q' => 'What payment methods do you accept?',
                            'a' => 'We accept cash, credit card, and debit card. Payment is taken after the repair is complete - never upfront. You\'ll always see the invoice before paying.',
                        ],
                    ];
                    @endphp

                    @foreach($faqs as $i => $faq)
                    <div class="accordion-item border rounded-3 mb-3" style="border-color:#e4e8ec !important;">
                        <h3 class="accordion-header" id="faqHead{{ $i }}">
                            <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }} fw-semibold rounded-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapse{{ $i }}"
                                    aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                                    aria-controls="faqCollapse{{ $i }}"
                                    style="font-size:.95rem; background:{{ $i === 0 ? '#f0f7ff' : '#fff' }};">
                                {{ $faq['q'] }}
                            </button>
                        </h3>
                        <div id="faqCollapse{{ $i }}"
                             class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                             aria-labelledby="faqHead{{ $i }}"
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted" style="font-size:.9rem; line-height:1.8;">
                                {{ $faq['a'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
</div>

{{-- ═══════════════════════════════════════════
     FAQ SCHEMA MARKUP
     (Enables Google rich snippets - FAQ accordion appears
      directly in search results for matched queries)
════════════════════════════════════════════ --}}
@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://dubaicarrepairservice.com/about#faq",
  "mainEntity": [

    {
      "@type": "Question",
      "name": "Where is Dubai Car Repair Service located?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Dubai Car Repair Service is located at 222 Al Satwa Road, Al Satwa, Dubai, UAE. The workshop is easily accessible from major areas including Jumeirah, Bur Dubai, Karama, Downtown Dubai, DIFC, and Sheikh Zayed Road."
      }
    },

    {
      "@type": "Question",
      "name": "What are your working hours?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We operate daily from Saturday to Friday, 7:00 AM to 10:00 PM, including weekends and public holidays in the UAE."
      }
    },

    {
      "@type": "Question",
      "name": "Do you service all car makes and models?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we service a wide range of vehicles including Toyota, Nissan, Honda, Mitsubishi, Lexus, BMW, Mercedes-Benz, Audi, Volkswagen, Kia, Hyundai, Ford, Chevrolet, Jeep, Land Rover, and many other makes and models."
      }
    },

    {
      "@type": "Question",
      "name": "How much does car repair cost in Dubai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Car repair costs vary depending on the issue and vehicle type. Minor services may start from AED 50, while more complex repairs can go up to AED 2,500 or more. A detailed quote is always provided before any work begins."
      }
    },

    {
      "@type": "Question",
      "name": "Do you offer a warranty on repairs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide warranty coverage on selected parts and labour. If the same issue occurs within the warranty period, we inspect and resolve it according to our service terms."
      }
    },

    {
      "@type": "Question",
      "name": "Can I walk in without an appointment?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, walk-in customers are welcome at our Al Satwa workshop. You can also book an appointment in advance by calling 056-6121423 or through our website."
      }
    },

    {
      "@type": "Question",
      "name": "Why does Dubai heat affect car batteries and air conditioning systems?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "High temperatures in the UAE, often exceeding 45°C, can accelerate battery degradation and increase stress on air conditioning systems. Regular inspections help prevent unexpected failures, especially before summer."
      }
    }

  ]
}
</script>
@endpush

@endsection