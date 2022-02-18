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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
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
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-toggle-off fa-lg"></i></a>
      </li>
    </ul>
    
  </nav>

 <!-- Page Content Here -->
  @yield('content')
 <!-- End Page Content -->
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Name/Logo -->
    <a href="{{url('/home')}}" class="brand-link text-center">
      <span class="brand-text font-weight-light">InSitu Hotel</span>
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar User Panel -->
      <div class="mx-auto d-block">
        <div class="user-panel">
          <img src="{{URL::asset('/users/images/no-image.png')}}" class="img img-circle elevation-2" alt="User Image">
          <a class="d-block mt-2">Andy Makk</a>
          <a class="d-block mb-2">Wednesday, February 17 2022</a>
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
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-door-closed"></i>
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
        </ul>
      </nav>
  
    </div>
    
  </aside>
  
 <!-- Footer -->
 <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="#">InSitu Hotel</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
</html>
