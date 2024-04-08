@extends('newdesign.layouts.app')

@section('content')

<form action="{{route('forth-step-update')}}" method="post">
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
        <h4 class="fw-bold my-3"><em>NOTE: THE DURATION OF ALL SESSIONS IS 45 MINUTES</em></h4>
    </div>

    <div class="row">
        <h6>How many times per week would you like to read with a student?</h6>
        <div class="d-flex flex-wrap">
            <div class="form-check radio-style">
                <input class="form-check-input" type="radio" name="week_time" id="radio-1" value="once_per_week" {{ old('week_time', $profile->week_time) === 'once_per_week' ? 'checked' : '' }}>
                <label class="form-check-label" for="radio-1">Once per week</label>
            </div>
            <div class="form-check radio-style">
                <input class="form-check-input" type="radio" name="week_time" id="radio-2" value="twice_per_week" {{ old('week_time', $profile->week_time) === 'twice_per_week' ? 'checked' : '' }}>
                <label class="form-check-label" for="radio-2">Twice per week</label>
            </div>
            <div class="form-check radio-style">
                <input class="form-check-input" type="radio" name="week_time" id="radio-3" value="three_times_per_week" {{ old('week_time', $profile->week_time) === 'three_times_per_week' ? 'checked' : '' }}>
                <label class="form-check-label" for="radio-3">Three times per week</label>
            </div>
        </div>

        @error('week_time')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>


    <div class="row my-4">
        <h6>Select languages you speak at an Intermediate Level or better:</h6>
        <div class="d-flex flex-wrap">
            @php
            $languagesArray = old('languages', json_decode($profile->speak_language ?? '[]', true));
            $default=true;
            if (count($languagesArray) > 0) {
            $default=false;
            }
            @endphp
            <div class="form-check checkbox-style">
                <input class="form-check-input" {{ $default?'checked':'' }} @if(in_array('English', $languagesArray)) checked @endif type="checkbox" name='languages[]' value="Amharic" id="checkbox-5" />
                <label class="form-check-label" for="checkbox-5">
                    English</label>
            </div>
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

        </div>
        @error('languages')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="row">


        @error('scheduale')
        <span class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        @foreach ($days as $day => $times)
        <h6 class="row">{{ $day }}:</h6>
        <div class="row mb-3">
            @foreach ($times as $index => $time)
            <div class="col-md-4 col-6">
                <div class="form-check form-switch toggle-switch">
                    <input class="form-check-input" type="checkbox" name="scheduale[]" value="{{ $time->sched_availability_id }}" id="{{ 'toggleSwitch'.$time->sched_availability_id }}" {{ in_array($time->sched_availability_id, old('scheduale', $selectedItemIds)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="{{ 'toggleSwitch'.$time->sched_availability_id }}">
                        {{ $time->sched_availability_time }}&nbsp;
                    </label>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach


    </div>





    <div class="row">
        <div class="col-12">
            <button type="submit" class="my-btn light-btn py-3 text-danger rounded-full px-5 btn-hover">
            CONTINUE
            </button>

        </div>
    </div>

</form>

@endsection