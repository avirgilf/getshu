<x-app-layout>
    <div class="container">
        <div class="row">
            @foreach ($messages as $message)
                {{ $message->toname }}
                <a class="h4" style="margin-top:11px; margin-left:10px; text-decoration:none; color:black" href="chat/{{ $message->to }}">Send a message...<i class="fas fa-paper-plane" style="color:black;font-size:25px; margin:auto;"></i></a>  

            @endforeach
        </div>
    </div> 
</x-app-layout>