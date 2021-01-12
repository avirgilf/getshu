<x-app-layout>

<div class="container">
  

    <div class="panel panel-primary">

      <div class="panel-body">     
      <div class="rounded-circle shadow " style="width:150px ; height:160px; 
                        background-image: 
                                        url('./../public/storage/<?php $photo=Auth::user()->profile_photo_path; echo $photo ; ?>'); 
                                        background-position: center; background-repeat: no-repeat; 
                                        background-size: 100% 100%; margin-right:4px;margin-left:4px">
       
       
       </div>

        <form action="image-upload" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">

    

                <div class="col-md-6">

                    <input type="file" name="image" class="form-control">

                </div>

     

                <div class="col-md-6">

                    <button type="submit" class="btn btn-success">Upload</button>

                </div>

     

            </div>

        </form>






</x-app-layout>