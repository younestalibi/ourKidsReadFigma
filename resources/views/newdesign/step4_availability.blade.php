@extends('newdesign.layouts.app')

@section('content')
<div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="menu-toggle-btn mr-15 d-flex align-items-center">
                    <button id="menu-toggle" class="main-btn rounded-circle primary-btn btn-hover">
                        <i class="lni lni-chevron-left me-2"></i>
                    </button>
                    <h1 class="title-header">READING SESSION</h1>
                </div>
                <form action="{{route('reading-portal-logout')}}" method="post">
                    @csrf
                    <button type="submit" style="background: none; border: none;">
                        <i class="bi bi-power fs-1 rounded-circle"></i>
                    </button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="mt-3 text-light title-header title">
                    <h3>Pending Student Assignment</h3>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->
    <form action="{{route('forth-step-update')}}" method="post" class="content-container">
        @csrf

        <div class="row">
            <div class="col-12 d-flex ">
                <div class="breadcrumb-wrapper">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#0">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/firstpage.html">Onboarding Process</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Availability
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-15 p-4 px-0">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">STEP 4 OF 6: CONFIRM YOUR AVAILABILITY TO READ WITH A STUDENT</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <h3 class="fw-bold mt-3 ">(PLEASE SELECT AT LEAST TWO BLOCKS TO ENSURE A MATCH WITH A STUDENT)</h3>
            <h4 class="fw-bold text-danger my-3">NOTE: THE DURATION OF ALL SESSIONS IS 45 MINUTES</h4>
        </div>

        <div class="row">
            <h6>How many times per week would you like to read with a student?</h6>
            <div class="d-flex flex-wrap">
                <div class="form-check radio-style">
                    <input class="form-check-input" @if($profile->week_time == 'once_per_week') checked @endif value="once_per_week" type="radio" name="week_time" id="radio-1" />
                    <label class="form-check-label" for="radio-1">
                        Once per week</label>
                </div>
                <div class="form-check radio-style">
                    <input class="form-check-input" @if($profile->week_time == 'twice_per_week') checked @endif value="twice_per_week" type="radio" name="week_time" id="radio-2" />
                    <label class="form-check-label" for="radio-2">
                        Twice per week</label>
                </div>
                <div class="form-check radio-style">
                    <input class="form-check-input" @if($profile->week_time == 'three_times_per_week') checked @endif value="three_times_per_week" type="radio" name="week_time" id="radio-3" />
                    <label class="form-check-label" for="radio-3">
                        Three times per week</label>
                </div>
            </div>
        </div>


        <div class="row my-4">
            <h6>Select languages you speak at an Intermediate Level or better:</h6>
            <div class="d-flex flex-wrap">
                @php
                $languagesArray = json_decode($profile->speak_language?? '[]', true);
                @endphp

                <div class="form-check checkbox-style">
                    <input class="form-check-input" @if(in_array('Spanish', $languagesArray)) checked @endif type="checkbox" name='languages[]' value="Spanish" id="checkbox-1" />
                    <label class="form-check-label" for="checkbox-1">
                        Spanish</label>
                </div>
                <div class="form-check checkbox-style">
                    <input class="form-check-input" @if(in_array('French', $languagesArray)) checked @endif type="checkbox" name='languages[]' value="French" id="checkbox-2" />
                    <label class="form-check-label" for="checkbox-2">
                        French</label>
                </div>
                <div class="form-check checkbox-style">
                    <input class="form-check-input" @if(in_array('Mandarin Chinese', $languagesArray)) checked @endif type="checkbox" name='languages[]' value="Mandarin Chinese" id="checkbox-3" />
                    <label class="form-check-label" for="checkbox-3">
                        Mandarin Chinese</label>
                </div>
                <div class="form-check checkbox-style">
                    <input class="form-check-input" @if(in_array('Tigrinya', $languagesArray)) checked @endif type="checkbox" name='languages[]' value="Tigrinya" id="checkbox-4" />
                    <label class="form-check-label" for="checkbox-4">
                        Tigrinya</label>
                </div>
                <div class="form-check checkbox-style">
                    <input class="form-check-input" @if(in_array('Amharic', $languagesArray)) checked @endif type="checkbox" name='languages[]' value="Amharic" id="checkbox-5" />
                    <label class="form-check-label" for="checkbox-5">
                        Amharic</label>
                </div>
            </div>
        </div>

        <div class="row">



            @foreach ($days as $day => $times)
            <h6 class="row">{{ $day }}:</h6>
            <div class="row mb-3">
                @foreach ($times as $index => $time)
                <div class=" col-md-4 col-6">

                    <div class="form-check form-switch toggle-switch">
                        <input class="form-check-input" type="checkbox" name="scheduale[]" 
                        value="{{ $time->sched_availability_id }}" 
                        @if(in_array($time->sched_availability_id, $selectedItemIds)) checked @endif
                        id="{{'toggleSwitch'.$time->sched_availability_id}}" />
                        <label class="form-check-label" for="{{'toggleSwitch'.$time->sched_availability_id}}"> {{ $time->sched_availability_time }}&nbsp;
                        </label>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach

        </div>





        <div class="row">
            <div class="col-12">
                <button type="submit" class="my-btn light-btn py-3  rounded-full px-5 btn-hover">
                    Submit
                </button>

            </div>
        </div>

    </form>

</div>
@endsection