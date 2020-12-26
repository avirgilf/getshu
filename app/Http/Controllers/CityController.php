<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function feshcity()
    {
        $country=\App\Models\Country::All();
        $city=\App\Models\City::All();
        return view('Administrator.city')->with('city', $city)->with('country',$country); 
    }

    
    public function addcity()
    {
        $data= request()->validate([
            'city_name'=>'required',
            'countries_id'=>'required',
        ]);
        \App\Models\City::Create($data);
       
        return redirect()->back();
    }
}
