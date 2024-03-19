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
          <h1 class=" title-header">READING SESSION</h1>
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
                Training Videos
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-15 p-4 px-0">
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">STEP 2 OF 6: WATCH ONBOARDING TRAINING VIDEOS</h4>
          <p>Please watch our four (4) trainig videos and self-certify That you have watchd each
            video</p>
          <h4 class="alert-heading">1. Video 1 of 4: Welcome to the Our Kids Read Reading Buddies
            Program</h4>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="d-sm-flex my-4 justify-content-between align-items-center">
        <h1>A special thank you and welcome to our volunteers</h1>
        <!--<small id='videoDuration'>(2 minutes, 45 seconds)</small>-->
      </div>


      <video id="myVideo" controls>
        <source id="videoSource" src="https://ourkidsreadinc.org/our_kids/assetsnew/videos/reading_buddies_training_-_student_led_learning4.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <!--<div class="embed-responsive embed-responsive-16by9 ">

                            <iframe class="w-100" height="500"
                                src="https://www.youtube.com/embed/2hlD7dWp09M?si=ALhwbfYffKv4nA7g"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>-->
    </div>
    <div class="row">
      <div class="form-check checkbox-style my-4 mx-2">
        <input class="form-check-input" type="checkbox" value="" id="confirmCheckbox" />
        <label class="form-check-label" for="confirmCheckbox">
          I certify that i have watched this video in its entirely.</label>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <button id='nextButton' class="my-btn light-btn py-3  rounded-full px-5 btn-hover">PROCEED TO NEXT
          VIDEO</button>

      </div>
    </div>


  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var videos = [
        'https://www.ourkidsreadinc.org/our_kids/assetsnew/videos/reading_budies_training_-_welcome1.mp4',
        'https://ourkidsreadinc.org/our_kids/assetsnew/videos/reading_buddies_training_-_intro_to_the_program2.mp4',
        'https://ourkidsreadinc.org/our_kids/assetsnew/videos/reading_buddies_training_-_getting_to_know_your_student3.mp4',
        'https://ourkidsreadinc.org/our_kids/assetsnew/videos/reading_buddies_training_-_student_led_learning4.mp4',
      ];
      var currentIndex = 0;
      var video = document.getElementById('myVideo');
      var videoSource = document.getElementById('videoSource');
      var confirmCheckbox = document.getElementById('confirmCheckbox');
      var nextButton = document.getElementById('nextButton');

      // Initialize the first video
      loadVideo(currentIndex);

      // Function to load a video
      function loadVideo(index) {
        videoSource.src = videos[index];
        video.load();
        video.play();
      }


      nextButton.addEventListener('click', function() {
        if (video.paused || video.ended) {
          alert('Please watch the video before proceeding.');
          return;
        }

        if (!confirmCheckbox.checked) {
          alert('Please confirm that you have watched the video.');
          return;
        }

        var currentTime = video.currentTime;
        var duration = video.duration;
        var percentageWatched = (currentTime / duration) * 100;
        if (percentageWatched < 80) {
          alert('Please watch at least 80% of the video before proceeding.');
          return;
        }

        currentIndex++;
        console.log(currentIndex)
        console.log(videos.length)
        if (currentIndex < videos.length) {
          // Send AJAX request to update that the user has watched the current video
          updateWatchedVideo(currentIndex - 1); // Send the index of the watched video

          loadVideo(currentIndex);

          confirmCheckbox.checked = false;
        } else {
          updateWatchedVideo(currentIndex - 1);
          nextButton.innerText = 'Done';
          nextButton.disabled = true;
          window.location.href = '/reading-portal/dashboard';

        }
      });

      // Function to send AJAX request to update watched video
      function updateWatchedVideo(index) {
        var videoId = index + 1; // Assuming the video IDs start from 1
        var data = {
          videoId: videoId
        };

        $.ajax({
          url: '{{route("second-step-update")}}',
          type: 'POST',
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token if using Laravel
          },
          dataType: 'json',
          data: data,
          success: function(response) {
            console.log('Video watched successfully:', response);
          },
          error: function(xhr, status, error) {
            console.error('There was a problem with the AJAX request:', error);
          }
        });
      }

    });
  </script>
  @endsection