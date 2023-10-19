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

Route::get('/', function () {
    $meta_keywords = "car,service";
    $meta_description = "car,service";
    return view('pages.home',compact('meta_keywords','meta_description'));
});

Route::get('/home', function () {
    $meta_keywords = "car,service";
    $meta_description = "car,service";
    return view('pages.home',compact('meta_keywords','meta_description'));
})->name('home');

Route::get('/about', function () {
    $meta_keywords = "car,service";
    $meta_description = "car,service";
    return view('pages.about',compact('meta_keywords','meta_description'));
})->name('about');

Route::get('/service', function () {
    $meta_keywords = "car,service";
    $meta_description = "car,service";
    return view('pages.service',compact('meta_keywords','meta_description'));
})->name('service');

Route::get('/gallery', function () {
    $meta_keywords = "car,service";
    $meta_description = "car,service";
    return view('pages.gallery',compact('meta_keywords','meta_description'));
})->name('gallery');


Route::get('/mechanical-services', function () {
    $meta_keywords = "mechanical services, mechanical technical services, mechanical engineering services, car mechanic, car mechanic near me, mobile car mechanic, car mechanic service, car body mechanic, car door handle mechanism, best car mechanic, mobile car mechanic dubai, car mechanic dubai";
    $meta_description = "Explore reliable mechanical services, including mechanical engineering expertise, and top-notch car mechanic solutions. Find the best car mechanics near you, offering mobile car mechanic services and car body repairs. Whether you need assistance with car door handle mechanisms or general car maintenance, our skilled team has you covered. Discover the leading car mechanic services in Dubai, providing expert solutions to keep your vehicle in optimal condition.";
    return view('pages.service.mechanical_services',compact('meta_keywords','meta_description'));
})->name('mechanical-services');

Route::get('/car-electrical-services', function () {
    $meta_keywords = "auto electrical services, advertise electrical services, electric motor service, electric motor service near me, abs electrical services, best electrical services in Dubai, electric range repair service, electric service and repair, electrical service company near me, electrical wiring repair service, general electric products and services, car electrical services, car electrical shop near me, car electrical repair, car electrical shop, car electrical problems repair, car electrical repair shops near me, car electrical tester, car electrical services, car electrical workshop, car electrical diagnostic near me";
    $meta_description = "Discover top-notch auto electrical services and electric motor service options, including ABS electrical services and electrical wiring repairs. Find the best electrical service companies near you in Dubai. Whether you need car electrical services, car electrical repairs, or car electrical diagnostics, we've got you covered. Explore our services for general electric products, advertising electrical services, and electric motor service solutions. Trust us for comprehensive electrical service and repair, including electric range repair services. We're your one-stop destination for all your auto electrical needs.";
    return view('pages.service.car_electrical_services',compact('meta_keywords','meta_description'));
})->name('car-electrical-services');


Route::get('/vehicle-inspection', function () {
    $meta_keywords = "vehicle inspection, vehicle inspection near me, vehicle inspection dubai, vehicle testing center, vehicle testing center near me, vehicle testing, vehicle testing dubai, car inspection, car inspection dubai, car inspection near me, pre purchase car inspection dubai, cars vehicle testing centre, speed vehicle testing";
    $meta_description = "Welcome to our vehicle inspection and testing services. We provide comprehensive car and vehicle inspection in Dubai, as well as nearby testing centers. Whether you need a pre-purchase car inspection or general vehicle testing, our experts are here to help. Explore our services and visit our vehicle testing center near you for reliable car inspection and testing in Dubai.";
    return view('pages.service.vehicle_inspection',compact('meta_keywords','meta_description'));
})->name('vehicle-inspection');

Route::get('/engine-oil-change', function () {
    $meta_keywords = "oil change service, oil change, oil change near me, car oil change near me, car oil change dubai, car oil change, oil change dubai, engine oil change, transmission oil change, engine oil change near me, oil change total, bike engine oil change, car oil change price in dubai, oil change service near me";
    $meta_description = "Discover top-notch oil change services in Dubai and nearby areas. Our expert team offers efficient car and engine oil change solutions at competitive prices. Find the nearest locations for quick oil change services near you. We provide transmission oil change, bike engine oil change, and a variety of oil change options to keep your vehicle in optimal condition. Explore our services and pricing for car oil change in Dubai and experience the convenience of professional oil change service near you.";
    return view('pages.service.engine_oil_change',compact('meta_keywords','meta_description'));
})->name('engine-oil-change');


Route::get('/car-brake-pad-replacement', function () {
    $meta_keywords = "brake pads service, brake shoe, brake pad replacement, brake cleaner, brake lining, car brake pads, brake cylinder, brake light, brake oil, brake pads price, hydraulic brakes, only brakes auto repairing, front brake pads, advanced braking system, auto brake repair near me, best brake pad replacement near me, blue print brake pads review, brake caliper set, brake service near me cheap, brake shoe adjuster, pan brake, silver brake";
    $meta_description = "Explore a wide range of brake services and components, including brake pads service, brake shoe replacement, brake cleaner, brake lining, and more. Find top-quality car brake pads, brake oil, and brake cylinder solutions at competitive prices. Whether you need advanced braking system repairs or front brake pad replacements, discover auto brake repair options near you. Read Blue Print brake pads reviews and find the best brake pad replacement services in your area. Trust us for brake caliper sets, hydraulic brake repairs, and affordable brake services. Your one-stop destination for all your brake-related needs.";
    return view('pages.service.car_brake_pad_replacement',compact('meta_keywords','meta_description'));
})->name('car-brake-pad-replacement');


Route::get('/contact', function () {
    $meta_keywords = "car,service";
    $meta_description = "car,service";
    return view('pages.contact',compact('meta_keywords','meta_description'));
})->name('contact');

Route::post('/send_booking_mail',[BookingController::class,'send_booking_mail'])->name("send_booking_mail");

