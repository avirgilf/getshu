@extends('dashboard')

@section('search-result')
    @if ($users)
        @foreach($users as $user)
            <div class="rounded-circle shadow" style="width:150px ; height:160px; 
                        background-image: 
                                        url('storage/app/public/<?php $photo=$user->profile_photo_path; echo $photo ; ?>'); 
                                        background-position: center; background-repeat: no-repeat; 
                                        background-size: 100% 100%; margin-right:4px;margin-left:4px">
                                    
                <div class="text-center" style="background-color:rgba(0, 0, 0, 0.5);
                                                height: 75px; width:150px; border-radius: 0px 0px 100px 100px;margin-top:84px"><br>
                    <span class="" style="color:white">
                        <?php 
                            $longString = $user->name ;
                            echo substr($longString, 0, 8).', '.$user->old;
                        ?>
                    </span><br>
                    <a href="view-profile/{{$user->id}}" class="shadow " >Lagos</a>
                </div>
                                        
            </div>
        @endforeach
    @else
        No result for this search
    @endif
@endsection

