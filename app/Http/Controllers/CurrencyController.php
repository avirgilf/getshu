<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function feshcurrency()
    {
       $currency=\App\Models\Currency::All();
       return view('Administrator.currency')->with('currency', $currency); 
    }

    
    public function addcurrency()
    {
        $data= request()->validate([
            'currency_name'=>'required|min:2|max:25',
            'currency_code'=>'required|min:1|max:6',
        ]);
        \App\Models\Currency::Create($data);
       
        return redirect()->back();
    }
}
