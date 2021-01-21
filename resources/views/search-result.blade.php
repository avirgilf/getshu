@extends('dashboard')

@section('search-result')
<div class="container">
        <div class="row">
    @if ($users)
        @foreach($users as $user)
        
            <div class="col-3" style="margin:0px; padding:0px">
                <img class="block rounded-full img-responsive" style="border-radius:100%;"  src="./../public/storage/<?php $photo=$user->profile_photo_path; echo $photo ; ?>" />
                <br>
                <span class="" style="color:black">
                        <a href="view-profile/{{$user->id}}" class="shadow" style="color:white; text-decoration:none" >
                        <?php 
                            $longString = $user->name ;
                            echo substr($longString, 0, 8).', '.$user->old;
                        ?>
                        </a>
                    </span>
            </div>
            
        
        @endforeach
    @else
        No result for this search
    @endif
    </div>

        </div>
@endsection

