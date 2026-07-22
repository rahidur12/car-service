{{-- ════════════════════════════════════════════════════════
     SECTION 2 - About Us  (sections.about)
     Image left, content right - same as service page intro blocks
════════════════════════════════════════════════════════ --}}
<div class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">

            {{-- Image --}}
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s" style="min-height:420px;">
                <div class="position-relative h-100">
                    <img class="w-100 h-100 rounded-3 shadow"
                         src="{{ asset('public/img/about.webp') }}"
                         alt="Dubai Car Repair Service - Certified Mechanics at Al Satwa Garage"
                         style="object-fit:cover;min-height:420px;">
                    <div class="position-absolute bottom-0 start-0 m-4 bg-primary text-white rounded-3 px-4 py-3 shadow"
                         style="min-width:150px;">
                        <div class="fw-bold" style="font-size:2rem;line-height:1;">12</div>
                        <div style="font-size:.8rem;opacity:.9;line-height:1.3;">Years Serving<br>Dubai Drivers</div>
                    </div>
                    <div class="position-absolute bottom-0 end-0 m-4 bg-white border rounded-3 px-3 py-2 shadow text-center">
                        <div class="fw-bold text-primary" style="font-size:1.2rem;line-height:1.2;">4.8 ★</div>
                        <div class="text-muted" style="font-size:.72rem;">Google Rating</div>
                    </div>
                </div>
            </div>

            {{-- Content --}}
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <span class="d-inline-block border border-primary rounded text-primary fw-semibold py-1 px-3 mb-3"
                      style="font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;">About Us</span>
                <h2 class="fw-bold mb-4" style="line-height:1.3;">
                    Dubai Car Repair Service - Trusted Auto Care in Al Satwa for Over 12 Years
                </h2>

                <p style="color:#444;line-height:1.8;">
                    We are a trusted <strong>car repair shop Dubai</strong> vehicle owners rely on for professional automotive solutions. Located at <strong>222 Al Satwa Road, Dubai</strong>, our full-service <strong>car garage Dubai</strong> provides reliable repairs, maintenance, and inspection services. Our workshop is centrally located near Jumeirah, Bur Dubai, Karama, Downtown Dubai, and Sheikh Zayed Road, making quality <strong>car repair in Dubai</strong> easily accessible for drivers across the city.
                </p>

                <p style="color:#444;line-height:1.8;">
                    With over <strong>12 years of experience</strong> and more than <strong>8,500 satisfied customers</strong>, our certified mechanics deliver dependable <strong>Dubai car repair service</strong> for all makes and models, including Toyota, Nissan, Honda, BMW, Mercedes-Benz, Mitsubishi, Kia, Hyundai, Land Rover, and more. Whether you need engine repairs, electrical solutions, diagnostics, or routine maintenance, our skilled <strong>car mechanic Dubai</strong> specialists provide accurate solutions with professional workmanship.
                </p>

                <p style="color:#444;line-height:1.8;">
                    As a complete <strong>car service center Dubai</strong> drivers trust, we focus on transparent pricing, genuine parts, and efficient repairs. Customers looking for reliable <strong>car servicing Dubai</strong> can expect detailed inspections, quality maintenance, and expert recommendations based on their vehicle's condition.
                </p>

                <p style="color:#444;line-height:1.8;">
                    You receive a clear quote before any work begins. No surprises. No unnecessary upsells. Just honest automotive care at a fair price. Our <strong>car service in Dubai</strong> is available <strong>7 days a week, 7AM to 10PM</strong>, helping drivers maintain safe and reliable vehicles throughout the year.
                </p>

                {{-- 3 badges --}}
                <div class="row g-3 mb-4">
                    @php $badges = [
                        ['fa-check','Professional &amp; Certified Mechanics'],
                        ['fa-check','Transparent Pricing, No Hidden Charges'],
                        ['fa-check','Service Completed Within 30 Minutes'],
                    ]; @endphp
                    @foreach($badges as $b)
                    <div class="col-12">
                        <div class="d-flex align-items-center gap-3 bg-white border rounded-3 p-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle"
                                 style="width:32px;height:32px;flex-shrink:0;">
                                <i class="fa {{ $b[0] }} text-white" style="font-size:.75rem;"></i>
                            </div>
                            <span class="fw-semibold" style="font-size:.9rem;">{!! $b[1] !!}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                    <a href="{{ route('about') }}" 
                    class="btn btn-primary rounded-pill px-4 py-2 fw-semibold" 
                    style="position: relative; z-index: 1050; pointer-events: auto !important;">
                        Learn More About Us <i class="fa fa-arrow-right ms-2"></i>
                    </a>
            </div>
        </div>
    </div>
</div>