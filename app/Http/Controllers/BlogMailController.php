<?php

namespace App\Http\Controllers;


use App\Helpers\FlashMsg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BlogMail;

class BlogMailController extends Controller
{
    public function store_comment(Request $request){
        $blogData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',

     ]);
    
     Mail::to('support@fusionjon.com')->send(new BlogMail($blogData));
         
     $request->session()->flash('success', 'Thank You for commenting !');

     // Redirect back to the previous page or a specific route
     return redirect()->back();
      
   
        }
}
