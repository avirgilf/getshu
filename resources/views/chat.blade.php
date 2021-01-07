<x-app-layout>
    <div class="">
        <div class="row">
            <div class="card">
                <h5 class="card-header">{{$data['name']}}</h5>
                <div class="card-body messages">
                    @foreach ($messages as $message)
                        <div class="row">
                            <div class=" {{$message->from== Auth::user()->id? 'offset-md-2 text-right' : ''}}" >
                                    {{$message->created_at}}
                                <br>

                                <?php 
                                $from=$message->from;
                                if($from==Auth::user()->id):?>
                                    <div class="col-sm text-right" style="width:50%;float:right;border-radius: 10px 20px 19px;margin-bottom:10px; background-color:black;color:white; font-size:15px;">                          
                                        {{$message->content}}
                                    </div>
                                    
                                <?php else: ?>
                                    <div class="col-sm text-left" style="width:60%;float:left;border-radius: 10px 20px 19px;margin-bottom:10px; background-color:#EFEFEF; font-size:15px;">                          
                                        {{$message->content}}
                                    </div>
                                <?php endif?>
                            </div>
                        </div>
                    @endforeach
                </div>
                <form action="" method="post">
                    @csrf
                    <div>
                        <div style="">
                            <input style="display:inline ; width:92%" type="text" name="content" placeholder="Ecrivez votre message" class="form-control iinput" />
                             <button style="display:inline ; float:right; margin-top:25px ; font-size:20px" class="fas fa-paper-plane"></button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div> 
</x-app-layout>