<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

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

// Core Base Pages
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/service', 'pages.service')->name('service');
Route::view('/contact', 'pages.contact')->name('contact');

// Premium Dedicated Automotive Service Pages
Route::view('/car-engine-service-dubai', 'pages.service.car_engine_service_dubai')->name('car-engine-service-dubai');
Route::view('/mobile-car-repair-dubai', 'pages.service.mobile_car_repair_dubai')->name('mobile-car-repair-dubai');
Route::view('/car-inspection-dubai', 'pages.service.car_inspection_dubai')->name('car-inspection-dubai');
Route::view('/engine-oil-change-dubai', 'pages.service.engine_oil_change_dubai')->name('engine-oil-change-dubai');
Route::view('/tyre-replacement-dubai', 'pages.service.tyre_replacement_dubai')->name('tyre-replacement-dubai');
Route::view('/car-maintenance-dubai', 'pages.service.car_maintenance_dubai')->name('car-maintenance-dubai');
Route::view('/car-repair-dubai', 'pages.service.car_repair_dubai')->name('car-repair-dubai');
Route::view('/roadside-assistance-dubai', 'pages.service.roadside_assistance_dubai')->name('roadside-assistance-dubai');
Route::view('/car-battery-replacement-dubai', 'pages.service.car_battery_replacement_dubai')->name('car-battery-replacement-dubai');
Route::view('/car-ac-repair-dubai', 'pages.service.car_ac_repair_dubai')->name('car-ac-repair-dubai');

// Form Actions & External Email Communication API Handlers
Route::post('/send_booking_mail', [BookingController::class, 'send_booking_mail'])->name("send_booking_mail");