@extends('layout.masterhome')
@php
    $meta_title       = 'Roadside Assistance Dubai | 30-Min Response | 056 612 1423';
    $meta_description = 'Emergency roadside assistance across Dubai. Jump start, flat tyre, battery, lockout & towing. 30-minute response. Certified mechanics. Call 056 612 1423 now.';
    $meta_keywords    = 'roadside assistance dubai, car breakdown dubai, emergency car repair dubai, breakdown recovery dubai, jump start dubai';
@endphp
@section('content')

{{-- ═══ HERO - Emergency urgency design ═══ --}}
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
     style="background:linear-gradient(135deg,#001516 0%,#1a0000 100%);min-height:320px;display:flex;align-items:center;">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <div class="d-inline-flex align-items-center gap-2 bg-danger bg-opacity-20 rounded-pill px-4 py-2 mb-3">
                    <i class="fa fa-exclamation-triangle text-warning"></i>
                    <span class="text-white fw-semibold" style="font-size:.85rem;">EMERGENCY SERVICE - We Come to You</span>
                </div>
                <h1 class="display-4 text-white fw-bold mb-3">
                    Roadside Assistance Dubai - 30-Minute Response, All Areas
                </h1>
                <p class="text-white mb-4"
                   style="font-size:1.05rem;opacity:.85;max-width:640px;margin:0 auto;">
                    Broken down in Dubai? Our mobile mechanics respond fast - jump starts, flat tyres, dead batteries, lockouts, and breakdown recovery across all Dubai areas. Open 7AM to 10PM, every day.
                </p>
                {{-- Emergency CTA prominent --}}
                <div class="d-flex flex-wrap gap-3 justify-content-center mb-3 text-center align-items-stretch col-12 col-md-10 mx-auto">
                    <!-- Equalized padding, typography styling, and applied fluid mobile width structural constraints -->
                    <a href="tel:0566121423"
                    class="btn btn-danger rounded-pill px-4 py-3 fw-bold flex-grow-1 w-100 d-inline-flex align-items-center justify-content-center"
                    style="font-size:1.1rem; max-width: 320px;">
                        <i class="fa fa-phone-alt me-2"></i>Call Now - 056 612 1423
                    </a>
                    <a href="https://wa.me/971566121423" 
                    class="btn btn-success rounded-pill px-4 py-3 fw-bold flex-grow-1 w-100 d-inline-flex align-items-center justify-content-center"
                    style="font-size:1.1rem; max-width: 320px;">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp Emergency
                    </a>
                </div>
                <p class="text-white-50" style="font-size:.82rem;">
                    <i class="fa fa-clock me-1"></i>Open 7AM–10PM daily &bull; All Dubai areas covered &bull; Tell us your location when you call
                </p>
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('car-repair-dubai') }}" class="text-white-50 text-decoration-none">Services</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Roadside Assistance Dubai</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

{{-- ═══ WHAT TO DO RIGHT NOW ═══ --}}
<div class="container-fluid py-4 wow fadeIn" data-wow-delay="0.1s"
     style="background:#FFF3CD;border-top:3px solid #FFC107;border-bottom:3px solid #FFC107;">
    <div class="container">
        <div class="row align-items-center g-3">
            <div class="col-lg-2 text-center">
                <i class="fa fa-exclamation-triangle text-warning" style="font-size:3rem;"></i>
            </div>
            <div class="col-lg-7">
                <h5 class="fw-bold mb-2" style="color:#856404;">Broken Down Right Now? Follow These 3 Steps:</h5>
                <div class="d-flex flex-wrap gap-3">
                    @php $immediate = [
                        ['1','Move to Safety','Pull to the hard shoulder, service road, or a safe parking area. Switch on hazard lights immediately.'],
                        ['2','Stay with the Car','Do not stand behind or in front of the vehicle. Stay inside or beside the car on the road side away from traffic.'],
                        ['3','Call 056 612 1423','Tell us your exact location - building name, street, area, or nearest landmark - and we dispatch immediately.'],
                    ]; @endphp
                    @foreach($immediate as $step)
                    <div class="d-flex align-items-start gap-2">
                        <span class="badge bg-warning text-dark fw-bold px-2 py-1" style="font-size:.85rem;flex-shrink:0;">{{ $step[0] }}</span>
                        <div>
                            <span class="fw-semibold" style="font-size:.875rem;color:#856404;">{{ $step[1] }}: </span>
                            <span class="text-muted" style="font-size:.85rem;">{{ $step[2] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <a href="tel:0566121423" class="btn btn-danger rounded-pill px-4 py-3 fw-bold w-100">
                    <i class="fa fa-phone-alt me-2"></i>Call 056 612 1423
                </a>
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
                <h2 class="fw-bold mb-4">Roadside Assistance in Dubai - What Happens When Your Car Breaks Down</h2>
                <p style="color:#444;line-height:1.8;">
                    Roadside assistance in Dubai is needed most often for three reasons - and none of them give you advance warning. A dead battery that appeared healthy this morning. A tyre blowout caused by a sidewall that had been hardening invisibly for three years in UAE heat. An overheating engine that ran fine on the morning commute and stopped on the way home.
                </p>
                <p style="color:#444;line-height:1.8;">
                    Our mobile mechanics respond to breakdowns across all Dubai areas during operating hours - 7AM to 10PM, Saturday to Friday. When you call <strong>056 612 1423</strong>, you speak to our team directly. We confirm your location, identify the likely cause from your description, and dispatch a certified mechanic in a fully equipped service vehicle - not an untrained driver with a jump pack.
                </p>
                <p style="color:#444;line-height:1.8;">
                    Our roadside team carries the tools and stock to resolve the most common breakdown causes on the spot - dead batteries, flat tyres, fuel issues, and minor electrical faults - without requiring a tow. For faults that genuinely require workshop attention, we arrange towing to our <strong>222 Al Satwa Road workshop</strong> and prioritise your vehicle.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative" style="min-height:380px;">
                    <img src="{{ asset('public/img/service10.webp') }}"
                         alt="Roadside Assistance Dubai - Emergency Mechanic Response"
                         class="w-100 rounded-3 shadow" style="object-fit:cover;height:400px;">
                    <div class="position-absolute bottom-0 end-0 m-3 bg-danger text-white rounded-3 px-3 py-2 shadow text-center">
                        <div class="fw-bold" style="font-size:1.3rem;line-height:1;">30 Min</div>
                        <div style="font-size:.75rem;opacity:.9;">Response Target</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ SERVICES WE COVER ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:620px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Emergency Services</span>
            <h2 class="fw-bold mb-2">Roadside Assistance Services We Provide in Dubai</h2>
            <p class="text-muted">Every breakdown scenario we respond to - what we carry, what we fix on the spot, and what requires a tow.</p>
        </div>
        <div class="row g-4">
            @php $services = [
                [
                    'fa-battery-full', 'Battery Jump Start &amp; Replacement',
                    'The most common roadside call in Dubai. We arrive with a professional jump pack and a full battery tester. After jumping the car, we perform a battery load test to measure remaining capacity. If the battery is failing, we carry Exide, Bosch, and Varta replacements in stock - including AGM and EFB types - for immediate on-site fitting.',
                    'AED 60 jump start / AED 180–650 with replacement',
                    'fa-check-circle text-success', 'Resolved on-site',
                ],
                [
                    'fa-dot-circle', 'Flat Tyre &amp; Tyre Change',
                    'A flat tyre on Dubai\'s roads - from a pothole, screw in the tread, or blowout - requires immediate attention. We assess whether the tyre can be safely repaired (central tread puncture only) or needs replacement. If you have a spare, we fit it. If the tyre needs replacing, we can coordinate supply and fitting or bring you to our Al Satwa workshop.',
                    'AED 55–80 puncture repair',
                    'fa-check-circle text-success', 'Mostly resolved on-site',
                ],
                [
                    'fa-snowflake', 'Overheating Engine',
                    'An overheating car requires immediate stopping - continued driving causes catastrophic engine damage within minutes. We assess the cause: low coolant, failed thermostat, burst hose, blocked radiator, or failed water pump. Low coolant and minor hose issues can be resolved roadside. Major cooling system failures require towing to our workshop.',
                    'AED 80 assessment + parts if required',
                    'fa-exclamation-triangle text-warning', 'Depends on fault',
                ],
                [
                    'fa-car', 'Car Lockout - Keys Locked Inside',
                    'Locked your keys inside the car? We have lockout tools for the most common Dubai vehicle makes - Toyota, Nissan, Honda, Hyundai, Kia - and can retrieve your keys without damaging the vehicle. For vehicles with advanced smart-lock systems or anti-tamper mechanisms, we advise the safest resolution.',
                    'AED 100–180',
                    'fa-check-circle text-success', 'Resolved on-site',
                ],
                [
                    'fa-tint', 'Fuel Delivery',
                    'Run out of fuel? We can bring enough petrol or diesel to get you to the nearest station. We confirm your fuel type before arriving - putting petrol in a diesel engine, or vice versa, causes severe fuel system damage. We carry both unleaded petrol and diesel in sealed containers.',
                    'AED 80 delivery + fuel cost',
                    'fa-check-circle text-success', 'Resolved on-site',
                ],
                [
                    'fa-bolt', 'Minor Electrical Fault',
                    'Starter motor not engaging, alternator warning light, blown fuse causing critical systems to fail - our roadside mechanic carries a diagnostic scanner and basic electrical repair tools. Many minor electrical faults can be identified and resolved at your location. Complex wiring or ECU faults require workshop attention.',
                    'AED 80 diagnostic + labour',
                    'fa-exclamation-triangle text-warning', 'Depends on fault',
                ],
                [
                    'fa-truck', 'Towing Coordination',
                    'For faults that cannot be safely resolved at your location - major engine failure, transmission fault, serious accident damage, or suspension collapse - we coordinate towing to our Al Satwa workshop. We liaise with trusted towing operators and ensure your vehicle is secured and transported correctly.',
                    'AED 150–300 towing (third-party)',
                    'fa-exclamation-triangle text-warning', 'Workshop required',
                ],
                [
                    'fa-laptop-code', 'Roadside Diagnostic Scan',
                    'Warning light appeared and the car won\'t drive normally? We carry a professional OBD-II scanner on every roadside dispatch. We read all fault codes from the engine, transmission, ABS, and body modules - giving you a clear diagnosis of whether the fault is minor or serious before deciding whether to drive or tow.',
                    'AED 80–100',
                    'fa-check-circle text-success', 'On-site assessment',
                ],
            ]; @endphp
            @foreach($services as $s)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white border rounded-3 p-4 h-100 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                             style="width:44px;height:44px;flex-shrink:0;">
                            <i class="fa {{ $s[0] }} text-white" style="font-size:.9rem;"></i>
                        </div>
                        <div>
                            <div class="fw-bold" style="font-size:.9rem;">{!! $s[1] !!}</div>
                            <div class="d-flex align-items-center gap-1 mt-1">
                                <i class="fa {{ $s[4] }}" style="font-size:.75rem;"></i>
                                <span style="font-size:.78rem;color:#555;">{{ $s[5] }}</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mb-3" style="font-size:.875rem;line-height:1.7;">{{ $s[2] }}</p>
                    <div class="bg-light rounded-2 px-3 py-2">
                        <span class="text-primary fw-semibold" style="font-size:.82rem;">{{ $s[3] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══ RESPONSE AREAS ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-5">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Coverage &amp; Response</span>
                <h2 class="fw-bold mb-4">Roadside Assistance Coverage Across Dubai</h2>
                <p style="color:#444;line-height:1.8;">
                    We respond to breakdowns across all Dubai residential, commercial, and highway locations during our operating hours. Our mechanics dispatch from our central <strong>222 Al Satwa Road</strong> base, giving us strong coverage across the full length of Sheikh Zayed Road and the major residential districts on either side.
                </p>
                <p style="color:#444;line-height:1.8;">
                    For breakdowns on major highways - Sheikh Zayed Road, Al Khail Road, Emirates Road, and Al Ain Road - please ensure you have moved to the hard shoulder and activated hazard lights before calling. Give us the nearest road marker or exit number to expedite our arrival.
                </p>
                <div class="bg-primary text-white rounded-3 p-4 mt-3">
                    <h5 class="fw-bold text-white mb-3">
                        <i class="fa fa-stopwatch text-white me-2"></i>Estimated Response Times
                    </h5>
                    @php $times = [
                        ['Al Satwa, Jumeirah, Karama, Bur Dubai',         '15–30 min'],
                        ['Downtown Dubai, Business Bay, DIFC, Za\'abeel', '20–35 min'],
                        ['Sheikh Zayed Road (all zones)',                  '20–40 min'],
                        ['Al Quoz, Al Barsha, Al Safa',                   '25–40 min'],
                        ['Dubai Marina, JBR, JVC, JLT',                   '30–50 min'],
                        ['Mirdif, Al Nahda, Deira',                       '35–55 min'],
                        ['International City, DSO',                       '40–65 min'],
                    ]; @endphp
                    @foreach($times as $t)
                    <div class="d-flex justify-content-between align-items-center py-2 border-bottom border-white border-opacity-25">
                        <span style="font-size:.82rem;opacity:.9;">{{ $t[0] }}</span>
                        <span class="fw-bold badge bg-white text-primary px-2" style="font-size:.8rem;">{{ $t[1] }}</span>
                    </div>
                    @endforeach
                    <p class="mt-3 mb-0" style="font-size:.75rem;opacity:.7;">
                        Times are estimates. Heavy traffic on major routes during peak hours may extend response times. We update you on mechanic location after dispatch.
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Dubai Breakdown Hotspots</span>
                <h2 class="fw-bold mb-4">Common Breakdown Locations We Service in Dubai</h2>
                <p style="color:#444;line-height:1.8;">
                    From our 12 years responding to breakdowns across Dubai, these locations generate the highest volume of roadside assistance calls. If you are broken down in any of these areas, we know the fastest route to reach you.
                </p>
                <div class="row g-2">
                    @php $locations = [
                        ['fa-road',           'Sheikh Zayed Road',     'Breakdowns on SZR - move to hard shoulder immediately, call us with exit number'],
                        ['fa-building',       'Dubai Marina / JBR',    'Underground car park battery failures very common due to AC running while parked'],
                        ['fa-city',           'Downtown Dubai',        'DIFC and Downtown car park battery and tyre issues - we access all building car parks'],
                        ['fa-industry',       'Al Quoz Industrial',    'Commercial vehicle and fleet breakdowns - we handle vans, pickups, and light commercial'],
                        ['fa-shopping-cart',  'Mall Car Parks',        'Mall of Emirates, Dubai Mall, Ibn Battuta - batteries fail in extreme indoor heat'],
                        ['fa-plane',          'Dubai Airport Area',    'Airport Road and Terminal 1/2/3 vicinity - we coordinate with airport assistance teams'],
                        ['fa-home',           'Residential Areas',     'Villa and apartment complex breakdowns across JVC, JLT, Arabian Ranches, Springs'],
                        ['fa-graduation-cap', 'Business Districts',    'DWTC, Tecom, Internet City, Media City - morning battery failures very common'],
                    ]; @endphp
                    @foreach($locations as $loc)
                    <div class="col-12 col-md-6">
                        <div class="d-flex align-items-start bg-light border rounded-3 p-3 gap-3 h-100">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle"
                                 style="width:36px;height:36px;flex-shrink:0;">
                                <i class="fa {{ $loc[0] }} text-white" style="font-size:.8rem;"></i>
                            </div>
                            <div>
                                <div class="fw-semibold" style="font-size:.88rem;">{{ $loc[1] }}</div>
                                <div class="text-muted" style="font-size:.8rem;line-height:1.5;">{{ $loc[2] }}</div>
                            </div>
                        </div>
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
        <div class="text-center mx-auto mb-5" style="max-width:620px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Why Choose Us</span>
            <h2 class="fw-bold mb-2">Why Dubai Drivers Call Us for Roadside Assistance</h2>
        </div>
        <div class="row g-4">
            @php $reasons = [
                ['fa-user-check',   'Certified Mechanics - Not Tow Drivers',   'Our roadside responders are the same certified mechanics who work at our Al Satwa workshop. They diagnose the fault correctly at the roadside - not just jump-start you and leave.'],
                ['fa-search',       'Diagnosis on the Spot',                   'We carry professional OBD-II diagnostic equipment on every callout. A warning light that caused your breakdown is read and explained at your location - before any decision about towing is made.'],
                ['fa-battery-full', 'Battery Stock in the Van',                'We carry the most common battery sizes and types for Dubai vehicles - including AGM units - so if your battery fails the load test, you don\'t need a second visit or a tow.'],
                ['fa-tools',        'Proper Tools, Not Just Jump Leads',        'Our mobile vehicle carries puncture repair equipment, tyre levers, torque wrench, electrical test equipment, and fluids. We are equipped to resolve most common breakdowns without further assistance.'],
                ['fa-receipt',      'Price Confirmed Before We Start',          'Call-out fee confirmed when you book. Any parts or additional labour quoted before work begins. No surprise invoice when we arrive.'],
                ['fa-map-marker-alt','Central Base - Fast Coverage',            'Our Al Satwa base positions us within 30 minutes of most Dubai locations. We know Dubai\'s roads well enough to avoid the routes that will slow us down during peak hours.'],
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
            <h2 class="fw-bold mb-2">Roadside Assistance Dubai - Common Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="roadsideFaq">
                    @php $faqs = [
                        [
                            'What should I do immediately if my car breaks down on Sheikh Zayed Road?',
                            'Move your car to the hard shoulder or emergency lane as quickly and safely as possible. Switch on your hazard lights immediately. If you cannot move the car, stay inside with your seatbelt on until you can safely exit away from traffic. Do not stand behind the vehicle or in the traffic lanes. Once in a safe position, call us at 056 612 1423. Give us the nearest road marker number or exit number - they are posted on green signs along SZR. We dispatch immediately and update you on arrival time.',
                        ],
                        [
                            'How long does roadside assistance take to arrive in Dubai?',
                            'From our Al Satwa base, we typically reach central Dubai areas - Jumeirah, Karama, Business Bay, Downtown Dubai, DIFC - within 15–35 minutes. Dubai Marina and Al Barsha are 30–50 minutes. Outer areas including Mirdif, Al Nahda, International City, and Dubai Silicon Oasis are 40–65 minutes. These estimates are under normal traffic conditions. Peak hour traffic on Sheikh Zayed Road between 7:30–9:30 AM and 5:00–8:00 PM may add 10–20 minutes.',
                        ],
                        [
                            'Can you fix my car at the roadside or will I need towing?',
                            'For the most common breakdown causes - dead battery, flat tyre, fuel exhaustion, minor overheating from low coolant, and minor electrical faults - yes, we resolve the issue at your location without towing. For serious engine failure, major overheating damage, transmission fault, significant accident damage, or suspension collapse, towing to our Al Satwa workshop is required. We assess the fault at the roadside and give you an honest assessment of which applies before any costs are incurred.',
                        ],
                        [
                            'Do you provide roadside assistance 24 hours in Dubai?',
                            'Our roadside assistance operates from 7:00 AM to 10:00 PM, Saturday to Friday - every day of the week including weekends and UAE public holidays. We do not operate through the night. For breakdowns outside these hours, we recommend RTA\'s breakdown service or your car insurance company\'s roadside assistance as 24-hour alternatives. When we open at 7AM, call us immediately and we prioritise any overnight breakdown cases.',
                        ],
                        [
                            'What is the cost of roadside assistance in Dubai?',
                            'A basic callout for jump start assessment starts from AED 60. Battery jump start and test is AED 60–100. Battery replacement (jump start + new battery) ranges from AED 180–650 depending on battery type. Flat tyre puncture repair is AED 55–80. Fuel delivery is AED 80 plus the fuel cost. Roadside OBD-II diagnostic scan is AED 80–100. All prices are confirmed before work begins - no surprise charges on arrival.',
                        ],
                        [
                            'My car overheated and the engine warning light is on - can I drive it?',
                            'No. Do not drive an overheated car. Once the temperature gauge enters the red zone or the overheat warning illuminates, continued driving can cause catastrophic engine damage within 1–3 minutes - warped cylinder head, blown head gasket, or seized engine. Pull over safely, switch off the engine, and call us at 056 612 1423. We assess the cause at your location and advise whether the car can be driven after cooling or needs towing. Dubai\'s heat makes overheating particularly dangerous - the ambient temperature reduces the effectiveness of your cooling system at the critical moment.',
                        ],
                    ]; @endphp
                    @foreach($faqs as $i => $faq)
                    <div class="accordion-item border rounded-3 mb-3" style="border-color:#e4e8ec!important;">
                        <h3 class="accordion-header" id="rsHead{{ $i }}">
                            <button class="accordion-button {{ $i>0?'collapsed':'' }} fw-semibold rounded-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#rsCollapse{{ $i }}"
                                    aria-expanded="{{ $i===0?'true':'false' }}"
                                    style="font-size:.95rem;background:{{ $i===0?'#fff3cd':'#fff' }};">
                                {{ $faq[0] }}
                            </button>
                        </h3>
                        <div id="rsCollapse{{ $i }}"
                             class="accordion-collapse collapse {{ $i===0?'show':'' }}"
                             data-bs-parent="#roadsideFaq">
                            <div class="accordion-body text-muted" style="font-size:.9rem;line-height:1.8;">{{ $faq[1] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ RELATED ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mb-4"><h3 class="fw-bold">Related Services</h3></div>
        <div class="row g-3 justify-content-center">
            @php $related = [
                ['fa-battery-full',  'Car Battery Replacement',   'Prevent the most common breakdown cause',     'car-battery-replacement-dubai'],
                ['fa-car',           'Mobile Car Repair Dubai',   'Non-emergency mobile mechanic service',       'mobile-car-repair-dubai'],
                ['fa-search',        'Car Inspection Dubai',      'Annual check to avoid breakdowns',            'car-inspection-dubai'],
                ['fa-tools',         'Car Maintenance Dubai',     'Scheduled service keeps your car road-ready', 'car-maintenance-dubai'],
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

{{-- ═══ FINAL EMERGENCY CTA ═══ --}}
<div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s"
     style="background:linear-gradient(135deg,#001516 0%,#1a0000 100%);">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7 text-center text-lg-start">
                <h2 class="fw-bold text-white mb-2">
                    <i class="fa fa-exclamation-triangle text-warning me-2"></i>Broken Down? Call Us Right Now.
                </h2>
                <p class="text-white-50 mb-0">
                    Open 7AM–10PM daily &bull; All Dubai areas &bull; Certified mechanics dispatched &bull; 30-min response target
                </p>
            </div>
            <div class="col-lg-5 text-center text-lg-end">
                <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-end">
                    <a href="tel:0566121423" class="btn btn-danger rounded-pill px-5 py-3 fw-bold" style="font-size:1.05rem;">
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
      "@id": "https://dubaicarrepairservice.com/roadside-assistance-dubai#service",
      "name": "Roadside Assistance Dubai",
      "url": "https://dubaicarrepairservice.com/roadside-assistance-dubai",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://dubaicarrepairservice.com/roadside-assistance-dubai"
      },
      "serviceType": "Emergency Roadside Assistance",
      "description": "Professional roadside assistance in Dubai for vehicle breakdowns. Services include jump start, flat tyre assistance, battery replacement, lockout support and basic emergency roadside repairs. Available 7AM–10PM across Dubai.",
      "provider": {
        "@id": "https://dubaicarrepairservice.com/#localbusiness"
      },
      "areaServed": {
        "@type": "City",
        "name": "Dubai"
      },
      "offers": {
        "@type": "AggregateOffer",
        "lowPrice": 60,
        "highPrice": 650,
        "priceCurrency": "AED"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "https://dubaicarrepairservice.com/roadside-assistance-dubai#breadcrumb",
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
          "name": "Roadside Assistance Dubai",
          "item": "https://dubaicarrepairservice.com/roadside-assistance-dubai"
        }
      ]
    },

    {
      "@type": "FAQPage",
      "@id": "https://dubaicarrepairservice.com/roadside-assistance-dubai#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "What should I do if my car breaks down in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Move your vehicle to a safe location if possible and turn on hazard lights. Stay inside the vehicle if you are on a busy road. Contact our roadside assistance team for immediate support."
          }
        },

        {
          "@type": "Question",
          "name": "How long does roadside assistance take to arrive in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Response time depends on your location and traffic conditions. Central Dubai areas are usually reached faster, while outer areas may take longer. Service is available daily from 7AM to 10PM."
          }
        },

        {
          "@type": "Question",
          "name": "Do you provide 24-hour roadside assistance in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our roadside assistance service operates daily from 7AM to 10PM. Outside these hours, emergency breakdown services may be handled by third-party providers such as insurance or government roadside support."
          }
        },

        {
          "@type": "Question",
          "name": "How much does roadside assistance cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Roadside assistance pricing depends on the service required, such as jump start, tyre assistance or battery replacement. All prices are confirmed before work begins with no hidden charges."
          }
        }

      ]
    }

  ]
}
</script>
@endpush

@endsection

