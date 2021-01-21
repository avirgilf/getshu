@extends('dashboard')

@section('search-result')
<div class="container">
        <div class="row">
    @if ($users)
        @foreach($users as $user)

            <div class="mt-2">
                    <img src="./../public/storage/<?php $photo=$user->profile_photo_path; echo $photo ; ?>"  class="rounded-full h-20 w-20 object-cover">
            </div>
                
        @endforeach
    @else
        No result for this search
    @endif
    </div>

        </div>
@endsection

