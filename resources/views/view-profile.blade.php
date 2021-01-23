<x-app-layout> 
        <div class="container" style=" background-color:white ; margin-top:3px">
            <div class="row">
                <div class="col-6">
                    <div class="" style="margin:0px; padding:0px">
                            <img src="./../public/storage/<?php $photo=$data->profile_photo_path; echo $photo ; ?>"  class="rounded-full h-30 w-100 object-cover img-responsive shadow">
                               
                    </div>
                </div>
                <div class="col-6 text-center" style=" padding:0px; background-color:#FD5068; ">
                    <div style="margin-top:40%; ">
                    <a style="text-decoration:none; color:white" href="../chat/{{$data['id']}}">
                        <i class="fa fa-comments display-4" aria-hidden="true"></i>
                        <br>Send a message to
                        <br>
                        <?php 
                            $longString = $data->name ;
                            echo $longString.' , '.$data->old;
                         ?><br>
                         <i class="fa fa-map-marker" style="color:green" aria-hidden="true"></i>
                        
                     </a>
                    <!--<i class="fa fa-phone display-4" aria-hidden="true"></i><br>
                    <i class="fa fa-video" aria-hidden="true"></i>-->
                    </div>
                </div>
                <div  class="col-12 top-3">
                    <hr>
                </div>
                <div class="col-12 text-center">
                    <?php 
                            $description = $data->description ;
                            echo $description ;
                            
                     ?>
                </div>
                <div  class="col-12">
                     <hr>
                </div>
                <div class=" col-12 text-center">
                   <p class="shadow-lg">What do i offer you ?</p>
                   <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                </div>
                <div class="col-12 text-center " style="background-color:white">
                   <p class="h6 bold" style="">Cash money & Good time</p>
                </div>
                
            </div>
            
    </div>  

</x-app-layout>