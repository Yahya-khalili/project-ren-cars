<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactUs;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    public function contact(Request $request) {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',

        ]);


        $details = [
            "name"=> $request->name,
            "email"=> $request->email,
            "subject"=> $request->subject,
            "message"=> $request->message,
        ];
        Mail::to("khalilioyoyooy@gmail.com")->send(new ContactMail($details));
        return back()->with("message_sent" , "Your message has been sent successfuly! ");
        
    }
}
