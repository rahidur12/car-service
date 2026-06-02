@extends('layout.masterhome')
@php
    $meta_title       = 'Car AC Repair Dubai | Same Day Service | 056 612 1423';
    $meta_description = 'Car AC not cooling in Dubai\'s heat? Expert AC repair & gas refill at Al Satwa or your location. All brands. Transparent pricing. Call 056 612 1423.';
    $meta_keywords    = 'car ac repair dubai, car ac service dubai, ac not cooling dubai, car air conditioning repair dubai, ac recharge dubai';
@endphp
@section('content')

{{-- ═══ HERO ═══ --}}
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
     style="background:linear-gradient(135deg,#001516 0%,#002a2a 100%);min-height:320px;display:flex;align-items:center;">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <p class="text-white-50 mb-2" style="font-size:.8rem;letter-spacing:.12em;text-transform:uppercase;font-weight:600;">
                    Al Satwa, Dubai &bull; AC Repair &amp; Gas Refill &bull; All Makes &amp; Models
                </p>
                <h1 class="display-4 text-white fw-bold mb-3">
                    Car AC Repair Dubai - Cool Air Restored Fast
                </h1>
                <p class="text-white mb-4" style="font-size:1.05rem;opacity:.85;max-width:620px;margin:0 auto;">
                    Dubai's heat makes a working AC non-negotiable. Our certified technicians diagnose and repair all AC faults - compressor failure, refrigerant leaks, and cooling loss - at our Al Satwa workshop or your location.
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
                        <li class="breadcrumb-item text-white active" aria-current="page">Car AC Repair Dubai</li>
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
                <h2 class="fw-bold mb-4">Car AC Repair in Dubai - Why the UAE Climate Demands Expert Diagnosis</h2>
                <p style="color:#444;line-height:1.8;">
                    Car AC repair in Dubai is not the same as AC service in cooler countries. When ambient temperatures exceed 45°C for months at a time, your vehicle's air conditioning system operates under sustained thermal stress that gradually degrades compressor seals, refrigerant hoses, and condenser efficiency far faster than in temperate climates.
                </p>
                <p style="color:#444;line-height:1.8;">
                    The result: your AC may appear to function in the morning but fail completely by midday - leaving you driving in temperatures that pose a genuine health risk. At Dubai Car Repair Service, our technicians use <strong>electronic leak detection equipment and manifold gauge sets</strong> to diagnose the exact fault before touching any components. We identify whether the issue is a refrigerant leak, compressor failure, condenser blockage, or expansion valve fault - and quote you accordingly.
                </p>
                <p style="color:#444;line-height:1.8;">
                    We service systems using both <strong>R134a</strong> (older vehicles) and <strong>R1234yf</strong> (post-2017 models) refrigerants, across all makes including Toyota, Nissan, BMW, Mercedes-Benz, and Kia.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative" style="min-height:380px;">
                    <img src="{{ asset('public/img/service6.webp') }}"
                         alt="Car AC Repair Dubai - Certified Technician at Al Satwa Workshop"
                         class="w-100 rounded-3 shadow" style="object-fit:cover;height:400px;">
                    <div class="position-absolute bottom-0 end-0 m-3 bg-primary text-white rounded-3 px-3 py-2 shadow text-center">
                        <div class="fw-bold" style="font-size:1.4rem;line-height:1;">AED 100+</div>
                        <div style="font-size:.75rem;opacity:.9;">Gas Refill From</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ AC FAULTS WE FIX ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">AC Faults We Diagnose &amp; Fix</span>
            <h2 class="fw-bold mb-2">Common Car AC Problems in Dubai's Climate</h2>
            <p class="text-muted">Every AC fault has a root cause. We find it before we fix it - saving you from repeat repairs.</p>
        </div>
        <div class="row g-4">
            @php $faults = [
                ['fa-tint','Refrigerant Leak','The most common AC fault in Dubai. Heat cycling causes rubber seals and O-rings to crack. We use UV dye and electronic detectors to pinpoint leaks before recharging - otherwise the gas simply escapes again.','AED 150–350'],
                ['fa-cog','Compressor Failure','The compressor is the heart of your AC system. Sustained high-load operation in 45°C heat wears internal bearings and clutch plates. Symptoms: loud clicking on AC activation, hot air regardless of gas level.','AED 600–1,800'],
                ['fa-filter','Cabin Air Filter Blockage','A clogged cabin filter reduces airflow so severely that the system feels like it\'s not cooling - even with full gas and a healthy compressor. Often overlooked and easily fixed.','AED 80–150'],
                ['fa-wind','Condenser Blockage','Sand, dust, and debris from Dubai\'s environment block the front condenser, reducing heat exchange efficiency. Cleaning restores cooling performance without expensive parts.','AED 100–200'],
                ['fa-sliders-h','Expansion Valve Fault','A stuck or faulty expansion valve causes inconsistent cooling - ice forming on the evaporator, then sudden warm air. Common in vehicles over 5 years old.','AED 250–500'],
                ['fa-bolt','Electrical Fault','AC compressor relay, pressure switch, blower motor resistor, and control unit failures can mimic refrigerant problems. Our diagnostic process isolates electrical from mechanical causes.','AED 100–400'],
            ]; @endphp
            @foreach($faults as $f)
            <div class="col-md-6 col-lg-4">
                <div class="bg-white border rounded-3 p-4 h-100 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle me-3" style="width:44px;height:44px;">
                            <i class="fa {{ $f[0] }} text-white"></i></div>
                        <div>
                            <div class="fw-bold" style="font-size:.95rem;">{{ $f[1] }}</div>
                            <div class="text-primary" style="font-size:.8rem;font-weight:600;">{{ $f[4] ?? '' }}</div>
                        </div>
                    </div>
                    <p class="text-muted mb-2" style="font-size:.875rem;line-height:1.7;">{{ $f[2] }}</p>
                    <span class="badge bg-light text-dark border" style="font-size:.78rem;">Typical Cost: {{ $f[3] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══ REFRIGERANT TYPES ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Refrigerant Types</span>
                <h2 class="fw-bold mb-4">R134a vs R1234yf - Which Does Your Car Need?</h2>
                <p style="color:#444;line-height:1.8;">
                    One of the most common AC service errors in Dubai is using the wrong refrigerant type. Mixing refrigerants - or using R134a in a system designed for R1234yf - causes compressor damage and immediate system failure.
                </p>
                <div class="row g-3 mt-2">
                    <div class="col-12">
                        <div class="border rounded-3 p-4 bg-light">
                            <div class="fw-bold mb-2">R134a (HFC Refrigerant)</div>
                            <p class="text-muted mb-1" style="font-size:.875rem;">Used in most vehicles manufactured before 2017. Lower cost, widely available. Still the majority of cars on Dubai roads use R134a systems.</p>
                            <span class="badge bg-primary" style="font-size:.75rem;">Pre-2017 vehicles</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="border rounded-3 p-4 bg-light">
                            <div class="fw-bold mb-2">R1234yf (HFO Refrigerant)</div>
                            <p class="text-muted mb-1" style="font-size:.875rem;">Required in vehicles manufactured from 2017 onward by EU regulation (now adopted across most global manufacturers). Lower global warming potential. Higher cost. Cannot be substituted with R134a.</p>
                            <span class="badge bg-success" style="font-size:.75rem;">2017+ vehicles</span>
                        </div>
                    </div>
                </div>
                <p class="mt-3" style="color:#444;line-height:1.8;font-size:.875rem;"><i class="fa fa-info-circle text-primary me-1"></i>Our technicians check your vehicle's refrigerant type from the under-hood label before any gas is added - protecting your compressor and your wallet.</p>
            </div>
            <div class="col-lg-6">
                <div class="bg-light border rounded-3 p-4">
                    <h4 class="fw-bold mb-4">Our AC Service Process</h4>
                    @php $steps = [
                        ['1','System Pressure Check','Connect manifold gauges to verify high and low side pressure. Low pressure indicates refrigerant loss.'],
                        ['2','Electronic Leak Detection','Use UV dye injection and an electronic halogen detector to locate all leak points before any gas is added.'],
                        ['3','Leak Repair or Component Replacement','Seal minor leaks (O-rings, seals). Replace failed components (compressor, condenser, expansion valve) with confirmed quote.'],
                        ['4','System Evacuation','Vacuum pump removes all moisture and air from the system - critical to prevent compressor corrosion and ice blockages.'],
                        ['5','Refrigerant Recharge','Charge system to manufacturer specification using a calibrated refrigerant station. Correct weight - not guesswork.'],
                        ['6','Performance Verification','Measure vent outlet temperature. Verify correct vent temp of 4–8°C under load in Dubai ambient conditions.'],
                    ]; @endphp
                    @foreach($steps as $s)
                    <div class="d-flex mb-3 pb-3 border-bottom">
                        <div class="flex-shrink-0 me-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle text-white fw-bold"
                                 style="width:32px;height:32px;font-size:.85rem;">{{ $s[0] }}</div>
                        </div>
                        <div>
                            <div class="fw-semibold mb-1" style="font-size:.9rem;">{{ $s[1] }}</div>
                            <p class="text-muted mb-0" style="font-size:.82rem;line-height:1.6;">{{ $s[2] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ PRICING ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Pricing Guide</span>
            <h2 class="fw-bold mb-2">Car AC Service Prices in Dubai - Published Transparently</h2>
            <p class="text-muted">We publish our price ranges openly. You confirm the exact quote before any work begins.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover bg-white">
                        <thead class="table-dark">
                            <tr><th>AC Service</th><th>Price Range (AED)</th><th>Includes</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>AC Gas Refill (R134a)</td><td>AED 100 – 180</td><td>Gas + pressure test</td></tr>
                            <tr><td>AC Gas Refill (R1234yf)</td><td>AED 200 – 350</td><td>Gas + pressure test</td></tr>
                            <tr><td>AC Full Service + Gas</td><td>AED 250 – 450</td><td>Gas, leak check, clean, recharge</td></tr>
                            <tr><td>Compressor Replacement</td><td>AED 600 – 1,800</td><td>Part + labour + gas recharge</td></tr>
                            <tr><td>Condenser Replacement</td><td>AED 400 – 900</td><td>Part + labour + gas recharge</td></tr>
                            <tr><td>Expansion Valve Replacement</td><td>AED 250 – 500</td><td>Part + labour</td></tr>
                            <tr><td>Cabin Air Filter Replacement</td><td>AED 80 – 150</td><td>Filter + fitting</td></tr>
                            <tr><td>AC Diagnostic Only</td><td>AED 50 – 100</td><td>Full system check &amp; report</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-muted mt-2" style="font-size:.8rem;"><i class="fa fa-info-circle text-primary me-1"></i>Prices vary by vehicle make, model, and part availability. Exact quote confirmed before work begins. All prices include VAT.</p>
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
            <h2 class="fw-bold mb-2">Why Dubai Drivers Choose Us for AC Repair</h2>
        </div>
        <div class="row g-4">
            @php $reasons = [
                ['fa-search','Diagnose Before We Charge','We locate the exact fault before recommending any parts. No guesswork, no unnecessary compressor replacements when a seal repair will do.'],
                ['fa-snowflake','Correct Refrigerant, Always','We verify your vehicle\'s refrigerant specification before adding any gas. Mixing types destroys compressors - we prevent this.'],
                ['fa-tools','Calibrated Recharge Equipment','We use refrigerant stations with built-in scales to charge your system to the exact manufacturer weight - not an approximation.'],
                ['fa-shield-alt','Warranty on All Parts','All replacement components - compressors, condensers, valves - come with manufacturer warranty coverage.'],
                ['fa-map-marker-alt','Workshop in Al Satwa','Our workshop is centrally located with proper AC equipment - not a mobile tool kit. Complex AC work is done correctly in the workshop.'],
                ['fa-calendar-alt','Pre-Summer AC Check','We offer a seasonal AC health check before the Dubai summer peak - identifying issues when they\'re minor, not critical.'],
            ]; @endphp
            @foreach($reasons as $r)
            <div class="col-md-6 col-lg-4">
                <div class="d-flex h-100 border rounded-3 p-4 bg-white">
                    <div class="flex-shrink-0 me-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle" style="width:46px;height:46px;">
                            <i class="fa {{ $r[0] }} text-white"></i></div>
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
            <h2 class="fw-bold mb-2">Car AC Repair Dubai - Common Questions Answered</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="acFaq">
                    @php $faqs = [
                        ['Why is my car AC not cooling properly in Dubai?','The most common causes are low refrigerant due to a leak, a failing compressor, a blocked condenser, or a faulty expansion valve. Dubai\'s heat accelerates wear on all these components. The only reliable way to identify the cause is a proper pressure test and leak detection - not simply adding more gas, which only delays the problem if a leak is present.'],
                        ['How often should I service my car AC in Dubai?','We recommend an AC health check every 12 months - ideally before the summer peak in April. This includes a pressure check, leak inspection, cabin filter replacement, and condenser cleaning. Catching a minor refrigerant loss early costs AED 150–200. Leaving it until compressor failure costs AED 600–1,800.'],
                        ['How long does AC gas last in a car?','A correctly sealed AC system loses no refrigerant. If your car needs gas refilling every year, there is a leak that needs repairing - not just topping up. We locate and repair the leak source before recharging, so the gas you pay for stays in the system.'],
                        ['Is it safe to drive in Dubai without a working AC?','For short distances in cooler months, yes. But from April to October, Dubai temperatures regularly exceed 45°C - making a non-functional AC a serious health risk, particularly for children and the elderly. We treat AC failure as an urgent repair, not a cosmetic issue.'],
                        ['How much does AC compressor replacement cost in Dubai?','Compressor replacement costs AED 600 to 1,800 depending on the vehicle make and whether a genuine OEM or high-quality aftermarket unit is used. We provide a clear written quote before any work begins. European vehicle compressors typically cost more than Japanese units due to parts availability.'],
                        ['Can you recharge my car AC at my home or office?','Simple gas recharges can be performed at your location if the system is intact. However, if a leak or component fault is suspected, we recommend bringing the vehicle to our Al Satwa workshop where we have the full diagnostic equipment needed to locate leaks and test system performance properly.'],
                    ]; @endphp
                    @foreach($faqs as $i => $faq)
                    <div class="accordion-item border rounded-3 mb-3" style="border-color:#e4e8ec!important;">
                        <h3 class="accordion-header" id="acHead{{ $i }}">
                            <button class="accordion-button {{ $i>0?'collapsed':'' }} fw-semibold rounded-3"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#acCollapse{{ $i }}"
                                    aria-expanded="{{ $i===0?'true':'false' }}"
                                    style="font-size:.95rem;background:{{ $i===0?'#f0f7ff':'#fff' }};">
                                {{ $faq[0] }}
                            </button>
                        </h3>
                        <div id="acCollapse{{ $i }}" class="accordion-collapse collapse {{ $i===0?'show':'' }}"
                             data-bs-parent="#acFaq">
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
                ['fa-filter','Air Filter Replacement Dubai','Cabin filter impacts AC airflow directly','engine-oil-change-dubai'],
                ['fa-tools','Car Maintenance Dubai','Full service package including AC check','car-maintenance-dubai'],
                ['fa-car','Mobile Car Repair Dubai','AC recharge at your location','mobile-car-repair-dubai'],
                ['fa-bolt','Car Repair Dubai','Complete Car Repair Services','car-repair-dubai'],
            ]; @endphp
            @foreach($related as $r)
            <div class="col-md-6 col-lg-3">
                <a href="{{ route($r[3]) }}" class="text-decoration-none">
                    <div class="bg-white border rounded-3 p-4 h-100 text-center"
                         onmouseover="this.style.boxShadow='0 4px 16px rgba(0,0,0,.1)'"
                         onmouseout="this.style.boxShadow='none'" style="transition:box-shadow .2s;">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mx-auto mb-3" style="width:48px;height:48px;">
                            <i class="fa {{ $r[0] }} text-white"></i></div>
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
                <h2 class="fw-bold text-white mb-2">AC Not Cooling? Book a Same-Day Diagnosis.</h2>
                <p class="text-white-50 mb-0">Open 7AM–10PM daily &bull; Al Satwa workshop &bull; All Dubai areas covered</p>
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
      "@id": "https://dubaicarrepairservice.com/car-ac-repair-dubai#service",
      "name": "Car AC Repair Dubai",
      "url": "https://dubaicarrepairservice.com/car-ac-repair-dubai",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://dubaicarrepairservice.com/car-ac-repair-dubai"
      },
      "serviceType": "Car Air Conditioning Repair",
      "description": "Professional car AC repair in Dubai including AC gas refill, compressor repair, refrigerant leak detection, condenser replacement, expansion valve repair, AC diagnostics and complete air conditioning maintenance for all vehicle makes and models.",
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
      "@id": "https://dubaicarrepairservice.com/car-ac-repair-dubai#breadcrumb",
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
          "name": "Car AC Repair Dubai",
          "item": "https://dubaicarrepairservice.com/car-ac-repair-dubai"
        }
      ]
    },

    {
      "@type": "FAQPage",
      "@id": "https://dubaicarrepairservice.com/car-ac-repair-dubai#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "Why is my car AC not cooling in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The most common causes are low refrigerant due to a leak, a failing compressor, a blocked condenser, a faulty expansion valve or electrical system issues. Professional diagnostics and leak detection help identify the exact cause."
          }
        },

        {
          "@type": "Question",
          "name": "How often should I service my car AC in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We recommend a complete AC inspection once a year before the Dubai summer season. Regular servicing helps maintain cooling performance and can prevent expensive compressor repairs."
          }
        },

        {
          "@type": "Question",
          "name": "How much does AC gas refill cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AC gas refill costs vary depending on the refrigerant type and vehicle model. R134a systems generally cost less than R1234yf systems. A leak inspection is recommended before any refill service."
          }
        },

        {
          "@type": "Question",
          "name": "What is the difference between R134a and R1234yf refrigerant?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "R134a is commonly used in older vehicles, while R1234yf is used in many newer vehicles. These refrigerants are not interchangeable and should never be mixed because doing so can damage the air conditioning system."
          }
        }

      ]
    }

  ]
}
</script>
@endpush
@endsection