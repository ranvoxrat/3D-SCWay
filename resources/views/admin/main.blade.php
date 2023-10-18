<!doctype html>
<html class="no-js" lang="en">
@include('admin.layouts.head')
<body>
<div class="container-scroller  text-white">
    <nav class="navbar default-layout-navbar col-lg-12 p-0 fixed-top d-flex flex-row navbar-success bg-danger ">
      <div class="text-center bg-red navbar-brand-wrapper d-flex align-items-center justify-content-center ">
        <a class="logoText navbar-brand brand-logo align-items-center pt-3 pb-3" href="index.html">
          <!-- <span>
            <h1 class="text-white">3D SC-Way</h1>
            <p>In <span>Bul</span>Su</p>
          </span> -->
          <img src="{{asset('img/FinalLogoBulsu.png')}}" alt="">
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <!-- logo -->
          <img src="{{asset('img/miniLogo.png')}}" alt="">
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex justify-content-center align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <!-- <span class="Bulsu">
          <p class="t-1">Bulacan State University</p>
          <p class="t-2">Sarmiento Campus</p>
        </span> -->
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
              aria-expanded="false">
              <div class="nav-profile-img">
             
                <img src="{{asset('img/faces/'.Auth::user()->profile) }}" alt="image">
              
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">  {{Auth::user()->fname}} {{Auth::user()->lname}}</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-cached me-2 text-success"></i>Setting</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper pl-0 pr-0">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
       @include('admin.layouts.sidebar')
      </nav>
     <div class="main-panel">
       @yield('content')
     </div>
     
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
    @include('admin.layouts.scripts')
    @stack('script')
    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
</body>
</html>