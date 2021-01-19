<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class packController extends Controller
{
    public function feshpack()
    {
        $country=\App\Models\Country::All();
        $currency=\App\Models\Currency::All();
        return view('Administrator.pack')->with('currency', $currency)->with('country',$country); 
    }
}
