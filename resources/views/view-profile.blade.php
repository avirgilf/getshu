<x-app-layout> 
    <div class="">
            <div class="row "style="background:white">                         
                <div class="col-lg-4 " style="">
                    <img  class="img-responsive" src="../../public/storage/<?php $photo=$data['profile_photo_path']; echo $photo ;?>"/>  
                    <div class="bottom-left shadow-lg" style="color:white">
                        <h4>
                            <?php 
                                $longString = $data['name'] ;
                                echo ucfirst(substr($longString, 0, 8).', '.$data['old']);
                            ?> 
                        </h4>
                    </div>
                </div>
                <a class="h4" style="margin-top:11px; margin-left:10px; text-decoration:none; color:black" href="../chat/{{$data['id']}}">Send a message...<i class="fas fa-paper-plane" style="color:black;font-size:25px; margin:auto;"></i></a>  


                <div class="col-lg-4 shadow-sm" style="margin-left:10px;">
                </div>
                
            </div>
    </div>  

</x-app-layout>