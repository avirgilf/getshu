<x-app-layout>
    <x-slot name="header">
        <h2>
            {{__('Dashbord')}}
        </h2>
    </x-slot>  


    <div class="container" style="background:white">
        <h3>
            {{__('Country Management')}}
        </h3>
        <div class="row">
            <div class="col-lg-4" >
                <form action="{{ url('acoun') }}"  method="post">
                    @csrf
                    <input class="iinput" type="text" name="country_name" value="{{ old('country_name') }}" placeholder="Country Name" autocomplete="off" />
                     <p style="color:red" >@error('country_name') {{$message}} @enderror</p>
                     <input class="iinput" type="text" name="country_code" value="{{ old('country_code') }}" placeholder="Country Code" autocomplete="off" />
                     <p style="color:red" >@error('country_code') {{$message}} @enderror</p>
                    <select class="iinput" name="currencies_id" id="currency-select">
                        <option value="">Choose a currency:</option>
                        @forelse($currency as $currencies)
                            <option value="{{$currencies->id}}">{{$currencies->currency_name}} {{$currencies->currency_code}}</option>
                        @empty
                        @endforelse
                        
                    </select>
                    <p style="color:red" >@error('currency') {{$message}} @enderror</p>

                    
                    <input type="submit" class="iinputsub" value="Add new country"/>
                </form>
            </div>
            <div class="col-lg-6">
                <table class="table table-bordered">
                    <thead class="">
                        <tr>
                            <th>Country name</th><th>Country code</th> <th>Currency</th> <th>Modify</th>
                        <tr>
                    </thead>
                    <tbody>
                        @forelse($country as $countries)
                        <tr> 
                        <td>{{$countries->country_name}}</td><td>{{$countries->country_code}}</td> <td>{{$countries->currencies_id}}</td>  <td>{{$countries->id}}</td>
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