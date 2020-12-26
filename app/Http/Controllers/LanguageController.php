<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function feshlanguage()
    {
       $language=\App\Models\Language::All();
       return view('Administrator.language')->with('language', $language); 
    }

    
    public function addlanguage()
    {
        $data= request()->validate([
            'language_name'=>'required|',
            'language_code'=>'required|',
        ]);
        \App\Models\Language::Create($data);
       
        return redirect()->back();
    }
}
