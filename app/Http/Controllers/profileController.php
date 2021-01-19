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

    function userupdate(){
        $userid = Auth::user()->id;
      

        $user=DB::table('users')
              ->where('id', $userid)
              ->update([
                  'phone_number' => $input['Phone_number'] ,
                  'cities_id' => $input['cities'],
                  'skin_type' => $input['skin_type'],
                  'body_type' => $input['body_type'],])->save();
                
                  return view('dashboard');

    }

}
