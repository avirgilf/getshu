<x-jet-action-section>
<x-slot name="title">
        
    </x-slot>

    <x-slot name="description">
        {{ __('') }}
    </x-slot>

    <x-slot name="content">
    <div>
        <div class="row">
                <form action="profileinfo/{{Auth::user()->id}}"  method="post">
                    @csrf
                    <?php 
                        $country=Auth::user()->countryid;
                        $description=Auth::user()->description;
                        $phone_number=Auth::user()->phone_number;
                        $cityid=Auth::user()->phone_number;
                        $skin=Auth::user()->skin_type;
                        $bodytype=Auth::user()->body_type;

                        $countryc=\App\Models\Country::All()->where('id','=',$country);
                        $cities=\App\Models\City::All()->where('countries_id','=',$country);
                    ?>

                    <p>
                        <label>Tell us something about you</label><br>
                        <input class="iinput" type="text" name="description" value="{{ $description }}" required autocomplete="off" />
                        <p style="color:red" >@error('description') {{$message}} @enderror</p>
                    </p>
                    <p>
                        <label>Your phone number</label><br>
                        @forelse($countryc as $countrycode)
                        <input class="iinput" type="text" name="Phone_number" value="{{ $phone_number }}" required placeholder="{{ $countrycode->country_code }}" autocomplete="off" />
                        @empty
                        @endforelse                    
                        <p style="color:red" >@error('Phone_number') {{$message}} @enderror</p>
                    </p>

                    <p>

                        <label>Choose your city</label><br>

                        <select class="iinput" name="cities" id="city-select">
                            @forelse($cities as $city)
                            <option value="{{$city->id}}">{{$city->city_name}}</option>
                            @empty
                            @endforelse
                        </select>
                        <p style="color:red" >@error('cities') {{$message}} @enderror</p>                    
                    </p>
                    <p>
                        <label>What is your skin color?</label><br>

                        <select class="iinput" name="skin_type" id="city-select" required>
                            <option value="{{ $skin }}">
                                <?php switch ($skin) {
                                    case 1: echo'Black';break;
                                    case 2: echo'Brown';break; 
                                    case 3: echo'Ligth';break; 
                                    case 4: echo'Fair';break; 
                                    case 5: echo'White';break; 
                                    case 6: echo'Yellow';break; 
                                    case 7: echo'Red';break; 
                                    default: echo'Your skin color'; break; }  ?>
                            </option>
                            <option value="1">Black</option>
                            <option value="2">Brown</option>
                            <option value="3">Ligth</option>
                            <option value="4">Fair</option>
                            <option value="5">white</option>
                            <option value="6">yellow</option>
                            <option value="7">red</option>
                        </select>
                        <p style="color:red" >@error('skin_type') {{$message}} @enderror</p>                    
                    </p>
                    <p>
                        <label>What type of body are you?</label><br>

                        <select class="iinput" name="body_type" id="city-select" required>
                            <option value="{{ $bodytype }}">
                                <?php switch ($bodytype) {
                                    case 1: echo'Skinny';break;
                                    case 2: echo'Regular';break; 
                                    case 3: echo'BBW';break; 
                                    default: echo'Your body type'; break; }  ?>
                            </option>
                            <option value="1">Skinny</option>
                            <option value="2">regular</option>
                            <option value="3">BBW</option>
                        </select>
                        <p style="color:red" >@error('body_type') {{$message}} @enderror</p>                    
                    </p>
                    <input type="submit" class="iinputsub" value="Save"/>
                </form>
            </div>
            
        </div>
    </div>

    </x-slot>

</x-jet-action-section>
