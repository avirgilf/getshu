<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="card">
                <h5 class="card-header">{{$data['name']}}</h5>
                <div class="card-body messages">
                    @foreach ($messages as $message)
                        <div class="row">
                            <div class="col-md-10 {{$message->from== Auth::user()->id? 'offset-md-2 text-right' : ''}}" >
                                    {{$message->created_at}}
                                <br>
                                    {{$message->content}}
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