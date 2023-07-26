<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Helpers\FlashMsg;
use App\Contacts;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    
        public function store_data(Request $request){
            $this->validate($request,[
                'name' => 'required|string',
                'email' => 'required|string',
                'subject'=>'required|string',
                'phone'=>  'required|string',
                'message'=>  'required',
               
        ]);
          
          
                     Contacts::create([
                    'name'=> $request->name,
                    'email'=> $request->email,
                    'subject'=> $request->subject,
                    'phone'=> $request->phone,
                    'message'=> $request->message,
                ]);  
    
                return back()->with(FlashMsg::item_new());
                }
                
        }
          
