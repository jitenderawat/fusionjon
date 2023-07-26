<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasedetailsController extends Controller
{
    public function index() {
        return view('case-details');
    }
}
