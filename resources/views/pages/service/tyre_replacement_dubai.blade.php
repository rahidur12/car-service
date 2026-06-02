@extends('layout.masterhome')
@php
    $meta_title = 'Tyre Replacement Dubai | Balancing & Alignment | 056 612 1423';
    $meta_description = 'Fast tyre replacement, balancing & wheel alignment in Dubai. All brands. Mobile or workshop. Transparent pricing. Call 056 612 1423 - open 7AM–10PM.';
    $meta_keywords = 'tyre replacement dubai, car tyres dubai, wheel alignment dubai, tyre change near me dubai, tyre balancing dubai';
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
                        Al Satwa, Dubai &bull; All Tyre Brands &bull; Alignment &amp; Balancing
                    </p>
                    <h1 class="display-4 text-white fw-bold mb-3">
                        Tyre Replacement Dubai - Fast, Affordable Tyre Change &amp; Alignment
                    </h1>
                    <p class="text-white mb-4" style="font-size:1.05rem;opacity:.85;max-width:640px;margin:0 auto;">
                        We supply and fit tyres for all vehicle types in Dubai - from compact saloons to full-size SUVs.
                        Computerised wheel alignment, balancing, and rotation included. Workshop or mobile tyre service
                        available.
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
                                <a href="{{ route('car-repair-dubai') }}"
                                    class="text-white-50 text-decoration-none">Services</a>
                            </li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Tyre Replacement Dubai</li>
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
                    <h2 class="fw-bold mb-4">Tyre Replacement in Dubai - What the UAE Climate Does to Your Tyres</h2>
                    <p style="color:#444;line-height:1.8;">
                        Tyre replacement in Dubai is needed more frequently - and for different reasons - than in cooler
                        climates. While tread wear is the obvious indicator, <strong>heat degradation and UV damage</strong>
                        are the leading causes of dangerous tyre failure on UAE roads. Rubber compounds harden and crack
                        under sustained exposure to 60°C+ road surface temperatures and intense solar UV radiation, making
                        the tyre sidewall brittle and prone to sudden blowout - even when tread depth appears adequate.
                    </p>
                    <p style="color:#444;line-height:1.8;">
                        The UAE standard - and international safety consensus - is that <strong>no tyre more than 5 years
                            old should remain in service</strong>, regardless of tread depth. The manufacturing date is
                        encoded in the last four digits of the DOT code on every tyre sidewall (week and year format). This
                        is one of the most overlooked safety issues we find on pre-purchase inspections and annual safety
                        checks.
                    </p>
                    <p style="color:#444;line-height:1.8;">
                        At our <strong>222 Al Satwa Road workshop</strong>, we stock tyres across all vehicle categories -
                        from city cars to heavy SUVs - from Bridgestone, Michelin, Pirelli, Continental, Yokohama, and more.
                        We perform computerised 4-wheel alignment on all replacement jobs, ensuring your new tyres wear
                        evenly from the first kilometre.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative" style="min-height:380px;">
                        <img src="{{ asset('public/img/service3.webp') }}"
                            alt="Tyre Replacement Dubai - Wheel Alignment at Al Satwa Workshop"
                            class="w-100 rounded-3 shadow" style="object-fit:cover;height:400px;">
                        <div
                            class="position-absolute bottom-0 end-0 m-3 bg-primary text-white rounded-3 px-3 py-2 shadow text-center">
                            <div class="fw-bold" style="font-size:1.4rem;line-height:1;">AED 120+</div>
                            <div style="font-size:.75rem;opacity:.9;">Per Tyre From</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ═══ WHEN TO REPLACE ═══ --}}
    <div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width:600px;">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                    style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">When to Replace</span>
                <h2 class="fw-bold mb-2">8 Signs Your Tyres Need Replacing in Dubai</h2>
                <p class="text-muted">In Dubai, tyres can become dangerous before they look worn. Know these signs.</p>
            </div>
            <div class="row g-4">
                @php
                    $signs = [
                        ['fa-ruler', 'Tread Below 1.6mm', 'The UAE legal minimum is 1.6mm tread depth across the central three-quarters of the tread. We recommend replacement at 2.5mm for Dubai\'s high-speed roads - reduced tread significantly increases wet-road stopping distances.'],
                        ['fa-calendar-alt', 'Tyre Over 5 Years Old', 'Check the DOT date code on the sidewall. Four digits: first two = week, last two = year (e.g. 2421 = week 24 of 2021). Any tyre over 5 years should be replaced regardless of tread - heat and UV degrade internal rubber compounds invisibly.'],
                        ['fa-exclamation-circle', 'Cracks in Sidewall or Tread', 'Fine cracks in the sidewall or tread grooves indicate rubber oxidation and UV degradation. These cracks reduce the tyre\'s ability to contain air pressure under heat and load - blowout risk increases significantly.'],
                        ['fa-arrows-alt-h', 'Bulge or Blister on Sidewall', 'A bulge indicates the internal carcass cords have broken - typically from a pothole impact or kerb strike. This is a structural failure and the tyre must be replaced immediately. It will not hold pressure safely.'],
                        ['fa-arrows-alt-v', 'Uneven Tread Wear', 'Wear on only the inner or outer edge indicates incorrect wheel alignment. Wear down the centre indicates chronic over-inflation. Uneven wear means your alignment or pressure management needs correcting at the same time as replacement.'],
                        ['fa-car-crash', 'Vibration Through Steering Wheel', 'Steering vibration at highway speed indicates a tyre that has developed a flat spot, internal imbalance, or separated belt. Balancing will not fix a structurally damaged tyre - replacement is required.'],
                        ['fa-volume-up', 'Constant Road Noise After Service', 'If a tyre has developed unusual noise that wasn\'t there before - particularly a rhythmic thumping - the internal structure may have delaminated. Road noise can also indicate cupping from worn shock absorbers.'],
                        ['fa-tachometer-alt', 'Frequent Pressure Loss', 'A tyre that requires inflation more than once a month has a slow leak - either from a nail or screw in the tread, a cracked bead, or valve stem failure. Puncture repair or replacement is required.'],
                    ];
                @endphp
                @foreach($signs as $s)
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-white border rounded-3 p-4 h-100 text-center shadow-sm">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mx-auto mb-3"
                                style="width:48px;height:48px;">
                                <i class="fa {{ $s[0] }} text-white"></i>
                            </div>
                            <h5 class="fw-bold mb-2" style="font-size:.9rem;">{{ $s[1] }}</h5>
                            <p class="text-muted mb-0" style="font-size:.82rem;line-height:1.6;">{{ $s[2] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ═══ TYRE BRANDS + TYPES ═══ --}}
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                        style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Tyre Brands</span>
                    <h2 class="fw-bold mb-4">Tyre Brands We Supply &amp; Fit in Dubai</h2>
                    <div class="row g-3">
                        @php
                            $brands = [
                                ['Bridgestone', 'Premium Japanese brand. Excellent heat resistance. UAE market bestseller for SUVs and saloons.'],
                                ['Michelin', 'French premium brand. Superior wet and dry performance. Long tread life. Recommended for European vehicles.'],
                                ['Pirelli', 'Italian performance brand. Preferred for BMW, Mercedes, and performance cars. Excellent high-speed stability.'],
                                ['Continental', 'German engineering. OEM supplier for Volkswagen, Audi, Mercedes. Strong wet braking performance.'],
                                ['Yokohama', 'Japanese brand. Excellent value-to-performance ratio. Popular for Japanese and Korean vehicles in UAE.'],
                                ['Hankook', 'Korean brand. Strong performance in heat. Very competitive pricing for budget-conscious buyers.'],
                                ['Dunlop', 'Good all-round performance brand. Wide range for saloons, SUVs, and 4WD applications.'],
                                ['Toyo', 'Japanese brand popular for Toyota Land Cruiser, Patrol, and 4WD off-road applications in the UAE.'],
                            ];
                        @endphp
                        @foreach($brands as $b)
                            <div class="col-12">
                                <div class="d-flex align-items-start bg-light border rounded-3 p-3">
                                    <div class="fw-bold me-3 text-primary" style="min-width:90px;font-size:.9rem;">{{ $b[0] }}
                                    </div>
                                    <div class="text-muted" style="font-size:.85rem;">{{ $b[1] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                        style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Tyre Selection</span>
                    <h2 class="fw-bold mb-4">Which Tyre Type Is Right for Your Vehicle in Dubai?</h2>
                    @php
                        $types = [
                            ['Summer / Performance Tyres', 'Standard choice for Dubai - optimised for dry and wet roads in warm temperatures. Do not choose winter-rated tyres: their softer compound overheats in Dubai\'s heat.', 'AED 120 – 350/tyre'],
                            ['SUV & 4WD Tyres (H/T)', 'Highway terrain tyres for Dubai SUVs - Nissan Patrol, Toyota Land Cruiser, Mitsubishi Pajero. Prioritise comfort and fuel economy on paved roads while handling occasional off-road terrain.', 'AED 180 – 500/tyre'],
                            ['All-Terrain Tyres (A/T)', 'For vehicles used on both highways and off-road desert or mountain terrain. Aggressive tread pattern, reinforced sidewalls. Higher road noise than H/T tyres on tarmac.', 'AED 250 – 700/tyre'],
                            ['Run-Flat Tyres', 'Fitted as standard on BMW and some Mercedes models. Can be driven at up to 80km/h for 80km after a puncture. Require TPMS sensor compatibility. Cannot be repaired after a puncture.', 'AED 450 – 900/tyre'],
                            ['UHP (Ultra High Performance)', 'For sports cars, performance saloons, and AMG/M-Sport models. Speed ratings V, W, Y (above 240km/h). Premium brands only - do not fit budget tyres on high-performance vehicles.', 'AED 350 – 1,200/tyre'],
                        ];
                    @endphp
                    @foreach($types as $t)
                        <div class="border rounded-3 p-3 mb-3 bg-light">
                            <div class="d-flex justify-content-between align-items-start mb-1">
                                <span class="fw-bold" style="font-size:.9rem;">{{ $t[0] }}</span>
                                <span class="badge bg-primary ms-2"
                                    style="font-size:.75rem;white-space:nowrap;">{{ $t[2] }}</span>
                            </div>
                            <p class="text-muted mb-0" style="font-size:.84rem;line-height:1.6;">{{ $t[1] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- ═══ ALIGNMENT & BALANCING ═══ --}}
    <div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width:600px;">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                    style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Alignment &amp; Balancing</span>
                <h2 class="fw-bold mb-2">Wheel Alignment &amp; Balancing in Dubai - Why Both Matter</h2>
                <p class="text-muted">Fitting new tyres without correct alignment and balancing wastes your investment. We
                    include both with every tyre change.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="bg-white border rounded-3 p-4 h-100 shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                                style="width:46px;height:46px;flex-shrink:0;">
                                <i class="fa fa-crosshairs text-white"></i>
                            </div>
                            <h5 class="fw-bold mb-0">Computerised 4-Wheel Alignment</h5>
                        </div>
                        <p class="text-muted mb-3" style="font-size:.875rem;line-height:1.7;">
                            Our laser alignment system measures all four wheels simultaneously - adjusting camber, caster,
                            and toe to manufacturer specification. Incorrect alignment causes new tyres to wear unevenly
                            within weeks and increases fuel consumption by up to 5%. Dubai\'s speed bumps and kerb strikes
                            knock alignment out of specification frequently.
                        </p>
                        <div class="bg-light rounded-2 p-3">
                            <div class="fw-semibold mb-2" style="font-size:.85rem;">Signs Your Alignment Is Off:</div>
                            @php $al = ['Car pulls left or right on a straight road', 'Steering wheel not centred when driving straight', 'Uneven inner or outer tyre wear', 'Steering vibration at motorway speeds']; @endphp
                            @foreach($al as $a)
                                <div class="d-flex align-items-start gap-2 mb-1">
                                    <i class="fa fa-dot-circle text-primary mt-1" style="font-size:.75rem;flex-shrink:0;"></i>
                                    <span style="font-size:.82rem;color:#444;">{{ $a }}</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3 text-primary fw-semibold" style="font-size:.9rem;">AED 80 – 150 (all 4 wheels)
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="bg-white border rounded-3 p-4 h-100 shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                                style="width:46px;height:46px;flex-shrink:0;">
                                <i class="fa fa-tachometer-alt text-white"></i>
                            </div>
                            <h5 class="fw-bold mb-0">Dynamic Wheel Balancing</h5>
                        </div>
                        <p class="text-muted mb-3" style="font-size:.875rem;line-height:1.7;">
                            Balancing uses a computerised spin-balancer to detect and correct weight imbalance in the
                            tyre-wheel assembly. Even a 10-gram imbalance causes noticeable vibration at highway speeds.
                            Unbalanced wheels cause steering shimmy, accelerate tyre wear, and create stress in wheel
                            bearings and suspension components.
                        </p>
                        <div class="bg-light rounded-2 p-3">
                            <div class="fw-semibold mb-2" style="font-size:.85rem;">Signs Your Wheels Are Unbalanced:</div>
                            @php $bl = ['Vibration in steering wheel at 80–120km/h', 'Seat or floor vibration at specific speeds', 'Scalloped or cupped tyre wear pattern', 'Worsens with speed, not road surface']; @endphp
                            @foreach($bl as $b)
                                <div class="d-flex align-items-start gap-2 mb-1">
                                    <i class="fa fa-dot-circle text-primary mt-1" style="font-size:.75rem;flex-shrink:0;"></i>
                                    <span style="font-size:.82rem;color:#444;">{{ $b }}</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3 text-primary fw-semibold" style="font-size:.9rem;">AED 15 – 25 per wheel</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="bg-white border rounded-3 p-4 h-100 shadow-sm">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                                style="width:46px;height:46px;flex-shrink:0;">
                                <i class="fa fa-sync-alt text-white"></i>
                            </div>
                            <h5 class="fw-bold mb-0">Tyre Rotation</h5>
                        </div>
                        <p class="text-muted mb-3" style="font-size:.875rem;line-height:1.7;">
                            Front tyres wear faster than rear tyres - particularly on front-wheel-drive cars where the front
                            tyres handle both steering and drive. Rotating tyres every 10,000 km equalises wear across all
                            four tyres, extending their overall lifespan and ensuring all four tyres wear down together for
                            consistent handling.
                        </p>
                        <div class="bg-light rounded-2 p-3">
                            <div class="fw-semibold mb-2" style="font-size:.85rem;">Rotation Patterns We Use:</div>
                            @php $rp = ['Forward cross (FWD vehicles)', 'Rearward cross (RWD &amp; AWD vehicles)', 'X-pattern (symmetrical tyres only)', 'Side-to-side (directional tyres only)']; @endphp
                            @foreach($rp as $r)
                                <div class="d-flex align-items-start gap-2 mb-1">
                                    <i class="fa fa-dot-circle text-primary mt-1" style="font-size:.75rem;flex-shrink:0;"></i>
                                    <span style="font-size:.82rem;color:#444;">{!! $r !!}</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3 text-primary fw-semibold" style="font-size:.9rem;">AED 40 – 80 per service</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ═══ PRICING ═══ --}}
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-6">
                    <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                        style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Pricing Guide</span>
                    <h2 class="fw-bold mb-4">Tyre Service Prices in Dubai</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Service</th>
                                    <th>Price (AED)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Budget Tyre Supply &amp; Fit (per tyre)</td>
                                    <td>AED 120 – 200</td>
                                </tr>
                                <tr>
                                    <td>Mid-Range Tyre Supply &amp; Fit</td>
                                    <td>AED 200 – 400/tyre</td>
                                </tr>
                                <tr>
                                    <td>Premium Tyre Supply &amp; Fit</td>
                                    <td>AED 400 – 900/tyre</td>
                                </tr>
                                <tr>
                                    <td>SUV / 4WD Tyre Supply &amp; Fit</td>
                                    <td>AED 250 – 700/tyre</td>
                                </tr>
                                <tr>
                                    <td>Tyre Fitting Only (customer supplies)</td>
                                    <td>AED 30 – 50/tyre</td>
                                </tr>
                                <tr>
                                    <td>Wheel Balancing (per wheel)</td>
                                    <td>AED 15 – 25</td>
                                </tr>
                                <tr>
                                    <td>4-Wheel Alignment</td>
                                    <td>AED 80 – 150</td>
                                </tr>
                                <tr>
                                    <td>Tyre Rotation (all 4)</td>
                                    <td>AED 40 – 80</td>
                                </tr>
                                <tr>
                                    <td>Puncture Repair</td>
                                    <td>AED 25 – 50</td>
                                </tr>
                                <tr>
                                    <td>Valve Stem Replacement</td>
                                    <td>AED 10 – 20/tyre</td>
                                </tr>
                                <tr>
                                    <td>TPMS Sensor Service</td>
                                    <td>AED 50 – 150</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-muted mt-2 mb-0" style="font-size:.8rem;">
                        <i class="fa fa-info-circle text-primary me-1"></i>
                        Tyre prices vary by brand, size, and load/speed rating. Exact price confirmed when you provide your
                        vehicle registration or tyre size. Old tyres disposed of responsibly.
                    </p>
                </div>
                <div class="col-lg-6">
                    <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                        style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Tyre Pressure &amp; UAE
                        Tips</span>
                    <h2 class="fw-bold mb-4">Tyre Pressure in Dubai - What You Must Know</h2>
                    <div class="bg-primary text-white rounded-3 p-4 mb-4">
                        <h5 class="fw-bold text-white mb-3"><i class="fa fa-thermometer-half me-2"></i>Heat Inflates Tyre Pressure</h5>
                        <p style="font-size:.875rem;opacity:.9;margin-bottom:0;">Tyre pressure increases by approximately 1
                            PSI for every 10°F (5.5°C) rise in temperature. At 45°C ambient with direct sun on tarmac, road
                            surface temperatures can exceed 70°C - potentially raising tyre pressure by 6–8 PSI above your
                            cold inflation target. Always check tyre pressure when the car has been parked for at least 3
                            hours (cold). Never release pressure from hot tyres.</p>
                    </div>
                    <div class="bg-light border rounded-3 p-4">
                        <h5 class="fw-bold mb-3">Dubai Tyre Safety Checklist</h5>
                        @php
                            $checklist = [
                                'Check cold inflation pressure monthly - more frequently in summer',
                                'Inspect sidewalls weekly for cracking or bulging',
                                'Check tread depth every 6 months - minimum 2.5mm for safety, 1.6mm legal limit',
                                'Check DOT date code - replace any tyre over 5 years',
                                'Carry a TPMS gauge - dashboard TPMS only triggers below ~25% under-inflation',
                                'Park in shade where possible - UV and heat accelerate sidewall degradation',
                                'Do not over-inflate to compensate for heat - use manufacturer cold pressure',
                            ];
                        @endphp
                        @foreach($checklist as $item)
                            <div class="d-flex align-items-start gap-2 mb-2">
                                <i class="fa fa-check-circle text-primary mt-1" style="font-size:.85rem;flex-shrink:0;"></i>
                                <span style="font-size:.875rem;color:#444;">{{ $item }}</span>
                            </div>
                        @endforeach
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
                <h2 class="fw-bold mb-2">Why Dubai Drivers Choose Us for Tyres</h2>
            </div>
            <div class="row g-4">
                @php
                    $reasons = [
                        ['fa-circle', 'Full Brand Range Stocked', 'We carry budget, mid-range, and premium tyre brands across all common UAE vehicle sizes. Walk-in and drive away the same day in most cases.'],
                        ['fa-crosshairs', 'Alignment Included with Replacement', 'Every tyre replacement job includes a 4-wheel alignment check. Fitting tyres without checking alignment means they wear unevenly within weeks.'],
                        ['fa-calendar-alt', 'DOT Age Check on Every Visit', 'We check the manufacturing date on every tyre we inspect. You\'ll never leave our workshop with tyres that are past their safe service life.'],
                        ['fa-shield-alt', 'Correct Specification Only', 'We fit the tyre grade and load/speed rating your vehicle requires - not a cheaper alternative that won\'t handle your car\'s performance envelope safely.'],
                        ['fa-receipt', 'Transparent Pricing', 'Our prices include fitting, balancing, and valve stem check. No surprise disposal fees or "balancing extra" added at the till.'],
                        ['fa-car', 'All Vehicles, All Sizes', 'From compact 15-inch saloon tyres to 22-inch SUV fitments and performance run-flats - we have the equipment and stock for everything on Dubai\'s roads.'],
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
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width:600px;">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                    style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">FAQ</span>
                <h2 class="fw-bold mb-2">Tyre Replacement Dubai - Common Questions Answered</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion" id="tyreFaq">
                        @php
                            $faqs = [
                                [
                                    'How long do tyres last in Dubai?',
                                    'In Dubai\'s heat, tyres typically last 30,000–50,000 km for standard saloons, and 20,000–35,000 km for heavier SUVs. However, age matters as much as mileage - tyres over 5 years from their DOT manufacture date should be replaced even if tread remains, because the rubber compound degrades invisibly at Dubai\'s sustained temperatures and UV levels.',
                                ],
                                [
                                    'What tyre pressure should I use in Dubai?',
                                    'Always use your manufacturer\'s recommended cold inflation pressure - found on a sticker inside the driver\'s door frame or in your owner\'s manual. Check pressure when the car has been parked for at least 3 hours. Never adjust pressure based on heat readings from hot tyres. For SUVs towing or carrying full loads, use the maximum recommended pressure printed on the tyre wall.',
                                ],
                                [
                                    'Can I repair a punctured tyre or do I need to replace it?',
                                    'A puncture in the central tread area can be safely repaired using a certified plug-patch repair method - if the hole is less than 6mm and the tyre is otherwise in good condition. A tyre cannot be repaired if the puncture is in the sidewall, if the tyre has run flat (even briefly), if the tread depth is below 2.5mm, or if the tyre is over 5 years old. Run-flat tyres cannot be repaired at all after they have operated in deflated mode.',
                                ],
                                [
                                    'How do I read a tyre size on my car in Dubai?',
                                    'The tyre size is printed on the sidewall in a standard format: 225/55R17 97W for example. 225 = tread width in mm. 55 = aspect ratio (sidewall height as % of width). R = radial construction. 17 = wheel diameter in inches. 97 = load index. W = speed rating (W = 270km/h). Your replacement tyre must match the size exactly, and the load index and speed rating must meet or exceed the original specification.',
                                ],
                                [
                                    'How often should I do a wheel alignment in Dubai?',
                                    'We recommend a 4-wheel alignment check every 15,000 km, after any significant pothole or kerb impact, whenever new tyres are fitted, and any time you notice the car pulling to one side. Dubai\'s road conditions - speed bumps, construction debris, and occasional sand covering on roads - knock alignment out of specification more frequently than smooth European roads do.',
                                ],
                                [
                                    'Are cheap tyres safe in Dubai?',
                                    'Very budget tyre brands may not carry the heat ratings needed for Dubai\'s road surface temperatures, which can exceed 70°C. We recommend mid-range brands from established manufacturers (Hankook, Yokohama, Dunlop) as the minimum for Dubai. Premium brands (Bridgestone, Michelin, Pirelli) for performance vehicles and high-speed highway driving. We never fit tyres below the manufacturer\'s load and speed rating requirements.',
                                ],
                            ];
                        @endphp
                        @foreach($faqs as $i => $faq)
                            <div class="accordion-item border rounded-3 mb-3" style="border-color:#e4e8ec!important;">
                                <h3 class="accordion-header" id="tyreHead{{ $i }}">
                                    <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }} fw-semibold rounded-3"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#tyreCollapse{{ $i }}"
                                        aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                                        style="font-size:.95rem;background:{{ $i === 0 ? '#f0f7ff' : '#fff' }};">
                                        {{ $faq[0] }}
                                    </button>
                                </h3>
                                <div id="tyreCollapse{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                                    data-bs-parent="#tyreFaq">
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
            <div class="text-center mb-4">
                <h3 class="fw-bold">Related Services</h3>
            </div>
            <div class="row g-3 justify-content-center">
                @php
                    $related = [
                        ['fa-search', 'Car Inspection Dubai', 'RTA pre-test includes tyre check', 'car-inspection-dubai'],
                        ['fa-circle', 'Tyre Replacement Dubai', 'Tyres &amp; brakes work together', 'tyre-replacement-dubai'],
                        ['fa-exclamation-triangle', 'Roadside Assistance Dubai', 'Flat tyre emergency response', 'roadside-assistance-dubai'],
                        ['fa-tools', 'Car Maintenance Dubai', 'Full service including tyre check', 'car-maintenance-dubai'],
                    ];
                @endphp
                @foreach($related as $r)
                    <div class="col-md-6 col-lg-3">
                        <a href="{{ route($r[3]) }}" class="text-decoration-none">
                            <div class="bg-white border rounded-3 p-4 h-100 text-center" style="transition:box-shadow .2s;"
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
                    <h2 class="fw-bold text-white mb-2">Need New Tyres in Dubai? We Have Them in Stock.</h2>
                    <p class="text-white-50 mb-0">
                        Open 7AM–10PM daily &bull; 222 Al Satwa Rd &bull; All brands &bull; Alignment included
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
        "@id": "https://dubaicarrepairservice.com/tyre-replacement-dubai#service",
        "name": "Tyre Replacement Dubai",
        "url": "https://dubaicarrepairservice.com/tyre-replacement-dubai",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://dubaicarrepairservice.com/tyre-replacement-dubai"
        },
        "serviceType": "Tyre Replacement, Wheel Alignment and Balancing",
        "description": "Professional tyre replacement and wheel services in Dubai including tyre fitting, wheel balancing and alignment for all vehicle types. We handle all major tyre brands with fast service available 7AM–10PM across Dubai.",
        "provider": {
            "@id": "https://dubaicarrepairservice.com/#localbusiness"
        },
        "areaServed": {
            "@type": "City",
            "name": "Dubai"
        },
        "offers": {
            "@type": "Offer",
            "price": 120,
            "priceCurrency": "AED",
            "availability": "https://schema.org/InStock"
        }
        },

        {
        "@type": "BreadcrumbList",
        "@id": "https://dubaicarrepairservice.com/tyre-replacement-dubai#breadcrumb",
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
            "name": "Tyre Replacement Dubai",
            "item": "https://dubaicarrepairservice.com/tyre-replacement-dubai"
            }
        ]
        },

        {
        "@type": "FAQPage",
        "@id": "https://dubaicarrepairservice.com/tyre-replacement-dubai#faq",
        "mainEntity": [

            {
            "@type": "Question",
            "name": "How long do tyres last in Dubai?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Tyre lifespan in Dubai depends on driving habits, road conditions, and heat exposure. Due to high temperatures, tyres generally require earlier replacement compared to cooler climates, and regular inspection is recommended."
            }
            },

            {
            "@type": "Question",
            "name": "What tyre pressure should I use in Dubai?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Always follow the manufacturer-recommended tyre pressure found on the vehicle door sticker. Check tyre pressure when tyres are cold for accurate readings."
            }
            },

            {
            "@type": "Question",
            "name": "Can I repair a punctured tyre in Dubai?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Minor punctures in the tread area may be repairable if the tyre is in good condition. However, damage to the sidewall or severely worn tyres typically require replacement for safety reasons."
            }
            },

            {
            "@type": "Question",
            "name": "How often should I do wheel alignment in Dubai?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Wheel alignment should be checked periodically or whenever you notice uneven tyre wear, steering pull, or after hitting potholes or curbs."
            }
            }

        ]
        }

    ]
    }
    </script>
    @endpush

@endsection