@extends('layout.masterhome')
@php
    $meta_title       = 'Mobile Car Repair Dubai | Mechanic Comes to You | 056 612 1423';
    $meta_description = 'Mobile car repair in Dubai - certified mechanic comes to your home, office or roadside. Battery, AC, oil, brakes & more. Fast response. Call 056 612 1423.';
    $meta_keywords    = 'mobile car repair dubai, mobile mechanic dubai, car repair at home dubai, mechanic near me dubai, mobile car service dubai';
@endphp
@section('content')

{{-- ═══ HERO ═══ --}}
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
     style="background:linear-gradient(135deg,#001516 0%,#002a2a 100%);min-height:320px;display:flex;align-items:center;">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <p class="text-white-50 mb-2"
                   style="font-size:.8rem;letter-spacing:.12em;text-transform:uppercase;font-weight:600;">
                    Across All Dubai Areas &bull; We Come to You &bull; No Towing Required
                </p>
                <h1 class="display-4 text-white fw-bold mb-3">
                    Mobile Car Repair Dubai - Certified Mechanic at Your Door
                </h1>
                <p class="text-white mb-4"
                   style="font-size:1.05rem;opacity:.85;max-width:640px;margin:0 auto;">
                    Car problem at home, the office, or stranded on the road? Our mobile mechanics come to your location across Dubai - equipped, certified, and ready to diagnose and fix on the spot.
                </p>
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <a href="tel:0566121423" class="btn btn-primary rounded-pill px-4 py-3 fw-semibold">
                        <i class="fa fa-phone-alt me-2"></i>Call 056 612 1423
                    </a>
                    <a href="https://wa.me/971566121423" class="btn btn-success rounded-pill px-4 py-3 fw-semibold">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp Us
                    </a>
                </div>
                <nav aria-label="breadcrumb" class="mt-4">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('car-repair-dubai') }}" class="text-white-50 text-decoration-none">Services</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Mobile Car Repair Dubai</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

{{-- ═══ INTRO ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Service Overview</span>
                <h2 class="fw-bold mb-4">Mobile Car Repair in Dubai - Why More Drivers Are Skipping the Workshop Queue</h2>
                <p style="color:#444;line-height:1.8;">
                    Mobile car repair in Dubai has become one of the fastest-growing automotive services in the UAE - and for straightforward reasons. Dubai's road network, parking costs, and time constraints make driving a faulty car to a workshop, waiting for diagnosis, and returning hours later an increasingly impractical option for residents and professionals across the city.
                </p>
                <p style="color:#444;line-height:1.8;">
                    Our mobile mechanics are certified technicians - the same team that works from our <strong>222 Al Satwa Road workshop</strong> - dispatched in fully equipped service vehicles carrying the diagnostic tools, common replacement parts, and fluids needed to resolve the most frequent car problems on the spot. A dead battery, an AC system that stopped cooling, an overdue oil change, a brake warning light, or a minor electrical fault - all of these can be diagnosed and resolved at your <strong>home, office, apartment building, car park, or roadside location</strong> anywhere in Dubai.
                </p>
                <p style="color:#444;line-height:1.8;">
                    What our mobile service is not: a junior technician with a basic toolkit. Every mobile dispatch is an experienced, certified mechanic who knows when a job is within the scope of mobile service and - critically - when the vehicle needs to come to the workshop. That honest assessment is part of the service.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative" style="min-height:380px;">
                    <img src="{{ asset('public/img/service7.webp') }}"
                         alt="Mobile Car Repair Dubai - Mechanic Arrives at Your Location"
                         class="w-100 rounded-3 shadow" style="object-fit:cover;height:400px;">
                    <div class="position-absolute bottom-0 end-0 m-3 bg-primary text-white rounded-3 px-3 py-2 shadow text-center">
                        <div class="fw-bold" style="font-size:1.4rem;line-height:1;">AED 30</div>
                        <div style="font-size:.75rem;opacity:.9;">Call-Out Fee Only</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ WHAT WE FIX ON-SITE ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:620px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">What We Fix On-Site</span>
            <h2 class="fw-bold mb-2">Mobile Car Repair Services Available Across Dubai</h2>
            <p class="text-muted">These services are fully performable at your location - no workshop required. All prices include the mobile call-out fee.</p>
        </div>
        <div class="row g-4">
            @php $onsite = [
                [
                    'fa-battery-full', 'Car Battery Replacement',
                    'The most common mobile request in Dubai. We test your battery on-site with a professional load tester, confirm replacement is needed, and fit a genuine Exide, Bosch, or Varta battery to your vehicle\'s specification - AGM or EFB where required. Includes alternator output test.',
                    'AED 180–680', 'yes'
                ],
                [
                    'fa-oil-can', 'Engine Oil &amp; Filter Change',
                    'Full oil change at your home or office. We bring the correct grade oil for your vehicle, a genuine OEM filter, and collect the old oil for responsible disposal. Oil grade verified from manufacturer database before we arrive.',
                    'AED 119–410', 'yes'
                ],
                [
                    'fa-snowflake', 'AC Gas Recharge',
                    'If your AC is blowing warm but the system is intact (no major leak or compressor failure), we can recharge the refrigerant at your location. We carry both R134a and R1234yf refrigerant. If a leak is detected, the vehicle needs our workshop for proper leak repair.',
                    'AED 130–380', 'yes'
                ],
                [
                    'fa-laptop-code', 'OBD-II Diagnostic Scan',
                    'We bring professional diagnostic equipment to scan all modules - engine, ABS, transmission, body. Full fault code read-out and live data analysis. Printed report provided on-site. Identifies whether the repair requires mobile or workshop attention.',
                    'AED 80–130', 'yes'
                ],
                [
                    'fa-bolt', 'Jump Start Service',
                    'Flat battery with no time for a full replacement? We perform a professional jump start and test the battery and alternator to determine whether replacement is urgently needed or can be scheduled. We never just jump-start and leave without a proper assessment.',
                    'AED 60–100', 'yes'
                ],
                [
                    'fa-dot-circle', 'Tyre Puncture Repair',
                    'Standard tread-area punctures repaired on-site using a proper plug-patch method - not a foam sealant that masks the damage. If the tyre cannot be safely repaired (sidewall, run-flat, or tyre over 5 years old), we advise honestly and arrange a replacement.',
                    'AED 55–80', 'yes'
                ],
                [
                    'fa-circle', 'Brake Pad Check &amp; Minor Brake Service',
                    'Brake pad thickness measurement and brake system visual inspection at your location. Minor adjustments and brake fluid top-up performable on-site. Full pad or disc replacement requires the workshop for safe ramp access and proper torque equipment.',
                    'AED 80+', 'partial'
                ],
                [
                    'fa-filter', 'Air &amp; Cabin Filter Replacement',
                    'Engine air filter and cabin air filter replacement at your location. Quick service - typically 15–20 minutes. Often combined with a mobile oil change visit to save a separate call-out fee. Dubai\'s dust accelerates filter clogging significantly.',
                    'AED 50–150', 'yes'
                ],
                [
                    'fa-tint-slash', 'Coolant Top-Up & Coolant Leak Check',
                    'Essential for Dubai\'s extreme summer heat. We inspect your cooling system for visible hose cracks or radiator seam leaks, pressure-test the cap, and top up your reservoir using the correct manufacturer-specified coolant (HOAT, OAT, or IAT). If a major leak or water pump failure is found, we arrange safe workshop towing.',
                    'AED 70–160', 'yes'
                ],
            ]; @endphp
            @foreach($onsite as $s)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white border rounded-3 p-4 h-100 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                             style="width:44px;height:44px;flex-shrink:0;">
                            <i class="fa {{ $s[0] }} text-white" style="font-size:.9rem;"></i>
                        </div>
                        <div>
                            <div class="fw-bold" style="font-size:.92rem;">{!! $s[1] !!}</div>
                            <div class="d-flex align-items-center gap-2 mt-1">
                                <span class="text-primary fw-semibold" style="font-size:.8rem;">{{ $s[3] }}</span>
                                @if($s[4] === 'yes')
                                <span class="badge bg-success" style="font-size:.7rem;">✓ Fully Mobile</span>
                                @else
                                <span class="badge bg-warning text-dark" style="font-size:.7rem;">Partial On-Site</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mb-0" style="font-size:.875rem;line-height:1.7;">{{ $s[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        {{-- What needs workshop --}}
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <div class="bg-white border border-warning rounded-3 p-4">
                    <h5 class="fw-bold mb-3">
                        <i class="fa fa-exclamation-triangle text-warning me-2"></i>
                        What Requires Our Al Satwa Workshop - We Will Tell You Honestly
                    </h5>
                    <p class="text-muted mb-3" style="font-size:.875rem;">
                        Some repairs cannot be done safely or correctly without a hydraulic ramp, precision torque equipment, or workshop-level diagnostic tools. A mobile mechanic who attempts these at your location is cutting corners - not offering convenience. We will always tell you if your vehicle needs to come in rather than attempt something improperly at your location.
                    </p>
                    <div class="row g-2">
                        @php $workshop = [
                            'AC compressor replacement or refrigerant leak repair',
                            'Brake pad and disc replacement (requires ramp for safe caliper removal)',
                            'Timing belt or chain replacement',
                            'Head gasket repair or engine overhaul',
                            'Wheel alignment and balancing',
                            'Tyre replacement (requires tyre mounting machine)',
                            'Transmission service or gearbox repair',
                            'Suspension and steering component replacement',
                        ]; @endphp
                        @foreach($workshop as $w)
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-2">
                                <i class="fa fa-arrow-right text-warning mt-1" style="font-size:.8rem;flex-shrink:0;"></i>
                                <span style="font-size:.875rem;color:#444;">{{ $w }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ HOW IT WORKS ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">How It Works</span>
            <h2 class="fw-bold mb-2">Booking a Mobile Mechanic in Dubai - 4 Simple Steps</h2>
        </div>
        <div class="row g-4 justify-content-center">
            @php $steps = [
                ['1', 'fa-phone-alt',    'Call or WhatsApp',        'Contact us at 056 612 1423 or WhatsApp. Tell us your location, your car make and model, and describe the problem. We confirm whether the service is performable at your location and give you an estimated arrival time and price range.'],
                ['2', 'fa-car',          'Mechanic Dispatched',     'A certified mechanic is dispatched from our Al Satwa base in a fully equipped service vehicle carrying diagnostic tools, the most common replacement parts, and the correct oil grade for your vehicle. We update you on arrival time.'],
                ['3', 'fa-search',       'On-Site Diagnosis',       'We perform a proper diagnosis at your location - not a guess. OBD scan, physical inspection, battery load test, or pressure check depending on the symptom. You receive a clear explanation and a confirmed price before any work begins.'],
                ['4', 'fa-check-circle', 'Repaired at Your Location','If the repair is within mobile scope, it is completed on the spot. You inspect the work and pay the agreed price. If the vehicle needs workshop attention, we explain exactly why and arrange for it to be brought in at your convenience.'],
            ]; @endphp
            @foreach($steps as $s)
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center p-4 h-100 bg-white border rounded-3 shadow-sm">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mx-auto mb-3"
                         style="width:56px;height:56px;">
                        <i class="fa {{ $s[1] }} fa-lg text-white"></i>
                    </div>
                    <div class="fw-bold text-primary mb-2" style="font-size:.85rem;">STEP {{ $s[0] }}</div>
                    <h5 class="fw-bold mb-2" style="font-size:.95rem;">{{ $s[2] }}</h5>
                    <p class="text-muted mb-0" style="font-size:.85rem;line-height:1.7;">{{ $s[3] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══ AREAS COVERED ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-5">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Coverage Area</span>
                <h2 class="fw-bold mb-4">Mobile Car Repair Areas Covered in Dubai</h2>
                <p style="color:#444;line-height:1.8;">
                    Our mobile mechanics operate from our central Al Satwa base, covering all of Dubai's residential and commercial districts. We prioritise a fast response - most areas within 30–60 minutes of your call during operational hours (7AM–10PM, Saturday to Friday).
                </p>
                <p style="color:#444;line-height:1.8;">
                    We service drivers in apartments, villas, office towers, mall car parks, hotel car parks, and on the roadside. If you are unsure whether we cover your area, call 056 612 1423 - we will confirm immediately.
                </p>
                <div class="bg-primary text-white rounded-3 p-4 mt-3">
                    <h5 class="fw-bold text-white mb-2">
                        <i class="fa fa-clock text-white me-2"></i>Expected Response Times
                    </h5>
                    @php $times = [
                        ['Al Satwa, Jumeirah, Karama, Bur Dubai', '20–35 min'],
                        ['Downtown, Business Bay, DIFC, Za\'abeel', '25–40 min'],
                        ['Al Quoz, Al Barsha, Sheikh Zayed Rd', '30–45 min'],
                        ['Dubai Marina, JBR, JVC, JLT', '35–55 min'],
                        ['Mirdif, Al Nahda, International City', '40–60 min'],
                    ]; @endphp
                    @foreach($times as $t)
                    <!-- Swapped flex layout out for a native Bootstrap grid row with vertical alignment -->
                    <div class="row align-items-center py-2 border-bottom border-white border-opacity-25 g-1">
                        <div class="col-12 col-md-8">
                            <span style="font-size:.82rem;opacity:.9;">{{ $t[0] }}</span>
                        </div>
                        <div class="col-12 col-md-4 text-md-end">
                            <span class="fw-bold" style="font-size:.85rem;">{{ $t[1] }}</span>
                        </div>
                    </div>
                    @endforeach
                    <p class="mt-3 mb-0" style="font-size:.78rem;opacity:.75;">Times are estimates during normal operating hours. Traffic conditions on Sheikh Zayed Road and Al Khail Road during peak hours may affect arrival.</p>
                </div>
            </div>
<div class="col-lg-7">
    <!-- Added h-100 to row helper columns to normalize box shapes -->
    <div class="row g-2 match-height-grid">
        @php $areas = [
            'Al Satwa', 'Jumeirah', 'Bur Dubai', 'Karama', 'Al Mankhool',
            'Za\'abeel', 'DIFC', 'Downtown Dubai', 'Business Bay', 'Al Quoz',
            'Al Barsha', 'Dubai Marina', 'JBR', 'JVC', 'JLT',
            'Mirdif', 'Al Nahda', 'Al Jaddaf', 'Oud Metha', 'Sheikh Zayed Rd',
            'International City', 'Silicon Oasis', 'Al Wasl', 'Al Safa',
        ]; @endphp
        @foreach($areas as $area)
        <div class="col-6 col-md-4 d-flex">
            <!-- Added w-100, text-truncate on text, and forced uniform item padding -->
            <div class="d-flex align-items-center bg-white border rounded-3 px-3 py-2 gap-2 w-100" style="min-height: 48px;">
                <i class="fa fa-map-marker-alt text-primary" style="font-size:.8rem; flex-shrink:0;"></i>
                <span class="text-truncate" style="font-size:.855rem;" title="{{ $area }}">{{ $area }}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
        </div>
    </div>
</div>

{{-- ═══ WHY CHOOSE US ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:620px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Why Choose Us</span>
            <h2 class="fw-bold mb-2">Why Dubai Drivers Call Us for Mobile Car Repair</h2>
        </div>
        <div class="row g-4">
            @php $reasons = [
                ['fa-user-check',     'Certified Mechanics - Not Freelancers',  'Our mobile team are the same certified mechanics who work at our Al Satwa workshop. Not agency-sourced freelancers, not apprentices. Trained, experienced, and accountable to our workshop\'s standards.'],
                ['fa-search',         'Proper Diagnosis at Your Location',       'We carry professional OBD-II diagnostic equipment on every mobile dispatch. We never guess at a fault or replace parts speculatively. If we cannot diagnose it correctly at your location, we tell you.'],
                ['fa-award',          'Genuine Parts in the Van',                'We carry Exide and Bosch batteries, branded oil in the correct grades, and OEM-quality filters in our mobile vehicle. You receive the same parts quality as a workshop visit.'],
                ['fa-receipt',        'Price Agreed Before Work Starts',         'The call-out fee is confirmed when you book. The parts and labour price is confirmed after on-site diagnosis. No surprise charges when we arrive, and nothing added without your approval.'],
                ['fa-shield-alt',     'Workshop Backup for Complex Repairs',     'If your fault requires workshop-level equipment, we arrange transport to our Al Satwa garage and prioritise your vehicle. Mobile service is a convenience extension of our full workshop - not a substitute.'],
                ['fa-map-marker-alt', 'All Dubai Areas, Same Day',               'We cover all of Dubai from our central Al Satwa base. Most locations within 30–60 minutes. Operate 7AM to 10PM every day - including weekends and UAE public holidays.'],
            ]; @endphp
            @foreach($reasons as $r)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex h-100 bg-white border rounded-3 p-4">
                    <div class="flex-shrink-0 me-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle"
                             style="width:46px;height:46px;">
                            <i class="fa {{ $r[0] }} text-white"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2" style="font-size:.95rem;">{{ $r[1] }}</h5>
                        <p class="text-muted mb-0" style="font-size:.875rem;line-height:1.7;">{{ $r[2] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══ FAQ ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:620px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">FAQ</span>
            <h2 class="fw-bold mb-2">Mobile Car Repair Dubai - Common Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="mobileFaq">
                    @php $faqs = [
                        ['How quickly can a mobile mechanic reach me in Dubai?','From our Al Satwa base, we typically reach central Dubai areas - Jumeirah, Karama, Business Bay, Downtown, DIFC - within 20–40 minutes. Outer areas like Dubai Marina, Al Barsha, and JVC take 35–55 minutes. Mirdif, Al Nahda, and International City are 40–60 minutes. These estimates are subject to traffic conditions, particularly on Sheikh Zayed Road during peak hours.'],
                        ['What is the call-out fee for mobile car repair in Dubai?','Our mobile call-out fee is AED 30. This covers the mechanic\'s travel to your location and is added to the service price. There is no minimum charge beyond this - if the issue is a simple battery test that shows the battery is fine and only needs charging, you pay the diagnostic fee and the call-out fee. No upselling, no inflated minimums.'],
                        ['Can a mobile mechanic fix my car AC in Dubai?','For a simple refrigerant recharge (gas refill), yes - we carry R134a and R1234yf refrigerant in our mobile vehicle and can recharge at your location. However, if there is a refrigerant leak, compressor failure, or condenser blockage, the repair requires our Al Satwa workshop where we have the proper leak detection equipment, vacuum pump, and calibrated recharge station.'],
                        ['What information do I need to give when I call for mobile repair?','Your location (building name, street, and area), your car make, model, and year, and a description of the problem or symptom. If there is a specific warning light on the dashboard, tell us which one. This allows us to bring the most likely parts needed and confirm in advance whether the repair is within mobile scope.'],
                        ['Is mobile car repair more expensive than going to a workshop?','The service price for parts and labour is the same as our workshop rates. The only additional cost is the AED 30 call-out fee. For many customers - particularly those paying for parking or towing to a garage - the mobile service is cost-neutral or cheaper once those costs are considered. For battery replacements alone, avoiding a tow truck typically saves AED 150–300.'],
                        ['Can you repair my car in a covered parking garage?','Yes - as long as there is adequate ventilation for the work being performed. Battery replacements, oil changes, filter replacements, and diagnostic scans can all be performed in covered car parks. We cannot perform work in enclosed basement parking with no airflow where fumes or oil vapour could accumulate. We assess the location when we arrive and advise accordingly.'],
                    ]; @endphp
                    @foreach($faqs as $i => $faq)
                    <div class="accordion-item border rounded-3 mb-3" style="border-color:#e4e8ec!important;">
                        <h3 class="accordion-header" id="mobHead{{ $i }}">
                            <button class="accordion-button {{ $i>0?'collapsed':'' }} fw-semibold rounded-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#mobCollapse{{ $i }}"
                                    aria-expanded="{{ $i===0?'true':'false' }}"
                                    style="font-size:.95rem;background:{{ $i===0?'#f0f7ff':'#fff' }};">
                                {{ $faq[0] }}
                            </button>
                        </h3>
                        <div id="mobCollapse{{ $i }}" class="accordion-collapse collapse {{ $i===0?'show':'' }}"
                             data-bs-parent="#mobileFaq">
                            <div class="accordion-body text-muted" style="font-size:.9rem;line-height:1.8;">{{ $faq[1] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ RELATED SERVICES ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mb-4"><h3 class="fw-bold">Related Services</h3></div>
        <div class="row g-3 justify-content-center">
@php $related = [
    ['fa-battery-full',        'Car Battery Replacement',    'Same-hour battery change, mobile or workshop',   'car-battery-replacement-dubai'],
    ['fa-exclamation-triangle','Roadside Assistance Dubai',  'Emergency breakdown - we come immediately',      'roadside-assistance-dubai'],
    ['fa-oil-can',             'Engine Oil Change Dubai',    'Mobile oil change at your home or office',       'engine-oil-change-dubai'],
    ['fa-laptop-code',         'Car Diagnostic Dubai',       'OBD-II scan at your location',                  'car-inspection-dubai'],
]; @endphp
            @foreach($related as $r)
            <div class="col-md-6 col-lg-3">
                <a href="{{ route($r[3]) }}" class="text-decoration-none">
                    <div class="bg-white border rounded-3 p-4 h-100 text-center"
                         style="transition:box-shadow .2s;"
                         onmouseover="this.style.boxShadow='0 4px 16px rgba(0,0,0,.1)'"
                         onmouseout="this.style.boxShadow='none'">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mx-auto mb-3"
                             style="width:48px;height:48px;">
                            <i class="fa {{ $r[0] }} text-white"></i>
                        </div>
                        <div class="fw-semibold text-dark mb-1" style="font-size:.9rem;">{!! $r[1] !!}</div>
                        <div class="text-muted" style="font-size:.8rem;">{!! $r[2] !!}</div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══ CTA ═══ --}}
<div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s"
     style="background:linear-gradient(135deg,#001516 0%,#002a2a 100%);">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 text-center text-lg-start">
                <h2 class="fw-bold text-white mb-2">Car Problem? We'll Come to You - Anywhere in Dubai.</h2>
                <p class="text-white-50 mb-0">Open 7AM–10PM daily &bull; All Dubai areas &bull; Certified mechanics &bull; AED 30 call-out fee</p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-end">
                    <a href="tel:0566121423" class="btn btn-primary rounded-pill px-4 py-3 fw-semibold">
                        <i class="fa fa-phone-alt me-2"></i>Call 056 612 1423
                    </a>
                    <a href="https://wa.me/971566121423" class="btn btn-success rounded-pill px-4 py-3 fw-semibold">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Service",
      "@id": "https://dubaicarrepairservice.com/mobile-car-repair-dubai#service",
      "name": "Mobile Car Repair Dubai",
      "url": "https://dubaicarrepairservice.com/mobile-car-repair-dubai",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://dubaicarrepairservice.com/mobile-car-repair-dubai"
      },
      "serviceType": "Mobile Mechanic Service",
      "description": "Professional mobile car repair service in Dubai. Certified mechanics provide on-site repairs at your home, office or roadside including diagnostics, battery replacement, AC service, oil changes and general vehicle repairs. Available 7AM–10PM across Dubai.",
      "provider": {
        "@id": "https://dubaicarrepairservice.com/#localbusiness"
      },
      "areaServed": {
        "@type": "City",
        "name": "Dubai"
      },
      "offers": {
        "@type": "Offer",
        "price": 30,
        "priceCurrency": "AED",
        "description": "Call-out fee",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://dubaicarrepairservice.com/mobile-car-repair-dubai#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://dubaicarrepairservice.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Mobile Car Repair Dubai",
          "item": "https://dubaicarrepairservice.com/mobile-car-repair-dubai"
        }
      ]
    },

    {
      "@type": "FAQPage",
      "@id": "https://dubaicarrepairservice.com/mobile-car-repair-dubai#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "How quickly can a mobile mechanic reach me in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Response time depends on your location and traffic conditions. Central Dubai areas are typically reached faster, while outer areas may take longer. Service is available daily from 7AM to 10PM."
          }
        },

        {
          "@type": "Question",
          "name": "What is the call-out fee for mobile car repair in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A fixed call-out fee applies for mobile visits to cover travel to your location. Repair costs for parts and labour are charged separately based on diagnosis."
          }
        },

        {
          "@type": "Question",
          "name": "Can a mobile mechanic fix car AC in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mobile mechanics can handle basic AC services such as gas top-ups and minor checks. Complex AC repairs such as compressor replacement or major leak repairs are typically performed at the workshop."
          }
        },

        {
          "@type": "Question",
          "name": "Is mobile car repair more expensive than a workshop?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Repair pricing for parts and labour is generally the same as workshop services. A small call-out fee applies for mobile service, which can still be more cost-effective compared to towing your vehicle."
          }
        }

      ]
    }

  ]
}
</script>
@endpush

@endsection