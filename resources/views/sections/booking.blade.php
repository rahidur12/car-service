
    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s" id="booking">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Car Repair Service Provider Within 30 Miniutes</h1>
                        <p class="text-white mb-0">We are a trusted car service provider with a team of experienced and certified technicians. We offer a wide range of services, including car battery,engine servicec, oil changes, tire service, brake repairs, and more. We are committed to providing our customers with quality service at a fair price. Book us today to keep your car running smoothly and safely.</p>
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
                                    <input type="email" class="form-control border-0" name="email" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" name="service">
                                        <option selected>Select A Service</option>
                                        <option value="Diagnostic Test">Diagnostic Test</option>
                                        <option value="Engine Service">Engine Service</option>
                                        <option value="Tire Repair & Change">Tire Repair & Change</option>
                                        <option value="Oil Change">Oil Change</option>
                                        <option value="Car Battery">Car Battery</option>
                                        <option value="Car AC">Car AC</option>
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
