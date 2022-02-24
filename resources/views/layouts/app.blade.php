<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://kit.fontawesome.com/3148494ed0.js" crossorigin="FluffyToWit"></script>
    @yield('js')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    @livewireStyles
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- //preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('img/logoWK.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-maroon navbar-dark ">
            <!-- Left Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <span href="#" class="nav-link">Manager</span>
                </li>
            </ul>

            <!-- Right Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-toggle-off fa-lg"></i></a>
                </li>
            </ul>

        </nav>

        <!-- Page Content Here -->
        @yield('content')
        {{isset($slot) ? $slot : null}}
        <!-- End Page Content -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-maroon elevation-4 ">
            <!-- Brand Name/Logo -->
            <a href="{{url('/home')}}" class="brand-link text-center">
                <span class="brand-text font-weight-maroon">InSitu Hotel</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar ">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{URL::asset('/users/images/no-image.png')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->username }}</a>
                    </div>
                </div>


                <!-- Sidebar User Panel -->
                <!-- <div class="mx-auto d-block">
                    <div class="user-panel ">
                        <img src="{{URL::asset('/users/images/no-image.png')}}" class="img img-circle elevation-2" alt="User Image">
                        <a class="d-block mt-2"> {{ Auth::user()->username }} </a>
                        <a class="d-block mb-2">{{ date('l') }}, {{ date('d') }}-{{ date('m') }}-{{ date('y') }} </a>
                    </div>
                </div> -->

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item menu-open">
                            <a href="{{url('/home')}}" class="nav-link {{ (request()->is('home*')) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-header">Hotel Administration</li>
                        <!-- Room Reservation -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bed"></i>
                                <p>Room Reservation<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/check-in')}}" class="nav-link {{ (request()->is('check-in*')) ? 'active' : '' }}">
                                        <i class="fa fa-map-location-dot nav-icon"></i>
                                        <p>Check-In</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/check-out')}}" class="nav-link {{ (request()->is('check-out*')) ? 'active' : '' }}">
                                        <i class="fa fa-cart-arrow-down nav-icon"></i>
                                        <p>Check-Out</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="nav-header">Management Hotel</li>

                        <!-- Service Management -->
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ (request()->is('jenis-layanan*')) || (request()->is('layanan*')) ? 'active'  : ''}}">
                                <i class="fa-solid fa-bell-concierge nav-icon"></i>
                                <p>Service Management<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/jenis-layanan')}}" class="nav-link {{ (request()->is('jenis-layanan*')) ? 'active' : '' }}">
                                        <i class="fa fa-map-location-dot nav-icon"></i>
                                        <p>Jenis Layanan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/layanan')}}" class="nav-link {{ (request()->is('layanan*')) ? 'active' : '' }}">
                                        <i class="fa fa-cart-arrow-down nav-icon"></i>
                                        <p>Layanan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Room Management -->
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ (request()->is('type-kamar*')) || (request()->is('kamar*')) ? 'active'  : ''}}">
                                <i class="nav-icon fas fa-door-closed"></i>
                                <p>Management Kamar<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/type-kamar')}}" class="nav-link {{ (request()->is('type-kamar*')) ? 'active' : '' }}">
                                        <i class="fa fa-map-location-dot nav-icon"></i>
                                        <p>Type Kamar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/kamar')}}" class="nav-link {{ (request()->is('kamar*')) ? 'active' : '' }}">
                                        <i class="fa fa-cart-arrow-down nav-icon"></i>
                                        <p>Daftar Kamar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Guest Management -->
                        <li class="nav-item">
                            <a href=" {{ url('/tamu') }} " class="nav-link {{ (request()->is('tamu*')) ? 'active' : '' }}">
                                <i class="fa fa-user-plus nav-icon"></i>
                                <p>Management Tamu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                <i class="fa fa-right-from-bracket nav-icon"></i>
                                <p>Logout</p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>
    </div>
    @livewireScripts
</body>



</html>
