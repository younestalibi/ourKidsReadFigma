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
  <div class="content-container">
    <h1 class="timeline-title display-6">ONBOARDING PROCESS</h1>
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
          <a href="{{route('first-step')}}" class="{{$step1 =='default'? 'disabled-link':''}}">
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
          <a href="{{route('second-step')}}" class="{{$step2 =='default'? 'disabled-link':''}}">
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
          <a href="{{route('third-step')}}" class="{{$step3 =='default'? 'disabled-link':''}}">
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
          <a href="{{route('forth-step')}}" class="{{$step4 =='default'? 'disabled-link':''}}">
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
          <a href="{{route('fifth-step')}}" class="{{$step5 =='default'? 'disabled-link':''}}">
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
          <a href="{{route('sixth-step')}}" class="{{$step6 =='default'? 'disabled-link':''}}">
            <div class="arrow-text {{ $step6 == 'finished' ? 'arrow-finished' : '' }}
                  {{ $step6 == 'current' ? 'arrow-current' : '' }}
                  {{ $step6 == 'default' ? 'arrow-default' : '' }}">Pledge</div>
          </a>
        </div>
      </div>
    </div>
  </div>

  @endsection