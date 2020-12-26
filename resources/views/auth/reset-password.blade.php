@extends('layouts.guest')


@section('content')
    <form class="regForm" method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <input id="email" class="iinput form-control" placeholder="Email" type="email" name="email" :value="old('email', $request->email)" required autofocus />

        <input id="password" class="iinput form-control" placeholder="Password" type="password" name="password" required autocomplete="new-password" />

        
        <input id="password_confirmation" class="iinput form-control" placeholder="Confirm password" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        <div>
            <button class="buton">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
@endsection

