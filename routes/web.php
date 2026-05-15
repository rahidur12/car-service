<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Consolidated Homepage Route (Removed duplicate /home)
Route::get('/', function () {
    $meta_keywords = "car repair dubai, auto workshop al satwa, car maintenance dubai, professional mechanic dubai";
    $meta_description = "Dubai Car Repair Service provides expert automotive solutions in Al Satwa. From engine diagnostics to routine maintenance, our certified technicians ensure your vehicle performs at its best. Call 056-6121423 for a booking.";
    return view('pages.home', compact('meta_keywords', 'meta_description'));
})->name('home');

Route::get('/about', function () {
    $meta_keywords = "about us, car repair experts dubai, professional mechanics, automotive excellence";
    $meta_description = "Learn more about Dubai Car Repair Service. With years of experience and a passion for automotive excellence, we are dedicated to providing reliable and transparent car repair services to the Dubai community.";
    return view('pages.about', compact('meta_keywords', 'meta_description'));
})->name('about');

Route::get('/service', function () {
    $meta_keywords = "car services dubai, mechanical electrical repair, oil change, battery replacement, brake service";
    $meta_description = "Explore our wide range of professional car services. We offer complete mechanical repairs, electrical diagnostics, oil changes, and preventive maintenance to keep your car running smoothly in Dubai's conditions.";
    return view('pages.service', compact('meta_keywords', 'meta_description'));
})->name('service');

Route::get('/gallery', function () {
    $meta_keywords = "car repair gallery, workshop photos, car service portfolio, automotive work dubai";
    $meta_description = "See our work in action. Browse our gallery to view our modern workshop facilities and the high-quality automotive repair and maintenance services we provide for our valued clients.";
    return view('pages.gallery', compact('meta_keywords', 'meta_description'));
})->name('gallery');

Route::get('/mechanical-services', function () {
    $meta_keywords = "mechanical services, engine repair dubai, car mechanic, mobile mechanic, suspension repair";
    $meta_description = "Expert mechanical services for all vehicle brands. From engine overhauls to suspension and transmission repairs, our skilled mechanics provide reliable solutions to keep your car in top condition.";
})->name('mechanical-services');

Route::get('/car-electrical-services', function () {
    $meta_keywords = "car electrical repair, auto electrical services dubai, battery diagnostic, alternator repair, car wiring";
    $meta_description = "Comprehensive auto electrical services in Dubai. We specialize in diagnosing and repairing complex electrical issues, including battery problems, alternator issues, and computerized engine diagnostics.";
    return view('pages.service.car_electrical_services', compact('meta_keywords', 'meta_description'));
})->name('car-electrical-services');

Route::get('/vehicle-inspection', function () {
    $meta_keywords = "vehicle inspection dubai, pre-purchase inspection, car testing center, health check dubai";
    $meta_description = "Professional vehicle inspection and testing services in Dubai. Our comprehensive health checks and pre-purchase inspections give you complete peace of mind before you buy or travel.";
    return view('pages.service.vehicle_inspection', compact('meta_keywords', 'meta_description'));
})->name('vehicle-inspection');

Route::get('/engine-oil-change', function () {
    $meta_keywords = "oil change dubai, engine oil service, transmission fluid change, synthetic oil change";
    $meta_description = "Quick and professional engine oil change services in Dubai. We use premium lubricants and filters to extend the life of your engine and ensure peak performance on the road.";
    return view('pages.service.engine_oil_change', compact('meta_keywords', 'meta_description'));
})->name('engine-oil-change');

Route::get('/car-brake-pad-replacement', function () {
    $meta_keywords = "brake pad replacement, car brake service, hydraulic brakes repair, brake shoe replacement";
    $meta_description = "Ensure your safety with our expert brake services. We offer brake pad replacement, brake fluid flushing, and full hydraulic system repairs using high-quality parts for maximum stopping power.";
    return view('pages.service.car_brake_pad_replacement', compact('meta_keywords', 'meta_description'));
})->name('car-brake-pad-replacement');

Route::get('/car-maintenance-dubai', function () {
    $meta_keywords = "periodic car maintenance, vehicle service dubai, affordable car maintenance, car checkup";
    $meta_description = "Stay ahead of repairs with professional car maintenance in Dubai. Our scheduled service plans are designed to prevent breakdowns and maintain your vehicle's resale value.";
    return view('pages.service.car_maintenance', compact('meta_keywords', 'meta_description'));
})->name('car-maintenance');

Route::get('/car-repair-service-dubai', function () {
    $meta_keywords = "car repair dubai, auto repair shop, car garage satwa, vehicle repair solutions";
    $meta_description = "Reliable and professional car repair services in Dubai. We provide expert auto repair solutions for all makes and models, ensuring your vehicle is back on the road quickly.";
    return view('pages.service.car_repair_service', compact('meta_keywords', 'meta_description'));
})->name('car-repair-service');

Route::get('/car-repair-center-dubai', function () {
    $meta_keywords = "certified car repair center, modern auto garage, specialized car workshop dubai";
    $meta_description = "Visit our state-of-the-art car repair center in Dubai. Featuring modern diagnostic equipment and certified technicians, we provide the highest standard of automotive care.";
    return view('pages.service.car_repair_center', compact('meta_keywords', 'meta_description'));
})->name('car-repair-center');

Route::get('/car-battery-replacement-dubai', function () {
    $meta_keywords = "emergency battery replacement, car battery dubai, on-site battery change, car battery price";
    $meta_description = "Fast and affordable car battery replacement in Dubai. We offer on-site battery testing and installation with a full warranty to get you moving again in no time.";
    return view('pages.service.car_battery_replacement', compact('meta_keywords', 'meta_description'));
})->name('car-battery-replacement');

Route::get('/contact', function () {
    $meta_keywords = "contact dubai car repair, booking car service, al satwa workshop location, mechanic phone number";
    $meta_description = "Get in touch with Dubai Car Repair Service today. Visit our workshop in Al Satwa or call us at 056-6121423 to book your service or get a free estimate.";
    return view('pages.contact', compact('meta_keywords', 'meta_description'));
})->name('contact');

Route::post('/send_booking_mail',[BookingController::class,'send_booking_mail'])->name("send_booking_mail");

