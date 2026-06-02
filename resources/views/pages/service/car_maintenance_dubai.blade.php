@extends('layout.masterhome')
@php
    $meta_title       = 'Car Maintenance Dubai | Scheduled Servicing | 056 612 1423';
    $meta_description = 'Complete car maintenance in Dubai. Basic, full & major servicing packages. All makes & models. Genuine parts. Open 7AM–10PM. 222 Al Satwa Rd. Call 056 612 1423.';
    $meta_keywords    = 'car maintenance dubai, car service dubai, car servicing dubai, scheduled car service dubai, car maintenance near me dubai';
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
                    Al Satwa, Dubai &bull; Basic to Major Servicing &bull; All Makes &amp; Models
                </p>
                <h1 class="display-4 text-white fw-bold mb-3">
                    Car Maintenance Dubai - Scheduled Servicing Done Right
                </h1>
                <p class="text-white mb-4"
                   style="font-size:1.05rem;opacity:.85;max-width:640px;margin:0 auto;">
                    From a basic oil and filter service to a comprehensive major overhaul - our certified mechanics follow UAE-adapted maintenance schedules to keep your car running reliably in Dubai's extreme climate.
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
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('car-repair-dubai') }}" class="text-white-50 text-decoration-none">Services</a>
                        </li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Car Maintenance Dubai</li>
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
                <h2 class="fw-bold mb-4">Car Maintenance in Dubai - Why UAE Intervals Are Different from the Manual</h2>
                <p style="color:#444;line-height:1.8;">
                    Car maintenance in Dubai operates on different rules from the schedules printed in your owner's manual. Every manufacturer calculates recommended service intervals based on standard test conditions - typically 20°C ambient temperature, moderate highway driving, and clean air. Dubai's reality is 45°C sustained heat, sandstorm conditions, and engines that idle for extended periods in stop-and-go traffic on Sheikh Zayed Road while running air conditioning at maximum capacity.
                </p>
                <p style="color:#444;line-height:1.8;">
                    The consequence of following the manufacturer's printed schedule without adjustment is accelerated engine wear, premature battery failure, degraded brake fluid that boils under hard braking, clogged cabin filters that reduce AC performance, and coolant that loses its corrosion protection before its stated change interval. At Dubai Car Repair Service, every maintenance plan we carry out is <strong>adapted for UAE driving conditions</strong> - with shortened oil change intervals, more frequent filter replacements, and annual battery and cooling system checks regardless of mileage.
                </p>
                <p style="color:#444;line-height:1.8;">
                    Our workshop at <strong>222 Al Satwa Road</strong> handles scheduled maintenance for all makes and models - from a simple oil and filter change to a full major service covering every wear item on the vehicle. We use genuine parts, provide a written record of everything replaced, and give you a condition report on items approaching their service limit so you can plan ahead.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative" style="min-height:380px;">
                    <img src="{{ asset('public/img/service9.webp') }}"
                         alt="Car Maintenance Dubai - Scheduled Service at Al Satwa Workshop"
                         class="w-100 rounded-3 shadow" style="object-fit:cover;height:400px;">
                    <div class="position-absolute bottom-0 end-0 m-3 bg-primary text-white rounded-3 px-3 py-2 shadow text-center">
                        <div class="fw-bold" style="font-size:1.4rem;line-height:1;">AED 200+</div>
                        <div style="font-size:.75rem;opacity:.9;">Basic Service From</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ SERVICE PACKAGES ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:620px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Service Packages</span>
            <h2 class="fw-bold mb-2">Car Maintenance Packages for Dubai Drivers</h2>
            <p class="text-muted">Three service tiers - each built around what Dubai's climate actually demands, not what a standard template suggests.</p>
        </div>
        <div class="row g-4">
            @php $packages = [
                [
                    'title'  => 'Basic Service',
                    'price'  => 'AED 200 – 380',
                    'freq'   => 'Every 5,000–7,500 km or 3–4 months',
                    'color'  => 'border-primary',
                    'badge'  => 'bg-primary',
                    'desc'   => 'The essential minimum to protect your engine between major services. Covers the items that degrade fastest in Dubai\'s heat and stop-and-go traffic.',
                    'items'  => [
                        'Engine oil drain and refill - correct grade for your vehicle',
                        'Genuine OEM-quality oil filter replacement',
                        'Old oil inspected for coolant contamination or metal particles',
                        'Engine air filter condition check - replace if restricted',
                        'Tyre pressure check and adjustment to cold specification',
                        'All fluid levels checked - coolant, brake, power steering, washer',
                        'Battery voltage and visual terminal inspection',
                        'Lights check - headlights, brake lights, indicators',
                        'Service sticker applied - oil grade, date, UAE-adjusted next interval',
                    ],
                ],
                [
                    'title'  => 'Full Service',
                    'price'  => 'AED 450 – 850',
                    'freq'   => 'Every 15,000 km or 6 months',
                    'color'  => 'border-success',
                    'badge'  => 'bg-success',
                    'desc'   => 'Comprehensive service covering all basic items plus the secondary wear components that Dubai\'s conditions accelerate. Recommended for all vehicles over 2 years old.',
                    'items'  => [
                        'Everything in Basic Service',
                        'Engine air filter replacement (not just check)',
                        'Cabin air filter replacement - critical for AC performance in Dubai dust',
                        'Spark plug inspection - replacement if worn or carbon-fouled',
                        'Brake pad thickness measurement - all four corners',
                        'Brake disc condition and runout assessment',
                        'Brake fluid boiling point test - replace if degraded below DOT spec',
                        'Coolant concentration and pH test - critical for UAE summer temperatures',
                        'Battery load test - CCA measurement vs rated capacity',
                        'OBD-II diagnostic scan - all modules, stored fault codes',
                        'Tyre tread depth measurement and DOT age check',
                        'Drive belt condition and tension check',
                        'Suspension visual check - boots, bushes, leaks',
                        'Full underbody inspection on ramp',
                    ],
                ],
                [
                    'title'  => 'Major Service',
                    'price'  => 'AED 900 – 2,200',
                    'freq'   => 'Every 30,000 km or 12 months',
                    'color'  => 'border-warning',
                    'badge'  => 'bg-warning text-dark',
                    'desc'   => 'The complete reset - covering every fluid, filter, and scheduled wear item on your vehicle. Restores full factory performance and protection. Recommended annually for Dubai-driven vehicles.',
                    'items'  => [
                        'Everything in Full Service',
                        'Spark plug replacement - iridium or platinum to manufacturer spec',
                        'Fuel filter replacement (where external and accessible)',
                        'Gearbox and differential fluid inspection - replace if degraded',
                        'Power steering fluid flush and refill',
                        'Coolant system drain, flush, and refill - fresh antifreeze concentration',
                        'Brake fluid full system flush - DOT 4 or DOT 5.1 to specification',
                        'PCV valve inspection and replacement if needed',
                        'Throttle body inspection and cleaning if required',
                        'Timing belt condition assessment (replacement quoted separately if due)',
                        'Wheel alignment check - camber, caster, toe all four wheels',
                        'All wiper blades replaced',
                        'Full 50-point safety check with written report',
                        'Road test - acceleration, braking, steering, gear changes',
                    ],
                ],
            ]; @endphp
            @foreach($packages as $pkg)
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white border-2 {{ $pkg['color'] }} rounded-3 p-4 h-100 shadow-sm" style="border-style:solid;">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h4 class="fw-bold mb-1">{{ $pkg['title'] }}</h4>
                            <div class="text-primary fw-bold" style="font-size:1rem;">{{ $pkg['price'] }}</div>
                        </div>
                        <span class="badge {{ $pkg['badge'] }} px-3 py-2" style="font-size:.78rem;">
                            {{ $pkg['freq'] }}
                        </span>
                    </div>
                    <p class="text-muted mb-3" style="font-size:.875rem;line-height:1.7;">{{ $pkg['desc'] }}</p>
                    <div class="border-top pt-3">
                        @foreach($pkg['items'] as $item)
                        <div class="d-flex align-items-start gap-2 mb-2">
                            <i class="fa fa-check-circle text-primary mt-1" style="font-size:.8rem;flex-shrink:0;"></i>
                            <span style="font-size:.83rem;color:#444;">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8">
                <div class="bg-white border border-primary rounded-3 p-4 text-center">
                    <p class="text-muted mb-0" style="font-size:.875rem;">
                        <i class="fa fa-info-circle text-primary me-2"></i>
                        All package prices include parts and labour. Exact pricing depends on your vehicle make, model, and engine. We confirm the exact cost after checking your vehicle specification - before any work begins.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ WHAT DUBAI HEAT DOES ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">UAE Climate Impact</span>
                <h2 class="fw-bold mb-4">What Dubai's Heat Does to Every System in Your Car</h2>
                <p style="color:#444;line-height:1.8;">
                    Standard manufacturer maintenance schedules are written for a 20°C world. Dubai regularly delivers 45°C+ for five consecutive months. This is not a marginal difference - it fundamentally changes the rate at which every consumable and wear component in your car degrades.
                </p>
                @php $impacts = [
                    ['fa-oil-can',       'Engine Oil',         'Oxidises and thins 25–30% faster. Black sooner, loses viscosity earlier. Interval reduction essential.'],
                    ['fa-battery-full',  'Battery',            'Fluid evaporation and plate corrosion cut lifespan to 2–3 years vs 4–5 in temperate climates.'],
                    ['fa-tint',          'Brake Fluid',        'Absorbs moisture faster in humid UAE conditions. Boiling point drops - brake fade risk increases.'],
                    ['fa-snowflake',     'AC System',          'Compressor operates near maximum load for 5+ months. Refrigerant seals and hoses degrade faster.'],
                    ['fa-filter',        'Cabin Air Filter',   'Dubai dust and sand clog filters 2–3× faster than European conditions. AC performance affected.'],
                    ['fa-thermometer-full','Coolant',          'pH degrades, corrosion protection falls. Engine block and radiator suffer without timely fluid replacement.'],
                    ['fa-dot-circle',    'Tyres',              'UV radiation and road surface heat (70°C+) harden sidewall rubber. 5-year age limit is real in UAE.'],
                    ['fa-tools',         'Rubber Components',  'Hose, belt, and seal rubber ages at 2× the rate. Inspection frequency must match actual degradation rate.'],
                ]; @endphp
                <div class="row g-3 mt-2">
                    @foreach($impacts as $imp)
                    <div class="col-12">
                        <div class="d-flex align-items-start bg-light border rounded-3 p-3 gap-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle"
                                 style="width:36px;height:36px;flex-shrink:0;">
                                <i class="fa {{ $imp[0] }} text-white" style="font-size:.8rem;"></i>
                            </div>
                            <div>
                                <div class="fw-semibold" style="font-size:.88rem;">{{ $imp[1] }}</div>
                                <div class="text-muted" style="font-size:.82rem;line-height:1.5;">{{ $imp[2] }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">UAE Maintenance Intervals</span>
                <h2 class="fw-bold mb-4">Recommended Maintenance Intervals for Dubai</h2>
                <p style="color:#444;line-height:1.8;">
                    These intervals are our recommendations for vehicles driven in Dubai's climate - adjusted from manufacturer standard schedules based on 12 years of servicing cars in UAE conditions.
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered bg-white">
                        <thead class="table-dark">
                            <tr>
                                <th style="font-size:.85rem;">Item</th>
                                <th style="font-size:.85rem;">Manufacturer Interval</th>
                                <th style="font-size:.85rem;">UAE Recommendation</th>
                            </tr>
                        </thead>
                        <tbody style="font-size:.84rem;">
                            @php $intervals = [
                                ['Engine Oil (synthetic)',    'Every 10,000–15,000 km','Every 7,500–8,000 km'],
                                ['Engine Oil (mineral)',      'Every 5,000–7,500 km',  'Every 4,000–5,000 km'],
                                ['Engine Air Filter',         'Every 20,000–30,000 km','Every 12,000–15,000 km'],
                                ['Cabin Air Filter',          'Every 15,000–20,000 km','Every 8,000–10,000 km'],
                                ['Spark Plugs (iridium)',     'Every 60,000–100,000 km','Every 50,000–60,000 km'],
                                ['Brake Fluid',               'Every 2–3 years',       'Every 12–18 months'],
                                ['Coolant',                   'Every 2–5 years',       'Every 2 years'],
                                ['Battery Health Check',      'Every 2 years',         'Annually from 18 months'],
                                ['Tyre Age Check',            '5-year maximum',        '4-year check, 5-year replace'],
                            ]; @endphp
                            @foreach($intervals as $iv)
                            <tr>
                                <td class="fw-semibold">{{ $iv[0] }}</td>
                                <td class="text-muted">{{ $iv[1] }}</td>
                                <td class="text-primary fw-semibold">{{ $iv[2] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <p class="text-muted mt-2 mb-0" style="font-size:.8rem;">
                    <i class="fa fa-info-circle text-primary me-1"></i>
                    Intervals listed are guidelines. High-mileage vehicles, turbocharged engines, and vehicles used in heavy traffic should use the shorter end of each range.
                </p>
            </div>
        </div>
    </div>
</div>

{{-- ═══ WHY CHOOSE US ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:620px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Why Choose Us</span>
            <h2 class="fw-bold mb-2">Why Dubai Drivers Trust Us for Scheduled Maintenance</h2>
        </div>
        <div class="row g-4">
            @php $reasons = [
                ['fa-thermometer-half', 'UAE-Adapted Service Schedules',      '12 years of servicing cars in Dubai has taught us where the manufacturer\'s schedule is insufficient for UAE conditions. We adjust intervals and inspection priorities based on what actually fails in this climate.'],
                ['fa-award',            'Genuine Parts, Every Time',           'No substituted fluids, no grey-market filters. Every part we fit meets or exceeds OEM specification. We list every part replaced on your service record so there is a documented history if you sell the vehicle.'],
                ['fa-file-alt',         'Full Written Service Record',         'After every service, you receive a printed record of everything inspected, checked, and replaced - including the brand and grade of oil used. This is not a formality; it is your asset when you sell the car.'],
                ['fa-search',           'Condition Report on All Items',        'Beyond what we replace, we document the condition of every other item we inspect - so you know what is approaching its service limit and can plan your budget before it becomes an emergency.'],
                ['fa-car',              'All Makes, One Workshop',             'We carry genuine-equivalent parts and the correct fluids for Japanese, European, American, and Korean vehicles. One workshop, consistent standards, regardless of what you drive.'],
                ['fa-receipt',          'No Package Upselling',                'We recommend the service package your vehicle actually needs at that mileage and condition - not the most expensive one. If a major service component was done recently, we skip it and show you why.'],
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
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:620px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">FAQ</span>
            <h2 class="fw-bold mb-2">Car Maintenance Dubai - Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="maintFaq">
                    @php $faqs = [
                        [
                            'How often should I service my car in Dubai?',
                            'In Dubai\'s climate, we recommend a basic oil and filter service every 5,000–7,500 km for synthetic oil users, or every 4,000–5,000 km for mineral oil. A full service covering filters, brakes, and fluid checks should be done every 15,000 km or every 6 months - whichever comes first. A major service covering all wear items annually or every 30,000 km. These intervals are shorter than manufacturer recommendations to account for Dubai\'s extreme heat and stop-and-go traffic.',
                        ],
                        [
                            'What is included in a full car service in Dubai?',
                            'Our full service covers: engine oil and filter replacement, engine and cabin air filter replacement, brake pad measurement (all four corners), brake disc condition check, brake fluid boiling point test, battery load test, OBD-II diagnostic scan, coolant concentration test, tyre tread depth and DOT age check, drive belt inspection, and a full underbody visual inspection on our ramp. You receive a written report of everything checked and its condition.',
                        ],
                        [
                            'Does a car service void my warranty in Dubai?',
                            'No. Under UAE consumer protection rules and international block exemption regulations, having your car serviced at an independent workshop does not void your manufacturer\'s warranty - provided the workshop uses the correct specification parts and fluids, and maintains a written service record. We document every service with the correct oil grade, filter brand, and service date - exactly as a dealer would.',
                        ],
                        [
                            'How long does a car service take in Dubai?',
                            'A basic oil and filter service takes 30–45 minutes. A full service covering all inspection items takes 1.5–2.5 hours. A major service takes 3–5 hours depending on what replacement items are required. We give you a realistic time estimate when you drop the car off - not an optimistic one.',
                        ],
                        [
                            'What is the difference between a full service and a major service?',
                            'A full service focuses on the fluid and filter items that degrade most rapidly - oil, air filters, brake fluid check, battery test, and a visual inspection of wear items. A major service goes further: it replaces spark plugs, fully flushes all fluid systems (coolant, brake fluid, gearbox where due), performs a 4-wheel alignment check, and covers every item on the manufacturer\'s scheduled maintenance list. Think of a major service as a complete reset of consumables.',
                        ],
                        [
                            'Can you service my car even if I don\'t know the service history?',
                            'Yes - this is very common with used cars purchased in Dubai. We perform a full inspection before deciding what the car needs, based on actual component condition rather than paperwork. We check the oil condition, brake fluid boiling point, spark plug wear, battery age, tyre DOT code, and any stored fault codes. This gives us an honest picture of the car\'s real maintenance state regardless of what the service book says.',
                        ],
                    ]; @endphp
                    @foreach($faqs as $i => $faq)
                    <div class="accordion-item border rounded-3 mb-3" style="border-color:#e4e8ec!important;">
                        <h3 class="accordion-header" id="maintHead{{ $i }}">
                            <button class="accordion-button {{ $i>0?'collapsed':'' }} fw-semibold rounded-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#maintCollapse{{ $i }}"
                                    aria-expanded="{{ $i===0?'true':'false' }}"
                                    style="font-size:.95rem;background:{{ $i===0?'#f0f7ff':'#fff' }};">
                                {{ $faq[0] }}
                            </button>
                        </h3>
                        <div id="maintCollapse{{ $i }}"
                             class="accordion-collapse collapse {{ $i===0?'show':'' }}"
                             data-bs-parent="#maintFaq">
                            <div class="accordion-body text-muted" style="font-size:.9rem;line-height:1.8;">
                                {{ $faq[1] }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ RELATED SERVICES ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mb-4"><h3 class="fw-bold">Related Services</h3></div>
        <div class="row g-3 justify-content-center">
            @php $related = [
            ['fa-oil-can',       'Engine Oil Change Dubai',    'Quick oil & filter service',          'engine-oil-change-dubai'],
            // Fixed: Changed route name from 'car-brake-pad-replacement-dubai' to 'car-repair-dubai'
            ['fa-circle',        'Brake Pad Replacement Dubai','Safety-critical brake service',        'car-repair-dubai'],
            ['fa-search',        'Car Inspection Dubai',       '50-point pre-RTA & safety check',     'car-inspection-dubai'],
            ['fa-cog',           'Engine Service Dubai',       'Full engine repair & diagnostics',     'car-engine-service-dubai'],
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

{{-- ═══ CTA BANNER ═══ --}}
<div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s"
     style="background:linear-gradient(135deg,#001516 0%,#002a2a 100%);">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 text-center text-lg-start">
                <h2 class="fw-bold text-white mb-2">Book Your Car Service in Dubai Today.</h2>
                <p class="text-white-50 mb-0">Open 7AM–10PM daily &bull; 222 Al Satwa Rd &bull; Written service record provided &bull; All makes welcome</p>
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
      "@id": "https://dubaicarrepairservice.com/car-maintenance-dubai#service",
      "name": "Car Maintenance Dubai",
      "url": "https://dubaicarrepairservice.com/car-maintenance-dubai",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://dubaicarrepairservice.com/car-maintenance-dubai"
      },
      "serviceType": "Scheduled Car Maintenance Service",
      "description": "Professional car maintenance services in Dubai including periodic servicing, oil changes, filter replacement, brake inspections, battery testing, cooling system maintenance, diagnostic checks and manufacturer-recommended maintenance schedules for all vehicle makes and models.",
      "provider": {
        "@id": "https://dubaicarrepairservice.com/#localbusiness"
      },
      "areaServed": {
        "@type": "City",
        "name": "Dubai"
      },
      "offers": {
        "@type": "AggregateOffer",
        "lowPrice": "200",
        "highPrice": "2200",
        "priceCurrency": "AED",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://dubaicarrepairservice.com/car-maintenance-dubai#breadcrumb",
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
          "name": "Car Maintenance Dubai",
          "item": "https://dubaicarrepairservice.com/car-maintenance-dubai"
        }
      ]
    },

    {
      "@type": "FAQPage",
      "@id": "https://dubaicarrepairservice.com/car-maintenance-dubai#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "How often should I service my car in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Service intervals depend on vehicle make, model, driving conditions and manufacturer recommendations. Because Dubai's climate can place additional stress on vehicle components, regular maintenance inspections and timely servicing are recommended."
          }
        },

        {
          "@type": "Question",
          "name": "Does car servicing at an independent workshop void my warranty in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Warranty terms vary by manufacturer and vehicle. Vehicle owners should follow the manufacturer's maintenance requirements and keep complete service records. Our team can help ensure maintenance is performed according to manufacturer specifications."
          }
        },

        {
          "@type": "Question",
          "name": "What is included in a full car service in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A full vehicle service may include engine oil replacement, oil filter replacement, fluid checks, brake inspections, battery testing, tyre inspection, diagnostic scanning, cooling system checks and a general vehicle condition assessment."
          }
        }

      ]
    }

  ]
}
</script>
@endpush

@endsection