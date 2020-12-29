<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="card">
                <h5 class="card-header">{{$data['name']}}</h5>
                <div class="card-body messages">
                    @foreach ($messages as $message)
                        <div class="row">
                            <div class="col-md-10 {{$message->from== Auth::user()->id? 'offset-md-2 text-right' : ''}}" style="margin-top: 5px;">
                                {{$message->content}}
                            </div>
                        </div>
                    @endforeach
                </div>
                <form action="" method="post">
                    @csrf
                    <div>
                        <div>
                            <textarea name="content" placeholder="Ecrivez votre message" class="form-control"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div> 
</x-app-layout>