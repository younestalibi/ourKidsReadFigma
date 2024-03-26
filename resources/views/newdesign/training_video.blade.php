@extends('newdesign.layouts.app')

@section('content')


<div class="row mb-4">
    <h1 class="display-5">Reading Buddies Training Videos
    </h1>
    <h1 class="mx-4 my-3" style="color: #2f79af !important;font-size: 2rem;font-weight:400">Onboarding Videos</h1>
    <b class="mx-4 text-dark">{{ $title }}</b>
    <!--<small id='videoDuration'>(2 minutes, 45 seconds)</small>-->
</div>

<div class="row">
    <div class="col-md-8 col-sm-12">
        <video id="myVideo" class="w-100" controls>
            <source id="videoSource" src="{{$video}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="col-md-4 col-sm-12 p-3">
        <div class="mb-3 text-dark">{{ $description }}</div>
        <a style="text-decoration: underline;" class="my-2 d-block" href="{{route('training')}}">Return to Training Home</a>
        <a style="text-decoration: underline;" class="d-block" href="{{route('home')}}">Return to My Dashboard</a>
    </div>



</div>




@endsection