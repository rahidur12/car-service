<style>
    /* ── Card wrapper ── */
    .srv-card {
        border: 1px solid #e4e8ec;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
        display: flex;
        flex-direction: column;
        height: 100%;
        transition: box-shadow .25s ease, transform .25s ease;
    }

    /* ── Image ── */
    .srv-card-img {
        width: 100%;
        height: 195px;
        object-fit: cover;
        display: block;
    }

    /* ── Body ── */
    .srv-card-body {
        padding: 1.25rem 1.25rem .75rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .srv-card-title {
        font-size: 1.05rem;
        font-weight: 700;
        color: #0d1b2a;
        margin-bottom: .75rem;
    }

    /* ── Bullet list ── */
    .srv-card-list {
        list-style: none;
        padding: 0;
        margin: 0 0 1rem;
        flex: 1;
    }

    .srv-card-list li {
        font-size: .875rem;
        color: #444;
        padding: 3px 0;
        display: flex;
        align-items: flex-start;
        gap: 7px;
        line-height: 1.5;
    }

    .srv-card-list li i {
        color: #001516;
        margin-top: 3px;
        flex-shrink: 0;
    }

    /* ── View details link ── */
    .srv-card-link {
        font-size: .875rem;
        font-weight: 600;
        color: #001516;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        margin-bottom: 1rem;
    }

    .srv-card-link:hover {
        color: #001516;
        text-decoration: underline;
    }

    /* ── Booking CTA button ── */
    .srv-card-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: #001516;
        color: #fff;
        font-size: .9rem;
        font-weight: 600;
        padding: .65rem 1rem;
        border-radius: 6px;
        text-decoration: none;
        transition: background .2s;
    }

    .srv-card-btn:hover {
        background: #003333;
        color: #fff;
    }

    /* ── Section badge ── */
    .section-badge {
        display: inline-block;
        border: 1px solid #001516;
        color: #001516;
        font-size: .8rem;
        font-weight: 600;
        padding: 3px 14px;
        border-radius: 20px;
        margin-bottom: 1rem;
        letter-spacing: .04em;
        text-transform: uppercase;
    }
</style>

<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="services">
    <div class="container">

        {{-- Section Header --}}
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <span class="section-badge">Our Expert Services</span>
            <h2 class="fw-bold" style="font-size:2rem;">
                Complete Car Repair &amp; <span class="text-primary">Maintenance Services</span>
            </h2>
            <p class="text-muted mx-auto" style="max-width:520px; font-size:.95rem;">
                Al Satwa's most trusted car repair garage - serving all Dubai areas, 7 AM to 10 PM, every day.
            </p>
        </div>

        {{-- Row 1: 3 cards --}}
        <div class="row g-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">

            {{-- Card 1: Car Inspection --}}
            <div class="col-md-6 col-lg-4">
                <div class="srv-card">
                    <img class="srv-card-img" src="{{ asset('public/img/service1.webp') }}"
                        alt="Car Inspection Dubai - Multi-Point Vehicle Check" loading="lazy">
                    <div class="srv-card-body">
                        <div class="srv-card-title">Car Inspection Dubai</div>
                        <ul class="srv-card-list">
                            <li><i class="fa fa-check"></i> Comprehensive multi-point inspection</li>
                            <li><i class="fa fa-check"></i> Engine, brakes, tyres &amp; electrical check</li>
                            <li><i class="fa fa-check"></i> Detailed vehicle health report provided</li>
                        </ul>
                        <a href="{{ route('car-inspection-dubai') }}" class="srv-card-link">
                            View full service details <i class="fa fa-arrow-right"></i>
                        </a>
                        <a href="https://wa.me/971566121423" class="srv-card-btn" style="display: flex !important; align-items: center !important; justify-content: center !important; gap: 8px;">
                            <i class="fab fa-whatsapp" style="font-size: 1.2rem; line-height: 1;"></i> <span>Instant Booking</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 2: Engine Repair --}}
            <div class="col-md-6 col-lg-4">
                <div class="srv-card">
                    <img class="srv-card-img" src="{{ asset('public/img/service2.webp') }}"
                        alt="Engine Repair and Service Dubai" loading="lazy">
                    <div class="srv-card-body">
                        <div class="srv-card-title">Engine Repair &amp; Service Dubai</div>
                        <ul class="srv-card-list">
                            <li><i class="fa fa-check"></i> Full engine diagnostics &amp; tune-ups</li>
                            <li><i class="fa fa-check"></i> Timing belt, fuel system &amp; overhaul</li>
                            <li><i class="fa fa-check"></i> Genuine parts, all makes &amp; models</li>
                        </ul>
                        <a href="{{ route('car-engine-service-dubai') }}" class="srv-card-link">
                            View full service details <i class="fa fa-arrow-right"></i>
                        </a>
                        <a href="https://wa.me/971566121423" class="srv-card-btn" style="display: flex !important; align-items: center !important; justify-content: center !important; gap: 8px;">
                            <i class="fab fa-whatsapp" style="font-size: 1.2rem; line-height: 1;"></i> <span>Instant Booking</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 3: Tyre Replacement --}}
            <div class="col-md-6 col-lg-4">
                <div class="srv-card">
                    <img class="srv-card-img" src="{{ asset('public/img/service3.webp') }}"
                        alt="Tyre Replacement and Wheel Alignment Dubai" loading="lazy">
                    <div class="srv-card-body">
                        <div class="srv-card-title">Tyre Replacement &amp; Alignment Dubai</div>
                        <ul class="srv-card-list">
                            <li><i class="fa fa-check"></i> Supply &amp; fit tyres for all vehicles</li>
                            <li><i class="fa fa-check"></i> Computerised wheel alignment</li>
                            <li><i class="fa fa-check"></i> All major tyre brands available</li>
                        </ul>
                        <a href="{{ route('tyre-replacement-dubai') }}" class="srv-card-link">
                            View full service details <i class="fa fa-arrow-right"></i>
                        </a>
                        <a href="https://wa.me/971566121423" class="srv-card-btn" style="display: flex !important; align-items: center !important; justify-content: center !important; gap: 8px;">
                            <i class="fab fa-whatsapp" style="font-size: 1.2rem; line-height: 1;"></i> <span>Instant Booking</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        {{-- Row 2: 3 cards --}}
        <div class="row g-4 mb-4 wow fadeInUp" data-wow-delay="0.3s">

            {{-- Card 4: Oil Change --}}
            <div class="col-md-6 col-lg-4">
                <div class="srv-card">
                    <img class="srv-card-img" src="{{ asset('public/img/service4.webp') }}"
                        alt="Engine Oil and Filter Change Dubai" loading="lazy">
                    <div class="srv-card-body">
                        <div class="srv-card-title">Engine Oil &amp; Filter Change Dubai</div>
                        <ul class="srv-card-list">
                            <li><i class="fa fa-check"></i> Premium oil change service</li>
                            <li><i class="fa fa-check"></i> Oil filter &amp; air filter replacement</li>
                            <li><i class="fa fa-check"></i> Correct grade oil for UAE heat</li>
                        </ul>
                        <a href="{{ route('engine-oil-change-dubai') }}" class="srv-card-link">
                            View full service details <i class="fa fa-arrow-right"></i>
                        </a>
                        <a href="https://wa.me/971566121423" class="srv-card-btn" style="display: flex !important; align-items: center !important; justify-content: center !important; gap: 8px;">
                            <i class="fab fa-whatsapp" style="font-size: 1.2rem; line-height: 1;"></i> <span>Instant Booking</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 5: Car Battery --}}
            <div class="col-md-6 col-lg-4">
                <div class="srv-card">
                    <img class="srv-card-img" src="{{ asset('public/img/service5.webp') }}"
                        alt="Car Battery Replacement Dubai - Same Hour Service" loading="lazy">
                    <div class="srv-card-body">
                        <div class="srv-card-title">Car Battery Replacement Dubai</div>
                        <ul class="srv-card-list">
                            <li><i class="fa fa-check"></i> Battery health diagnostics on the spot</li>
                            <li><i class="fa fa-check"></i> Free battery delivery &amp; installation</li>
                            <li><i class="fa fa-check"></i> Premium battery brands available</li>
                        </ul>
                        <a href="{{ route('car-battery-replacement-dubai') }}" class="srv-card-link">
                            View full service details <i class="fa fa-arrow-right"></i>
                        </a>
                        <a href="https://wa.me/971566121423" class="srv-card-btn" style="display: flex !important; align-items: center !important; justify-content: center !important; gap: 8px;">
                            <i class="fab fa-whatsapp" style="font-size: 1.2rem; line-height: 1;"></i> <span>Instant Booking</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 6: AC Repair --}}
            <div class="col-md-6 col-lg-4">
                <div class="srv-card">
                    <img class="srv-card-img" src="{{ asset('public/img/service6.webp') }}"
                        alt="Car AC Repair and Gas Refill Dubai" loading="lazy">
                    <div class="srv-card-body">
                        <div class="srv-card-title">Car AC Repair &amp; Gas Refill Dubai</div>
                        <ul class="srv-card-list">
                            <li><i class="fa fa-check"></i> AC diagnostics &amp; leak test</li>
                            <li><i class="fa fa-check"></i> AC gas refill &amp; compressor repair</li>
                            <li><i class="fa fa-check"></i> Restore factory-level cooling performance</li>
                        </ul>
                        <a href="{{ route('car-ac-repair-dubai') }}" class="srv-card-link">
                            View full service details <i class="fa fa-arrow-right"></i>
                        </a>
                        <a href="https://wa.me/971566121423" class="srv-card-btn" style="display: flex !important; align-items: center !important; justify-content: center !important; gap: 8px;">
                            <i class="fab fa-whatsapp" style="font-size: 1.2rem; line-height: 1;"></i> <span>Instant Booking</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- ─── DIAGNOSTIC HIGHLIGHT BLOCK (Color Adjusted) ─── --}}
<div class="container-fluid wow fadeInUp py-5" data-wow-delay="0.1s" style="background-color: #001516;">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <p class="d-inline-block border rounded text-white fw-semi-bold py-1 px-3">Diagnostic</p>
                <h2 class="text-white mb-4">
                    Advanced Car Diagnostic Test in Dubai - Know Exactly What's Wrong
                </h2>
                <p class="text-white">
                    Most car problems show warning signs before they become serious. Our advanced diagnostic service
                    uses the latest OBD-II scanning equipment to read your vehicle's computer, identify fault codes, and
                    give you a clear, honest picture of your car's condition - so you only pay for what actually needs
                    fixing.
                </p>
                <ul class="list-unstyled text-white mb-4">
                    <li class="mb-2"><i class="fa fa-check text-white me-2"></i>Full engine fault code scan</li>
                    <li class="mb-2"><i class="fa fa-check text-white me-2"></i>Electrical system &amp; battery check
                    </li>
                    <li class="mb-2"><i class="fa fa-check text-white me-2"></i>Transmission &amp; ABS system scan</li>
                    <li class="mb-2"><i class="fa fa-check text-white me-2"></i>AC system performance check</li>
                    <li class="mb-2"><i class="fa fa-check text-white me-2"></i>Printed vehicle health report</li>
                </ul>
                <a href="tel:0566121423" class="btn btn-light py-2 px-3 py-md-3 px-md-5 fs-md-6"
                    style="font-size: 0.85rem; font-weight: 500; letter-spacing: 0.5px; white-space: nowrap;">
                    <i class="fa fa-phone-alt me-2"></i> Book a Diagnostic: 056-6121423 <i
                        class="fa fa-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid rounded" src="{{ asset('public/img/diagnostic.webp') }}"
                    alt="Advanced Car Diagnostic Test in Dubai - Al Satwa Garage">
            </div>
        </div>
    </div>
</div>

{{-- ─── WHY CHOOSE US ─── --}}
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h2 class="mb-0">Why Dubai Drivers Trust Us Over Other Garages</h2>
        </div>

        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-md-6 col-lg-4">
                <div class="d-flex h-100 border rounded p-4">
                    <div class="flex-shrink-0 btn-square rounded-circle me-4 mt-1 text-white"
                        style="width:45px; height:45px; display:flex; align-items:center; justify-content:center; background-color: #001516;">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4 class="mb-2">Centrally Located in Al Satwa</h4>
                        <p class="mb-0" style="font-size:.9rem;">222 Al Satwa Road - minutes from Sheikh Zayed Road,
                            Jumeirah, Bur Dubai, Karama, Downtown Dubai &amp; DIFC. Easy access, free parking.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="d-flex h-100 border rounded p-4">
                    <div class="flex-shrink-0 btn-square rounded-circle me-4 mt-1 text-white"
                        style="width:45px; height:45px; display:flex; align-items:center; justify-content:center; background-color: #001516;">
                        <i class="fa fa-shield-alt"></i>
                    </div>
                    <div>
                        <h4 class="mb-2">12 Years of Proven Experience</h4>
                        <p class="mb-0" style="font-size:.9rem;">Our reputation is built on repeat customers and honest
                            word-of-mouth. Over 8,500 satisfied customers since 2012.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="d-flex h-100 border rounded p-4">
                    <div class="flex-shrink-0 btn-square rounded-circle me-4 mt-1 text-white"
                        style="width:45px; height:45px; display:flex; align-items:center; justify-content:center; background-color: #001516;">
                        <i class="fa fa-car"></i>
                    </div>
                    <div>
                        <h4 class="mb-2">All Car Makes &amp; Models</h4>
                        <p class="mb-0" style="font-size:.9rem;">Toyota · Nissan · Honda · BMW · Mercedes-Benz · Kia ·
                            Hyundai · Mitsubishi · Land Rover · Jeep · Ford · Chevrolet - we service them all.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="d-flex h-100 border rounded p-4">
                    <div class="flex-shrink-0 btn-square rounded-circle me-4 mt-1 text-white"
                        style="width:45px; height:45px; display:flex; align-items:center; justify-content:center; background-color: #001516;">
                        <i class="fa fa-receipt"></i>
                    </div>
                    <div>
                        <h4 class="mb-2">Transparent Pricing, Always</h4>
                        <p class="mb-0" style="font-size:.9rem;">You always know the exact cost before any work begins.
                            Zero hidden charges on your invoice - no upsells, no surprises.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="d-flex h-100 border rounded p-4">
                    <div class="flex-shrink-0 btn-square rounded-circle me-4 mt-1 text-white"
                        style="width:45px; height:45px; display:flex; align-items:center; justify-content:center; background-color: #001516;">
                        <i class="fa fa-bolt"></i>
                    </div>
                    <div>
                        <h4 class="mb-2">Most Repairs Completed Same Day</h4>
                        <p class="mb-0" style="font-size:.9rem;">We respect your time. Standard repairs are completed
                            within hours so you can get back on Dubai's roads without unnecessary delays.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="d-flex h-100 border rounded p-4">
                    <div class="flex-shrink-0 btn-square rounded-circle me-4 mt-1 text-white"
                        style="width:45px; height:45px; display:flex; align-items:center; justify-content:center; background-color: #001516;">
                        <i class="fa fa-clock"></i>
                    </div>
                    <div>
                        <h4 class="mb-2">Open Every Day, 7 AM to 10 PM</h4>
                        <p class="mb-0" style="font-size:.9rem;">Car problems don't follow a schedule. We're open
                            Saturday to Friday, including weekends and UAE public holidays.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ─── SERVICE AREAS ─── --}}
{{-- ─── SERVICE AREAS ─── --}}
<style>
    /* Premium Hover & Interactive Styles */
    .location-card {
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        border-left: 3px solid #001516 !important; /* Bold brand accent line on the left */
        background-color: #ffffff;
    }
    
    .location-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 20px rgba(0, 21, 22, 0.08) !important;
        background-color: rgba(0, 21, 22, 0.02) !important; /* Light tint of brand color on hover */
        border-color: #002d30 !important;
    }

    .location-card:hover .location-icon {
        transform: scale(1.15);
        color: #003d42 !important;
    }

    .location-icon {
        transition: transform 0.2s ease;
    }
</style>

<div class="container-fluid bg-light py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h2 class="mb-3" style="color: #001516; font-weight: 700;">Serving Car Owners Across All Dubai Areas</h2>
            <p class="text-muted">Our garage at 222 Al Satwa Road is one of the most centrally located workshops in
                Dubai - easy to reach from any direction.</p>
        </div>

        <div class="row g-3 wow fadeInUp" data-wow-delay="0.3s">
            @php
                $areas = [
                    'Al Satwa', 'Jumeirah', 'Bur Dubai', 'Karama',
                    'Al Mankhool', 'Za\'abeel', 'DIFC', 'Downtown Dubai',
                    'Business Bay', 'Al Quoz', 'Al Barsha', 'Dubai Marina',
                    'JVC', 'Mirdif', 'Al Nahda', 'Al Jaddaf',
                    'Oud Metha', 'Al Wasl', 'Al Safa', 'Sheikh Zayed Road',
                ];
            @endphp
            @foreach($areas as $area)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="d-flex align-items-center justify-content-start border rounded location-card py-3 ps-3 pe-2 h-100" style="overflow: hidden;">
                        <i class="fa fa-map-marker-alt me-2 location-icon" style="color: #001516; min-width: 14px; flex-shrink: 0; font-size: 1rem;"></i>
                        <span style="font-size: 0.85rem; font-weight: 600; color: #333; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="{{ $area }}">
                            {{ $area }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <p class="text-muted mb-3">Not listed? We welcome drivers from all areas across Dubai.</p>
            <a href="tel:0566121423" class="btn rounded-pill py-3 px-5 text-white shadow-sm" style="background-color: #001516; font-weight: 600; transition: all 0.2s ease;" onmouseover="this.style.backgroundColor='#002d30'" onmouseout="this.style.backgroundColor='#001516'">
                <i class="fa fa-phone-alt me-2"></i> Call Now - 056-6121423
            </a>
        </div>
    </div>
</div>