@extends('layout.masterhome')
@php
    $meta_title       = 'Car Inspection Dubai | RTA Pre-Test & Pre-Purchase | 056 612 1423';
    $meta_description = 'Professional car inspection in Dubai. RTA pre-test, pre-purchase & safety checks. 50-point inspection, full report, all makes. Book today - 056 612 1423.';
    $meta_keywords    = 'car inspection dubai, vehicle inspection dubai, rta car inspection dubai, pre-purchase car inspection dubai, car check dubai';
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
                    Al Satwa, Dubai &bull; RTA Pre-Test &bull; Pre-Purchase &bull; Safety Inspection
                </p>
                <h1 class="display-4 text-white fw-bold mb-3">
                    Car Inspection Dubai - RTA-Ready Vehicle Check by Certified Mechanics
                </h1>
                <p class="text-white mb-4"
                   style="font-size:1.05rem;opacity:.85;max-width:640px;margin:0 auto;">
                    50-point professional vehicle inspection covering engine, brakes, tyres, electrics, and chassis. RTA pre-test preparation, pre-purchase used car checks, and annual safety inspections - all with a written report.
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
                        <li class="breadcrumb-item text-white active" aria-current="page">Car Inspection Dubai</li>
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
                <h2 class="fw-bold mb-4">Car Inspection in Dubai - What a Professional Vehicle Check Covers</h2>
                <p style="color:#444;line-height:1.8;">
                    Car inspection in Dubai serves three distinct purposes - and knowing which one you need determines exactly what our mechanics check and what we include in your written report. Whether you're preparing for an <strong>RTA roadworthiness test</strong>, evaluating a <strong>used car before purchase</strong>, or simply want a full <strong>annual safety check</strong> on your current vehicle, our 50-point inspection process is built around what matters in the UAE driving environment.
                </p>
                <p style="color:#444;line-height:1.8;">
                    Dubai's combination of extreme heat, dusty road conditions, high highway speeds, and stop-and-go urban traffic creates specific wear patterns that a standard checklist written for cooler climates misses entirely. Our inspection specifically examines heat-related deterioration - AC system performance, tyre sidewall cracking from UV and heat cycling, coolant system condition, and brake fluid boiling point degradation - in addition to standard safety items.
                </p>
                <p style="color:#444;line-height:1.8;">
                    Every inspection at our <strong>222 Al Satwa Road workshop</strong> concludes with a printed vehicle health report itemising each check, the condition found, and any recommended action - categorised by urgency so you can prioritise what needs immediate attention versus what to plan for in future services.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative" style="min-height:380px;">
                    <img src="{{ asset('public/img/service1.webp') }}"
                         alt="Car Inspection Dubai - 50-Point Vehicle Check at Al Satwa Workshop"
                         class="w-100 rounded-3 shadow" style="object-fit:cover;height:400px;">
                    <div class="position-absolute bottom-0 end-0 m-3 bg-primary text-white rounded-3 px-3 py-2 shadow text-center">
                        <div class="fw-bold" style="font-size:1.4rem;line-height:1;">AED 99+</div>
                        <div style="font-size:.75rem;opacity:.9;">Inspection From</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ INSPECTION TYPES ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Types of Inspection</span>
            <h2 class="fw-bold mb-2">Which Car Inspection Do You Need in Dubai?</h2>
            <p class="text-muted">Three inspection types, each with a different purpose and scope. Choose the one that fits your situation.</p>
        </div>
        <div class="row g-4">
            @php
            $types = [
                [
                    'icon'   => 'fa-road',
                    'title'  => 'RTA Pre-Test Inspection',
                    'badge'  => 'Most Requested',
                    'color'  => 'bg-primary',
                    'desc'   => 'Designed to replicate what RTA inspectors check at authorised test centres including Tasjeel, Wasel, and Emirates Vehicle Gate. We identify and fix any issues that would cause a test failure - lights, wipers, horn, brakes, steering, tyres, emissions, and structural integrity - before you arrive at the test centre, saving you time and repeat test fees.',
                    'list'   => ['Lights: headlights, brake lights, indicators, hazards','Wipers, washers & horn function','Tyre tread depth & sidewall condition','Brake performance & handbrake','Steering play & suspension components','Emissions & exhaust integrity','Windscreen cracks in driver sightlines','Seatbelts & airbag warning lights'],
                ],
                [
                    'icon'   => 'fa-search-dollar',
                    'title'  => 'Pre-Purchase Used Car Inspection',
                    'badge'  => 'Buyer Protection',
                    'color'  => 'bg-success',
                    'desc'   => 'Before you hand over money for a used car in Dubai, our pre-purchase inspection examines every system a seller doesn\'t want you to look at. Dubai\'s used car market includes vehicles with flood damage from UAE weather events, accident repairs concealed with fresh paint, and service histories that don\'t match the odometer. We check what the classified listing doesn\'t tell you.',
                    'list'   => ['Accident damage & hidden panel repairs (paint thickness gauge)','Flood or water ingress evidence','VIN plate consistency check','Engine oil condition & sludge','Transmission fluid condition & smell','Underbody rust or structural repair welds','Full OBD-II diagnostic scan for stored fault codes','Tyre age (DOT code) - tyres over 5 yrs are unsafe regardless of tread'],
                ],
                [
                    'icon'   => 'fa-shield-alt',
                    'title'  => 'Annual Safety & Health Inspection',
                    'badge'  => 'Recommended Annually',
                    'color'  => 'bg-warning',
                    'desc'   => 'An annual inspection without a specific test deadline gives us the freedom to document your vehicle\'s full condition - identifying items heading toward failure before they leave you stranded. This is the inspection we recommend for any vehicle over 3 years old operating in Dubai\'s climate. Particularly valuable for AC system condition, battery health, and brake fluid degradation.',
                    'list'   => ['Full 50-point safety check','Battery load test & charging system','AC system pressure & performance','Coolant condition & concentration','Brake fluid boiling point test','Differential & gearbox fluid condition','All filters: air, cabin, fuel','Suspension bushes & shock absorber condition'],
                ],
            ];
            @endphp
            @foreach($types as $t)
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white border rounded-3 p-4 h-100 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center {{ $t['color'] }} rounded-circle me-3"
                             style="width:48px;height:48px;flex-shrink:0;">
                            <i class="fa {{ $t['icon'] }} text-white"></i>
                        </div>
                        <div>
                            <div class="fw-bold" style="font-size:.95rem;">{{ $t['title'] }}</div>
                            <span class="badge {{ $t['color'] }} text-white" style="font-size:.72rem;">{{ $t['badge'] }}</span>
                        </div>
                    </div>
                    <p class="text-muted mb-3" style="font-size:.875rem;line-height:1.7;">{{ $t['desc'] }}</p>
                    <ul class="list-unstyled mb-0">
                        @foreach($t['list'] as $item)
                        <li class="d-flex align-items-start gap-2 mb-2">
                            <i class="fa fa-check-circle text-primary mt-1" style="font-size:.8rem;flex-shrink:0;"></i>
                            <span style="font-size:.82rem;color:#444;">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══ 50-POINT CHECKLIST ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-5">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">What We Check</span>
                <h2 class="fw-bold mb-4">Our 50-Point Car Inspection Checklist</h2>
                <p style="color:#444;line-height:1.8;">
                    Our inspection checklist is structured around the six systems that cause the most failures and safety issues in Dubai-driven vehicles. Every item is rated <strong>Pass / Advisory / Fail</strong> - so you know exactly what's safe, what to watch, and what needs fixing.
                </p>
                <div class="bg-primary text-white rounded-3 p-4 mt-3">
                    @php $report = [
                        'Pass / Advisory / Fail rating for all 50 points',
                        'Photo documentation of any faults found',
                        'Urgency category: Immediate / Next Service / Monitor',
                        'Estimated repair cost for flagged items',
                        'Recommended next inspection date',
                    ]; @endphp
                    @foreach($report as $r)
                    <div class="d-flex align-items-start gap-2 mb-2">
                        <i class="fa fa-check mt-1" style="font-size:.8rem;flex-shrink:0;"></i>
                        <span style="font-size:.875rem;opacity:.9;">{{ $r }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7">
                @php
                $categories = [
                    ['fa-cog', 'Engine & Drivetrain (12 points)', [
                        'Engine oil level, condition & colour',
                        'Coolant level & antifreeze concentration',
                        'OBD-II fault code scan - all modules',
                        'Timing belt / chain condition (if accessible)',
                        'Oil leaks: rocker cover, sump, seals',
                        'Air filter condition',
                        'Fuel system - no visible leaks',
                        'Exhaust condition & emissions',
                        'Transmission fluid level & condition',
                        'Drive shaft boots & CV joints',
                        'Engine mounts - rubber condition',
                        'Turbo function & intercooler (if fitted)',
                    ]],
                    ['fa-circle', 'Brakes & Wheels (10 points)', [
                        'Front brake pad thickness (digital gauge)',
                        'Rear brake pad thickness',
                        'Front disc thickness & surface condition',
                        'Rear disc condition',
                        'Brake fluid boiling point test',
                        'Caliper slide pin condition',
                        'Handbrake function & travel',
                        'Tyre tread depth (all 4 + spare)',
                        'Tyre age (DOT code - UAE max 5 years)',
                        'Tyre pressure & sidewall condition',
                    ]],
                    ['fa-bolt', 'Electrics & Lights (10 points)', [
                        'Battery voltage & load test',
                        'Alternator output voltage',
                        'All exterior lights - headlights, brake, indicators',
                        'Hazard lights & reversing light',
                        'Horn function',
                        'Wiper & washer function and blade condition',
                        'Interior warning lights - any persistent faults',
                        'Air conditioning performance & vent temperature',
                        'Cabin temperature control function',
                        'Central locking & electric window function',
                    ]],
                    ['fa-car', 'Suspension & Steering (8 points)', [
                        'Steering play & rack condition',
                        'Power steering fluid & pump function',
                        'Front shock absorber condition',
                        'Rear shock absorber condition',
                        'Front lower arm bushes',
                        'Anti-roll bar links & bushes',
                        'Wheel bearing play (all four corners)',
                        'Tracking / alignment indicators',
                    ]],
                    ['fa-eye', 'Body & Safety (10 points)', [
                        'Windscreen - cracks, chips in driver sightline',
                        'All door seals & hinges',
                        'Boot/tailgate seal & operation',
                        'Seatbelts - all rows, retraction, buckle function',
                        'Airbag system warning light',
                        'Underbody inspection - rust, accident repairs',
                        'Fuel tank & filler cap seal',
                        'Panel paint thickness (accident repair detection)',
                        'Boot spare tyre & jack condition',
                        'All mirrors - condition & adjustment',
                    ]],
                ];
                @endphp
                <div class="accordion" id="checklistAccordion">
                    @foreach($categories as $ci => $cat)
                    <div class="accordion-item border rounded-3 mb-3" style="border-color:#e4e8ec!important;">
                        <h3 class="accordion-header" id="clHead{{ $ci }}">
                            <button class="accordion-button {{ $ci > 0 ? 'collapsed' : '' }} fw-semibold rounded-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#clBody{{ $ci }}"
                                    aria-expanded="{{ $ci === 0 ? 'true' : 'false' }}"
                                    style="font-size:.9rem;background:{{ $ci===0?'#f0f7ff':'#fff' }};">
                                <i class="fa {{ $cat[0] }} text-primary me-2"></i>{{ $cat[1] }}
                            </button>
                        </h3>
                        <div id="clBody{{ $ci }}" class="accordion-collapse collapse {{ $ci===0?'show':'' }}"
                             data-bs-parent="#checklistAccordion">
                            <div class="accordion-body">
                                <div class="row g-1">
                                    @foreach($cat[2] as $item)
                                    <div class="col-12">
                                        <div class="d-flex align-items-start gap-2 py-1 border-bottom">
                                            <i class="fa fa-check-circle text-primary mt-1" style="font-size:.8rem;flex-shrink:0;"></i>
                                            <span style="font-size:.85rem;color:#444;">{{ $item }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ RTA SECTION ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">RTA Inspection Dubai</span>
                <h2 class="fw-bold mb-4">Preparing Your Car for RTA Inspection in Dubai</h2>
                <p style="color:#444;line-height:1.8;">
                    RTA vehicle registration renewal in Dubai requires a passing roadworthiness test at an authorised test centre - including <strong>Tasjeel, Wasel, and Emirates Vehicle Gate</strong>. Vehicles older than 3 years from registration must pass this test annually. Failing the test requires immediate repairs and a return visit, adding cost and time.
                </p>
                <p style="color:#444;line-height:1.8;">
                    Our pre-RTA inspection replicates the actual test criteria used at Dubai test centres - checking the exact items that cause failures. Common RTA failure reasons we fix before you arrive:
                </p>
                @php $rtaFails = [
                    'Cracked windscreen in the driver\'s primary sightline',
                    'Tyre tread below 1.6mm minimum or sidewall damage',
                    'Non-functional brake lights, headlights, or indicators',
                    'Worn wiper blades leaving streaks across the screen',
                    'Excessive exhaust emissions (catalytic converter fault)',
                    'Horn failure - one of the most common test fails',
                    'Brake imbalance detected by the roller brake tester',
                    'Suspension knock audible during steering full-lock test',
                ]; @endphp
                <ul class="list-unstyled mt-3 mb-4">
                    @foreach($rtaFails as $f)
                    <li class="d-flex align-items-start gap-2 mb-2">
                        <i class="fa fa-times-circle text-danger mt-1" style="font-size:.9rem;flex-shrink:0;"></i>
                        <span style="font-size:.9rem;color:#444;">{{ $f }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="tel:0566121423" 
                class="btn btn-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center justify-content-center text-center lh-sm" 
                style="max-width: 100%; white-space: normal; word-break: break-word; font-size: calc(13px + 0.3vw);">
                    <i class="fa fa-phone-alt me-2 flex-shrink-0"></i>
                    <span>Book an Inspection - 056 612 1423</span>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="bg-white border rounded-3 p-4 shadow-sm">
                    <h4 class="fw-bold mb-4">Inspection Pricing Guide</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr><th>Inspection Type</th><th>Price (AED)</th><th>Duration</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>RTA Pre-Test Inspection</strong></td>
                                    <td>AED 99 – 150</td>
                                    <td>45–60 min</td>
                                </tr>
                                <tr>
                                    <td><strong>Pre-Purchase Used Car Check</strong></td>
                                    <td>AED 150 – 250</td>
                                    <td>60–90 min</td>
                                </tr>
                                <tr>
                                    <td><strong>Annual Safety Inspection</strong></td>
                                    <td>AED 120 – 180</td>
                                    <td>60–75 min</td>
                                </tr>
                                <tr>
                                    <td>OBD-II Diagnostic Scan (add-on)</td>
                                    <td>AED 50 – 80</td>
                                    <td>20–30 min</td>
                                </tr>
                                <tr>
                                    <td>Paint Thickness Test (add-on)</td>
                                    <td>AED 50</td>
                                    <td>15 min</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-muted mt-2 mb-0" style="font-size:.8rem;">
                        <i class="fa fa-info-circle text-primary me-1"></i>
                        Inspection fee is separate from any repair costs. Written report provided for all inspection types. Walk-ins welcome at 222 Al Satwa Road.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ WHY CHOOSE US ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Why Choose Us</span>
            <h2 class="fw-bold mb-2">Why Dubai Drivers Trust Our Inspection Service</h2>
        </div>
        <div class="row g-4">
            @php
            $reasons = [
                ['fa-file-alt',       'Written Report, Not Just a Verbal',     'You receive a printed report for every inspection - itemised by system, rated Pass/Advisory/Fail, with photos of any issues found. Not a quick look-over and a verbal "seems fine."'],
                ['fa-search',         'Independent - No Repair Conflict',       'Our inspection mechanics are separate from our repair team. You\'ll never receive an inspection report inflated with unnecessary repairs. We find what\'s wrong and tell you the truth.'],
                ['fa-road',           'Dubai Climate Specific',                 'Our checklist includes UAE-specific items competitors ignore - tyre DOT age, brake fluid boiling point in heat, AC performance, UV-damaged rubber seals, and coolant concentration for 50°C+ engine bay temperatures.'],
                ['fa-certificate',    'Certified Technicians Only',             'Every inspection is performed by a certified mechanic - not an apprentice with a clipboard. Your 12-year-old son can\'t drive the car yet, but he can spot more than some "inspectors" we\'ve seen at other workshops.'],
                ['fa-camera',         'Photo Documentation Included',           'Suspect damage or a failed component is photographed and attached to your report. You\'ll have visual evidence to negotiate on a used car purchase or understand what the issue looks like before authorising any repair.'],
                ['fa-tools',          'Fix-It Service Available Same Day',      'If the inspection identifies items needing immediate repair - brake pads, bulbs, tyres - our mechanics can often rectify them the same visit at our Al Satwa workshop, saving you a return trip.'],
            ];
            @endphp
            @foreach($reasons as $r)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex h-100 border rounded-3 p-4 bg-white">
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
        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">FAQ</span>
            <h2 class="fw-bold mb-2">Car Inspection Dubai - Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="inspectFaq">
                    @php
                    $faqs = [
                        [
                            'How do I prepare my car for RTA inspection in Dubai?',
                            'Before visiting an RTA test centre, check that all lights are working (headlights, brake lights, indicators, hazards, reverse light), your horn functions, wipers clear the screen properly, all tyres have adequate tread and no visible sidewall damage, and no warning lights are illuminated on the dashboard. Our pre-RTA inspection covers all of these and more - identifying anything that would cause a test failure so you can fix it before the official test, saving you the cost and inconvenience of a re-test.',
                        ],
                        [
                            'How much does car inspection cost in Dubai?',
                            'Our inspection prices range from AED 99 for an RTA pre-test check to AED 250 for a comprehensive pre-purchase inspection including OBD scan and paint thickness test. The inspection fee is charged separately from any repair costs identified. We never combine inspection and repair charges - you see exactly what the inspection cost and what the repairs cost.',
                        ],
                        [
                            'Can you do a pre-purchase inspection on a used car I\'m buying in Dubai?',
                            'Yes - this is one of our most valuable services. Bring the used car to our Al Satwa workshop before completing any purchase. We inspect all 50 points including a paint thickness test (detects hidden accident repairs), OBD-II scan for stored fault codes the seller hasn\'t cleared, tyre DOT age check, and full mechanical assessment. Many customers have avoided purchasing seriously problematic vehicles based on our pre-purchase reports.',
                        ],
                        [
                            'Does your inspection guarantee the car will pass the RTA test?',
                            'Our pre-RTA inspection identifies every item we can assess on our ramp and with our diagnostic equipment that matches RTA test criteria. If we pass all items and the car still fails at the test centre, we will re-inspect the car and address whatever the inspectors flagged at no additional inspection charge. We cannot guarantee the outcome of a third-party test, but our process is designed to eliminate all foreseeable failure reasons.',
                        ],
                        [
                            'What is the RTA car inspection age rule in Dubai?',
                            'In Dubai, vehicles must pass an annual RTA roadworthiness test from their third year of registration. Newer vehicles (within the first 3 years from registration) are exempt. The test must be passed before registering the vehicle each year - failing means you cannot legally renew registration until the fault is rectified and a re-test passed.',
                        ],
                        [
                            'How long does a car inspection take?',
                            'An RTA pre-test inspection takes 45–60 minutes. A pre-purchase used car inspection, which includes OBD scanning and paint thickness testing, takes 60–90 minutes. An annual safety inspection takes 60–75 minutes. We recommend booking in advance to secure a convenient time slot, though walk-ins are welcome subject to availability.',
                        ],
                        [
                            'Can old tyres fail an RTA inspection even if the tread is fine?',
                            'Yes. UAE regulations and RTA standards consider tyres older than 5 years from the DOT manufacture date to be unsafe - regardless of tread depth. The DOT code on the tyre sidewall contains a 4-digit week/year code. Our inspection checks the age of all four tyres and flags any that exceed this limit. This is one of the most commonly missed issues on pre-purchase inspections.',
                        ],
                    ];
                    @endphp
                    @foreach($faqs as $i => $faq)
                    <div class="accordion-item border rounded-3 mb-3" style="border-color:#e4e8ec!important;">
                        <h3 class="accordion-header" id="inHead{{ $i }}">
                            <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }} fw-semibold rounded-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#inCollapse{{ $i }}"
                                    aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                                    style="font-size:.95rem;background:{{ $i===0 ? '#f0f7ff' : '#fff' }};">
                                {{ $faq[0] }}
                            </button>
                        </h3>
                        <div id="inCollapse{{ $i }}"
                             class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                             data-bs-parent="#inspectFaq">
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
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="fw-bold">Services Commonly Needed After Inspection</h3>
        </div>
        <div class="row g-3 justify-content-center">
            @php
            $related = [
                ['fa-circle',         'Brake Pad Replacement Dubai',    'Fix brake faults found in inspection',    'car-maintenance-dubai'],
                ['fa-dot-circle',     'Tyre Replacement Dubai',         'Replace aged or worn tyres',              'tyre-replacement-dubai'],
                ['fa-bolt',           'Mobile Car Repair Dubai',        'Onsite Car Repair Service',               'mobile-car-repair-dubai'],
                ['fa-laptop-code',    'Car Diagnostic Test Dubai',      'Full OBD-II scan for fault codes',        'roadside-assistance-dubai'],
            ];
            @endphp
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
                <h2 class="fw-bold text-white mb-2">Book Your Car Inspection in Dubai Today.</h2>
                <p class="text-white-50 mb-0">
                    Open 7AM–10PM daily &bull; 222 Al Satwa Rd &bull; Walk-ins welcome &bull; Written report provided
                </p>
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
      "@id": "https://dubaicarrepairservice.com/car-inspection-dubai#service",
      "name": "Car Inspection Dubai",
      "url": "https://dubaicarrepairservice.com/car-inspection-dubai",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://dubaicarrepairservice.com/car-inspection-dubai"
      },
      "serviceType": "Vehicle Inspection",
      "description": "Professional vehicle inspection services in Dubai including pre-purchase inspections, RTA pre-test inspections, annual safety inspections, diagnostic checks and detailed written inspection reports for all vehicle makes and models.",
      "provider": {
        "@id": "https://dubaicarrepairservice.com/#localbusiness"
      },
      "areaServed": {
        "@type": "City",
        "name": "Dubai"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "AED",
        "availability": "https://schema.org/InStock",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "99",
          "maxPrice": "250",
          "priceCurrency": "AED"
        }
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://dubaicarrepairservice.com/car-inspection-dubai#breadcrumb",
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
          "name": "Car Inspection Dubai",
          "item": "https://dubaicarrepairservice.com/car-inspection-dubai"
        }
      ]
    },

    {
      "@type": "FAQPage",
      "@id": "https://dubaicarrepairservice.com/car-inspection-dubai#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "How do I prepare my car for RTA inspection in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Before an RTA inspection, vehicle owners should check lights, tyres, wipers, mirrors, horn operation and dashboard warning indicators. A pre-inspection can help identify potential issues before the official test."
          }
        },

        {
          "@type": "Question",
          "name": "How much does car inspection cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Inspection costs vary depending on the inspection type, vehicle condition and reporting requirements. Pre-purchase inspections and comprehensive safety inspections typically involve more detailed evaluations than basic inspections."
          }
        },

        {
          "@type": "Question",
          "name": "What is the RTA car inspection age rule in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Vehicles registered in Dubai are generally required to undergo periodic roadworthiness inspections according to RTA regulations before registration renewal. Requirements may vary depending on vehicle type and age."
          }
        },

        {
          "@type": "Question",
          "name": "Can old tyres fail an RTA inspection even if tread is fine?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Tyre condition assessments consider multiple factors including age, sidewall condition, damage, cracking and manufacturer recommendations in addition to tread depth."
          }
        }

      ]
    }

  ]
}
</script>
@endpush

@endsection