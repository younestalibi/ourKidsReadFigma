@extends('newdesign.layouts.app')

@section('content')



<!-- ========== cards-styles start ========== -->
<div class="cards-styles">

    <!-- ========= card-style-2 start ========= -->
    <div class="row">
        <div class="col-12">
            <div class="title mt-30 mb-30">
                <h1 class="display-5">Reading Buddies Onboarding Training Videos</h1>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">

            <div class="card-style-2 mb-30 h-100">
                <a class="text-dark" href="{{ route('training-video',['id'=>1]) }}">
                    <div class="card-image">
                        <div class="video-container">
                            <video class="myVideo">
                                <source class="videoSource" src="https://www.ourkidsreadinc.org/our_kids/assetsnew/videos/reading_budies_training_-_welcome1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="card-content">
                        <h4>1. READING BUDDIES WELCOME!</h4>
                        <p>
                            Introduction to the Our Kids Read
                            Reading Buddies program.
                            Understand the time commitment,
                            logistics and FAQs.
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- end col -->
        <!-- end col -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">

            <div class="card-style-2 mb-30 h-100">
                <a class="text-dark" href="{{ route('training-video',['id'=>2]) }}">
                    <div class="card-image">
                        <div class="video-container">
                            <video class="myVideo">
                                <source class="videoSource" src="https://ourkidsreadinc.org/our_kids/assetsnew/videos/reading_buddies_training_-_student_led_learning4.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="card-content">
                        <h4>2. INTRODUCTION TO THE PROGRAM</h4>
                        <p>
                            Introduction to the Our Kids Read
                            Reading Buddies program.
                            Understand the time commitment,
                            logistics and FAQs.
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- end col -->
        <div class="col-12">
            <div class="title mt-30 mb-30">
                <h1 class="display-5">Reading Buddies Training Videos (continued)</h1>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <div class="card-style-2 mb-30 h-100">
                <a class="text-dark" href="{{ route('training-video',['id'=>3]) }}">
                    <div class="card-image">
                        <div class="video-container">
                            <video class="myVideo">
                                <source class="videoSource" src="https://ourkidsreadinc.org/our_kids/assetsnew/videos/reading_buddies_training_-_student_led_learning4.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="video-length"></div>

                        </div>
                    </div>
                    <div class="card-content">
                        <h4>3. DIFFEENT STYLES OF READING</h4>
                        <p>
                            Introduction to the Our Kids Read
                            Reading Buddies program.
                            Understand the time commitment,
                            logistics and FAQs.
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- end col -->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <div class="card-style-2 mb-30 h-100">
                <a class="text-dark" href="{{ route('training-video',['id'=>4]) }}">
                    <div class="card-image">
                        <div class="video-container">
                            <video class="myVideo">
                                <source class="videoSource" src="https://ourkidsreadinc.org/our_kids/assetsnew/videos/reading_buddies_training_-_getting_to_know_your_student3.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="card-content">
                        <h4>4. UNDERSTANDING YOUR BUDDY’S READING PREFERENCES</h4>
                        <p>
                            The first time you read with your
                            student, the absolute most important
                            objective (after developing rapport) is
                            to understand your students
                            interests. This will, in turn, help you
                            identify books the she/he will enjoy.
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <!-- ========= card-style-2 end ========= -->

</div>
<!-- ========== cards-styles end ========== -->


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // var cardStyle2s = document.querySelectorAll('.card-style-2');
        // cardStyle2s.forEach(function(cardStyle2) {
        //     cardStyle2.addEventListener('click', function() {
        //         var form = cardStyle2.previousElementSibling;
        //         while (form && form.tagName !== 'FORM') {
        //             form = form.previousElementSibling;
        //         }
        //         if (form) {
        //             form.submit();
        //         }
        //     });
        // });



        var videos = document.querySelectorAll(".myVideo");
        videos.forEach(function(video) {
            video.onloadedmetadata = function() {
                var duration = formatTime(video.duration);
                var videoLength = document.createElement("div");
                videoLength.classList.add("video-length");
                videoLength.textContent = duration;
                video.parentNode.insertBefore(videoLength, video.nextSibling);
            };
        });

        function formatTime(seconds) {
            var minutes = Math.floor(seconds / 60);
            var remainingSeconds = Math.floor(seconds % 60);
            return minutes + ":" + (remainingSeconds < 10 ? "0" : "") + remainingSeconds;
        }
    });
</script>


@endsection