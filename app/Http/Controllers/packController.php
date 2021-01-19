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

    public function addpack()
    {
        $data= request()->validate([
            'pack_name'=>'required',
            'pack_fees'=>'required',
            'country_id'=>'required',
            'currency_code'=>'required',

        ]);
        \App\Models\Pack::Create($data);
       
        return redirect()->back();
    }
}
