<x-app-layout>
<br>
            @foreach ($messages as $message)
            <div class="container" style="border-radius:5px 20px 5px; background-color:white">
                <div class="row">
                    <div class="col-2" style="border-radius:50%; background-color:red">
                    
                    </div>
                    <div class="col-10" style="margin:0px; padding:0px">
                        <div class="col-sm" style="width:100%;border-radius: 10px 600px;background-color:#EFEFEF; margin-bottom:10px">
                            <a style="text-decoration:none; color:black; " href="chat/{{ $message->to }}"> {{ $message->toname }} </a>
                        </div>
                        <div class="col-sm text-right" style="width:100%;border-radius: 600px 10px; background-color:#FD5068; font-size:15px; heigth:30px">                          
                            <a style="text-decoration:none; color:white; " href="chat/{{ $message->to }}"> {{ $message->content }} </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach

</x-app-layout>
