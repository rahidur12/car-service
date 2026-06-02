@extends('layout.masterhome')
@php
    $meta_title       = 'Car Engine Service Dubai | Repair & Overhaul | 056 612 1423';
    $meta_description = 'Trusted car engine service in Dubai. Tune-ups to full overhauls - certified mechanics diagnose & repair all engine faults. All makes. Call 056 612 1423.';
    $meta_keywords    = 'car engine service dubai, engine repair dubai, engine overhaul dubai, engine tune up dubai, engine diagnostic dubai';
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
                    Al Satwa, Dubai &bull; Petrol, Diesel &amp; Hybrid &bull; All Makes &amp; Models
                </p>
                <h1 class="display-4 text-white fw-bold mb-3">
                    Car Engine Service Dubai - Expert Repair &amp; Overhaul
                </h1>
                <p class="text-white mb-4"
                   style="font-size:1.05rem;opacity:.85;max-width:640px;margin:0 auto;">
                    From minor tune-ups to complete engine overhauls - our certified mechanics use OBD-II diagnostics and genuine parts to restore full engine performance across all car makes operating in Dubai's extreme climate.
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
                        <li class="breadcrumb-item text-white active" aria-current="page">Car Engine Service Dubai</li>
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
                <h2 class="fw-bold mb-4">Car Engine Service in Dubai - What Dubai's Heat Does to Your Engine</h2>
                <p style="color:#444;line-height:1.8;">
                    Car engine service in Dubai encompasses a wider range of issues than most drivers expect - because an engine operating continuously in 45°C+ ambient temperatures faces stress that European or North American service schedules simply don't account for. Cooling systems work at maximum capacity for months at a time, oil degrades faster, rubber hoses and gaskets age in half the time, and turbocharged engines face heat-soak conditions that accelerate bearing wear significantly.
                </p>
                <p style="color:#444;line-height:1.8;">
                    At Dubai Car Repair Service, every engine repair begins with a <strong>full OBD-II diagnostic scan</strong> covering all modules - engine, transmission, ABS, and body electrics - so we know exactly what fault codes are stored and what the live data reveals before a single component is removed. We pair this with a <strong>physical inspection</strong> covering oil condition, coolant level and concentration, belt condition, and any visible leaks.
                </p>
                <p style="color:#444;line-height:1.8;">
                    Whether your car needs a simple <strong>spark plug and filter service</strong>, a <strong>timing belt replacement</strong>, a <strong>head gasket repair</strong>, or a <strong>full engine rebuild</strong>, our team at 222 Al Satwa Road has the equipment, parts sourcing, and experience across <strong>Japanese, European, American, and Korean engines</strong> to get it done correctly.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative" style="min-height:380px;">
                    <img src="{{ asset('public/img/service2.webp') }}"
                         alt="Car Engine Service Dubai - Certified Mechanic at Al Satwa Workshop"
                         class="w-100 rounded-3 shadow" style="object-fit:cover;height:400px;">
                    <div class="position-absolute bottom-0 end-0 m-3 bg-primary text-white rounded-3 px-3 py-2 shadow text-center">
                        <div class="fw-bold" style="font-size:1.4rem;line-height:1;">AED 150+</div>
                        <div style="font-size:.75rem;opacity:.9;">Engine Service From</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ ENGINE SERVICE TYPES ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Engine Services</span>
            <h2 class="fw-bold mb-2">Engine Services We Provide in Dubai</h2>
            <p class="text-muted">From a basic tune-up to a complete engine rebuild - every service starts with diagnosis.</p>
        </div>
        <div class="row g-4">
            @php
            $services = [
                [
                    'icon'  => 'fa-search',
                    'title' => 'Engine Tune-Up',
                    'price' => 'AED 150 – 400',
                    'desc'  => 'Spark plug replacement, air filter, fuel filter, PCV valve, and ignition system check. Restores throttle response, improves fuel economy, and eliminates misfires. Recommended every 30,000–60,000 km depending on plug type.',
                    'tags'  => ['Spark Plugs', 'Air Filter', 'Fuel Filter', 'Ignition System'],
                ],
                [
                    'icon'  => 'fa-clock',
                    'title' => 'Timing Belt / Chain Replacement',
                    'price' => 'AED 600 – 1,800',
                    'desc'  => 'The timing belt is the single most catastrophic failure risk on any interference engine. In Dubai\'s heat, rubber timing belts should be replaced at 80,000 km rather than the 100,000 km many manuals recommend. Belt failure causes bent valves, broken pistons, and complete engine destruction.',
                    'tags'  => ['Timing Belt', 'Water Pump', 'Tensioner', 'Idler Pulley'],
                ],
                [
                    'icon'  => 'fa-tint',
                    'title' => 'Head Gasket Repair',
                    'price' => 'AED 1,200 – 2,800',
                    'desc'  => 'Head gasket failure allows coolant into the combustion chamber or oil passages, causing white exhaust smoke, overheating, and oil contamination. Common in overheated engines - often triggered by a failed thermostat or blocked radiator. We pressure-test the cooling system and inspect the head for warping before and after replacement.',
                    'tags'  => ['Head Gasket', 'Head Skim', 'Pressure Test', 'Coolant Flush'],
                ],
                [
                    'icon'  => 'fa-oil-can',
                    'title' => 'Engine Oil Leak Repair',
                    'price' => 'AED 120 – 800',
                    'desc'  => 'Oil leaks in Dubai\'s heat evaporate quickly, masking their source until the engine is dangerously low. We identify the exact source - rocker cover gasket, camshaft seal, crankshaft seal, or sump gasket - and repair with correct-specification gaskets and sealants.',
                    'tags'  => ['Valve Cover', 'Cam Seals', 'Crank Seal', 'Sump Gasket'],
                ],
                [
                    'icon'  => 'fa-wind',
                    'title' => 'Cooling System Service',
                    'price' => 'AED 200 – 600',
                    'desc'  => 'Coolant flush and fill, thermostat replacement, radiator inspection, hose condition check, and water pump function test. Dubai\'s heat means cooling systems should be serviced every 2 years - not the 4–5 years recommended in temperate climates. Coolant that looks clean can still have a degraded pH causing internal corrosion.',
                    'tags'  => ['Coolant Flush', 'Thermostat', 'Radiator', 'Water Pump'],
                ],
                [
                    'icon'  => 'fa-tools',
                    'title' => 'Engine Overhaul / Rebuild',
                    'price' => 'AED 3,500 – 12,000+',
                    'desc'  => 'A full engine rebuild addresses internal wear beyond what oil changes can prevent - worn piston rings, valve guides, and crankshaft bearings. We strip the engine to bare block, measure all tolerances, source correct oversized parts where required, and rebuild to manufacturer specification. More cost-effective than an engine replacement on many Japanese and Korean platforms.',
                    'tags'  => ['Full Strip', 'Piston Rings', 'Valve Grind', 'Crankshaft'],
                ],
            ];
            @endphp
            @foreach($services as $s)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white border rounded-3 p-4 h-100 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                             style="width:46px;height:46px;flex-shrink:0;">
                            <i class="fa {{ $s['icon'] }} text-white"></i>
                        </div>
                        <div>
                            <div class="fw-bold" style="font-size:.95rem;">{{ $s['title'] }}</div>
                            <div class="text-primary fw-semibold" style="font-size:.82rem;">{{ $s['price'] }}</div>
                        </div>
                    </div>
                    <p class="text-muted mb-3" style="font-size:.875rem;line-height:1.7;">{{ $s['desc'] }}</p>
                    <div class="d-flex flex-wrap gap-1">
                        @foreach($s['tags'] as $tag)
                        <span class="badge bg-light text-dark border" style="font-size:.75rem;">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══ WARNING SIGNS ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Warning Signs</span>
                <h2 class="fw-bold mb-4">Engine Warning Signs Dubai Drivers Should Never Ignore</h2>
                @php
                $signs = [
                    ['fa-exclamation-triangle text-warning', 'Check Engine Light On',         'The OBD system has detected a fault. Some faults are minor; others indicate immediate risk. Professional scanning is the only way to know which.'],
                    ['fa-thermometer-full text-danger',      'Engine Overheating',             'In Dubai\'s climate, overheating can destroy an engine in minutes. A rising temperature gauge requires stopping immediately and calling us.'],
                    ['fa-cloud text-secondary',              'White or Blue Smoke from Exhaust','White smoke: coolant entering combustion (head gasket). Blue smoke: oil burning (worn rings or valve seals). Either requires immediate diagnosis.'],
                    ['fa-bolt text-warning',                 'Engine Misfiring or Rough Idle', 'Vibration at idle, stuttering acceleration, or a lumpy running note indicates misfires - typically spark plugs, coils, or injectors.'],
                    ['fa-volume-up text-danger',             'Knocking or Tapping Noise',      'Bottom-end knock indicates low oil pressure or main/rod bearing wear. Top-end tapping indicates valve clearance or hydraulic lifter issues.'],
                    ['fa-tint text-warning',                 'Oil or Coolant Losing Level',    'Unexplained fluid loss means a leak or internal consumption. Finding and repairing the cause is always cheaper than engine replacement.'],
                ];
                @endphp
                <div class="row g-3">
                    @foreach($signs as $s)
                    <div class="col-12">
                        <div class="d-flex align-items-start gap-3 bg-light border rounded-3 p-3">
                            <i class="fa {{ $s[0] }} mt-1" style="font-size:1.1rem;flex-shrink:0;"></i>
                            <div>
                                <div class="fw-semibold mb-1" style="font-size:.9rem;">{{ $s[1] }}</div>
                                <p class="text-muted mb-0" style="font-size:.84rem;line-height:1.6;">{{ $s[2] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Our Diagnostic Process</span>
                <h2 class="fw-bold mb-4">How We Diagnose Engine Problems in Dubai</h2>
                @php
                $steps = [
                    ['1', 'Full OBD-II Scan',           'We scan all control modules - not just the engine ECU. Fault codes in the transmission, ABS, or body modules often point to engine-related root causes.'],
                    ['2', 'Live Data Analysis',          'With the engine running, we monitor real-time data: coolant temperature, fuel trims, misfire counters, injector pulse width, and MAP/MAF sensor readings. This reveals intermittent faults that don\'t always set codes.'],
                    ['3', 'Physical Inspection',         'Coolant level and condition, oil level and colour, belt condition and tension, hose integrity, and any visible leaks or damage. We check what the scanner can\'t measure.'],
                    ['4', 'Compression & Leak-Down Test','For suspected internal wear - rough idle, blue smoke, or high oil consumption - we perform a cylinder compression test and leak-down test to measure ring and valve seal condition.'],
                    ['5', 'Confirm Fault & Quote',       'Once the fault is confirmed, you receive a clear written quote before any parts are ordered or work begins. No surprises.'],
                    ['6', 'Repair & Verify',             'Repair completed using genuine or OEM-equivalent parts. Post-repair diagnostic scan confirms all fault codes are cleared. Test drive verifies correct function before handover.'],
                ];
                @endphp
                @foreach($steps as $s)
                <div class="d-flex mb-3 pb-3 border-bottom">
                    <div class="flex-shrink-0 me-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle text-white fw-bold"
                             style="width:34px;height:34px;font-size:.85rem;">{{ $s[0] }}</div>
                    </div>
                    <div>
                        <div class="fw-semibold mb-1" style="font-size:.9rem;">{{ $s[1] }}</div>
                        <p class="text-muted mb-0" style="font-size:.84rem;line-height:1.6;">{{ $s[2] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- ═══ VEHICLES & PRICING ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Engines We Service</span>
                <h2 class="fw-bold mb-4">All Engine Types &amp; Vehicle Brands in Dubai</h2>
                <div class="row g-3">
                    @php
                    $engines = [
                        ['Petrol (Naturally Aspirated)', 'Toyota, Nissan, Honda, Hyundai, Kia - standard petrol engines serviced at all levels'],
                        ['Turbocharged Petrol',          'BMW, Mercedes, Audi, Volkswagen, Ford EcoBoost - turbo-specific diagnosis and repair'],
                        ['Turbodiesel',                  'Land Cruiser 200 4.5L V8D, Nissan Patrol 3.0D, Mitsubishi Pajero diesel - diesel specialists'],
                        ['Hybrid Systems',               'Toyota Prius, Camry Hybrid, Honda Accord Hybrid - hybrid-compatible diagnostic tools'],
                        ['V6 & V8 Platforms',            'Nissan Patrol VQ56, Toyota Land Cruiser VVT-i V8, Chevrolet Tahoe - large displacement experience'],
                        ['High-Performance Engines',     'BMW M-series, AMG Mercedes, Audi RS - tuned engine diagnostics and repair'],
                    ];
                    @endphp
                    @foreach($engines as $e)
                    <div class="col-12">
                        <div class="d-flex align-items-start bg-white border rounded-3 p-3">
                            <i class="fa fa-check-circle text-primary me-3 mt-1" style="flex-shrink:0;"></i>
                            <div>
                                <div class="fw-semibold" style="font-size:.9rem;">{{ $e[0] }}</div>
                                <div class="text-muted" style="font-size:.82rem;">{{ $e[1] }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Pricing Guide</span>
                <h2 class="fw-bold mb-4">Engine Service Prices in Dubai</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover bg-white">
                        <thead class="table-dark">
                            <tr><th>Service</th><th>Price Range (AED)</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Engine Diagnostic Scan</td><td>AED 80 – 150</td></tr>
                            <tr><td>Engine Tune-Up (spark plugs, filters)</td><td>AED 150 – 400</td></tr>
                            <tr><td>Timing Belt + Water Pump</td><td>AED 600 – 1,800</td></tr>
                            <tr><td>Head Gasket Replacement</td><td>AED 1,200 – 2,800</td></tr>
                            <tr><td>Engine Oil Leak Repair</td><td>AED 120 – 800</td></tr>
                            <tr><td>Cooling System Service</td><td>AED 200 – 600</td></tr>
                            <tr><td>Engine Mount Replacement</td><td>AED 200 – 500</td></tr>
                            <tr><td>Full Engine Overhaul / Rebuild</td><td>AED 3,500 – 12,000+</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-muted mt-2 mb-0" style="font-size:.8rem;">
                    <i class="fa fa-info-circle text-primary me-1"></i>
                    All prices include labour. Parts pricing varies by vehicle make and model. Exact quote confirmed before work begins. Workmanship warranty on all repairs.
                </p>
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
            <h2 class="fw-bold mb-2">Why Dubai Drivers Trust Us for Engine Service</h2>
        </div>
        <div class="row g-4">
            @php
            $reasons = [
                ['fa-laptop-code', 'Diagnostic Before Mechanical', 'We never start removing parts before we know exactly what is wrong. Our OBD-II scan and live data analysis pinpoints the fault - saving you from paying for unnecessary component replacements.'],
                ['fa-award',       'Genuine Parts, OEM Tolerances', 'Engine internals fitted to wrong tolerances fail within months. We use genuine or OEM-specification parts and follow manufacturer torque specifications - not approximations.'],
                ['fa-shield-alt',  'Workmanship Warranty',          'All engine repairs at our Al Satwa workshop are covered by a workmanship warranty. If the same fault recurs within the warranty period, we rectify it at no additional charge.'],
                ['fa-car',         '12 Years, All Engine Types',    'From a Toyota 1ZZ timing chain to a BMW N54 injector replacement - 12 years of experience across all major engine platforms in the UAE gives our team genuine depth.'],
                ['fa-receipt',     'Quote Before Work Begins',      'Major engine repairs are expensive. You always receive a written quote - itemised by parts and labour - before any strip-down or parts ordering begins.'],
                ['fa-wrench',      'Full Rebuild Capability',       'Unlike many workshops that refer engine rebuilds externally, we perform full in-house engine overhauls - maintaining accountability and quality throughout the process.'],
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
            <h2 class="fw-bold mb-2">Car Engine Service Dubai - Common Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="engineFaq">
                    @php
                    $faqs = [
                        [
                            'What does car engine service include in Dubai?',
                            'Engine service in Dubai ranges from a basic tune-up (spark plugs, air filter, oil change) to a full diagnostic assessment covering OBD-II fault codes, compression testing, cooling system, and fluid conditions. At Dubai Car Repair Service, every engine service begins with a full diagnostic scan so we identify what your specific engine needs - not a standard menu of parts.',
                        ],
                        [
                            'How do I know if my engine needs a tune-up or a major repair?',
                            'A tune-up is typically appropriate when the engine runs slightly rough, fuel economy has dropped, or the car is simply due for its scheduled service interval. Major repair is indicated by dashboard warning lights, overheating, oil or coolant consumption, unusual noises, or significant power loss. We diagnose precisely using OBD-II scanning and physical inspection before recommending any work.',
                        ],
                        [
                            'When should I replace the timing belt in Dubai?',
                            'In Dubai\'s climate, we recommend replacing a rubber timing belt at 80,000 km rather than the 100,000 km many manuals suggest - heat degrades rubber faster in the UAE. Always replace the water pump, tensioner, and idler pulleys simultaneously since the labour cost is the same and these components share the same service life. Belt failure on an interference engine causes catastrophic internal engine damage.',
                        ],
                        [
                            'How much does an engine overhaul cost in Dubai?',
                            'A full engine overhaul starts at around AED 3,500 for a small-displacement Japanese engine and can reach AED 12,000+ for large European or American V8 platforms. We always compare the overhaul cost against the vehicle\'s value and condition before recommending this route - in many cases, an overhaul is significantly more economical than engine replacement or purchasing a replacement vehicle.',
                        ],
                        [
                            'Why is my engine using oil in Dubai?',
                            'Oil consumption in Dubai is often higher than drivers in cooler climates experience because thin synthetic oils evaporate at sustained high temperatures. Normal consumption is up to 500ml per 1,000 km for many high-performance engines. Consumption beyond this indicates worn piston rings (blue smoke at throttle), worn valve stem seals (blue smoke at start-up), or an external leak that evaporates quickly in the heat before you notice it on the ground.',
                        ],
                        [
                            'Is it worth repairing an engine or better to replace it?',
                            'This depends on the specific fault, the vehicle\'s age and condition, and the cost of parts for your make and model. For Japanese vehicles - Toyota, Nissan, Honda - engine rebuilds are often very cost-effective because parts are widely available and affordable. For European vehicles, parts costs sometimes make a replacement engine from a salvage source more economical. We give you an honest assessment of both options before you decide.',
                        ],
                    ];
                    @endphp
                    @foreach($faqs as $i => $faq)
                    <div class="accordion-item border rounded-3 mb-3" style="border-color:#e4e8ec!important;">
                        <h3 class="accordion-header" id="engHead{{ $i }}">
                            <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }} fw-semibold rounded-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#engCollapse{{ $i }}"
                                    aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                                    style="font-size:.95rem;background:{{ $i===0 ? '#f0f7ff' : '#fff' }};">
                                {{ $faq[0] }}
                            </button>
                        </h3>
                        <div id="engCollapse{{ $i }}"
                             class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                             data-bs-parent="#engineFaq">
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
            <h3 class="fw-bold">Related Services</h3>
        </div>
        <div class="row g-3 justify-content-center">
            @php
            $related = [
                ['fa-oil-can',     'Engine Oil Change Dubai',     'Correct grade oil for UAE heat',        'engine-oil-change-dubai'],
                ['fa-laptop-code', 'Roadside Assistance Dubai',   'Fast roadside assitance OBD-II scan',   'roadside-assistance-dubai'],
                ['fa-tools',       'Car Maintenance Dubai',       'Scheduled servicing packages',          'car-maintenance-dubai'],
                ['fa-cogs',        'Car Repair Dubai',            'Gearbox & automatic transmission',      'car-repair-dubai'],
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
                <h2 class="fw-bold text-white mb-2">Engine Warning Light On? Get It Diagnosed Today.</h2>
                <p class="text-white-50 mb-0">
                    Open 7AM–10PM daily &bull; 222 Al Satwa Rd, Dubai &bull; OBD-II diagnosis before any repair
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
      "@id": "https://dubaicarrepairservice.com/car-engine-service-dubai#service",
      "name": "Car Engine Service Dubai",
      "url": "https://dubaicarrepairservice.com/car-engine-service-dubai",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://dubaicarrepairservice.com/car-engine-service-dubai"
      },
      "serviceType": "Car Engine Repair and Service",
      "description": "Professional car engine service in Dubai including engine diagnostics, tune-ups, timing belt replacement, head gasket repair, oil leak repair, cooling system repairs and complete engine overhauls for all vehicle makes and models.",
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
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://dubaicarrepairservice.com/car-engine-service-dubai#breadcrumb",
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
          "name": "Car Engine Service Dubai",
          "item": "https://dubaicarrepairservice.com/car-engine-service-dubai"
        }
      ]
    },

    {
      "@type": "FAQPage",
      "@id": "https://dubaicarrepairservice.com/car-engine-service-dubai#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "When should I replace my timing belt in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Timing belt replacement intervals vary by manufacturer, vehicle model and driving conditions. Dubai's extreme temperatures can accelerate wear, so following the manufacturer's maintenance schedule and regular inspections is recommended."
          }
        },

        {
          "@type": "Question",
          "name": "How much does engine service cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Engine service costs vary depending on the type of repair, vehicle make and engine condition. Minor maintenance services generally cost less than major repairs such as timing system replacement, head gasket repairs or engine overhauls."
          }
        },

        {
          "@type": "Question",
          "name": "What causes engine overheating in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Common causes of engine overheating include low coolant levels, radiator issues, thermostat failure, water pump problems, cooling fan faults or head gasket damage. Immediate diagnosis is recommended to prevent serious engine damage."
          }
        }

      ]
    }

  ]
}
</script>
@endpush

@endsection
