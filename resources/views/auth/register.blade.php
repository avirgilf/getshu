@extends('layouts.guest')


@section('content')
<form id="regForm" method="POST" action="{{ route('register') }}">
    @csrf

    <div class="tab">
        <input id="name" class="iinput form-control" placeholder="Username" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

        <input id="email" class="iinput form-control" placeholder="Email" type="email" name="email" :value="old('email')" required />
    </div>

    <div class="tab">
        <select class=" iinput form-control form-control-sm" name="gender">
            <option  value="1">I Am a Woman</option>
            <option  value="2">I Am a Man</option>
        </select> 
        
        <select class=" iinput form-control form-control-sm" name="clientype">
            <option  value="1">I want an escort</option>
            <option  value="2">I am an escort</option>
        </select>
    </div>

    <div class="tab">
        <select class=" iinput form-control form-control-sm" name="country">
            {{$countries=\App\Models\Country::All()}}
                @foreach ($countries as $country)
                    <option value="{{$country['id']}}">{{$country['country_name']}}</option>
                @endforeach
        </select>
    
        <input id="Old" class="iinput form-control" placeholder="Old" type="number" name="Old" :value="old('Old')" required />
    </div>

    <div class="tab">
        <input id="password" class="iinput form-control" placeholder="Password" type="password" name="password" required autocomplete="new-password" />

        <input id="password_confirmation" class="iinput form-control" placeholder="Confirm password" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>

    <div style="overflow:auto;">
        <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>

    @if (Route::has('login'))
    <a class="" style="color:white; text-decoration:none" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>
    @endif
</form>
@endsection

