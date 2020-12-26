<x-app-layout>
    <x-slot name="header">
        <h2>
            {{__('Dashbord')}}
        </h2>
    </x-slot>  


    <div class="container" style="background:white">
        <h3>
            {{__('City Management')}}
        </h3>
        <div class="row">
            <div class="col-lg-4" >
                <form action="{{ url('acity') }}"  method="post">
                    @csrf
                    <input class="iinput" type="text" name="city_name" value="{{ old('city_name') }}" placeholder="City Name" autocomplete="off" />
                     <p style="color:red" >@error('city_name') {{$message}} @enderror</p>
                     <select class="iinput" name="countries_id" id="country-select">
                        <option value="">Choose a country:</option>
                        @forelse($country as $countries)
                            <option value="{{$countries->id}}">{{$countries->country_name}} {{$countries->country_code}}</option>
                        @empty
                        @endforelse
                    </select>
                    <p style="color:red" >@error('country') {{$message}} @enderror</p>

                    
                    <input type="submit" class="iinputsub" value="Add new city"/>
                </form>
            </div>
            <div class="col-lg-6">
                <table class="table table-bordered">
                    <thead class="">
                        <tr>
                            <th>city name</th><th>country</th> <th>Modify</th>
                        <tr>
                    </thead>
                    <tbody>
                        @forelse($city as $cities)
                        <tr> 
                        <td>{{$cities->city_name}}</td><td>{{$cities->countries_id}}</td>  <td>{{$cities->id}}</td>
                        </tr>
                        @empty
                        <tr> 
                            <td colpsan="4" >No data avalable</td> 
                        </tr>
                        
                        @endforelse
                    </tbody>               
                </table><br>
            </div>
            
        </div>
    </div>
    

</x-app-layout>