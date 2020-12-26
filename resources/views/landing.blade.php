@extends('layouts.guest')


@section('content')
    @if (Route::has('login'))
    <div class="vertical-align">
        <span class="span-to-30"> Francais - English</span><br>
        @auth
    <a href="{{ url('/dashboard') }}">{{Auth::user()->name}}</a>
        @else
            <a class="btn buton" href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
                <a class="btn buton" href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
    @endif
@endsection
