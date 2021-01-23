@extends('layouts.guest')


@section('content')
    <div>
        {{ __('') }}
    </div>

    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif
    <form id="regForm" method="POST" action="{{ route('password.email') }}">
        @csrf    
        <input id="email" class="iinput form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
        <br>
        <button class="buton">
            {{ __('Email Me Password Reset Link') }}
        </button>
    </form>
@endsection












        
    