<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>InSitu Hotel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

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

  <!-- Template Main JS File -->
  <script src="{{ asset('/js/welcome.js')}}"></script>
</head>
<body>
  <!-- Header -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <h1><a href="#">InSitu Hotel</a></h1>
      </div>

      <!-- Navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          @if (Route::has('login'))
            @auth
              <li><a class="nav-link scrollto" href="{{ url('/home') }}">Home</a></li>
              <li><a class="nav-link scrollto" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            @else
              <li><a class="nav-link scrollto" href="{{ route('login') }}">Log in</a></li>
            @endauth
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <!-- Content -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      @if (Route::has('login'))
            @auth
              <h1>Selamat Datang kembali {{ Auth::user()->name }}</h1>
              <h2>Klik tombol dibawah ini untuk kembali ke dashboard</h2>
              <a href="{{ url('/home') }}" class="btn-get-started">Dashboard</a>
            @else
              <h1>Selamat Datang di InSitu Hotel</h1>
              <h2>Segera bergabung untuk membantu mengatur administrasi hotel kami</h2>
              <a href="{{ route('login') }}" class="btn-get-started">Bergabung</a>
            @endauth
          @endif
    </div>
  </section>

  <!-- Main Content -->
  <main id="main">

  </main>

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
