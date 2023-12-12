<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LionProDev Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{asset('adminpanel/template/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminpanel/template/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('adminpanel/template/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('adminpanel/template/images/favicon.png')}}" />
</head>
<body>
<div class="container-scroller d-flex">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium me-3 buy-now-text"></p>

                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="{{route('home')}}"><i class="mdi mdi-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="mdi mdi-close text-white mr-0"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item sidebar-category">
                <p>Lion Pro Admin Panel</p>
                <span></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="mdi mdi-view-quilt menu-icon"></i>
                    <span class="menu-title">Dashboard</span>

                </a>
            </li>
            <li class="nav-item sidebar-category">
                <p>Features</p>
                <span></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="mdi mdi-palette menu-icon"></i>
                    <span class="menu-title">Manage Blogs</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Case Study</a></li>
                        <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Developer Guides</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basics" aria-expanded="false" aria-controls="ui-basic">
                    <i class="mdi mdi-palette menu-icon"></i>
                    <span class="menu-title">Manage Projects</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basics">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('projects.index', ['type' => 'Design']) }}">Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('projects.index', ['type' => 'Development']) }}">Development</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="pages/forms/basic_elements.html">
                    <i class="mdi mdi-view-headline menu-icon"></i>
                    <span class="menu-title">Manage Testimonials</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/charts/chartjs.html">
                    <i class="mdi mdi-chart-pie menu-icon"></i>
                    <span class="menu-title">Manage About Us</span>
                </a>
            </li>

        </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:./partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="navbar-brand-wrapper">
                    <a class="navbar-brand brand-logo" ><img src="{{ asset('adminpanel/template/images/logo.PNG')}}"/></a>
                    {{--                    <a class="navbar-brand brand-logo-mini" ><img src="{{ asset('adminpanel/template/images/logo-mini.svg')}}" alt="logo"/></a>--}}
                </div>
                                <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome back,  {{ Auth::user()->name }}</h4>
                <ul class="navbar-nav navbar-nav-right">

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
            <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-settings text-primary"></i>
                                Settings
                            </a>
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


                </ul>
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

<!-- base:js -->

<!-- End custom js for this page-->
</body>
<script src="{{asset('adminpanel/template/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{asset('adminpanel/template/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('adminpanel/template/js/jquery.cookie.js')}}" type="text/javascript"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('adminpanel/template/js/off-canvas.js')}}"></script>
<script src="{{asset('adminpanel/template/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('adminpanel/template/js/template.js')}}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{asset('adminpanel/template/js/jquery.cookie.js')}}" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('adminpanel/template/js/dashboard.js')}}"></script>
</html>