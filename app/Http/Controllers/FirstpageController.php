<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FirstpageController extends Controller
{
    public function show(){
        return view('testing.home');
    }
}
