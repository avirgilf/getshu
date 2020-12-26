<x-app-layout>
    <x-slot name="header">
        <h2>
            {{__('Dashbord')}}
        </h2>
    </x-slot>  


    <div class="container" style="background:white">
        <h3>
            {{__('Language Management')}}
        </h3>
        <div class="row">
            <div class="col-lg-4" >
                <form action="{{ url('alang') }}"  method="post">
                    @csrf
                    <input class="iinput" type="text" name="language_name" value="{{ old('language_name') }}" placeholder="language Name" autocomplete="off" />
                     <p style="color:red" >@error('language_name') {{$message}} @enderror</p>
                     <input class="iinput" type="text" name="language_code" value="{{ old('language_code') }}" placeholder="language Code" autocomplete="off" />
                     <p style="color:red" >@error('language_code') {{$message}} @enderror</p>
                    
                    <input type="submit" class="iinputsub" value="Add new language"/>

                </form>
            </div>
            <div class="col-lg-6">
                <table class="table table-bordered">
                    <thead class="">
                        <tr>
                            <th>language name</th><th>language code</th> <th>Modify</th> <th>Delete</th>
                        <tr>
                    </thead>
                    <tbody>
                        @forelse($language as $languages)
                        <tr> 
                        <td>{{$languages->Language_name}}</td><td>{{$languages->Language_code}}</td> <td>{{$languages->id}}</td>  <td>{{$languages->id}}</td>
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