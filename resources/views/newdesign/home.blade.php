@extends('newdesign.layouts.app')

@section('content')
@php
if ($typeUser === 'student') {
$firstStep=route('student.first-step');
$secondStep=route('student.second-step');
$thirdStep=route('student.third-step');
$forthStep=route('student.fifth-step');

} elseif ($typeUser === 'reader') {
$firstStep=route('reader.first-step');
$secondStep=route('reader.second-step');
$thirdStep=route('reader.third-step');
$forthStep=route('reader.forth-step');
$fifthStep=route('reader.fifth-step');
$sixthStep=route('reader.sixth-step');
}
@endphp
<h1 class="timeline-title display-5">ONBOARDING PROCESS</h1>
@if($typeUser=='reader')
<div class="timeline">
  <div class="tl-container">
    <div class="circle {{ $step1 == 'current' || $step1 == 'finished' ? 'active-circle' : ''}}  d-flex justify-content-center align-items-center">
      @if($step1 == 'finished')
      <i class="bi bi-check-lg fs-1 text-success"></i>
      @else
      01
      @endif
    </div>
    <div class="arrow-container">
      <div class="arrow ">STEP 01</div>
      <a href="{{$firstStep}}" class="{{$step1 =='default'? 'disabled-link':''}}">
        <div class="arrow-text {{ $step1 == 'finished' ? 'arrow-finished' : '' }}
                  {{ $step1 == 'current' ? 'arrow-current' : '' }}
                  {{ $step1 == 'default' ? 'arrow-default' : '' }}">Complete Profile</div>
      </a>
    </div>
  </div>

  <div class="tl-container ">
    <div class="circle {{ $step2 == 'current' || $step2 == 'finished' ? 'active-circle' : ''}}  d-flex justify-content-center align-items-center">
      @if($step2 == 'finished')
      <i class="bi bi-check-lg fs-1 text-success"></i>
      @else
      02
      @endif
    </div>
    <div class="arrow-container">
      <div class="arrow">STEP 02</div>
      <a href="{{$secondStep}}" class="{{$step2 =='default'? 'disabled-link':''}}">
        <div class="arrow-text {{ $step2 == 'finished' ? 'arrow-finished' : '' }}
                  {{ $step2 == 'current' ? 'arrow-current' : '' }}
                  {{ $step2 == 'default' ? 'arrow-default' : '' }}">Training Videos</div>
      </a>
    </div>
  </div>
  <div class="tl-container ">
    <div class="circle {{ $step3 == 'current' || $step3 == 'finished' ? 'active-circle' : ''}} d-flex justify-content-center align-items-center">
      @if($step3 == 'finished')
      <i class="bi bi-check-lg fs-1 text-success"></i>
      @else
      03
      @endif
    </div>
    <div class="arrow-container">
      <div class="arrow">STEP 03</div>
      <a href="{{$thirdStep}}" class="{{$step3 =='default'? 'disabled-link':''}}">
        <div class="arrow-text {{ $step3 == 'finished' ? 'arrow-finished' : '' }}
                  {{ $step3 == 'current' ? 'arrow-current' : '' }}
                  {{ $step3 == 'default' ? 'arrow-default' : '' }}">For your Student</div>
      </a>
    </div>
  </div>

  <div class="tl-container ">
    <div class="circle {{ $step4 == 'current' || $step4 == 'finished' ? 'active-circle' : ''}} d-flex justify-content-center align-items-center">
      @if($step4 == 'finished')
      <i class="bi bi-check-lg fs-1 text-success"></i>
      @else
      04
      @endif
    </div>
    <div class="arrow-container">
      <div class="arrow">STEP 04</div>
      <a href="{{$forthStep}}" class="{{$step4 =='default'? 'disabled-link':''}}">
        <div class="arrow-text {{ $step4 == 'finished' ? 'arrow-finished' : '' }}
                  {{ $step4 == 'current' ? 'arrow-current' : '' }}
                  {{ $step4 == 'default' ? 'arrow-default' : '' }}">Availability</div>
      </a>
    </div>
  </div>
  <div class="tl-container ">
    <div class="circle {{ $step5 == 'current' || $step5 == 'finished' ? 'active-circle' : ''}} d-flex justify-content-center align-items-center">
      @if($step5 == 'finished')
      <i class="bi bi-check-lg fs-1 text-success"></i>
      @else
      05
      @endif
    </div>
    <div class="arrow-container">
      <div class="arrow">STEP 05</div>
      <a href="{{$fifthStep}}" class="{{$step5 =='default'? 'disabled-link':''}}">
        <div class="arrow-text {{ $step5 == 'finished' ? 'arrow-finished' : '' }}
                  {{ $step5 == 'current' ? 'arrow-current' : '' }}
                  {{ $step5 == 'default' ? 'arrow-default' : '' }}">Responsibilites</div>
      </a>
    </div>
  </div>
  <div class="tl-container ">
    <div class="circle {{ $step6 == 'current' || $step6 == 'finished' ? 'active-circle' : ''}} d-flex justify-content-center align-items-center">
      @if($step6 == 'finished')
      <i class="bi bi-check-lg fs-1 text-success"></i>
      @else
      06
      @endif
    </div>
    <div class="arrow-container">
      <div class="arrow">STEP 06</div>
      <a href="{{$sixthStep}}" class="{{$step6 =='default'? 'disabled-link':''}}">
        <div class="arrow-text {{ $step6 == 'finished' ? 'arrow-finished' : '' }}
                  {{ $step6 == 'current' ? 'arrow-current' : '' }}
                  {{ $step6 == 'default' ? 'arrow-default' : '' }}">Pledge</div>
      </a>
    </div>
  </div>
</div>
@elseif($typeUser=='student')
<div class="timeline">
  <div class="tl-container">
    <div class="circle {{ $step1 == 'current' || $step1 == 'finished' ? 'active-circle' : ''}}  d-flex justify-content-center align-items-center">
      @if($step1 == 'finished')
      <i class="bi bi-check-lg fs-1 text-success"></i>
      @else
      01
      @endif
    </div>
    <div class="arrow-container">
      <div class="arrow ">STEP 01</div>
      <a href="{{$firstStep}}" class="{{$step1 =='default'? 'disabled-link':''}}">
        <div class="arrow-text {{ $step1 == 'finished' ? 'arrow-finished' : '' }}
                  {{ $step1 == 'current' ? 'arrow-current' : '' }}
                  {{ $step1 == 'default' ? 'arrow-default' : '' }}">Complete Profile</div>
      </a>
    </div>
  </div>


  <div class="tl-container ">
    <div class="circle {{ $step2 == 'current' || $step2 == 'finished' ? 'active-circle' : ''}} d-flex justify-content-center align-items-center">
      @if($step2 == 'finished')
      <i class="bi bi-check-lg fs-1 text-success"></i>
      @else
      02
      @endif
    </div>
    <div class="arrow-container">
      <div class="arrow">STEP 02</div>
      <a href="{{$secondStep}}" class="{{$step2 =='default'? 'disabled-link':''}}">
        <div class="arrow-text {{ $step2 == 'finished' ? 'arrow-finished' : '' }}
                  {{ $step2 == 'current' ? 'arrow-current' : '' }}
                  {{ $step2 == 'default' ? 'arrow-default' : '' }}">For your Student</div>
      </a>
    </div>
  </div>
  <div class="tl-container ">
    <div class="circle {{ $step3 == 'current' || $step3 == 'finished' ? 'active-circle' : ''}} d-flex justify-content-center align-items-center">
      @if($step3 == 'finished')
      <i class="bi bi-check-lg fs-1 text-success"></i>
      @else
      03
      @endif
    </div>
    <div class="arrow-container">
      <div class="arrow">STEP 03</div>
      <a href="{{$thirdStep}}" class="{{$step3 =='default'? 'disabled-link':''}}">
        <div class="arrow-text {{ $step3 == 'finished' ? 'arrow-finished' : '' }}
                  {{ $step3 == 'current' ? 'arrow-current' : '' }}
                  {{ $step3 == 'default' ? 'arrow-default' : '' }}">Availability</div>
      </a>
    </div>
  </div>

  <div class="tl-container ">
    <div class="circle {{ $step4 == 'current' || $step4 == 'finished' ? 'active-circle' : ''}} d-flex justify-content-center align-items-center">
      @if($step4 == 'finished')
      <i class="bi bi-check-lg fs-1 text-success"></i>
      @else
      04
      @endif
    </div>
    <div class="arrow-container">
      <div class="arrow">STEP 04</div>
      <a href="{{$forthStep}}" class="{{$step4 =='default'? 'disabled-link':''}}">
        <div class="arrow-text {{ $step4 == 'finished' ? 'arrow-finished' : '' }}
                  {{ $step4 == 'current' ? 'arrow-current' : '' }}
                  {{ $step4 == 'default' ? 'arrow-default' : '' }}">Completion Reward</div>
      </a>
    </div>
  </div>
</div>
@endif
@endsection