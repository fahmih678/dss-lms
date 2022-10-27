<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">DSS-LMS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar" >
        <ul>
          <li><a class="nav-link scrollto @yield('home-active')" href="{{route('frontpages.index')}}">Home</a></li>
          <li><a class="nav-link scrollto @yield('teori-active')" href="{{route('frontpages.teori')}}">Teori TOPSIS</a></li>
          <li><a class="nav-link scrollto @yield('penerapan-active')" href="{{route('frontpages.penerapan')}}">Penerapan TOPSIS</a></li>
          <li><a class="nav-link scrollto @yield('langkah-active')" href="{{route('frontpages.langkah')}}">Langkah Perhitungan TOPSIS</a></li>
          <li><a class="nav-link scrollto @yield('studi-kasus-active')" href="{{route('frontpages.studi-kasus')}}">Studi Kasus TOPSIS</a></li>
          <li><a class="nav-link scrollto @yield('lainnya-active')" href="{{route('frontpages.lainnya')}}">Algoritma Lainnya</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->