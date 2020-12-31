<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="card">
                <h5 class="card-header">{{$data['name']}}</h5>
                <div class="card-body messages">
                    @foreach ($messages as $message)
                        <div class="row">
                            <div class="col-md-10 {{$message->from== Auth::user()->id? 'offset-md-2 text-right' : ''}}" style="margin-top: 5px;">
                                    {{$message->created_at}}
                                <br><br>
                                <div style="background-color: #F5F5F5;border: 0px solid #F5F5F5;height: 40px;
                                            border-radius: 15px;padding: 10px; text-align:left" >
                                    {{$message->content}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <form action="" method="post">
                    @csrf
                    <div>
                        <div style="">
                            <input style="display:inline ; width:95%" type="text" name="content" placeholder="Ecrivez votre message" class="form-control iinput" />
                             <button style="display:inline ; float:right; margin-top:25px ; font-size:20px" class="fas fa-paper-plane"></button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div> 
</x-app-layout>