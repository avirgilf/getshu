@extends('layouts.guest')


@section('content')
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif

    <form id="regForm" method="POST" action="{{ route('login') }}">
        @csrf
        <input id="email" class="iinput form-control" placeholder="Your email" type="email" name="email" :value="old('email')" required autofocus />
        <input id="password" class="iinput form-control" placeholder="Password" type="password" name="password" required autocomplete="current-password" />
        <div class="form-check">
            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
            <label for="remember_me" class="form-check-label">
                <span >{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-white" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            <button class="buton">
                {{ __('Login') }}
            </button>
        </div>
    </form>
    
@endsection