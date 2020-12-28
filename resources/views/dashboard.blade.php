<input type="hidden" {{$users=Auth::user()->all()->where('clienttype','!=',Auth::user()->clienttype)->where('id','!=',Auth::user()->id)}}>
<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
    <?php 
        $profil=Auth::user()->profil; $countryid=Auth::user()->countryid; $gender=Auth::user()->gender;
        if ($profil=='client'): ?>
    
        <h3 class="text-center" style="padding-top:5px ; margin:0px">
                        Find your escort today!
        </h3>
        <div class="container d-flex flex-row">
            @yield('search-result')
        </div>

        <div class="" style="padding-top:0px; margin:0px">
            <form method="post" action="search-result">
                @csrf
                <div class="container">
                    <div class="row align-items-center justify-content-center ">
                            <!-- recuperation du pays-->
                            <select name="countryid" id="countryid" class="col-md-2 marg">
                                <option  value="<?php echo $countryid;?>"> 
                                    <?php 
                                        $countr=\App\Models\Country::All()->where('id','==',$countryid);
                                        foreach($countr as $countrs){ echo $countrs->country_name;}
                                    ?>
                                </option>
                            </select>
                            <!-- recuperation ddes villes du pays-->
                            <?php  $city=\App\Models\City::All()->where('countries_id','==',$countryid); ?>
                            <select name="city" id="city" class="col-md-2 marg">
                                <?php  foreach($city as $cities) :?>     
                                    <option value="{{$cities->id}}">{{$cities->city_name}}</option>
                                <?php  endforeach;?>
                            </select>

                            <select name="gender" id="gender" class="col-md-2 marg">
                                <option value="1">Woman</option>
                                <option value="2">Man</option>
                            </select>
                            <!-- recuperation de la race-->
                            <?php  $ethnicity=\App\Models\Ethnicity::All(); ?>
                            <select name="ethnicity" id="ethnicity" class="col-md-2 marg">
                                <?php  foreach($ethnicity as $ethnicities) :?>     
                                    <option value="{{$ethnicities->id}}">{{$ethnicities->ethnicity_name}}</option>
                                <?php  endforeach;?>
                            </select>
                            <input type="text" class=" col-md-2 marg" name="old" id="old" placeholder="Old">
                            <!-- recuperation des budgets-->
                            
                            <input style="" type="submit" value="Search" class="col-md-1 iinputsub">
                    </div>
                </div>
            </form>
        </div>
    
<?php else: ?>
        Otherwise this will show.
<?php endif; ?>
</x-app-layout>