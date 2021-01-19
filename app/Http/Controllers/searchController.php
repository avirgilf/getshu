<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;

class searchController extends Controller 
{   
    public function search(){
        $currentuserid = Auth::user()->id;
        $currentuserclienttype=Auth::user()->clienttype;
        if ($_POST['old']){
            $users=DB::select("select * from users
                               where old=$_POST[old] 
                               and gender=$_POST[gender] 
                               and countryid=$_POST[countryid] 
                               and id!=$currentuserid 
                               and clienttype!=$currentuserclienttype"
                            );
            return view('search-result',['users'=> $users]);
        }
        else{
            $users=DB::select("select * from users
                               where gender=$_POST[gender] 
                               and countryid=$_POST[countryid] 
                               and cities_id=$_POST[city] 
                               and body_type=$_POST[body_type] 
                               and skin_type=$_POST[skin_type] 
                               and id!=$currentuserid 
                               and clienttype!=$currentuserclienttype"
                            );
            return view('search-result',['users'=> $users]);
        }
    }
};
