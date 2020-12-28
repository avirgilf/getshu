<input type="hidden" {{$users=Auth::user()->all()->where('clienttype','!=',Auth::user()->clienttype)->where('id','!=',Auth::user()->id)}}>
<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
    <?php 
        $profil=Auth::user()->profil; $countryid=Auth::user()->countryid; $gender=Auth::user()->gender;
        if ($profil=='client'): ?>

        <div class="" style="padding-top:0px; margin:0px">
            <form method="post" action="search-result">
                @csrf
                <div class="container">
                    <div class="">
                            <!-- recuperation du pays-->
                            <select name="countryid" id="countryid" class="badge badge-dark" style="border-radius: 15px; height:30px; width:30%" >
                                <option  value="<?php echo $countryid;?>"> 
                                    <?php 
                                        $countr=\App\Models\Country::All()->where('id','==',$countryid);
                                        foreach($countr as $countrs){ echo $countrs->country_name;}
                                    ?>
                                </option>
                            </select>
                            <!-- recuperation ddes villes du pays-->
                            <?php  $city=\App\Models\City::All()->where('countries_id','==',$countryid); ?>
                            <select name="city" id="city" class="badge badge-dark" style="border-radius: 15px; height:30px; width:30%">
                                <?php  foreach($city as $cities) :?>     
                                    <option value="{{$cities->id}}">{{$cities->city_name}}</option>
                                <?php  endforeach;?>
                            </select>

                            <select name="gender" id="gender" class="badge badge-dark" style="border-radius: 15px; height:30px; width:30%">
                                <option value="1">Woman</option>
                                <option value="2">Man</option>
                            </select>
                            <!-- recuperation de la race-->
                            <?php  $ethnicity=\App\Models\Ethnicity::All(); ?>
                            <select name="ethnicity" id="ethnicity" class="badge badge-dark"style="border-radius: 15px; height:30px; width:30%">
                                <?php  foreach($ethnicity as $ethnicities) :?>     
                                    <option value="{{$ethnicities->id}}">{{$ethnicities->ethnicity_name}}</option>
                                <?php  endforeach;?>
                            </select>
                            <input type="text" class="col-md-2" name="old" id="old" placeholder="Old" class="" style="border-radius: 15px; height:30px; width:30%">
                            <!-- recuperation des budgets-->
                            
                            <br><br><input  type="submit" value="Search" class="btn" style="border-radius: 15px; width:100%; border-style: solid; border-color: black">
                    </div>
                </div>
            </form>
        </div>
        <div class="container d-flex flex-row">
            @yield('search-result')
        </div>
    
<?php else: ?>
        Otherwise this will show.
<?php endif; ?>
</x-app-layout>