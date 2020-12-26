<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class profileController extends Controller
{
    //
    function showProfile($id){
        $data= User::find($id);
        return view('view-profile',['data'=>$data]);
    }
}
