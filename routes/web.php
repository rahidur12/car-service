<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| WEB ROUTES (SEO OPTIMIZED)
|--------------------------------------------------------------------------
*/

// ================= HOME =================
Route::get('/', function () {

    $meta_keywords = "car repair dubai, auto workshop al satwa, car maintenance dubai, professional mechanic dubai";
    $meta_description = "Dubai Car Repair Service provides expert automotive solutions in Al Satwa. From engine diagnostics to routine maintenance, our certified technicians ensure your vehicle performs at its best.";

    return view('pages.home', compact('meta_keywords', 'meta_description'));
})->name('home');


// ================= ABOUT =================
Route::get('/about', function () {

    $meta_keywords = "about us, car repair experts dubai, professional mechanics, automotive workshop dubai";
    $meta_description = "Learn more about Dubai Car Repair Service. We provide trusted and professional car repair solutions with experienced mechanics in Dubai.";

    return view('pages.about', compact('meta_keywords', 'meta_description'));
})->name('about');


// ================= SERVICE PAGE =================
Route::get('/service', function () {

    $meta_keywords = "car services dubai, mechanical repair, electrical repair, oil change, brake service";
    $meta_description = "Explore all professional car services including mechanical, electrical, diagnostics, and maintenance solutions in Dubai.";

    return view('pages.service', compact('meta_keywords', 'meta_description'));
})->name('service');


// ================= GALLERY =================
Route::get('/gallery', function () {

    $meta_keywords = "car repair gallery, workshop photos, auto repair work dubai";
    $meta_description = "View our car repair workshop gallery showcasing professional automotive repair and maintenance services.";

    return view('pages.gallery', compact('meta_keywords', 'meta_description'));
})->name('gallery');


// ================= MECHANICAL SERVICES =================
Route::get('/mechanical-services', function () {

    $meta_keywords = "engine repair dubai, mechanical services, suspension repair, gearbox repair";
    $meta_description = "Expert mechanical car repair services in Dubai including engine repair, suspension, and full diagnostics.";

    return view('pages.service.mechanical_services', compact('meta_keywords', 'meta_description'));
})->name('mechanical-services');


// ================= ELECTRICAL SERVICES =================
Route::get('/car-electrical-services', function () {

    $meta_keywords = "car electrical repair dubai, battery diagnostic, alternator repair, wiring issues";
    $meta_description = "Professional car electrical services including diagnostics, battery issues, alternator and wiring repairs.";

    return view('pages.service.car_electrical_services', compact('meta_keywords', 'meta_description'));
})->name('car-electrical-services');


// ================= VEHICLE INSPECTION =================
Route::get('/vehicle-inspection', function () {

    $meta_keywords = "vehicle inspection dubai, car inspection, pre-purchase inspection";
    $meta_description = "Complete vehicle inspection services in Dubai for safety, performance, and pre-purchase checks.";

    return view('pages.service.vehicle_inspection', compact('meta_keywords', 'meta_description'));
})->name('vehicle-inspection');


// ================= ENGINE OIL CHANGE =================
Route::get('/engine-oil-change', function () {

    $meta_keywords = "engine oil change dubai, oil service, synthetic oil change";
    $meta_description = "Fast and professional engine oil change service using premium oils for maximum engine performance.";

    return view('pages.service.engine_oil_change', compact('meta_keywords', 'meta_description'));
})->name('engine-oil-change');


// ================= BRAKE PAD REPLACEMENT =================
Route::get('/car-brake-pad-replacement', function () {

    $meta_keywords = "brake pad replacement dubai, brake repair, car brake service";
    $meta_description = "High-quality brake pad replacement and brake system repair services for safe driving.";

    return view('pages.service.car_brake_pad_replacement', compact('meta_keywords', 'meta_description'));
})->name('car-brake-pad-replacement');


// ================= CAR MAINTENANCE =================
Route::get('/car-maintenance-dubai', function () {

    $meta_keywords = "car maintenance dubai, periodic service, vehicle checkup";
    $meta_description = "Complete car maintenance services in Dubai to keep your vehicle running smoothly and avoid breakdowns.";

    return view('pages.service.car_maintenance', compact('meta_keywords', 'meta_description'));
})->name('car-maintenance'); // ✅ FIXED


// ================= CAR REPAIR SERVICE =================
Route::get('/car-repair-service-dubai', function () {

    $meta_keywords = "car repair dubai, auto repair workshop, garage dubai";
    $meta_description = "Reliable car repair services in Dubai for all vehicle brands with expert technicians.";

    return view('pages.service.car_repair_service', compact('meta_keywords', 'meta_description'));
})->name('car-repair-service-dubai');


// ================= CAR REPAIR CENTER =================
Route::get('/car-repair-center-dubai', function () {

    $meta_keywords = "car repair center dubai, auto workshop, certified garage";
    $meta_description = "Modern car repair center in Dubai with advanced tools and certified mechanics.";

    return view('pages.service.car_repair_center', compact('meta_keywords', 'meta_description'));
})->name('car-repair-center-dubai');


// ================= BATTERY REPLACEMENT =================
Route::get('/car-battery-replacement-dubai', function () {

    $meta_keywords = "car battery replacement dubai, emergency battery service";
    $meta_description = "Fast car battery replacement service in Dubai with testing and installation included.";

    return view('pages.service.car_battery_replacement', compact('meta_keywords', 'meta_description'));
})->name('car-battery-replacement-dubai');


// ================= CONTACT =================
Route::get('/contact', function () {

    $meta_keywords = "contact car repair dubai, booking workshop, al satwa garage";
    $meta_description = "Contact Dubai Car Repair Service for booking, quotes, and professional automotive support.";

    return view('pages.contact', compact('meta_keywords', 'meta_description'));
})->name('contact');


// ================= BOOKING =================
Route::post('/send_booking_mail', [BookingController::class, 'send_booking_mail'])
    ->name('send_booking_mail');