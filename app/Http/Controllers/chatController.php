<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Auth;

class chatController extends Controller
{
    //
    public function index(){
        $messages = Message::select(DB::raw('t.*'))
            ->from(DB::raw('(SELECT * FROM messages) t'))
            ->where('t.from','=',Auth::user()->id)
            ->groupBy('t.to')
            ->orderBy('t.created_at','DESC')
            ->get();
        //$messages=Message::select('to','toname' ,'content')->where('from','=',Auth::user()->id)->groupby('to','toname','content')->orderby('created_at','DESC')->get();
        return view('conversations',compact('messages'));

    }

    public function showMessages(int $id){
        
    }


    public function chatWhith($id){
        $friend_id= User::find($id)->id;
        $user_id=Auth::user()->id;
        $send_by_me=Message::all()
        ->where('from','=',$user_id)
        ->where('to','=',$friend_id);

        $messages=Message::all()
        ->where('from','=',$friend_id)
        ->where('to','=',$user_id)
        ->union($send_by_me)
        ->sortby('created_at');
        $data= User::find($id);
        return view('chat',['data'=>$data,'messages'=>$messages]);
    }

    

    public function store(Request $req,$id){
        $req->validate([
            'content'=>'required',
        ]);
        $message=new Message;
        $message->from=Auth::user()->id;
        $message->to=User::find($id)->id;
        $message->toname=User::find($id)->name;
        $message->tophoto=User::find($id)->profile_photo_path;
        $message->content=$req->content;
        $message->created_at=now();
        $message->save();
        return redirect()->back();
    }
}