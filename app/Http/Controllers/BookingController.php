<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function send_booking_mail(Request $request){
        // dd($request->all());
        $to_name = "DXB CAR SERVICE";
        $to_email = 'coklateboy7@gmail.com';
        // $data = array("name"=> $request->name , "body" => "Customer Email: $request->email, Service: $request->service, Date: $request->date, Special Request: $request->special_request");
        $data =  "Customer Name:$request->name, Customer Email: $request->email, Service: $request->service, Date: $request->date, Special Request: $request->special_request";
        Mail::raw($data, function($message){
        $message->to('coklateboy7@gmail.com')
        ->subject("New Booking Arrived!!");
        $message->from("no-reply@dxbcarrepair.com","This is test");
        });
        return redirect()->route('home')->with("succcess",'Hooray! Your booking is confirmed.');
    }
}
