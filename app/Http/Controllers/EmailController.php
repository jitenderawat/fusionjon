<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TeleMail;


class EmailController extends Controller
{
    public function store_email(Request $request){
        $teleData = $request->validate([
           
            'email' => 'required',
          

     ]);

     Mail::to('support@fusionjon.com')->send(new TeleMail($teleData));
         
     $request->session()->flash('success', 'Your Email Send Successfully !');

     // Redirect back to the previous page or a specific route
     return redirect()->back();
}
}
