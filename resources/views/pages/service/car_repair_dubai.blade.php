@extends('layout.masterhome')
@php
    $meta_title       = 'Car Repair Dubai | Expert Mechanics | Al Satwa | 056 612 1423';
    $meta_description = 'Professional car repair in Dubai at 222 Al Satwa Rd. Engine, AC, battery, brakes, electrical & diagnostics. 12 years, certified mechanics, upfront pricing. Call 056 612 1423.';
    $meta_keywords    = 'car repair dubai, car repair near me dubai, auto repair dubai, car workshop dubai, car mechanic dubai, car service center dubai';
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
                    222 Al Satwa Rd, Dubai &bull; 12 Years Experience &bull; All Makes &amp; Models
                </p>
                <h1 class="display-4 text-white fw-bold mb-3">
                    Car Repair Dubai - Certified Mechanics, Honest Pricing, Al Satwa
                </h1>
                <p class="text-white mb-4"
                   style="font-size:1.05rem;opacity:.85;max-width:640px;margin:0 auto;">
                    Engine faults, AC failure, battery issues, brake wear, electrical faults - diagnosed correctly and fixed right the first time. Transparent quotes before work begins. Open 7AM–10PM, every day.
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
                        <li class="breadcrumb-item text-white active" aria-current="page">Car Repair Dubai</li>
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
                <h2 class="fw-bold mb-4">Car Repair in Dubai - Why Diagnosis Always Comes Before the Repair Bill</h2>
                <p style="color:#444;line-height:1.8;">
                    Car repair in Dubai is a service where the quality of the diagnosis determines the quality of the repair. Dubai's driving environment - sustained 45°C ambient temperatures, high-speed highway use, and heavy stop-and-go traffic on Sheikh Zayed Road and Al Khail Road - creates specific mechanical failure patterns that a one-size-fits-all approach misses. Cooling systems work at capacity for months at a time. Engine oils degrade in half the distance. Rubber seals and gaskets age in UAE heat at twice the rate of temperate climates.
                </p>
                <p style="color:#444;line-height:1.8;">
                    At Dubai Car Repair Service, every repair begins with a <strong>full OBD-II diagnostic scan</strong> and a physical inspection - before any parts are quoted, ordered, or removed. We identify exactly what is causing the fault, explain it clearly, and give you a <strong>written itemised quote</strong> covering parts and labour. Work only begins after your confirmation. The price on your quote is the price on your invoice - not a starting point for additions.
                </p>
                <p style="color:#444;line-height:1.8;">
                    From our workshop at <strong>222 Al Satwa Road</strong>, our team of <strong>8 certified mechanics</strong> has been servicing all car makes across Dubai since 2012 - Japanese, European, American, Korean, and British platforms. Over <strong>8,500 customers</strong> across Jumeirah, Business Bay, Al Quoz, Al Barsha, Karama, and DIFC have trusted us to tell them the truth and fix it right the first time.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative" style="min-height:380px;">
                    <img src="{{ asset('public/img/service8.webp') }}"
                         alt="Car Repair Dubai - Certified Mechanic at Dubai Car Repair Service, Al Satwa"
                         class="w-100 rounded-3 shadow" style="object-fit:cover;height:400px;">
                    <div class="position-absolute bottom-0 end-0 m-3 bg-primary text-white rounded-3 px-3 py-2 shadow text-center">
                        <div class="fw-bold" style="font-size:1.4rem;line-height:1;">AED 50+</div>
                        <div style="font-size:.75rem;opacity:.9;">Diagnostic From</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ WHAT WE REPAIR ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:620px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">What We Repair</span>
            <h2 class="fw-bold mb-2">Car Repair Services We Provide in Dubai</h2>
            <p class="text-muted">Every repair category below is a dedicated service with its own diagnosis process, pricing transparency, and workmanship warranty.</p>
        </div>
        <div class="row g-4">
@php $repairs = [
    // 1. MATCHES: 'car-engine-service-dubai'
    ['fa-cog', 'Engine Repair &amp; Service', 'Tune-ups, timing belts, head gaskets, oil leaks, cooling system, and full engine overhauls. OBD-II diagnosis before any mechanical strip-down. All engine types including petrol, diesel, turbo, and hybrid.', 'AED 150+', 'car-engine-service-dubai'],

    // 2. UPDATED ROUTE NAME: Changed 'car-repair-dubai' to 'car-ac-repair-dubai' to match your actual route
    ['fa-snowflake', 'Car AC Repair &amp; Gas Refill', 'Compressor faults, refrigerant leaks, condenser blockage, and expansion valve failure. We diagnose with manifold gauges and leak detection equipment - not by guessing. R134a and R1234yf refrigerant systems.', 'AED 100+', 'car-ac-repair-dubai'],

    // 3. MATCHES: 'car-battery-replacement-dubai'
    ['fa-battery-full', 'Car Battery Replacement', 'On-site battery load test measuring CCA and internal resistance. Genuine Exide, Bosch, Varta, and Amaron batteries fitted. AGM and EFB types for modern vehicles. Workshop or mobile service.', 'AED 150+', 'car-battery-replacement-dubai'],

    // 4. COMMENTED OUT FOR NOW: 'car-brake-pad-replacement' is not defined in routes/web.php
    // ['fa-circle', 'Brake Pad &amp; Disc Service', 'Brake pad measurement, disc thickness and runout check, brake fluid boiling point test. Brembo, Bosch, and TRW components. Safety-critical work done correctly - never rushed.', 'AED 150+', 'car-brake-pad-replacement'],

    // 5. COMMENTED OUT FOR NOW: 'car-electrical-services' is not defined in routes/web.php
    // ['fa-bolt', 'Car Electrical Repair', 'Wiring faults, alternator, ECU diagnostics, sensor replacement, relay failure, and power distribution issues. Electronic diagnosis before any parts are quoted or replaced.', 'AED 100+', 'car-electrical-services'],

    // 6. MATCHES: 'car-inspection-dubai'
    ['fa-search', 'Car Inspection', '50-point vehicle inspection for RTA pre-test, pre-purchase used car checks, or annual safety assessment. Written report with photos. Pass/Advisory/Fail rating for every check point.', 'AED 99+', 'car-inspection-dubai'],

    // 7. UPDATED ROUTE NAME: Changed 'engine-oil-change' to 'engine-oil-change-dubai' to match routes/web.php
    ['fa-oil-can', 'Engine Oil &amp; Filter Change', 'Correct oil grade verified from manufacturer database. OEM-quality filter. Old oil inspected before drain. Service sticker with UAE-adjusted next change interval. Done in under 30 minutes.', 'AED 89+', 'engine-oil-change-dubai'],

    // 8. UPDATED ROUTE NAME: Changed 'car-maintenance' to 'tyre-replacement-dubai' for more relevant mapping
    ['fa-dot-circle', 'Tyre Replacement &amp; Alignment', 'All major brands for all vehicles. Computerised 4-wheel alignment and dynamic balancing. Tyre DOT age checked - UAE standard is 5-year maximum regardless of tread depth.', 'AED 120+', 'tyre-replacement-dubai'],
]; @endphp
            @foreach($repairs as $r)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white border rounded-3 p-4 h-100 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                             style="width:44px;height:44px;flex-shrink:0;">
                            <i class="fa {{ $r[0] }} text-white" style="font-size:.9rem;"></i>
                        </div>
                        <div>
                            <div class="fw-bold" style="font-size:.92rem;">{!! $r[1] !!}</div>
                            <div class="text-primary fw-semibold" style="font-size:.8rem;">From {{ $r[3] }}</div>
                        </div>
                    </div>
                    <p class="text-muted mb-3" style="font-size:.875rem;line-height:1.7;">{{ $r[2] }}</p>
                    <a href="{{ route($r[4]) }}" class="d-inline-flex align-items-center gap-1 text-primary fw-semibold text-decoration-none"
                       style="font-size:.875rem;">
                        Full service details <i class="fa fa-arrow-right" style="font-size:.75rem;"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══ HOW IT WORKS ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-5">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Our Repair Process</span>
                <h2 class="fw-bold mb-4">How We Handle Every Car Repair in Dubai</h2>
                <p style="color:#444;line-height:1.8;">
                    Every vehicle that comes through our Al Satwa workshop follows the same six-step process - whether it's a battery replacement or a full engine rebuild. This process is what prevents the two most common complaints about garages in Dubai: being charged for parts that weren't needed, and having the same problem return two weeks later.
                </p>
                <div class="bg-primary text-white rounded-3 p-4 mt-4">
                    <h5 class="fw-bold text-white mb-3"><i class="fa fa-shield-alt me-2"></i>Our Guarantee to You</h5>
                    @php $guarantees = [
                        'Written quote before any work begins',
                        'Invoice matches quote - no additions without approval',
                        'Genuine or OEM-equivalent parts only',
                        'Workmanship warranty on every repair',
                        'Post-repair diagnostic scan to confirm resolution',
                    ]; @endphp
                    @foreach($guarantees as $g)
                    <div class="d-flex align-items-start gap-2 mb-2">
                        <i class="fa fa-check mt-1" style="font-size:.8rem;flex-shrink:0;"></i>
                        <span style="font-size:.875rem;opacity:.92;">{{ $g }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7">
                @php $steps = [
                    ['1','You Arrive or Call','Walk in to 222 Al Satwa Road, call 056 612 1423, or send us a WhatsApp message with your car details and the symptom you are experiencing. We confirm availability and, for complex issues, recommend a booking time.'],
                    ['2','Full Diagnostic Scan','We connect your car to our OBD-II diagnostic system covering all modules - engine, transmission, ABS, body control. Live data and stored fault codes are reviewed before the car is physically inspected.'],
                    ['3','Physical Inspection','Depending on the symptom, we perform a targeted physical inspection - checking fluid levels and condition, listening for noises, testing electrical circuits, or placing the car on the ramp for an underbody check.'],
                    ['4','Written Quote Provided','You receive a clear itemised quote - parts and labour listed separately. We explain what failed, why it failed, and what will happen if it is not repaired. You decide. We never start work without confirmation.'],
                    ['5','Repair Completed','Parts sourced from authorised suppliers. Repair carried out by the same mechanic who diagnosed the fault - accountability from diagnosis to completion. No handovers that lose diagnostic knowledge mid-repair.'],
                    ['6','Verification &amp; Handover','Post-repair scan confirms all fault codes are cleared. Test drive where appropriate. You inspect the work. We explain what was done. Payment taken - matching the original quote.'],
                ]; @endphp
                @foreach($steps as $s)
                <div class="d-flex mb-4 pb-4 border-bottom">
                    <div class="flex-shrink-0 me-4">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle text-white fw-bold"
                             style="width:40px;height:40px;font-size:.9rem;">{!! $s[0] !!}</div>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2" style="font-size:.95rem;">{!! $s[1] !!}</h5>
                        <p class="text-muted mb-0" style="font-size:.875rem;line-height:1.7;">{{ $s[2] }}</p>
                    </div>
                </div>
                @endforeach
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
            <h2 class="fw-bold mb-2">Why Dubai Drivers Choose Our Garage Over Others</h2>
            <p class="text-muted">Every garage in Dubai claims to be the best. Here is what makes our operation different in practice.</p>
        </div>
        <div class="row g-4">
            @php $reasons = [
                ['fa-map-marker-alt', 'Centrally Located in Al Satwa',         '222 Al Satwa Road is minutes from Sheikh Zayed Road, Jumeirah, Bur Dubai, Karama, Downtown Dubai, and DIFC - one of the most accessible workshop locations in the city. Free parking outside.'],
                ['fa-search',         'Diagnostic-First, Always',               'We never recommend a replacement before confirming it is the cause. This prevents the most expensive mistake in car repair: replacing parts that were not at fault and missing the real problem.'],
                ['fa-award',          'Genuine Parts, Correct Specification',   'Oil grades, brake pads, filters, and engine parts are chosen to manufacturer specification - not substituted with cheaper alternatives that degrade faster in Dubai\'s heat.'],
                ['fa-user-check',     '12 Years, Same Mechanics',               'Our team has continuity. The mechanics who worked on cars in 2012 are still here. That institutional knowledge - particularly across Japanese and European platforms in the UAE - cannot be replicated by high-turnover operations.'],
                ['fa-receipt',        'No Surprises on the Invoice',            'The quote is the invoice. If additional faults are discovered during the repair, we call you and explain before doing anything. You always control what gets approved.'],
                ['fa-star',           '4.8★ Rating from Real Customers',        'Our Google reviews are from real Dubai drivers - not templates. Read them and you will find the same phrases repeated: honest, fast, fair price, explained everything clearly. That is the standard we maintain.'],
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

{{-- ═══ VEHICLES ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">All Makes &amp; Models</span>
                <h2 class="fw-bold mb-4">Car Makes We Repair in Dubai</h2>
                <p style="color:#444;line-height:1.8;">
                    Our mechanics carry model-specific diagnostic software and hands-on experience across all major car brands operating in the UAE - not a generic scanner and a prayer.
                </p>
                <p style="color:#444;line-height:1.8;">
                    For Japanese makes - the most common vehicles in Dubai - we carry common wear parts in stock, reducing your wait time significantly. For European and American platforms, we source genuine parts from authorised UAE distributors and keep you updated on lead times.
                </p>
            </div>
            <div class="col-lg-7">
                <div class="row g-2">
                    @php $brands = [
                        ['Toyota','Japanese'],['Nissan','Japanese'],['Honda','Japanese'],['Mitsubishi','Japanese'],
                        ['Lexus','Japanese'],['Infiniti','Japanese'],['BMW','European'],['Mercedes-Benz','European'],
                        ['Audi','European'],['Volkswagen','European'],['Porsche','European'],['Kia','Korean'],
                        ['Hyundai','Korean'],['Ford','American'],['Chevrolet','American'],['Jeep','American'],
                        ['Dodge','American'],['Land Rover','British'],
                    ]; @endphp
                    @foreach($brands as $b)
                    <div class="col-6 col-md-4">
                        <div class="d-flex align-items-center bg-light border rounded-3 px-3 py-2 gap-2">
                            <i class="fa fa-check-circle text-primary" style="font-size:.8rem;flex-shrink:0;"></i>
                            <div>
                                <div class="fw-semibold" style="font-size:.88rem;">{{ $b[0] }}</div>
                                <div class="text-muted" style="font-size:.72rem;">{{ $b[1] }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ FAQ ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:620px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">FAQ</span>
            <h2 class="fw-bold mb-2">Car Repair Dubai - Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="carRepairFaq">
                    @php $faqs = [
                        ['How much does car repair cost in Dubai?','Our prices start from AED 50 for a standalone diagnostic scan and range up to AED 12,000+ for a complete engine overhaul. Common services: oil change from AED 89, battery replacement from AED 150, AC gas refill from AED 100, brake pads from AED 150 per axle. We always provide a written quote before any work begins - the quote price is the invoice price.'],
                        ['What is the most common car repair needed in Dubai?','Battery replacement, AC repair, and engine oil changes are the three most frequently requested services at our Al Satwa workshop. Dubai\'s extreme heat accelerates battery degradation (2–3 year lifespan vs 4–5 years in cooler climates), stresses AC compressors and refrigerant seals, and causes engine oil to break down faster than manufacturer service intervals assume.'],
                        ['Do you use genuine parts for car repair in Dubai?','Yes. We use genuine OEM or OEM-equivalent parts for every repair. If an approved aftermarket alternative is used, we tell you which brand and why before work begins. We never substitute without disclosure. Oil grades, filter specifications, and brake component ratings are always matched to your vehicle\'s manufacturer specification.'],
                        ['How long does car repair take in Dubai?','Routine services (oil change, battery, AC recharge, brake pads) take 30 minutes to 2 hours. Engine diagnostics and minor electrical work take 1–3 hours. Complex repairs such as timing belt replacement or head gasket work take 1–2 days. Engine overhauls take 3–5 days depending on parts availability. We give you a realistic time estimate before work begins - not an optimistic one.'],
                        ['Can I get a car repair quote without committing to the work?','Yes. You can bring your car in for a diagnostic assessment and receive a full written quote at no obligation to proceed. The diagnostic scan costs AED 50–150 depending on the depth of investigation required. If you proceed with the repair, the diagnostic cost is included in the total. If you choose not to proceed, you pay only for the assessment.'],
                        ['Is it better to repair my car in Dubai or buy a new one?','This depends entirely on the fault, your vehicle\'s age, and the cost of the repair relative to the car\'s value. We give honest guidance. For a Japanese vehicle under 10 years old with an engine or gearbox fault, repair is almost always the better economic choice. For a European vehicle over 8 years old with major structural or electronic faults, the calculus changes. We will tell you what we genuinely recommend - not the option that generates the most revenue.'],
                    ]; @endphp
                    @foreach($faqs as $i => $faq)
                    <div class="accordion-item border rounded-3 mb-3" style="border-color:#e4e8ec!important;">
                        <h3 class="accordion-header" id="crHead{{ $i }}">
                            <button class="accordion-button {{ $i>0?'collapsed':'' }} fw-semibold rounded-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#crCollapse{{ $i }}"
                                    aria-expanded="{{ $i===0?'true':'false' }}"
                                    style="font-size:.95rem;background:{{ $i===0?'#f0f7ff':'#fff' }};">
                                {{ $faq[0] }}
                            </button>
                        </h3>
                        <div id="crCollapse{{ $i }}" class="accordion-collapse collapse {{ $i===0?'show':'' }}"
                             data-bs-parent="#carRepairFaq">
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
        <div class="text-center mb-4"><h3 class="fw-bold">Explore Individual Services</h3></div>
        <div class="row g-3 justify-content-center">
@php $related = [
    // 1. MATCHES: 'car-engine-service-dubai'
    ['fa-cog',          'Engine Service Dubai',      'Tune-ups to full overhauls',      'car-engine-service-dubai'],

    // 2. UPDATED ROUTE NAME: Changed from 'car-repair-dubai' to 'car-ac-repair-dubai' to match your routes/web.php
    ['fa-snowflake',    'Car AC Repair Dubai',       'Compressor, gas refill & leaks',  'car-ac-repair-dubai'],

    // 3. MATCHES: 'car-battery-replacement-dubai'
    ['fa-battery-full', 'Battery Replacement Dubai', 'Same-hour on-site service',       'car-battery-replacement-dubai'],

    // 4. UPDATED ROUTE NAME: Changed from 'vehicle-inspection' to 'car-inspection-dubai' to match your routes/web.php
    ['fa-search',       'Car Inspection Dubai',      'RTA pre-test & pre-purchase',     'car-inspection-dubai'],
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
                <h2 class="fw-bold text-white mb-2">Car Problem in Dubai? Get It Diagnosed and Fixed Today.</h2>
                <p class="text-white-50 mb-0">Open 7AM–10PM daily &bull; 222 Al Satwa Rd &bull; Written quote before work begins &bull; All makes welcome</p>
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
      "@id": "https://dubaicarrepairservice.com/car-repair-dubai#service",
      "name": "Car Repair Dubai",
      "url": "https://dubaicarrepairservice.com/car-repair-dubai",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://dubaicarrepairservice.com/car-repair-dubai"
      },
      "serviceType": "Auto Repair",
      "description": "Professional car repair services in Dubai including engine repair, AC repair, battery replacement, brake services, electrical diagnostics and general vehicle maintenance. Experienced technicians and full diagnostic support for all vehicle makes and models.",
      "provider": {
        "@id": "https://dubaicarrepairservice.com/#localbusiness"
      },
      "areaServed": {
        "@type": "City",
        "name": "Dubai"
      },
      "offers": {
        "@type": "AggregateOffer",
        "lowPrice": 50,
        "highPrice": 12000,
        "priceCurrency": "AED",
        "availability": "https://schema.org/InStock"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://dubaicarrepairservice.com/car-repair-dubai#breadcrumb",
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
          "name": "Car Repair Dubai",
          "item": "https://dubaicarrepairservice.com/car-repair-dubai"
        }
      ]
    },

    {
      "@type": "FAQPage",
      "@id": "https://dubaicarrepairservice.com/car-repair-dubai#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "How much does car repair cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Car repair costs vary depending on the issue and vehicle type. Minor services like diagnostics and oil changes are low cost, while major repairs such as engine or transmission work are more expensive. A written estimate is always provided before any repair work begins."
          }
        },

        {
          "@type": "Question",
          "name": "What is the most common car repair in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Common car repairs in Dubai include battery replacement, air conditioning repair, brake service, and routine oil changes due to high temperatures and heavy driving conditions."
          }
        },

        {
          "@type": "Question",
          "name": "Do you use genuine parts for car repair in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we use genuine OEM or OEM-equivalent parts depending on customer preference and availability. All parts are installed according to manufacturer specifications."
          }
        }

      ]
    }

  ]
}
</script>
@endpush
@endsection