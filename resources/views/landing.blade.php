@extends('layouts.guest')


@section('content')
        <!--Mobile view-->
    <div class="mobileShow" >
        @if (Route::has('login'))
            <div class="" style="padding-top:10%">
               <!-- <span class="span-to-30"> Francais - English</span>-->
                @auth
            <a href="{{ url('/dashboard') }}">{{Auth::user()->name}}</a>
                @else
                    <a style="margin-top:15% ;" class="btn buton" href="{{ route('login') }}">Login</a><br><br>
                    @if (Route::has('register'))
                        <a class="btn buton" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    <div>

<!--computer view-->

    <div class="pcshow">
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
    <div>
    
@endsection
