<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo me-auto"><a href="{{ route('home') }}">Sadhana</a></h1> --}}
      <h1 class="logo me-auto"><a href="{{ route('home') }}"><img src="{{ asset('assets\img\sadana\logo-full.png') }}" alt="Sadhana Logo"></a></h1>

      {{--  <a href="index.html" class="logo me-auto"><img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid"></a>  --}}

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  href="{{ route('home') }}">Home</a></li> {{-- home page --}}
          <li><a href="{{ route('about') }}">About</a></li> {{-- about us page --}}
          <li><a href="{{ route ('courses') }}">Courses</a></li> {{-- courses page --}}
          <li><a href="{{ route('teachers') }}">teachers </a></li> {{-- teachers page --}}
          <li><a href="{{ route('contact') }}">Contact</a></li>{{-- contact page --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('website_register') }}" class="get-started-btn">Register</a> {{-- register form --}}

    </div>
  </header><!-- End Header -->




