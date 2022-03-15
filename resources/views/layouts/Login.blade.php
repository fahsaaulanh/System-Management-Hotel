<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <link href="{{url('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.welcome.css')}}" rel="stylesheet">

    <!-- Vendor JS Files -->
    <script src="{{ asset('/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Template Main CSS File -->
    <link href="{{ asset('/css/welcome.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/auth.css')}}" rel="stylesheet">

    <!-- Template Main JS File -->
    <script src="{{ asset('/js/welcome.js')}}"></script>
</head>

<body>
    <body>
        <!-- Header -->
        <header id="header" class="fixed-top d-flex align-items-center header-transparent">
            <div class="container d-flex justify-content-between align-items-center">
    
                <div id="logo">
                    <h1><a href="{{ url('/') }}"><i class="fas fa-hotel"></i>InSitu Hotel</a></h1>
                </div>
    
            </div>
        </header>
     
        <!-- Content -->
        <section id="hero">
            @yield('content')
        </section>
    
        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    Copyright &copy; 2022 <strong>InSitu Hotel</strong>. All Rights Reserved.
                </div>
            </div>
        </footer>
    
    </body>
    
    </html>
</body>

</html>
