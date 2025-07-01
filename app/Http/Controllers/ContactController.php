<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone, 
            'message' => $request->message,
        ];

        Mail::to('mdnadimkhalid732@gmail.com')->send(new ContactFormMail($details));

        return back()->with('success', 'Message sent successfully!');
    }
}
