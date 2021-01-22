<x-app-layout> 
    <div class="">
        <div class="row "style="background:white"> 

            <div class="col-3" style="margin:0px; padding:0px"> </div>
            <div class="col-6" style="margin:0px; padding:0px">
                    <div class="mt-2" style="margin:0px; padding:0px">
                        <a  style="margin:0px; padding:0px" href="view-profile/{{$data->id}}" style="color:black; text-decoration:none" >
                            <img style="margin:0px; padding:0px" src="./../public/storage/<?php $photo=$data->profile_photo_path; echo $photo ; ?>"  class="rounded-full  object-cover">
                                <?php 
                                    $longString = $data->name ;
                                    echo $longString.' , '.$data->old;
                                ?>
                        </a>
                    </div>
                </div>    
                <a class="h4" style="margin-top:11px; margin-left:10px; text-decoration:none; color:black" href="../chat/{{$data['id']}}">Send a message...<i class="fas fa-paper-plane" style="color:black;font-size:25px; margin:auto;"></i></a>  

            </div>
            <div class="col-3" style="margin:0px; padding:0px"> </div>                
        </div>
    </div>  

</x-app-layout>