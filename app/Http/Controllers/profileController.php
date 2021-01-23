<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;

class profileController extends Controller
{
    //
    function showProfile($id){
        $data= User::find($id);
        return view('view-profile',['data'=>$data]);
    }

    function profileimage(){
        return view('profile.update-profile-information-form');
    }

    function userupdate(Request $req,$id){
        $req->validate([
        'Phone_number'=>'required',
        'cities'=>'required',
        'skin_type'=>'required',
        'body_type'=>'required',
        ]);
        $profil = User::find($id);
        $profil->cities_id=$req->cities;
        $profil->phone_number=$req->Phone_number;
        $profil->skin_type=$req->skin_type;
        $profil->body_type=$req->body_type;
        $profil->description=$req->description;
        $profil->updated_at=now();
        $profil->save();
        return view('dashboard');
    }
    
}
