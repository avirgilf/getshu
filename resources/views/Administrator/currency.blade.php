<x-app-layout>
    <x-slot name="header">
        <h2>
            {{__('Dashbord')}}
        </h2>
    </x-slot>  


    <div class="container" style="background:white">
        <h3>
            {{__('Currency Management')}}
        </h3>
        <div class="row">
            <div class="col-lg-4" >
                <form action="{{ url('acurr') }}"  method="post">
                    @csrf
                    <input class="iinput" type="text" name="currency_name" value="{{ old('currency_name') }}" placeholder="Currency Name" autocomplete="off" />
                     <p style="color:red" >@error('currency_name') {{$message}} @enderror</p>
                     <input class="iinput" type="text" name="currency_code" value="{{ old('currency_code') }}" placeholder="Currency Code" autocomplete="off" />
                     <p style="color:red" >@error('currency_code') {{$message}} @enderror</p>
                    
                    <input type="submit" class="iinputsub" value="Add new currency"/>

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