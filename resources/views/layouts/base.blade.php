<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fine Tracker @yield('title') |</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url ('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url ('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{url ('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{url ('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url ('assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url ('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{url ('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{url ('assets/images/favicon.png')}}" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="/">Fine Tracker</a>
            <a class="sidebar-brand brand-logo-mini" href="/">F</a>
        </div>
        <ul class="nav">

            <li class="nav-item nav-category">
                <span class="nav-link">Menu</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/categories" >
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
                    <span class="menu-title">Catégories</span>

                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/revenues">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Revenues</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/expenses">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                    <span class="menu-title">Dépenses</span>
                </a>
            </li>

        </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav w-100">
                    <li class="nav-item w-100">

                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown d-none d-lg-block">

                    </li>
                    <li class="nav-item nav-settings d-none d-lg-block">

                    </li>
                    <li class="nav-item dropdown border-left">

                    </li>
                    <li class="nav-item dropdown border-left">

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                            <div class="navbar-profile">

                                <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ auth()->user()->name }}</p>

                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">


                            <div class="dropdown-divider"></div>
                            <!-- Formulaire de déconnexion -->
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>


                        </div>
                    </li>


            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            @yield('content')

        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{url ('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{url ('assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{url ('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{url ('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{url ('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{url ('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{url ('assets/js/off-canvas.js') }}"></script>
<script src="{{url ('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{url ('assets/js/misc.js') }}"></script>
<script src="{{url ('assets/js/settings.js') }}"></script>
<script src="{{url ('assets/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{url ('assets/js/dashboard.js') }}"></script>
<!-- End custom js for this page -->
</body>
</html>
