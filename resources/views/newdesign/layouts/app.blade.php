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
              <b class="text-white">{{ $user->user_name_first . ' ' . $user->user_name_last }}</b>
              <div class="text-light">{{ $user->email }}</div>
            </div>
          </div>
        </li>
        @if ($user->sms_opt_in_flag)
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          You are opted in for SMS alerts!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @else
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          You are still not opted in for SMS alerts!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <li class="nav-item d-flex border-secondary justify-content-between p-3 {{ request()->routeIs(['home-dashboard']) ? 'nav-item-active' : '' }}">
          <div class="d-flex align-items-center w-100">
            <div class="list-icon">
              <img class="list-img" src="https://www.ourkidsread.org/myimg/dashboard/home_w.png" alt="home">
            </div>
            <div class="list-text"><a href="{{route('home-dashboard')}}"><b>Home</b></a></div>
          </div>
        </li>
        <li class="nav-item  d-flex border-secondary justify-content-between p-3 {{ request()->routeIs(['main-dashboard','student.first-step','student.second-step','student.third-step','reader.first-step','reader.second-step','reader.third-step','reader.forth-step','reader.fifth-step','reader.sixth-step']) ? 'nav-item-active' : '' }}">

          <div class="d-flex align-items-center  w-100 ">
            <div class="list-icon">
              <img class="list-img" src="https://www.ourkidsread.org/myimg/dashboard/setting_w.png" alt="onBoarding">
            </div>
            <div class="list-text"><a href="{{route('main-dashboard')}}">OnBoarding</a></div>
          </div>
        </li>
        <li class=" nav-item d-flex border-secondary justify-content-between p-3 {{ request()->routeIs('training') ? 'nav-item-active' : '' }} ">

          <div class="d-flex align-items-center  w-100">
            <div class="list-icon">
              <img class="list-img" src="https://www.ourkidsread.org/myimg/dashboard/training_w.png" alt="traning">
            </div>
            <div class="list-text"><a href="{{route('training')}}">Training
              </a></div>
          </div>
        </li>
        <li class=" nav-item d-flex border-secondary justify-content-between p-3 ">

          <div class="d-flex align-items-center  w-100">
            <div class="list-icon">
              <img class="list-img" src="https://www.ourkidsread.org/myimg/dashboard/setting_w.png" alt="setting">
            </div>
            <div class="list-text"><a href="">Surveys And Tools</a></div>
          </div>
        </li>
        <li class=" nav-item d-flex border-secondary justify-content-between p-3 ">

          <div class="d-flex align-items-center  w-100">
            <div class="list-icon">
              <img class="list-img" src="https://www.ourkidsread.org/myimg/dashboard/puzzle_w.png" alt="puzzle">
            </div>
            <div class="list-text"><a href="">Games</a></div>
          </div>
        </li>
        <li class=" nav-item d-flex border-secondary justify-content-between p-3 ">

          <div class="d-flex align-items-center  w-100">
            <div class="list-icon">
              <img class="list-img" src="https://www.ourkidsread.org/myimg/dashboard/fantasy_w.png" alt="fantasy">
            </div>
            <div class="list-text"><a>Animated Stories</a></div>
          </div>
        </li>
        <li class=" nav-item d-flex border-secondary justify-content-between p-3">

          <div class="d-flex align-items-center  w-100">
            <div class="list-icon">
              <img class="list-img" src="https://www.ourkidsread.org/myimg/dashboard/puzzle_w.png" alt="puzzle">
            </div>
            <div class="list-text"><a href="">Free Books</a></div>
          </div>
        </li>
        <li class="mt-5 d-flex justify-content-center align-items-center  nav-item-has-children">
          <div class="row d-flex justify-content-center align-items-center">
            <div class=" d-flex justify-content-center col-md-4">
              <div class="image ">
                <img class="rounded" src="https://www.ourkidsread.org/myimg/dashboard/avatar.webp" alt="" />
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


      <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-between align-items-center">
              <div class="menu-toggle-btn mr-15 d-flex align-items-center">
                <button id="menu-toggle" class="main-btn rounded-circle primary-btn btn-hover">
                  <!--<i class="lni lni-chevron-left me-2"></i>-->
                  <img src="https://www.ourkidsread.org/myimg/dashboard/hambuger.svg" style="object-fit: contain;" width="30" alt="">
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
          @yield('content')
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