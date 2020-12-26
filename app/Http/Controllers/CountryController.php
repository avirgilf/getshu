<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function feshcountry()
    {
        $country=\App\Models\Country::All();
        $currency=\App\Models\Currency::All();
        return view('Administrator.country')->with('country', $country)->with('currency',$currency); 
    }

    
    public function addcountry()
    {
        $data= request()->validate([
            'country_name'=>'required',
            'country_code'=>'required',
            'currencies_id'=>'required',
        ]);
        \App\Models\Country::Create($data);
       
        return redirect()->back();
    }
}
