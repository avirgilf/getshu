<x-app-layout>
    <x-slot name="header">
        <h2>
            {{__('Dashbord')}}
        </h2>
    </x-slot>  


    <div class="container" style="background:white">
        <h3>
            {{__('Pack Management')}}
        </h3>
        <div class="row">
            <div class="col-lg-4" >
                <form action="{{ url('apack') }}"  method="post">
                    @csrf
                    <select class="iinput" name="country_id" id="country-select">
                        <option value="">Choose a country:</option>
                        @forelse($country as $countries)
                            <option value="{{$countries->id}}">{{$countries->country_name}}</option>
                        @empty
                        @endforelse
                    </select>
                    <p style="color:red" >@error('country_id') {{$message}} @enderror</p>
                    <select class="iinput" name="currency_code" id="currency-select">
                        <option value="">Choose a currency:</option>
                        @forelse($currency as $currencies)
                            <option value="{{$currencies->currency_code}}">{{$currencies->currency_name}} {{$currencies->currency_code}}</option>
                        @empty
                        @endforelse
                    </select>
                    <p style="color:red" > @error('currency_id') {{$message}} @enderror</p>
                    
                    <input class="iinput" type="text" name="pack_name" value="{{ old('pack_name') }}" placeholder="Pack name" autocomplete="off" />
                    <p style="color:red" >@error('pack_name') {{$message}} @enderror</p>
                    <input class="iinput" type="text" name="pack_fees" value="{{ old('pack_fees') }}" placeholder="Pack fees" autocomplete="off" />
                    <p style="color:red" >@error('pack_fees') {{$message}} @enderror</p>

                    <input type="submit" class="iinputsub" value="Add new Pack"/>

                </form>
            </div>
            <div class="col-lg-6">
                <table class="table table-bordered">
                    <thead class="">
                        <tr>
                            <th>Currency name</th><th>Currency code</th> <th>Modify</th> <th>Delete</th>
                        <tr>
                    </thead>
                    <tbody>
                        @forelse($currency as $currencies)
                        <tr> 
                        <td>{{$currencies->currency_name}}</td><td>{{$currencies->currency_code}}</td> <td>{{$currencies->id}}</td>  <td>{{$currencies->id}}</td>
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