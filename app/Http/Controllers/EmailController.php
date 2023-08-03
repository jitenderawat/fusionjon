<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TeleMail;

class EmailController extends Controller
{
    public function store_msg(Request $request){
        $contactData = $request->validate([
           
            'email' => 'nullable',
          

     ]);

     Mail::to('support@fusionjon.com')->send(new TeleMMail($contactData));
         
     $request->session()->flash('success', 'Thank You !');

     // Redirect back to the previous page or a specific route
     return redirect()->back();
}
}
