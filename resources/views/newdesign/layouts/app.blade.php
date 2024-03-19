<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg')}}" type="image/x-icon" />
  <title>Blank Page</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/lineicons.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/materialdesignicons.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/fullcalendar.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
  <!--my style-->
  <link rel="stylesheet" href="{{asset('assets/css/index.css')}}" />
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
        <b class="mx-3">{{ $user->user_name_first . ' ' . $user->user_name_last }}</b>
        <!--<b class="mx-3">Menu</b>-->

      </div>
    </div>
    <nav class="sidebar-nav">
      <ul>

        <li class="nav-item d-flex border-secondary justify-content-between p-3">
          <div class="d-flex align-items-center w-100">
            <div class="list-icon">
              <img class="list-img" src="https://www.ourkidsreadinc.org/myimg/dashboard/home_w.png" alt="home">
            </div>
            <div class="list-text"><a href="">Home</a></div>
          </div>
        </li>
        <li class=" nav-item d-flex border-secondary justify-content-between p-3 ">

          <div class="d-flex align-items-center  w-100">
            <div class="list-icon">
              <img class="list-img" src="https://www.ourkidsreadinc.org/myimg/dashboard/training_w.png" alt="traning">
            </div>
            <div class="list-text"><a href="">Training</a></div>
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
                <img class="rounded-circle" src="https://s3-alpha-sig.figma.com/img/66b2/132a/13e8d368acee97c5f223fc6662b5b1f2?Expires=1711324800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=OO7vJXxG18mkBKD60No-2IiJ0Qs3QsM6SN~ni6SBfrL1f1pwm7XP-g545jai3jerANf7YmrWyPju3BsdiklbDvTdv7AirvM-uH01fwCe-FfIO4vEmTpIhBDxEEYiMJG3hMTR-Zj2IlsfXxJZm4~ceaVbGrnjklG5sCjdt7ybBihki4y7J3ZqU1qA64ojTTiOuIjIqe5~bOrnKGj7FPcCDcQO21Z5ry6UwDtt6j3VuSFyUV-USUenK1gvBWZQzx9gJhavzGMP56cqUVUlDiuvuXS4VQypPJKRrmycIQGAb7if0Ho6h1~me~QmpCpOrQpbEuDoYBBwWH9p18giBx9qjQ__" alt="" />
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
    @yield('content')
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