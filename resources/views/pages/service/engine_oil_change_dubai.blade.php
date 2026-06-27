@extends('layout.masterhome')
@php
    $meta_title       = 'Engine Oil Change Dubai | All Grades | From AED 89 | 056 612 1423';
    $meta_description = 'Fast engine oil change in Dubai at 222 Al Satwa Rd. Synthetic, semi-synthetic & mineral oils. All makes. Genuine filters. Mobile service available. Call 056 612 1423.';
    $meta_keywords    = 'engine oil change dubai, oil change dubai, car oil change dubai, oil change near me, synthetic oil change dubai, engine oil service dubai';
@endphp
@section('content')

{{-- HERO --}}
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
     style="background:linear-gradient(135deg,#001516 0%,#002a2a 100%);min-height:320px;display:flex;align-items:center;">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <p class="text-white-50 mb-2" style="font-size:.8rem;letter-spacing:.12em;text-transform:uppercase;font-weight:600;">
                    Al Satwa, Dubai &bull; All Oil Grades &bull; Genuine Filters &bull; All Makes
                </p>
                <h1 class="display-4 text-white fw-bold mb-3">
                    Engine Oil Change Dubai - Quick, Quality, Done Right
                </h1>
                <p class="text-white mb-4" style="font-size:1.05rem;opacity:.85;max-width:640px;margin:0 auto;">
                    The most important routine service for your engine - done with the correct grade oil for your car and Dubai climate. Under 30 minutes at our Al Satwa workshop or at your location.
                </p>
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <a href="tel:0566121423" class="btn btn-primary rounded-pill px-4 py-3 fw-semibold"><i class="fa fa-phone-alt me-2"></i>Call 056 612 1423</a>
                    <a href="https://wa.me/971566121423" class="btn btn-success rounded-pill px-4 py-3 fw-semibold"><i class="fab fa-whatsapp me-2"></i>WhatsApp Us</a>
                </div>
                <nav aria-label="breadcrumb" class="mt-4">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('car-repair-dubai') }}" class="text-white-50 text-decoration-none">Services</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Engine Oil Change Dubai</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

{{-- INTRO --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3 text-nowrap" 
                      style="font-size: .8rem; letter-spacing: .06em; text-transform: uppercase; border-color: #001516 !important;">
                    Why Oil Changes Matter More in Dubai
                </span>
                <h2 class="fw-bold mb-4">Engine Oil Change Dubai - What UAE Heat Does to Engine Oil</h2>
                <p style="color:#444;line-height:1.8;">Engine oil change in Dubai is more time-sensitive than your owner manual suggests. Manufacturers calculate service intervals at around 20°C ambient temperature. Dubai sustains 45°C+, meaning your engine runs <strong>15-20°C hotter</strong> than those tests assume - oil oxidises, thins, and loses its protective film strength far faster.</p>
                <p style="color:#444;line-height:1.8;">The result is accelerated metal-on-metal wear in the crankshaft, camshaft, and cylinder bores. <strong>We recommend reducing your manufacturer interval by 20-25% in Dubai</strong>. If your manual says every 10,000 km, change at 7,500-8,000 km. If it says every 15,000 km, change at 11,000-12,000 km.</p>
                <p style="color:#444;line-height:1.8;">We verify the correct oil grade for your vehicle - <strong>0W-20 for a modern Toyota hybrid</strong>, <strong>5W-30 for a European saloon</strong>, <strong>10W-40 for an older Nissan Patrol</strong> - and pair it with a genuine OEM-quality filter every single time.</p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative" style="min-height:380px;">
                    <img src="{{ asset('public/img/service4.webp') }}" alt="Engine Oil Change Dubai - Al Satwa Workshop" class="w-100 rounded-3 shadow" style="object-fit:cover;height:400px;">
                    <div class="position-absolute bottom-0 end-0 m-3 bg-primary text-white rounded-3 px-3 py-2 shadow text-center">
                        <div class="fw-bold" style="font-size:1.4rem;line-height:1;">AED 89+</div>
                        <div style="font-size:.75rem;opacity:.9;">Oil Change From</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- OIL TYPES --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:620px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3" style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Oil Types Explained</span>
            <h2 class="fw-bold mb-2">Which Engine Oil Does Your Car Need in Dubai?</h2>
            <p class="text-muted">Using the wrong oil type or viscosity causes premature engine wear. Here is what we use and why.</p>
        </div>
        <div class="row g-4">
            @php $oils=[
                ['fa-award','bg-primary','Fully Synthetic Oil','AED 220-380','Best protection for sustained Dubai heat. Low-viscosity grades (0W-20, 5W-30) flow immediately on cold start. Recommended for all modern engines, turbocharged engines, direct-injection, and hybrids. Resists oxidation and viscosity breakdown at high temperatures far better than any alternative.','Toyota Corolla 2019+, Camry, Honda Civic 2017+, BMW 3/5-Series, Mercedes C/E-Class, all turbo engines.'],
                ['fa-flask','bg-secondary','Semi-Synthetic Oil','AED 140-220','Blend of synthetic and mineral base stocks. Good all-round protection at a mid-range price. Suitable for older engines, high-mileage vehicles, and cars where the manufacturer specifies semi-synthetic. More heat-stable than pure mineral but without full synthetic oxidation resistance. Common grades: 10W-40, 15W-40.','Nissan Sunny, Mitsubishi Lancer, Toyota Corolla pre-2015, Hyundai Accent, Kia Rio, older Chevrolet models.'],
                ['fa-oil-can','bg-warning','Conventional Mineral Oil','AED 89-140','Traditional petroleum-based oil for older, high-mileage engines with conventional tolerances. Not recommended for post-2010 engines or any VVT system. Breaks down faster in Dubai heat - requires the shortest change intervals. Common grades: 20W-50, 15W-40.','Older Nissan Patrol diesel, older Land Cruiser 80-series, classic vehicles, high-mileage older engines only.'],
            ]; @endphp
            
            @foreach($oils as $o)
            <div class="col-lg-4">
                <div class="bg-white border rounded-3 p-4 h-100 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center {{ $o[1] }} rounded-circle me-3" style="width:46px;height:46px;flex-shrink:0;">
                            <i class="fa {{ $o[0] }} text-white"></i>
                        </div>
                        <div>
                            <div class="fw-bold" style="font-size:.95rem;">{{ $o[2] }}</div>
                            <span class="text-primary fw-semibold" style="font-size:.82rem;">{{ $o[3] }}</span>
                        </div>
                    </div>
                    <p class="text-muted mb-3" style="font-size:.875rem;line-height:1.7;">{{ $o[4] }}</p>
                    <div class="bg-light rounded-2 p-2">
                        <div class="fw-semibold mb-1" style="font-size:.78rem;color:#001516;">Common Vehicles:</div>
                        <div class="text-muted" style="font-size:.78rem;line-height:1.5;">{{ $o[5] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div> {{-- FIXED: Added missing closing row div tag --}}
    </div> {{-- FIXED: Added missing closing container div tag --}}
</div> {{-- FIXED: Added missing closing container-fluid div tag --}}

{{-- Grade Reference Table --}}
<div class="container-fluid py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="bg-white border rounded-3 p-3 p-md-4 shadow-sm">
                    <h4 class="fw-bold mb-4 text-center"><i class="fa fa-table text-primary me-2"></i>Oil Grade Quick Reference - Common Dubai Vehicles</h4>
                    
                    <!-- Custom Mobile Layout Fix Styling -->
                    <style>
                        @media (max-width: 767.98px) {
                            .responsive-card-table thead {
                                display: none;
                            }
                            .responsive-card-table tbody, 
                            .responsive-card-table tr, 
                            .responsive-card-table td {
                                display: block;
                                width: 100%;
                            }
                            .responsive-card-table tr {
                                margin-bottom: 1rem;
                                border: 1px solid #dee2e6;
                                border-radius: 0.5rem;
                                padding: 0.5rem;
                                background-color: #f8f9fa;
                            }
                            .responsive-card-table td {
                                text-align: left !important;
                                border: none !important;
                                padding: 0.4rem 0.75rem !important;
                            }
                            .responsive-card-table td::before {
                                content: attr(data-label);
                                display: block;
                                font-weight: 700;
                                font-size: 0.75rem;
                                text-transform: uppercase;
                                color: #6c757d;
                                margin-bottom: 0.15rem;
                            }
                        }
                    </style>

                    <div class="table-responsive" style="overflow-x: visible;">
                        <table class="table table-bordered table-hover align-middle responsive-card-table mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th style="width: 15%;">Oil Grade</th>
                                    <th style="width: 50%;">Vehicle Examples</th>
                                    <th style="width: 15%;">Type</th>
                                    <th style="width: 20%;" class="text-center">UAE Interval</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $grades=[
                                    ['0W-20','Toyota Corolla 2019+, Camry 2018+, Yaris 2020+, Honda Civic 2017+','Fully Synthetic','7,500 km'],
                                    ['5W-30','BMW 3/5-Series, Mercedes C/E-Class, Nissan Patrol VQ56, Ford F-150','Fully Synthetic','8,000 km'],
                                    ['5W-40','Audi A4/A6, VW Passat, Skoda Octavia, turbodiesel vehicles','Fully Synthetic','8,000 km'],
                                    ['0W-40','BMW M-Series, AMG Mercedes, Porsche Cayenne','Fully Synthetic','7,500 km'],
                                    ['10W-40','Nissan Sunny, Mitsubishi Lancer, Toyota Corolla pre-2015','Semi-Synthetic','6,000 km'],
                                    ['20W-50','Older Nissan Patrol diesel, older Land Cruiser, high-mileage engines','Mineral','5,000 km'],
                                ]; @endphp
                                @foreach($grades as $g)
                                <tr>
                                    <td data-label="Oil Grade"><strong class="text-primary">{{ $g[0] }}</strong></td>
                                    <td data-label="Vehicle Examples" style="font-size:.875rem;">{{ $g[1] }}</td>
                                    <td data-label="Type"><span class="badge bg-light text-dark border">{{ $g[2] }}</span></td>
                                    <td data-label="UAE Interval" class="text-md-center fw-semibold">{{ $g[3] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <p class="text-muted mt-3 mb-0" style="font-size:.8rem;"><i class="fa fa-info-circle text-primary me-1"></i>UAE intervals are 20-25% shorter than manufacturer standard recommendations to account for Dubai's sustained heat.</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- PROCESS + PRICING --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3" style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Our Process</span>
                <h2 class="fw-bold mb-4">How We Perform an Engine Oil Change in Dubai</h2>

                @php 
                $steps = [
                    ["1", "Vehicle Spec Verification", "We look up your exact oil grade, viscosity, fill capacity, and any manufacturer approvals (BMW Longlife-04, Mercedes 229.5, VW 504.00) before selecting oil. No assumptions."],
                    ["2", "Warm-Up and Drain", "We run the engine briefly - warm oil drains completely, taking suspended metal particles and sludge with it. Old oil fully evacuated."],
                    ["3", "Old Oil Inspection", "We inspect drained oil for metal particles (engine wear), milky appearance (coolant contamination), or unusual odour (fuel dilution). Problems you'd never know about without this step."],
                    ["4", "Genuine Filter Fitted", "OEM-quality filter fitted with lubricated seal ring, torqued correctly. A cheap filter bypasses under pressure - rendering your new oil ineffective within weeks."],
                    ["5", "Drain Plug Check", "Drain plug thread and sealing washer inspected. Deformed washers replaced. A cross-threaded plug is the most common cause of oil leaks after budget services."],
                    ["6", "Fill, Verify, and Service Sticker", "Fresh oil filled to correct volume. Level verified on dipstick. Engine run to check for leaks. Service sticker applied with oil grade, date, and recommended UAE next change interval."]
                ]; 
                @endphp

                @foreach($steps as $s)
                <div class="d-flex mb-3 pb-3 border-bottom">
                    <div class="flex-shrink-0 me-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle text-white fw-bold" style="width:34px;height:34px;font-size:.85rem;">{{ $s[0] }}</div>
                    </div>
                    <div>
                        <div class="fw-semibold mb-1" style="font-size:.9rem;">{{ $s[1] }}</div>
                        <p class="text-muted mb-0" style="font-size:.84rem;line-height:1.6;">{{ $s[2] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3" style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Pricing Guide</span>
                <h2 class="fw-bold mb-4">Engine Oil Change Prices in Dubai</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover bg-white">
                        <thead class="table-dark">
                            <tr>
                                <th>Service</th>
                                <th>Price (AED)</th>
                                <th>Includes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td><strong>Mineral Oil Change</strong></td><td>AED 89-140</td><td>Oil + OEM filter + labour</td></tr>
                            <tr><td><strong>Semi-Synthetic Oil Change</strong></td><td>AED 140-220</td><td>Oil + OEM filter + labour</td></tr>
                            <tr><td><strong>Fully Synthetic Oil Change</strong></td><td>AED 220-380</td><td>Oil + OEM filter + labour</td></tr>
                            <tr><td>Drain Plug Washer</td><td>AED 5-20</td><td>Washer + fitting</td></tr>
                            <tr><td>Cabin Air Filter (add-on)</td><td>AED 40-100</td><td>Filter + fitting</td></tr>
                            <tr><td>Engine Air Filter (add-on)</td><td>AED 30-80</td><td>Filter + fitting</td></tr>
                            <tr><td>Mobile Oil Change (add-on)</td><td>+ AED 30</td><td>Call-out to your location</td></tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="bg-primary text-white rounded-3 p-4 mt-4">
                    <h5 class="fw-bold text-white mb-3"><i class="fa fa-thermometer-half text-white me-2"></i>Dubai Oil Change Interval Guide</h5>
                    @php $ivals=[['Mineral Oil','Every 5,000 km or 3 months'],['Semi-Synthetic','Every 6,000 km or 4 months'],['Fully Synthetic','Every 7,500-8,000 km or 6 months'],['Turbocharged Engines','Every 6,000-7,500 km regardless of oil type'],['High-Mileage Vehicles','Every 5,000 km regardless of oil type']]; @endphp
                    @foreach($ivals as $iv)
                    <div class="row align-items-center py-2 border-bottom border-white border-opacity-25 g-2">
                        <div class="col-12 col-md-5">
                            <span style="font-size:.85rem;opacity:.9;">{{ $iv[0] }}</span>
                        </div>
                        <div class="col-12 col-md-7 text-md-end">
                            <span class="fw-bold" style="font-size:.85rem;">{{ $iv[1] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- WHY CHOOSE US --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3" style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Why Choose Us</span>
            <h2 class="fw-bold mb-2">Why Dubai Drivers Choose Us for Oil Changes</h2>
        </div>
        <div class="row g-4">
            @php 
            $reasons = [
                ["fa-award", "Correct Spec Oil Always", "We look up your manufacturer specification from the database - not from memory. BMW Longlife-04, Mercedes 229.5, Dexos - we use the approved grade every time."],
                ["fa-filter", "Genuine OEM Filters", "Cheap filters bypass under pressure, allowing unfiltered oil to circulate. Every filter we fit meets or exceeds OEM filtration efficiency and burst pressure rating."],
                ["fa-search", "Old Oil Inspection Included", "We inspect drained oil for coolant contamination, fuel dilution, and abnormal metal content. Problems a quick-service centre ignores or doesn't mention."],
                ["fa-receipt", "Price Confirmed Before We Start", "You know the exact cost before we drain a single drop. The price on your quote is the price on your invoice - no surprises."],
                ["fa-car", "Mobile Service Across Dubai", "We perform oil changes at your home or office across all Dubai areas. Small call-out fee applies. Call 056 612 1423 to book."],
                ["fa-clock", "Under 30 Minutes", "A standard oil and filter change at our Al Satwa workshop takes 20-30 minutes - not the 90-minute waits at dealer service centres."]
            ]; 
            @endphp
            @foreach($reasons as $r)
            <div class="col-md-6 col-lg-4">
                <div class="d-flex h-100 border rounded-3 p-4 bg-white shadow-sm">
                    <div class="flex-shrink-0 me-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle" style="width:46px;height:46px;">
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

{{-- FAQ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3" style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">FAQ</span>
            <h2 class="fw-bold mb-2">Engine Oil Change Dubai - Questions Answered</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="oilFaqNew">
                    @php 
                    $faqs = [
                        [
                            "How often should I change engine oil in Dubai?",
                            "Reduce your manufacturer's interval by 20-25% in Dubai. Fully synthetic: every 7,500-8,000 km. Semi-synthetic: every 6,000 km. Mineral: every 5,000 km. Dubai's 45°C+ heat causes oil to degrade significantly faster."
                        ],
                        [
                            "What is the best engine oil for cars in Dubai?",
                            "Fully synthetic oil with the correct viscosity for your engine. 0W-20 for modern Toyota, Honda, and Lexus engines. 5W-30 for BMW, Mercedes, and Nissan VQ engines. 5W-40 for turbodiesel variants or high-mileage cars."
                        ],
                        [
                            "Can you do an oil change at my home or office in Dubai?",
                            "Yes - our mobile service covers all Dubai areas. We bring the correct oil, OEM filter, and all equipment. A small call-out fee is added to the standard price. Call 056 612 1423 to book."
                        ],
                        [
                            "Is fully synthetic oil worth the extra cost in Dubai?",
                            "Yes. Fully synthetic costs AED 80-160 more per change but extends your interval by 50-60% and provides significantly better protection at high temperatures. For turbocharged engines, it is mandatory."
                        ],
                        [
                            "What happens if I use the wrong oil grade in Dubai?",
                            "Using too-thick oil in a modern engine with tight VVT oil galleries causes sluggish start-up and starves components of lubrication. Too-thin oil in a high-mileage engine with worn components can cause rapid oil thinning under severe summer ambient air heat conditions."
                        ],
                        [
                            "Why is my engine using oil between changes in Dubai?",
                            "Normal consumption is up to 500ml per 1,000 km for many modern engines. Beyond this indicates worn piston rings (blue smoke at throttle), valve stem seals (blue smoke at cold start), or a failing PCV system."
                        ]
                    ]; 
                    @endphp
                    @foreach($faqs as $i => $faq)
                    <div class="accordion-item border rounded-3 mb-3" style="border-color:#e4e8ec!important;">
                        <h3 class="accordion-header" id="oilNewHead{{ $i }}">
                            <button class="accordion-button {{ $i>0?'collapsed':'' }} fw-semibold rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#oilNewCollapse{{ $i }}" aria-expanded="{{ $i===0?'true':'false' }}" style="font-size:.95rem;background:{{ $i===0?'#f0f7ff':'#fff' }};">
                                {{ $faq[0] }}
                            </button>
                        </h3>
                        <div id="oilNewCollapse{{ $i }}" class="accordion-collapse collapse {{ $i===0?'show':'' }}" data-bs-parent="#oilFaqNew">
                            <div class="accordion-body text-muted" style="font-size:.9rem;line-height:1.8;">{{ $faq[1] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- RELATED SERVICES --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="fw-bold">Related Services</h3>
        </div>
        <div class="row g-3 justify-content-center">
        @php
        $related = [
            ['fa-cog',    'Car Engine Service Dubai', 'Full engine repair & diagnostics', 'car-engine-service-dubai'],
            ['fa-tools',  'Car Maintenance Dubai',    'Complete scheduled service packages', 'car-maintenance-dubai'],
            ['fa-search', 'Car Inspection Dubai',      'Full 50-point vehicle health check',  'car-inspection-dubai'],
            ['fa-car',    'Mobile Car Repair Dubai',  'Oil change at your location',         'mobile-car-repair-dubai']
        ];
        @endphp

            @foreach($related as $r)
            <div class="col-md-6 col-lg-3">
                <a href="{{ route($r[3]) }}" class="text-decoration-none">
                    <div class="bg-white border rounded-3 p-4 h-100 text-center service-card-hover">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mx-auto mb-3" style="width:48px;height:48px;">
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

<style>
.service-card-hover {
    transition: box-shadow 0.2s ease-in-out;
}
.service-card-hover:hover {
    box-shadow: 0 4px 16px rgba(0,0,0,.1) !important;
}
</style>

{{-- CTA --}}
<div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s" style="background:linear-gradient(135deg,#001516 0%,#002a2a 100%);">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 text-center text-lg-start">
                <h2 class="fw-bold text-white mb-2">Book Your Oil Change Today - Done in Under 30 Minutes.</h2>
                <p class="text-white-50 mb-0">Open 7AM-10PM daily &bull; 222 Al Satwa Rd &bull; Mobile service available across Dubai</p>
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
      "@id": "https://dubaicarrepairservice.com/engine-oil-change-dubai#service",
      "name": "Engine Oil Change Dubai",
      "url": "https://dubaicarrepairservice.com/engine-oil-change-dubai",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://dubaicarrepairservice.com/engine-oil-change-dubai"
      },
      "serviceType": "Engine Oil Change Service",
      "description": "Professional engine oil change in Dubai including fully synthetic, semi-synthetic and mineral oil replacement with OEM filters. Fast service for all vehicle makes and models using manufacturer-recommended oil grades.",
      "provider": {
        "@id": "https://dubaicarrepairservice.com/#localbusiness"
      },
      "areaServed": {
        "@type": "City",
        "name": "Dubai"
      },
      "offers": {
        "@type": "AggregateOffer",
        "lowPrice": 89,
        "highPrice": 380,
        "priceCurrency": "AED",
        "availability": "https://schema.org/InStock"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://dubaicarrepairservice.com/engine-oil-change-dubai#breadcrumb",
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
          "name": "Engine Oil Change Dubai",
          "item": "https://dubaicarrepairservice.com/engine-oil-change-dubai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://dubaicarrepairservice.com/engine-oil-change-dubai#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How often should I change engine oil in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Oil change intervals depend on oil type, driving conditions and manufacturer recommendations. Due to Dubai's hot climate and driving conditions, more frequent oil changes are generally recommended than in cooler regions."
          }
        },
        {
          "@type": "Question",
          "name": "What is the best engine oil for Dubai heat?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The best engine oil depends on your vehicle manufacturer specifications. Fully synthetic oils are generally preferred for better heat resistance and engine protection in hot climates like Dubai."
          }
        },
        {
          "@type": "Question",
          "name": "How much does an oil change cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Oil change costs vary depending on oil type, vehicle requirements and oil capacity. Fully synthetic oil changes are generally more expensive than mineral or semi-synthetic options."
          }
        }
      ]
    }
  ]
}
</script>
@endpush
@endsection