<x-app-layout>
<br>
    <?php $user_type=Auth::user()->clienttype; if ($user_type==1) :?>
            @foreach ($messages as $message)
            <div class="container" style="border-radius:5px 20px 5px; background-color:white ; margin-bottom:3px">
                <div class="row">
                <div class="col-3" style="margin:0px; padding:0px">
                    <div class="" style="margin:0px; padding:0px">

                    <?php 
                        $userid=\App\Models\User::All()->where('id','==',$message->to); ?>
                        @foreach($userid as $users) 
                          <img src="./../public/storage/{{$users->profile_photo_path}}"  class="rounded-full h-20 w-20 object-cover">
                        @endforeach
                    </div>
                </div>
                   
                    <div class="col-9 " style="margin:0px; padding:0px">
                        <div class="col-sm" style="width:100%;border-radius: 10px 600px;background-color:#EFEFEF; margin-top:16px">
                            <a style="text-decoration:none; color:black; " href="chat/{{ $message->to }}"> {{ $message->toname }} <span class="badge badge-dark" style="border-radius:50%; float:right">9</span> </a>
                        </div>
                        <div class="col-sm text-right" style="width:100%;border-radius: 600px 10px;margin-bottom:10px; background-color:#FD5068; font-size:15px; heigth:30px">                          
                            <a style="text-decoration:none; color:white; " href="chat/{{ $message->to }}"> {{ substr($message->content,0,30) }}  .... </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach

        <?php else:  ?>
            @foreach ($messages as $message)
            <div class="container" style="border-radius:5px 20px 5px; background-color:white ; margin-bottom:3px">
                <div class="row">
                <div class="col-3" style="margin:0px; padding:0px">
                    <div class="" style="margin:0px; padding:0px">
                    <?php 
                        $userid=\App\Models\User::All()->where('id','==',$message->from); ?>
                        @foreach($userid as $users) 
                          <img src="./../public/storage/{{$users->profile_photo_path}}"  class="rounded-full h-20 w-20 object-cover">
                        @endforeach
                    </div>
                </div>
                <div class="col-9 " style="margin:0px; padding:0px">
                        <div class="col-sm" style="width:100%;border-radius: 600px 10px;background-color:#EFEFEF; margin-top:13px">
                            <a style="text-decoration:none; color:black; " href="chat/{{ $message->from }}"> {{ $users->name}} <span class="badge badge-dark" style="border-radius:50%; float:right">9</span> </a>
                        </div>
                        <div class="col-sm text-right" style="width:100%;border-radius: 10px 600px;margin-bottom:10px; background-color:#FD5068; font-size:15px; heigth:30px">                          
                            <a style="text-decoration:none; color:white; " href="chat/{{ $message->from }}"> {{ substr($message->content,0,30) }}  .... </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
        <?php endif; ?>

</x-app-layout>
