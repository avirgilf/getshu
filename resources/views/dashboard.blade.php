<input type="hidden" {{$users=Auth::user()->all()->where('clienttype','!=',Auth::user()->clienttype)->where('id','!=',Auth::user()->id)}}>
<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
    <?php 
        $profil=Auth::user()->profil;  
        $image=Auth::user()->profile_photo_path; 
        $countryid=Auth::user()->countryid; 
        $gender=Auth::user()->gender;$phone=Auth::user()->phone_number; 
        //$data['Totaluser']=Auth::user()->id->count();

        if (isset($image) && isset($phone)): ?>
        <?php if($profil=='client'): ?>
        <div class="" style="padding-top:0px; margin:0px"><br>
            <form method="post" action="search-result">
                @csrf
                <div class="container">
                    <div class="">
                    <p class="text-center">Search and find your hookup !</p>
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
                            <select class="badge badge-dark" name="body_type" style="border-radius: 15px; height:30px; width:30%" >
                                <option value="1">Skinny body</option>
                                <option value="2">regular body</option>
                                <option value="3">BBW body</option>
                            </select>
                            <select class="badge badge-dark" name="skin_type" style="border-radius: 15px; height:30px; width:30%">
                                <option value="1">Black skin</option>
                                <option value="2">Brown skin</option>
                                <option value="3">Ligth skin</option>
                                <option value="4">Fair skin</option>
                                <option value="5">white skin</option>
                                <option value="6">yellow skin</option>
                                <option value="7">red skin</option>
                            </select>

                            
                            <input type="text" class="col-md-2" name="old" id="old" placeholder="Old" class="" style="border-radius: 15px; height:30px; width:30%">
                            <!-- recuperation des budgets-->
                            
                            <br><br><input  type="submit" value="Search" class="btn" style="border-radius: 15px; width:100%; border-style: solid; border-color: black">
                    </div>
                </div>
            </form>
        </div>
        <?php else: ?>

            

        <?php endif; ?>


        <div class="container d-flex flex-row">
            @yield('search-result')
        </div>
        <br>
            <p>Be the fisrt to toast them</p><br>

        <div class="container">
            <div class="row">
            <?php 
                 $newuser=\App\Models\User::All()->where('countryid','==',Auth::User()->countryid);

            ?>
                @foreach($newuser as $user)
                <div class="col-3" style="margin:10px; padding:0px">
                    <div class="mt-2 text-center" style="margin:0px; padding:0px">
                        <a href="view-profile/{{$user->id}}" style="color:black; text-decoration:none" >
                            <img src="./../public/storage/<?php $photo=$user->profile_photo_path; echo $photo ; ?>"  class="rounded-full h-20 w-20 object-cover">
                                <?php 
                                    $longString = $user->name ;
                                    echo substr($longString, 0, 8).','.$user->old;
                                ?>
                        </a>
                    </div>
                </div>
                        
                @endforeach
            </div>
            
        </div>

    
<?php else: ?>
    <script>
        window.location.href = '{{url("/user/profile")}}';
    </script>

<?php endif; ?>
</x-app-layout>