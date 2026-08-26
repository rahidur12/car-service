@extends('layout.masterhome')
@php
    $meta_title       = 'Car Repair Al Satwa | Local Mechanic & Auto Garage | +971 56 612 1423';
    $meta_description = 'Car repair in Al Satwa at 222 Al Satwa Rd - the workshop is in your neighbourhood. Engine, AC, battery, tyres & diagnostics. Walk in, call or WhatsApp. Open 7AM-10PM daily.';
    $meta_keywords    = 'car repair al satwa, mechanic al satwa, auto garage al satwa, car service al satwa dubai, car workshop al satwa, car repair near me al satwa';
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
                    222 Al Satwa Rd &bull; Based in the Neighbourhood &bull; Open 7AM-10PM Daily
                </p>
                <h1 class="display-4 text-white fw-bold mb-3">
                    Car Repair Al Satwa - The Mechanic Already in Your Neighbourhood
                </h1>
                <p class="text-white mb-4"
                   style="font-size:1.05rem;opacity:.85;max-width:640px;margin:0 auto;">
                    Our garage sits on Al Satwa Road itself - not a satellite branch, not a mobile van dispatched from another part of Dubai. If you live or work in Al Satwa, the nearest honest mechanic is around the corner. Diagnosis first, written quote before any work, same mechanic from start to finish.
                </p>
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <a href="tel:+971 56 612 1423" class="btn btn-primary rounded-pill px-4 py-3 fw-semibold">
                        <i class="fa fa-phone-alt me-2"></i>Call +971 56 612 1423
                    </a>
                    <a href="https://wa.me/971566121423" class="btn btn-success rounded-pill px-4 py-3 fw-semibold">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp Us
                    </a>
                </div>
                <nav aria-label="breadcrumb" class="mt-4">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('car-repair-dubai') }}" class="text-white-50 text-decoration-none">Services</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Car Repair Al Satwa</li>
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
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Local to Al Satwa</span>
                <h2 class="fw-bold mb-4">Looking for a Mechanic in Al Satwa? We're Already Here</h2>
                <p style="color:#444;line-height:1.8;">
                    Most garages that show up when you search car repair al satwa are actually based somewhere else in Dubai and simply run ads targeting the area. <a href="{{ route('home') }}" class="text-primary fw-semibold text-decoration-none">Dubai Car Repair Service</a> is different - our workshop physically sits at 222 Al Satwa Road, in the same stretch of shops, tailors, and street-side eateries that define the neighbourhood. When you're searching for a mechanic al satwa residents actually use, you're looking for us.
                </p>
                <p style="color:#444;line-height:1.8;">
                    Al Satwa is dense - low-rise apartment blocks, small businesses, and constant foot and vehicle traffic along Satwa Road and 2nd December Street. Street parking is tight, and driving across town for a battery check or an AC regas is the last thing anyone wants to do in Dubai's heat. Being an auto garage al satwa drivers can walk to, or reach in under five minutes by car, is the entire point of where we set up. No towing your car across the city for a diagnostic that takes twenty minutes.
                </p>
                <p style="color:#444;line-height:1.8;">
                    Every car we work on gets the same process regardless of size of job: OBD-II diagnostic scan, physical inspection, a written itemised quote, and your approval before a single part is ordered. When Al Satwa residents ask for car service al satwa dubai options, what they actually want is confirmation that the shop nearby is competent, not just convenient - that's what 12 years and 8,500+ customers across Al Satwa, Al Wasl, Jumeirah, and Bur Dubai have confirmed for us.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative" style="min-height:380px;">
                    <img src="{{ asset('public/img/service8.webp') }}"
                         alt="Car Repair Al Satwa - Mechanic Working at Dubai Car Repair Service, 222 Al Satwa Road"
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
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Al Satwa Services</span>
            <h2 class="fw-bold mb-2">Car Repair Services Available at Our Al Satwa Workshop</h2>
            <p class="text-muted">Every category below is carried out on-site at 222 Al Satwa Road, with its own diagnosis process, transparent pricing, and workmanship warranty.</p>
        </div>
        <div class="row g-4">
@php $repairs = [
    ['fa-cog', 'Engine Repair &amp; Service', 'Tune-ups, timing belts, head gaskets, oil leaks, cooling system work, and full overhauls - diagnosed with OBD-II before any strip-down. Available for petrol, diesel, turbo, and hybrid engines.', 'AED 150+', 'car-engine-service-dubai'],
    ['fa-snowflake', 'Car AC Repair &amp; Gas Refill', 'Compressor faults, refrigerant leaks, condenser blockage, and expansion valve failure diagnosed with manifold gauges - not guesswork. R134a and R1234yf systems serviced at our Al Satwa bay.', 'AED 100+', 'car-ac-repair-dubai'],
    ['fa-battery-full', 'Car Battery Replacement', 'On-site load test measuring CCA and internal resistance. Genuine Exide, Bosch, Varta, and Amaron batteries fitted while you wait, or dispatched to you anywhere in or around Al Satwa.', 'AED 150+', 'car-battery-replacement-dubai'],
    ['fa-search', 'Car Inspection', '50-point vehicle inspection for RTA pre-test, pre-purchase checks, or an annual safety assessment. Written report with photos, done a short walk from anywhere in Al Satwa.', 'AED 99+', 'car-inspection-dubai'],
    ['fa-oil-can', 'Engine Oil &amp; Filter Change', 'Correct oil grade verified from the manufacturer database, OEM-quality filter, and a service sticker set to a UAE-adjusted interval. Typically done in under 30 minutes at our Al Satwa bay.', 'AED 89+', 'engine-oil-change-dubai'],
    ['fa-dot-circle', 'Tyre Replacement &amp; Alignment', 'All major tyre brands, computerised 4-wheel alignment, and dynamic balancing. DOT age checked against the UAE 5-year maximum, regardless of remaining tread.', 'AED 120+', 'tyre-replacement-dubai'],
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
        <div class="text-center mt-4">
            <p class="text-muted mb-0" style="font-size:.9rem;">
                Can't get to us? Our <a href="{{ route('mobile-car-repair-dubai') }}" class="text-primary fw-semibold text-decoration-none">mobile car repair</a> team covers Al Satwa and every bordering area, and our <a href="{{ route('roadside-assistance-dubai') }}" class="text-primary fw-semibold text-decoration-none">roadside assistance</a> line is open for breakdowns on Sheikh Zayed Road or anywhere nearby.
            </p>
        </div>
    </div>
</div>

{{-- ═══ HOW IT WORKS ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-5">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">How It Works</span>
                <h2 class="fw-bold mb-4">Getting Your Car Fixed in Al Satwa, Step by Step</h2>
                <p style="color:#444;line-height:1.8;">
                    Being local doesn't mean cutting corners on process. Every vehicle that comes through our Al Satwa workshop follows the same six steps - whether it's a five-minute battery swap for a neighbour or a full engine rebuild for a customer visiting from Business Bay.
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
                    ['1','Walk In, Call, or WhatsApp','Most Al Satwa customers simply walk in off Al Satwa Road. If you're further out, call +971 56 612 1423 or send us a WhatsApp with your car details and symptom, and we'll confirm availability or a booking slot.'],
                    ['2','Full Diagnostic Scan','We connect your car to our OBD-II system covering every module - engine, transmission, ABS, body control - and review live data and stored fault codes before any physical inspection begins.'],
                    ['3','Physical Inspection','Depending on the symptom, we check fluid levels and condition, listen for noises, test electrical circuits, or put the car on the ramp for an underbody check.'],
                    ['4','Written Quote Provided','You get a clear itemised quote - parts and labour listed separately - with an explanation of what failed and why. Nothing starts without your confirmation.'],
                    ['5','Repair Completed','Parts sourced from authorised suppliers. The mechanic who diagnosed the fault carries out the repair, so nothing is lost in a handover.'],
                    ['6','Verification &amp; Handover','A post-repair scan confirms fault codes are cleared, a test drive is done where relevant, and we walk you through exactly what was done before payment - matching the original quote.'],
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
            <h2 class="fw-bold mb-2">Why Al Satwa Drivers Use Us Over a Random Search Result</h2>
            <p class="text-muted">Anyone can run ads targeting "mechanic near me." Here's what actually separates a genuine Al Satwa garage from one just bidding on the keyword.</p>
        </div>
        <div class="row g-4">
            @php $reasons = [
                ['fa-map-marker-alt', 'Physically On Al Satwa Road',            'No dispatch delay, no "nearest available technician" routing from another part of Dubai. Our workshop is at 222 Al Satwa Road, minutes on foot from most of the neighbourhood and a two-minute drive from Sheikh Zayed Road, Jumeirah, and Al Wasl.'],
                ['fa-search',         'Diagnostic-First, Always',               'We never recommend a replacement before confirming it's the actual cause. This is what stops the most expensive mistake in car repair - swapping parts that weren't faulty while the real problem stays unfixed.'],
                ['fa-award',          'Genuine Parts, Correct Specification',   'Oil grades, batteries, brake pads, and filters are matched to manufacturer specification - not substituted with cheaper alternatives that fail faster in Dubai's heat and Al Satwa's stop-start traffic.'],
                ['fa-user-check',     '12 Years, Same Mechanics',               'We've operated from this same stretch of Al Satwa since 2012. Long-time residents recognise our team, and the mechanics who opened this workshop are still the ones diagnosing your car today.'],
                ['fa-receipt',        'No Surprises on the Invoice',            'The quote is the invoice. If an additional fault turns up mid-repair, we call and explain before touching anything further. You approve every cost, every time.'],
                ['fa-star',           '4.8★ Rating from Real Customers',        'Our reviews come from Al Satwa residents and businesses, not templated marketing copy. The same words come up repeatedly: honest, fast, fair price, explained everything clearly.'],
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

{{-- ═══ AREAS WE SERVE FROM AL SATWA ═══ --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">Local Coverage</span>
                <h2 class="fw-bold mb-4">Al Satwa and the Streets Around It</h2>
                <p style="color:#444;line-height:1.8;">
                    Our workshop sits right off Al Satwa Road, close to 2nd December Street, the Satwa Grand Mosque, and the Al Satwa bus terminal - so if you can name a landmark in the area, you can find us near it. We're a short walk from most of Al Satwa's residential blocks and a five-minute drive from every neighbouring community.
                </p>
                <p style="color:#444;line-height:1.8;">
                    Because Al Satwa sits between Sheikh Zayed Road, Jumeirah, and Bur Dubai, we also pick up regular customers from just outside the neighbourhood who found the "car repair al satwa" search result faster than anything closer to them - Al Wasl, Al Bada'a, and Al Hudaiba residents included.
                </p>
            </div>
            <div class="col-lg-7">
                <div class="row g-2">
                    @php $nearby = [
                        ['Al Satwa Road', 'Our street'], ['2nd December Street', '2 min drive'],
                        ['Jumeirah', '5 min drive'], ['Al Wasl', '5 min drive'],
                        ['Bur Dubai', '7 min drive'], ['Al Bada\'a', '4 min drive'],
                        ['Al Hudaiba', '5 min drive'], ['Al Jafiliya', '6 min drive'],
                        ['DIFC', '10 min drive'], ['Downtown Dubai', '11 min drive'],
                        ['Sheikh Zayed Road corridor', 'Adjacent'], ['City Walk', '6 min drive'],
                    ]; @endphp
                    @foreach($nearby as $n)
                    <div class="col-6 col-md-4">
                        <div class="d-flex align-items-center bg-light border rounded-3 px-3 py-2 gap-2">
                            <i class="fa fa-map-marker-alt text-primary" style="font-size:.8rem;flex-shrink:0;"></i>
                            <div>
                                <div class="fw-semibold" style="font-size:.85rem;">{{ $n[0] }}</div>
                                <div class="text-muted" style="font-size:.72rem;">{{ $n[1] }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ═══ VEHICLES ═══ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">All Makes &amp; Models</span>
                <h2 class="fw-bold mb-4">Car Makes We Service in Al Satwa</h2>
                <p style="color:#444;line-height:1.8;">
                    Al Satwa's mix of residents and small businesses means our bay sees everything from daily-driven Japanese sedans to European saloons commuting in from Al Wasl and Jumeirah. Our mechanics carry model-specific diagnostic software for all of them.
                </p>
                <p style="color:#444;line-height:1.8;">
                    Common wear parts for Japanese makes are kept in stock on-site, cutting your wait time. For European, American, and Korean platforms, we source genuine parts from authorised UAE distributors and keep you updated on lead times.
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
                        <div class="d-flex align-items-center bg-white border rounded-3 px-3 py-2 gap-2">
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
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:620px;">
            <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                  style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">FAQ</span>
            <h2 class="fw-bold mb-2">Car Repair Al Satwa - Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="alSatwaFaq">
                    @php $faqs = [
                        ['Is there a car repair garage actually located in Al Satwa?','Yes. Dubai Car Repair Service is based at 222 Al Satwa Road, inside the neighbourhood itself - not a mobile-only operation or a branch listed under Al Satwa but based elsewhere. Walk-ins are welcome from 7AM to 10PM, every day.'],
                        ['How do I find a reliable mechanic in Al Satwa?','Look for a workshop with a real street address in the area, transparent written quotes, and reviews from local customers rather than generic five-star ratings. Our garage on Al Satwa Road provides an itemised quote before any work begins, and our reviews come from residents and businesses across Al Satwa, Al Wasl, and Jumeirah.'],
                        ['Do you offer same-day car service in Al Satwa?','Most routine jobs - oil changes, battery replacement, AC gas refill, tyre fitting - are completed same-day, often within an hour, since you can walk or drive in without an appointment. Complex repairs such as engine or gearbox work are quoted with a realistic completion date.'],
                        ['Can I get my car picked up from my building in Al Satwa?','Yes. Our mobile car repair team covers all of Al Satwa and the surrounding streets for many jobs - battery swaps, minor repairs, and diagnostics - without you needing to drive in. For larger repairs, we recommend bringing the car to the workshop directly since it's close by for most residents.'],
                        ['How much does car repair cost at your Al Satwa workshop?','Diagnostics start from AED 50, oil changes from AED 89, battery replacement from AED 150, and AC gas refill from AED 100. Major work such as engine repairs is quoted individually after inspection. Every price is confirmed in writing before work starts.'],
                        ['Is parking available near your Al Satwa workshop?','Street parking along Al Satwa Road fills up during the day, but we keep space clear directly outside the workshop for customers dropping off or collecting vehicles. If you're walking in from nearby, that's usually the faster option.'],
                    ]; @endphp
                    @foreach($faqs as $i => $faq)
                    <div class="accordion-item border rounded-3 mb-3" style="border-color:#e4e8ec!important;">
                        <h3 class="accordion-header" id="asHead{{ $i }}">
                            <button class="accordion-button {{ $i>0?'collapsed':'' }} fw-semibold rounded-3"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#asCollapse{{ $i }}"
                                    aria-expanded="{{ $i===0?'true':'false' }}"
                                    style="font-size:.95rem;background:{{ $i===0?'#f0f7ff':'#fff' }};">
                                {{ $faq[0] }}
                            </button>
                        </h3>
                        <div id="asCollapse{{ $i }}" class="accordion-collapse collapse {{ $i===0?'show':'' }}"
                             data-bs-parent="#alSatwaFaq">
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
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mb-4"><h3 class="fw-bold">Explore Individual Services</h3></div>
        <div class="row g-3 justify-content-center">
@php $related = [
    ['fa-cog',          'Engine Service Dubai',      'Tune-ups to full overhauls',      'car-engine-service-dubai'],
    ['fa-snowflake',    'Car AC Repair Dubai',       'Compressor, gas refill & leaks',  'car-ac-repair-dubai'],
    ['fa-battery-full', 'Battery Replacement Dubai', 'Same-hour on-site service',       'car-battery-replacement-dubai'],
    ['fa-search',       'Car Inspection Dubai',      'RTA pre-test & pre-purchase',     'car-inspection-dubai'],
    ['fa-truck',        'Mobile Car Repair Dubai',   'We come to you in Al Satwa',      'mobile-car-repair-dubai'],
    ['fa-life-ring',    'Roadside Assistance Dubai', 'Breakdowns near Sheikh Zayed Rd', 'roadside-assistance-dubai'],
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
        <div class="text-center mt-4">
            <a href="{{ route('car-repair-dubai') }}" class="text-primary fw-semibold text-decoration-none">
                View all car repair services in Dubai <i class="fa fa-arrow-right ms-1" style="font-size:.75rem;"></i>
            </a>
        </div>
    </div>
</div>

{{-- ═══ CTA ═══ --}}
<div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s"
     style="background:linear-gradient(135deg,#001516 0%,#002a2a 100%);">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 text-center text-lg-start">
                <h2 class="fw-bold text-white mb-2">Car Trouble in Al Satwa? We're Around the Corner.</h2>
                <p class="text-white-50 mb-0">Open 7AM-10PM daily &bull; 222 Al Satwa Rd &bull; Written quote before work begins &bull; All makes welcome</p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-end">
                    <a href="tel:+971 56 612 1423" class="btn btn-primary rounded-pill px-4 py-3 fw-semibold">
                        <i class="fa fa-phone-alt me-2"></i>Call +971 56 612 1423
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
      "@id": "https://dubaicarrepairservice.com/car-repair-al-satwa#service",
      "name": "Car Repair Al Satwa",
      "url": "https://dubaicarrepairservice.com/car-repair-al-satwa",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://dubaicarrepairservice.com/car-repair-al-satwa"
      },
      "serviceType": "Auto Repair",
      "description": "Local car repair, servicing, and diagnostics in Al Satwa, Dubai, from a workshop physically based at 222 Al Satwa Road. Engine, AC, battery, tyre, and inspection services with written quotes and genuine parts.",
      "provider": {
        "@id": "https://dubaicarrepairservice.com/#localbusiness"
      },
      "areaServed": {
        "@type": "Place",
        "name": "Al Satwa, Dubai",
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": 25.2191,
          "longitude": 55.2726
        }
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
      "@id": "https://dubaicarrepairservice.com/car-repair-al-satwa#breadcrumb",
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
          "name": "Car Repair Al Satwa",
          "item": "https://dubaicarrepairservice.com/car-repair-al-satwa"
        }
      ]
    },

    {
      "@type": "FAQPage",
      "@id": "https://dubaicarrepairservice.com/car-repair-al-satwa#faq",
      "mainEntity": [

        {
          "@type": "Question",
          "name": "Is there a car repair garage actually located in Al Satwa?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Dubai Car Repair Service is based at 222 Al Satwa Road, inside the neighbourhood itself - not a mobile-only operation or a branch listed under Al Satwa but based elsewhere. Walk-ins are welcome from 7AM to 10PM, every day."
          }
        },

        {
          "@type": "Question",
          "name": "How do I find a reliable mechanic in Al Satwa?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Look for a workshop with a real street address in the area, transparent written quotes, and reviews from local customers rather than generic five-star ratings. Our garage on Al Satwa Road provides an itemised quote before any work begins, with reviews from residents and businesses across Al Satwa, Al Wasl, and Jumeirah."
          }
        },

        {
          "@type": "Question",
          "name": "Do you offer same-day car service in Al Satwa?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most routine jobs - oil changes, battery replacement, AC gas refill, tyre fitting - are completed same-day, often within an hour, since you can walk or drive in without an appointment. Complex repairs are quoted with a realistic completion date."
          }
        },

        {
          "@type": "Question",
          "name": "Can I get my car picked up from my building in Al Satwa?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our mobile car repair team covers all of Al Satwa and the surrounding streets for many jobs, including battery swaps, minor repairs, and diagnostics, without needing to drive in."
          }
        }

      ]
    }

  ]
}
</script>
@endpush
@endsection