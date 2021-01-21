<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Account;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $booking = Booking::first();
       $details = [
            'title'=> 'New Client Booked',
            'account_id' => $booking->account->firstname,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'bus_type' => $request->bus_type,
            'number_of_passenger' => $request->number_of_passenger,
            'price' => $request->price,
            'status' => $request->status,
        ];
        Booking::create($details);
        Mail::to("johnstiger12@gmail.com")->send(new TestMail($details));
        return redirect('dashboard');
    }
}
