
    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s" id="booking">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Book Your Car Service in Dubai - Takes 30 Second</h1>
                        <p class="text-white mb-0">Keep your vehicle in peak condition with Dubai’s trusted car service experts. Our experienced mechanics specialize in comprehensive auto care, including precision engine tuning, AC repair, battery fitting, oil service, and brake replacement. Located conveniently on Al Satwa Road, our workshop is open from 7 AM to 10 PM daily to serve you. Schedule your service now for fast, fair-priced, and high-quality workmanship.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book US For A Service</h1>
                        <form action="{{route("send_booking_mail")}}" method="POST" >
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="name" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="phone" class="form-control border-0" name="phone" placeholder="Your Phone Number" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" name="service">
                                        <option selected>Select A Service</option>
                                        <option value="Diagnostic Test">Car Inspections</option>
                                        <option value="Engine Service">Engine Repair & Service</option>
                                        <option value="Tire Repair & Change">Tyre Replacement & Alignment</option>
                                        <option value="Oil Change">Engine Oil & Filter Change</option>
                                        <option value="Car Battery">Car Battery Replacement</option>
                                        <option value="Car AC">Car AC Repair & Gas Refill</option>
                                        <option value="7">Others</option>



                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" name="date" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" name="special_request" placeholder="Special Request"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
