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
      <h4 class="alert-heading" id="title1"></h4>

    </div>
  </div>
</div>
<div class="row">
  <div class="d-sm-flex my-4 justify-content-between align-items-center">
    <h1 id="title2"></h1>
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
    <button id='nextButton' class="my-btn light-btn py-3 text-danger rounded-full px-5 btn-hover">PROCEED TO NEXT
      VIDEO</button>

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
    var title1 = [
      "1. Video 1 of 4: Welcome to the Our Kids Read Reading Buddies Program",
      "1. Video 2 of 4: Introduction to the Program",
      "1. Video 3 of 4: Getting to Know Your Student",
      "1. Video 4 of 4: Introduction to Student-Led Learning"
    ]
    var title2 = [
      "A special thank you and welcome to our volunteers (2 minutes, 45 seconds)",
      "Introduction to the philosophy behind Reading Buddies (2 minutes, 58 seconds)",
      "Review this video to get a sense of the questions you should ask during the first 5 minutes of your reading session (3 minutes, 30 seconds)",
      "A deep-dive into the philosophy that underpins the Reading Buddy program (6 minutes, 4 seconds)",
    ]
    var currentIndex = 0;
    var video = document.getElementById('myVideo');
    var videoSource = document.getElementById('videoSource');
    var confirmCheckbox = document.getElementById('confirmCheckbox');
    var nextButton = document.getElementById('nextButton');
    var videotitle1 = document.getElementById('title1');
    var videotitle2 = document.getElementById('title2');

    // Initialize the first video
    loadVideo(currentIndex);

    // Function to load a video
    function loadVideo(index) {
      videoSource.src = videos[index];
      videotitle1.textContent = title1[index]
      videotitle2.textContent = title2[index]
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
        window.location.href = '/reading-portal/dashboard/step3';

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