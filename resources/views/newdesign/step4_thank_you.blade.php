@extends('newdesign.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 d-flex ">
        <div class="breadcrumb-wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#0">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('main-dashboard') }}">Onboarding Process</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                    Completion Reward
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="content-container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <video id="myVideo" class="w-100" controls>
                <source id="videoSource" src="https://www.ourkidsreadinc.org/our_kids/assetsnew/videos/reading_budies_training_-_welcome1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

    </div>
    <form class="row mt-4" method="post" action="{{route('fifth-step-update')}}">
    @csrf
        <div class="col-12">
            <button type="submit" style="color: red;" class="my-btn py-3 light-btn rounded-full px-5 btn-hover">COMPLETE</button>
        </div>
    </form>
    @endsection