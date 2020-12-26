<input type="hidden" {{$users=Auth::user()->all()->where('clienttype','!=',Auth::user()->clienttype)->where('id','!=',Auth::user()->id)}}>
<x-app-layout>
    <x-slot name="header">
        <h2>
            {{__('Dashbord')}}
        </h2>
    </x-slot>
    <?php 
        $profil=Auth::user()->profil; $countryid=Auth::user()->countryid; $gender=Auth::user()->gender;
        if ($profil=='client'): ?>
    
        <div class="text-center" style="padding-top:10px">
            Find your escort today!
        </div>

        <div class="container-fluid" style="margin-top: 1%">
            <form method="post" action="search-result">
                @csrf
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-center">
                        <div class=" col-md-4">
                            <select name="countryid" id="countryid" class="form-control">
                                {{$countries=\App\Models\Country::All()}}
                                @foreach ($countries as $country)
                                    <option value="{{$country['id']}}">{{$country['country_name']}}</option>
                                @endforeach
                            </select>
                            <select name="city" id="city" class="form-control">
                                {{$cyties=\App\Models\City::All()}}
                                @foreach ($cyties as $city)
                                    <option value="{{$city['id']}}">{{$city['city_name']}}</option>
                                @endforeach
                            </select>
                            <select name="gender" id="gender" class="form-control">
                                <option value="1">Woman</option>
                                <option value="2">Man</option>
                            </select>
                        </div>
                        <div class=" col-md-4">
                            <select name="Ethnicity" id="Ethnicity" class="form-control">
                                {{$ethnicities=\App\Models\Ethnicity::All()}}
                                @foreach ($ethnicities as $ethnicity)
                                    <option value="{{$ethnicity['id']}}">{{$ethnicity['ethnicity_name']}}</option>
                                @endforeach
                            </select>
                            <input type="text" class="form-control" name="old" id="old" placeholder="Old">
                            <select name="Budget" id="Budget" class="form-control">
                                {{$budgets=\App\Models\budget::All()}}
                                @foreach ($budgets as $budget)
                                    <option value="{{$budget['id']}}">{{$budget['short_terme_budget']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class=" col-md-4">
                            <input style="" type="submit" name="search" value="Search" class="form-control">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <div class="container-fluid d-flex flex-row">
        @section('search-result')
        <input type="hidden"{{
                                        $users=Auth::user()->all()
                                        ->where('clienttype','!=',Auth::user()->clienttype)
                                        ->where('id','!=',Auth::user()->id)
                                    }}>
            @foreach($users as $user)
            <div class="rounded-circle shadow" style="width:150px ; height:160px; 
                        background-image: 
                                        url('storage/app/public/<?php $photo=$user->profile_photo_path; echo $photo ; ?>'); 
                                        background-position: center; background-repeat: no-repeat; 
                                        background-size: 100% 100%; margin-right:4px;margin-left:4px">
                                    
                <div class="text-center" style="background-color:rgba(0, 0, 0, 0.5);
                                                height: 75px; width:150px; border-radius: 0px 0px 100px 100px;margin-top:84px"><br>
                    <span class="" style="color:white">
                        <?php 
                            $longString = $user->name ;
                            echo substr($longString, 0, 8).', '.$user->old;
                        ?>
                    </span><br>
                    <a href="view-profile/{{$user->id}}" class="shadow " >Lagos</a>
                </div>                           
            </div>
        @endforeach
        @endsection
        @yield('search-result', )
<?php else: ?>
        Otherwise this will show.
<?php endif; ?>

</x-app-layout>