<x-app-layout>
    <x-slot name="header">
        <h2>
            {{__('Dashbord')}}
        </h2>
    </x-slot>  
    <div class="container">
            <div class="row "style="background:white">                         
                <div class="col-lg-4 shadow" style="">
                <a class="btn" href="../dashboard"><--Back</a>
                    <img  style="widht:100% ; heigth: 450px" class="" src="../../../storage/app/public/<?php $photo=$data['profile_photo_path']; echo $photo ; ?>"/>  
                                            
                </div>
                <div class="col-lg-4 shadow-lg">
                    <h2>
                        <?php 
                            $longString = $data['name'] ;
                            echo substr($longString, 0, 8).', '.$data['old'].' Old';
                        ?>
                    </h2>
                </div>
                <div class="col-lg-4 shadow-sm">
                    <h2>Offers</h2>
                </div>
                
            </div>
    </div><br>

            <p class="center">More suggestion for you</p><br>
            <div class="container-fluid d-flex flex-row center">
            <input type="hidden" {{$users=Auth::user()->all()->where('clienttype','!=',Auth::user()->clienttype)->where('id','!=',Auth::user()->id)}}>

                @foreach ($users as $user)
                
                            <div class="rounded-circle shadow" 
                                 style="width:150px ; height:160px; 
                                        background-image: url('storage/app/public/<?php $photo=$user['profile_photo_path']; echo $photo ; ?>'); 
                                        background-position: center; background-repeat: no-repeat; 
                                        background-size: 100% 100%; margin-right:4px;margin-left:4px">
                                    
                                        <div class="text-center" 
                                              style="background-color:rgba(0, 0, 0, 0.5);
                                                     height: 75px; width:150px; border-radius: 0px 0px 100px 100px;margin-top:84px"><br>
                                            <a href="{{$user['id']}}" class="shadow " ><span class="" style="color:white">
                                                <?php 
                                                    $longString = $user['name'] ;
                                                    echo substr($longString, 0, 8).', '.$user['old'];
                                                ?>
                                            </span><br>
                                            Lagos</a>
                                        </div>
                                        
                            </div>
                            
                        
                @endforeach  
    </div>  

</x-app-layout>