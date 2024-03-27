<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg')}}" type="image/x-icon" />
    <title>Our Kids Read: Sparking the Joy of Reading in Low-Income Communities</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/lineicons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css?v=').time()}}" />
    <!--my style-->
    <link rel="stylesheet" href="{{asset('assets/css/index.css?v=').time()}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</head>

<body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
        <div class="navbar-logo ">
            <a href="index.html">
                <img src="{{ asset('assets/images/logo/logo.png') }}" class="nav-logo" alt="logo" />
            </a>
        </div>
        <div class=" pb-3 fw-bold text-white  fs-3  p-3 text-center justify-content-center">
            <div class="jusitfy-content-center d-flex ">
                <!--<i class="bi bi-list list-icon "></i>-->
                {{-- <b class="mx-3">{{ $user->user_name_first . ' ' . $user->user_name_last }}</b> --}}
                <!--<b class="mx-3">Menu</b>-->

            </div>
        </div>
        <nav class="sidebar-nav">
            <ul>

                <li class="row gap-10 image-container">
                    <div class="image d-flex ">
                        @if ($image)
                        @if ($image->image_path)
                        <img class="rounded-circle border border-light" src="{{ $image->image_path }}" alt="" />
                        @else
                        <img class="rounded-circle border border-light" src="https://cdn.vectorstock.com/i/preview-1x/76/27/default-profile-picture-avatar-photo-placeholder-vector-30247627.webp" alt="" />
                        @endif
                        @else
                        <img class="rounded-circle border border-light" src="https://cdn.vectorstock.com/i/preview-1x/76/27/default-profile-picture-avatar-photo-placeholder-vector-30247627.webp" alt="" />
                        @endif

                        <div class="p-3 d-flex text-sm-left text-md-left justify-content-center flex-column ">
                            <b class="text-white">{{ $user->user_username }}</b>
                            <div class="text-light">{{ $user->user_email }}</div>
                        </div>
                    </div>
                </li>

                <li class="nav-item d-flex border-secondary justify-content-between p-3">
                    <div class="d-flex align-items-center w-100">
                        <div class="list-icon">
                            <img class="list-img" src="https://www.ourkidsreadinc.org/myimg/dashboard/home_w.png" alt="home">
                        </div>
                        <div class="list-text"><a href="{{route('home')}}"><b>Home</b></a></div>
                    </div>
                </li>
                <li class=" nav-item d-flex border-secondary justify-content-between p-3 ">

                    <div class="d-flex align-items-center  w-100">
                        <div class="list-icon">
                            <img class="list-img" src="https://www.ourkidsreadinc.org/myimg/dashboard/setting_w.png" alt="onBoarding">
                        </div>
                        <div class="list-text"><a href="{{route('main-dashboard')}}">OnBoarding</a></div>
                    </div>
                </li>
                <li class=" nav-item d-flex border-secondary justify-content-between p-3 ">

                    <div class="d-flex align-items-center  w-100">
                        <div class="list-icon">
                            <img class="list-img" src="https://www.ourkidsreadinc.org/myimg/dashboard/training_w.png" alt="traning">
                        </div>
                        <div class="list-text"><a href="{{route('training')}}">Training</a></div>
                    </div>
                </li>
                <li class=" nav-item d-flex border-secondary justify-content-between p-3 ">

                    <div class="d-flex align-items-center  w-100">
                        <div class="list-icon">
                            <img class="list-img" src="https://www.ourkidsreadinc.org/myimg/dashboard/setting_w.png" alt="setting">
                        </div>
                        <div class="list-text"><a href="">Surveys And Tools</a></div>
                    </div>
                </li>
                <li class=" nav-item d-flex border-secondary justify-content-between p-3 ">

                    <div class="d-flex align-items-center  w-100">
                        <div class="list-icon">
                            <img class="list-img" src="https://www.ourkidsreadinc.org/myimg/dashboard/puzzle_w.png" alt="puzzle">
                        </div>
                        <div class="list-text"><a href="">Games</a></div>
                    </div>
                </li>
                <li class=" nav-item d-flex border-secondary justify-content-between p-3 ">

                    <div class="d-flex align-items-center  w-100">
                        <div class="list-icon">
                            <img class="list-img" src="https://www.ourkidsreadinc.org/myimg/dashboard/fantasy_w.png" alt="fantasy">
                        </div>
                        <div class="list-text"><a>Animated Stories</a></div>
                    </div>
                </li>
                <li class=" nav-item d-flex border-secondary justify-content-between p-3">

                    <div class="d-flex align-items-center  w-100">
                        <div class="list-icon">
                            <img class="list-img" src="https://www.ourkidsreadinc.org/myimg/dashboard/puzzle_w.png" alt="puzzle">
                        </div>
                        <div class="list-text"><a href="">Free Books</a></div>
                    </div>
                </li>
                <li class="mt-5 d-flex justify-content-center align-items-center  nav-item-has-children">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class=" d-flex justify-content-center col-md-4">
                            <div class="image ">
                                <img class="rounded" src="https://www.ourkidsreadinc.org/myimg/dashboard/avatar.webp" alt="" />
                                <!--<img class="rounded-circle" src="https://s3-alpha-sig.figma.com/img/66b2/132a/13e8d368acee97c5f223fc6662b5b1f2?Expires=1711324800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=OO7vJXxG18mkBKD60No-2IiJ0Qs3QsM6SN~ni6SBfrL1f1pwm7XP-g545jai3jerANf7YmrWyPju3BsdiklbDvTdv7AirvM-uH01fwCe-FfIO4vEmTpIhBDxEEYiMJG3hMTR-Zj2IlsfXxJZm4~ceaVbGrnjklG5sCjdt7ybBihki4y7J3ZqU1qA64ojTTiOuIjIqe5~bOrnKGj7FPcCDcQO21Z5ry6UwDtt6j3VuSFyUV-USUenK1gvBWZQzx9gJhavzGMP56cqUVUlDiuvuXS4VQypPJKRrmycIQGAb7if0Ho6h1~me~QmpCpOrQpbEuDoYBBwWH9p18giBx9qjQ__" alt="" />-->
                            </div>
                        </div>
                        <div class=" d-flex justify-content-center col-md-8">
                            <a href=""><b class="live-chat">Live Chat Help</b></a>
                        </div>
                    </div>
                </li>
                <!--<li
            class="mt-4 nav-item d-flex border-secondary justify-content-between border rounded mx-auto px-4 py-2"
          >
            <div class="item-text">Number Of Sessions Attended</div>
            <div class="item-count">30</div>
          </li>-->

            </ul>
        </nav>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->

        <!-- ========== header end ========== -->

        <!-- ========== section start ========== -->
        <section class="section">


            <div class="container-fluid py-5">
                <!-- ========== title-wrapper start ========== -->
                <!-- ========== title-wrapper end ========== -->
                <div class="content-container">
                    <!-- ========== cards-styles start ========== -->
                    <div class="cards-styles">

                        <!-- ========= card-style-2 start ========= -->
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="w-auto">
                                <div class="menu-toggle-btn mr-15 d-flex align-items-center">
                                    <button id="menu-toggle" class="main-btn rounded-circle primary-btn btn-hover">
                                        <!--<i class="lni lni-chevron-left me-2"></i>-->
                                        <img src="https://www.ourkidsreadinc.org/myimg/dashboard/hambuger.svg" style="object-fit: contain;" width="30" alt="">
                                    </button>
                                </div>
                            </div>
                            <form class="w-auto" action="{{route('reading-portal-logout')}}" method="post">
                                @csrf
                                <button type="submit" style="background: none; border: none;">
                                    <i class="bi bi-power fs-1 rounded-circle"></i>
                                </button>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="title mt-30 mb-30">
                                    <h1 class="display-6">Reading Buddies Onboarding Training Videos</h1>
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
                                    <h1 class="display-6">Reading Buddies Training Videos (continued)</h1>
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


                </div>


        </section>
        <!-- ========== section end ========== -->

        <!-- ========== footer start =========== -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 order-last order-md-first">
                        <div class="copyright text-center text-md-start">
                            <p class="text-sm">
                                Our Kids Read

                            </p>
                        </div>
                    </div>
                    <!-- end col-->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/js/dynamic-pie-chart.js')}}"></script>
    <script src="{{asset('assets/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/fullcalendar.js')}}"></script>
    <script src="{{asset('assets/js/jvectormap.min.js')}}"></script>
    <script src="{{asset('assets/js/world-merc.js')}}"></script>
    <script src="{{asset('assets/js/polyfill.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>