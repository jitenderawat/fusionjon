<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    
        public function store_msg(Request $request)
        {

          
         $formData = $request->validate([
                'name' => 'required',
                'email' => 'nullable',
                'phone_number' => 'nullable',
                'msg_subject' => 'nullable',
                'message' => 'required',
            ], [
                'name.required' => 'Name is required.', 
                // Custom error message for the "name" field
            ]);
    
            try {
                Mail::to('jeetupahadi54@gmail.com')->send(new ContactMe($formData));
                Session::flash('success', 'Message Sent Successfully!');
            } catch (\Exception $e) {
                // Handle the exception, log the error, display a user-friendly message, etc.
                Session::flash('error', 'An error occurred while sending the message.');
            }
            
            return back();
            
        }
}
    
