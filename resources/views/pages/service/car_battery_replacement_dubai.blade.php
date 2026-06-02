@extends('layout.masterhome')
@php
    $meta_title       = 'Car Battery Replacement Dubai | Same Day | 056 612 1423';
    $meta_description = 'Dead car battery in Dubai? Fast on-site replacement at home, office or roadside. Certified mechanics, genuine batteries, transparent pricing. Call 056 612 1423.';
    $meta_keywords    = 'car battery replacement dubai, car battery dubai, battery change dubai, dead battery dubai, car battery near me';
@endphp
@section('content')

{{-- ═══ HERO ═══ --}}
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
     style="background:linear-gradient(135deg,#001516 0%,#002a2a 100%);min-height:320px;display:flex;align-items:center;">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <p class="text-white-50 mb-2" style="font-size:.8rem;letter-spacing:.12em;text-transform:uppercase;font-weight:600;">
                    Al Satwa, Dubai &bull; Same-Day Service &bull; All Makes &amp; Models
                </p>
                <h1 class="display-4 text-white fw-bold mb-3">
                    Car Battery Replacement Dubai - Fast, Reliable, On-Site
                </h1>
                <p class="text-white mb-4" style="font-size:1.05rem;opacity:.85;max-width:620px;margin:0 auto;">
                    Dead battery? Our certified mechanics come to your home, office, or roadside anywhere in Dubai - tested, replaced, and back on the road within the hour.
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
                        <li class="breadcrumb-item text-white active" aria-current="page">Car Battery Replacement Dubai</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

{{-- ═══ INTRO + WHAT IS SERVICE ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="d-inline-block border  border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Service Overview</span>
                <h2 class="fw-bold mb-4">Car Battery Replacement in Dubai - What You Need to Know</h2>
                <p style="color:#444;line-height:1.8;">
                    Car battery replacement in Dubai is one of the most frequently requested auto services - and for good reason. Dubai's extreme heat accelerates the chemical breakdown inside lead-acid batteries, shortening their lifespan to just <strong>2–3 years</strong> compared to 4–5 years in cooler climates. Temperatures regularly exceeding 45°C cause battery fluid to evaporate, plates to corrode, and charge capacity to drop - often without warning.
                </p>
                <p style="color:#444;line-height:1.8;">
                    At Dubai Car Repair Service, our mechanics perform a <strong>full battery health test</strong> before recommending any replacement. We measure cold cranking amps (CCA), state of charge, and internal resistance - giving you an honest assessment, not a sales pitch. If your battery can be recharged and has healthy cells, we'll tell you. If it needs replacing, we carry a range of <strong>genuine Exide, Bosch, Varta, and Amaron batteries</strong> and fit the correct specification for your vehicle on the spot.
                </p>
                <p style="color:#444;line-height:1.8;">
                    Our mobile mechanics cover all Dubai areas - from <strong>Al Satwa and Jumeirah</strong> to <strong>Business Bay, Dubai Marina, and JVC</strong> - so you never need to call a tow truck for a dead battery.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative" style="min-height:380px;">
                    <img src="{{ asset('public/img/service5.webp') }}"
                         alt="Car Battery Replacement Dubai - Certified Mechanic Testing Battery at Al Satwa"
                         class="w-100 rounded-3 shadow" style="object-fit:cover;height:400px;">
                    <div class="position-absolute bottom-0 end-0 m-3 bg-primary text-white rounded-3 px-3 py-2 shadow text-center">
                        <div class="fw-bold" style="font-size:1.4rem;line-height:1;">AED 150+</div>
                        <div style="font-size:.75rem;opacity:.9;">Starting Price</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ WARNING SIGNS ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Warning Signs</span>
            <h2 class="fw-bold mb-2">8 Signs Your Car Battery Needs Replacing in Dubai</h2>
            <p class="text-muted">Dubai's heat accelerates battery failure. Recognise these warning signs early and avoid being stranded.</p>
        </div>
        <div class="row g-4">
            @php $signs = [
                ['fa-car','Slow Engine Crank','Engine cranks sluggishly or hesitates before starting - the clearest indicator of a weak battery losing cranking power.'],
                ['fa-lightbulb','Dashboard Warning Light','The battery or check engine light illuminates - your car\'s system has detected a voltage or charging fault.'],
                ['fa-plug','Frequent Jump Starts','If you\'ve jump-started your car more than twice this month, the battery is failing, not recovering.'],
                ['fa-power-off','Electrical Accessories Failing','Power windows, radio, or air conditioning behaving erratically often points to insufficient battery voltage.'],
                ['fa-tint','Battery Swelling or Leaking','Physical swelling or acid leakage around the terminals indicates internal cell damage from heat exposure.'],
                ['fa-calendar-alt','Battery Over 2 Years Old','In Dubai\'s climate, any battery older than 2 years should be tested at every service interval - not just when problems appear.'],
                ['fa-exclamation-triangle','Rotten Egg Smell','A sulphurous odour near the battery indicates a damaged or overcharging cell - a safety concern requiring immediate attention.'],
                ['fa-moon','Car Won\'t Start After Sitting','If your car fails to start after standing for 24+ hours, your battery lacks the reserve capacity needed for the UAE climate.'],
            ]; @endphp
            @foreach($signs as $s)
            <div class="col-md-6 col-lg-3">
                <div class="bg-white border rounded-3 p-4 h-100 text-center shadow-sm">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mx-auto mb-3"
                         style="width:52px;height:52px;"><i class="fa {{ $s[0] }} text-white"></i></div>
                    <h5 class="fw-bold mb-2" style="font-size:.95rem;">{{ $s[1] }}</h5>
                    <p class="text-muted mb-0" style="font-size:.85rem;line-height:1.6;">{{ $s[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══ BATTERY BRANDS ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Battery Types &amp; Brands</span>
                <h2 class="fw-bold mb-4">Genuine Battery Brands for Dubai's Climate</h2>
                <p style="color:#444;line-height:1.8;">
                    Not all car batteries are built equally for the UAE environment. We stock and fit batteries specifically rated for extreme heat - including AGM (Absorbent Glass Mat) and EFB (Enhanced Flooded Battery) types, which resist heat degradation significantly better than standard flooded lead-acid units.
                </p>
                <div class="row g-3 mt-2">
                    @php $brands = [
                        ['Exide','✅ Heat-resistant, UAE-certified, 2-yr warranty'],
                        ['Bosch','✅ OEM supplier for BMW, Mercedes, VW - exact fit'],
                        ['Varta','✅ German engineering, AGM range for stop-start cars'],
                        ['Amaron','✅ Designed for tropical heat, Indian subcontinent certified'],
                        ['ACDelco','✅ OEM brand for GM, Chevrolet, and American vehicles'],
                    ]; @endphp
                    @foreach($brands as $b)
                    <div class="col-12">
                        <div class="d-flex align-items-start bg-light border rounded-3 p-3">
                            <div class="fw-bold me-3" style="min-width:70px;color:#001516;">{{ $b[0] }}</div>
                            <div class="text-muted" style="font-size:.875rem;">{{ $b[1] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-light border rounded-3 p-4">
                    <h4 class="fw-bold mb-4">Battery Types Explained</h4>
                    @php $btypes = [
                        ['Standard Flooded (SLI)','Most common type. Suitable for standard petrol vehicles without stop-start technology. Affordable, widely available.','⭐⭐⭐'],
                        ['EFB - Enhanced Flooded','Improved cycle life vs standard. Suitable for vehicles with basic stop-start systems. Better heat tolerance.','⭐⭐⭐⭐'],
                        ['AGM - Absorbent Glass Mat','Premium choice for modern vehicles with advanced stop-start, regenerative braking, and high electrical loads. Best heat resistance.','⭐⭐⭐⭐⭐'],
                    ]; @endphp
                    @foreach($btypes as $bt)
                    <div class="mb-4 pb-3 border-bottom">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-semibold">{{ $bt[0] }}</span>
                            <span>{{ $bt[2] }}</span>
                        </div>
                        <p class="text-muted mb-0" style="font-size:.875rem;">{{ $bt[1] }}</p>
                    </div>
                    @endforeach
                    <p class="text-muted mb-0" style="font-size:.8rem;"><i class="fa fa-info-circle text-primary me-1"></i>Our mechanics recommend the correct type based on your vehicle's specifications - not upsell incentives.</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ OUR PROCESS ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Our Process</span>
            <h2 class="fw-bold mb-2">How We Replace Your Car Battery in Dubai</h2>
            <p class="text-muted">From your call to your car starting - a clear, honest process with no surprises.</p>
        </div>
        <div class="row g-4 justify-content-center">
            @php $steps = [
                ['1','Call or WhatsApp','Contact us at 056 612 1423 or WhatsApp with your location and car details. We\'ll confirm availability and give you an estimated arrival time.'],
                ['2','Mechanic Arrives','Our certified mechanic arrives at your location - home, office, car park, or roadside - equipped with testing equipment and a range of battery stock.'],
                ['3','Full Battery Test','We perform a professional battery load test measuring CCA, voltage, and internal resistance. We show you the results and explain them clearly.'],
                ['4','Quote Confirmed','If replacement is needed, you receive a clear upfront price before any work begins. No hidden charges, no pressure tactics.'],
                ['5','Battery Fitted','The correct battery is fitted to manufacturer specification. Terminals are cleaned, connections torqued properly, and the charging system verified.'],
                ['6','System Verification','We test the alternator output, verify correct voltage under load, and reset any battery-related warning lights on your dashboard.'],
            ]; @endphp
            @foreach($steps as $s)
            <div class="col-md-6 col-lg-4">
                <div class="d-flex align-items-start bg-white border rounded-3 p-4 h-100">
                    <div class="flex-shrink-0 me-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle text-white fw-bold"
                             style="width:40px;height:40px;font-size:.9rem;">{{ $s[0] }}</div>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2" style="font-size:.95rem;">{{ $s[1] }}</h5>
                        <p class="text-muted mb-0" style="font-size:.875rem;line-height:1.7;">{{ $s[2] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══ PRICING ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Transparent Pricing</span>
                <h2 class="fw-bold mb-4">Car Battery Replacement Cost in Dubai</h2>
                <p style="color:#444;line-height:1.8;">
                    Battery replacement costs in Dubai vary based on battery type, brand, and vehicle requirements. We publish our price ranges openly - something no competitor in Al Satwa does. You will always receive a confirmed quote before we begin.
                </p>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr><th>Battery Type</th><th>Price Range (AED)</th><th>Warranty</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Standard Flooded (SLI)</td><td>AED 150 – 250</td><td>12 months</td></tr>
                            <tr><td>EFB (Enhanced Flooded)</td><td>AED 250 – 380</td><td>18 months</td></tr>
                            <tr><td>AGM (Premium)</td><td>AED 380 – 650</td><td>24 months</td></tr>
                            <tr><td>Battery Health Test Only</td><td>AED 30 – 50</td><td>N/A</td></tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-muted mt-2" style="font-size:.8rem;"><i class="fa fa-info-circle text-primary me-1"></i>Prices include supply, installation, and system test. Labour included. Old battery disposed of responsibly.</p>
            </div>
                <div class="col-lg-6">
                    <div class="bg-light border rounded-3 p-4">
                        <h4 class="fw-bold mb-4">Vehicles We Service</h4>
                        <!-- Added row-cols-2 to force exact structural halves on mobile -->
                        <div class="row g-2 row-cols-2 row-cols-md-3">
                            @php $makes = ['Toyota','Nissan','Honda','Mitsubishi','Lexus','BMW','Mercedes-Benz','Audi','Volkswagen','Kia','Hyundai','Ford','Chevrolet','Jeep','Land Rover','Porsche']; @endphp
                            @foreach($makes as $m)
                            <div class="col">
                                <!-- Added style flex-shrink-0 on the check icon to prevent it from getting squished by long words -->
                                <div class="d-flex align-items-center gap-2 py-1 text-truncate">
                                    <i class="fa fa-check-circle text-primary flex-shrink-0" style="font-size:.8rem; border-color: #001516;"></i>
                                    <span class="text-truncate" style="font-size:.875rem;">{{ $m }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

{{-- ═══ WHY CHOOSE US ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Why Choose Us</span>
            <h2 class="fw-bold mb-2">Why Dubai Drivers Trust Us for Battery Replacement</h2>
        </div>
        <div class="row g-4">
            @php $reasons = [
                ['fa-map-marker-alt','Mobile Service Across Dubai','We come to you - home, office, car park, or roadside. No tow truck, no waiting room, no inconvenience.'],
                ['fa-bolt','Same-Day, On-the-Spot Fitting','Most battery replacements are completed in under 45 minutes. You confirm the price, we fit, you drive away.'],
                ['fa-shield-alt','Diagnostic-First Approach','We test before we replace. If your battery can be saved, we\'ll tell you - and explain how to extend its life.'],
                ['fa-award','Genuine, Warranted Batteries','Every battery we fit is genuine, brand-new, and backed by a manufacturer warranty of 12–24 months.'],
                ['fa-receipt','Transparent Pricing','The price we quote is the price you pay. No call-out fees hidden in small print.'],
                ['fa-star','4.8★ Google Rating','Our battery service reviews speak for themselves. Read what Dubai drivers say about our speed and honesty.'],
            ]; @endphp
            @foreach($reasons as $r)
            <div class="col-md-6 col-lg-4">
                <div class="d-flex h-100 bg-white border rounded-3 p-4">
                    <div class="flex-shrink-0 me-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle"
                             style="width:46px;height:46px;"><i class="fa {{ $r[0] }} text-white"></i></div>
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
        <div class="text-center mx-auto mb-5" style="max-width:600px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">FAQ</span>
            <h2 class="fw-bold mb-2">Car Battery Replacement Dubai - Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="batteryFaq">
                    @php $faqs = [
                        ['How long does a car battery last in Dubai?','In Dubai\'s climate, most car batteries last between 2 and 3 years. The extreme heat - regularly above 45°C - accelerates internal corrosion and fluid evaporation, significantly shortening the lifespan compared to 4–5 years typical in cooler countries. We recommend an annual battery health check for any battery over 18 months old.'],
                        ['Can you replace my car battery at my home or office?','Yes - our mobile mechanics carry a full range of batteries and testing equipment. We come to your home, office, car park, or roadside anywhere in Dubai. No towing required. Most on-site replacements are completed within 45 minutes.'],
                        ['How do I know if my battery needs replacing or just charging?','A professional load test is the only reliable way to determine this. We measure your battery\'s cold cranking amps (CCA) and internal resistance. A battery that tests below 70% of its rated CCA on a load test should be replaced - recharging a failing battery only delays the inevitable and risks leaving you stranded.'],
                        ['What battery brands do you carry?','We stock Exide, Bosch, Varta, Amaron, and ACDelco batteries - all genuine, brand-new units with manufacturer warranties. We also carry AGM and EFB types for modern vehicles with stop-start technology. We fit the correct specification for your car, not the cheapest available.'],
                        ['Does my car need an AGM battery?','If your vehicle has stop-start technology, regenerative braking, or a high electrical load (advanced infotainment, dashcam, etc.), your manufacturer specification requires an AGM battery. Fitting a standard flooded battery in an AGM-spec car will cause premature failure within months. Our mechanics check your vehicle\'s specification before recommending any battery type.'],
                        ['How much does car battery replacement cost in Dubai?','Our battery replacement prices start at AED 150 for a standard unit and range up to AED 650 for premium AGM batteries for European or luxury vehicles. The price includes the battery, installation, and system test - no hidden labour charges. You receive a confirmed quote before any work begins.'],
                        ['Can a new battery fix electrical problems in my car?','A weak or failed battery can cause a wide range of electrical symptoms - dim lights, slow windows, infotainment resets, and warning lights. However, some electrical faults originate in the alternator, wiring, or ECU rather than the battery itself. We test both the battery and the charging system to pinpoint the correct cause before recommending any parts.'],
                    ]; @endphp
                    @foreach($faqs as $i => $faq)
                    <div class="accordion-item border rounded-3 mb-3" style="border-color:#e4e8ec!important;">
                        <h3 class="accordion-header" id="bfHead{{ $i }}">
                            <button class="accordion-button {{ $i>0?'collapsed':'' }} fw-semibold rounded-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#bfCollapse{{ $i }}"
                                    aria-expanded="{{ $i===0?'true':'false' }}"
                                    style="font-size:.95rem;background:{{ $i===0?'#f0f7ff':'#fff' }};">
                                {{ $faq[0] }}
                            </button>
                        </h3>
                        <div id="bfCollapse{{ $i }}" class="accordion-collapse collapse {{ $i===0?'show':'' }}"
                             data-bs-parent="#batteryFaq">
                            <div class="accordion-body text-muted" style="font-size:.9rem;line-height:1.8;">{{ $faq[1] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ INTERNAL LINKS / RELATED SERVICES ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="fw-bold">Related Services You May Need</h3>
        </div>
        <div class="row g-3 justify-content-center">
            @php $related = [
                ['fa-bolt','Mobile Car Repair Dubai','We come to you - any service, anywhere','mobile-car-repair-dubai'],
                ['fa-cog','Car Engine Service Dubai','Full engine diagnostic and repair','car-engine-service-dubai'],
                ['fa-car','Car Repair Dubai','Advance Car Repair Service','car-repair-dubai'],
                ['fa-exclamation-triangle','Roadside Assistance Dubai','Emergency breakdown help - 30-min response','roadside-assistance-dubai'],
            ]; @endphp
            @foreach($related as $r)
            <div class="col-md-6 col-lg-3">
                <a href="{{ route($r[3]) }}" class="text-decoration-none">
                    <div class="bg-white border rounded-3 p-4 h-100 text-center"
                         style="transition:box-shadow .2s;"
                         onmouseover="this.style.boxShadow='0 4px 16px rgba(0,0,0,.1)'"
                         onmouseout="this.style.boxShadow='none'">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mx-auto mb-3"
                             style="width:48px;height:48px;"><i class="fa {{ $r[0] }} text-white"></i></div>
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
                <h2 class="fw-bold text-white mb-2">Dead Battery? We're On Our Way.</h2>
                <p class="text-white-50 mb-0">Open 7AM–10PM daily &bull; All Dubai areas covered &bull; Genuine batteries, guaranteed</p>
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

{{-- FAQ SCHEMA --}}
@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Service",
      "@id": "https://dubaicarrepairservice.com/car-battery-replacement-dubai#service",
      "name": "Car Battery Replacement Dubai",
      "url": "https://dubaicarrepairservice.com/car-battery-replacement-dubai",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://dubaicarrepairservice.com/car-battery-replacement-dubai"
      },
      "serviceType": "Car Battery Replacement",
      "description": "Professional car battery replacement in Dubai with mobile battery installation at your home, office, parking area or roadside. We supply and install genuine batteries for all vehicle makes and models, including AGM and standard batteries.",
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
          "minPrice": "150",
          "maxPrice": "650",
          "priceCurrency": "AED"
        }
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://dubaicarrepairservice.com/car-battery-replacement-dubai#breadcrumb",
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
          "name": "Car Battery Replacement Dubai",
          "item": "https://dubaicarrepairservice.com/car-battery-replacement-dubai"
        }
      ]
    },

    {
      "@type": "FAQPage",
      "@id": "https://dubaicarrepairservice.com/car-battery-replacement-dubai#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "How long does a car battery last in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Due to Dubai's extreme temperatures, most car batteries last between 2 and 3 years. Heat accelerates battery wear and can significantly reduce battery life compared to cooler climates."
          }
        },

        {
          "@type": "Question",
          "name": "Can you replace my car battery at my home or office in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our mobile battery replacement service is available across Dubai. We can replace your battery at your home, office, parking area or roadside location without requiring vehicle towing."
          }
        },

        {
          "@type": "Question",
          "name": "How much does car battery replacement cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Battery replacement costs depend on battery size, vehicle requirements and battery technology. Standard batteries generally cost less than AGM batteries. Installation and system testing are included with our service."
          }
        },

        {
          "@type": "Question",
          "name": "Does my car need an AGM battery?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Many vehicles equipped with stop-start systems or advanced electrical features require AGM batteries. Our technicians verify the manufacturer's specifications before recommending a replacement battery."
          }
        },

        {
          "@type": "Question",
          "name": "What battery brands do you stock in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We supply genuine batteries from leading brands including Exide, Bosch, Varta, Amaron and ACDelco. Battery availability may vary depending on vehicle requirements and stock levels."
          }
        }

      ]
    }

  ]
}
</script>
@endpush
@endsection