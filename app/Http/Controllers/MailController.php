<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class MailController extends Controller
{
    public function store_msg(Request $request){
        $mailData = $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'phone_number' => 'nullable',
            'msg_subject' => 'nullable',
            'message' => 'required',

     ]);

     Mail::to('support@fusionjon.com')->send(new ContactMail($mailData));
         
     $request->session()->flash('success', 'Thank You !');

     // Redirect back to the previous page or a specific route
     return redirect()->back();
}
}
