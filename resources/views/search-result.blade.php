@extends('dashboard')

@section('search-result')
<div class="container">
        <div class="row">
    @if ($users)
        @foreach($users as $user)
        <div class="col-3" style="margin:0px;">
            <div class="mt-2" style="margin:0px; padding:0px">
                <a href="view-profile/{{$user->id}}" style="color:black; text-decoration:none" >
                    <img src="./../public/storage/<?php $photo=$user->profile_photo_path; echo $photo ; ?>"  class="rounded-full h-20 w-20 object-cover">
                        <?php 
                            $longString = $user->name ;
                            echo substr($longString, 0, 8).', '.$user->old;
                        ?>
                </a>
            </div>
        </div>
                
        @endforeach
    @else
        No result for this search
    @endif
    </div>

        </div>
@endsection

