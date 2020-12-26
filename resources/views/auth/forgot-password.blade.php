@extends('layouts.guest')


@section('content')
    <div>
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
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
            {{ __('Email Password Reset Link') }}
        </button>
    </form>
@endsection












        
    