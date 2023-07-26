<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Helpers\FlashMsg;
use Illuminate\Support\Facades\DB;
use App\Models\Contacts;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    
        public function store_msg(Request $request)
        {
        $input =    $this->validate($request, [
                'name' => 'required',
                'email' => 'nullable',
                'phone_number' => 'nullable',
                'msg_subject' => 'nullable',
                'message' => 'required',
            ]);
    
            DB::transaction(function () use ($request) {
                Contacts::create([
                    'name'=> $request->name,
                    'email'=> $request->email,
                    'phone'=> $request->phone_number,
                    'subject'=> $request->msg_subject,
                    'message'=> $request->message,
                ]);
            });
    
            Session::flash('success', '! Message submitted successfully');

            return back();
        }
}
    
