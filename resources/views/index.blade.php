@extends('homepage.layouts.main')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="{{ asset('homepage/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

        <div class="container">

          <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-xl-6 col-lg-8">
              <h2>Powerful Digital Solutions With GP<span>.</span></h2>
              <p>We are team of talented digital marketers</p>
            </div>
          </div>

          <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <i class="bi bi-binoculars"></i>
                <h3><a href="">Lorem Ipsum</a></h3>
              </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <i class="bi bi-bullseye"></i>
                <h3><a href="">Dolor Sitema</a></h3>
              </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <i class="bi bi-fullscreen-exit"></i>
                <h3><a href="">Sedare Perspiciatis</a></h3>
              </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
              <div class="icon-box">
                <i class="bi bi-card-list"></i>
                <h3><a href="">Magni Dolores</a></h3>
              </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
              <div class="icon-box">
                <i class="bi bi-gem"></i>
                <h3><a href="">Nemos Enimade</a></h3>
              </div>
            </div>
          </div>

        </div>

      </section><!-- /Hero Section -->

      <!-- About Section -->
      <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4">
            <div class="col-lg-6 order-1 order-lg-2">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 order-2 order-lg-1 content">
              <h3>Voluptatem dignissimos provident</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>
            </div>
          </div>

        </div>

      </section><!-- /About Section -->

@endsection
