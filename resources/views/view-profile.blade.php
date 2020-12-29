<x-app-layout> 
    <div class="">
            <div class="row "style="background:white">                         
                <div class="col-lg-4 shadow" 
                style="width:100%; 
                height:300px;
                background-image: url('../../public/storage/<?php $photo=$data['profile_photo_path']; echo $photo ; ?>'); 
                background-position: center; 
                background-repeat: no-repeat; 
                background-size: 100% 100%;">
                                        hi
                </div>
                <div class="col-lg-4">
                    <h4 style="margin-top:10px">
                        <?php 
                            $longString = $data['name'] ;
                            echo ucfirst(substr($longString, 0, 8).', '.$data['old']);
                        ?>
                        <a href="../chat/{{$data['id']}}"><i class="fas fa-paper-plane" style="color:black;font-size:25px; margin:auto;"></i></a>  
                       
                    </h4>
                <div class="col-lg-4 shadow-sm">
                    <h2>Offers</h2>
                </div>
                
            </div>
    </div>
    </div>  

</x-app-layout>