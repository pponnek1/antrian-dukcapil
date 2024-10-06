@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="{{ asset('homepage/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

        <div class="container">

          <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-xl-6 col-lg-8">
              <h2>e-Antrian DUKCAPIL<span>.</span></h2>
              <p>Solusi Cepat dan Praktis untuk Layanan Kependudukan</p>
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

          <div class="row">
            <!-- Gambar di sebelah kiri -->
            <div class="col-lg-5 order-1 order-lg-1" data-aos="fade-right" data-aos-delay="100">
              <img src="{{ asset('homepage/img/thoughful.png') }}" class="img-fluid w-100" alt="">
            </div>
            <!-- Konten teks di sebelah kanan -->
            <div class="col-lg-7 pt-4 pt-lg-0 order-2 order-lg-2 content" data-aos="fade-left" data-aos-delay="100">
              <h3>Apa itu e-Antiran DUKCAPIL?</h3>
              <p class="fst-italic">
                e-Antrian DUKCAPIL adalah sistem antrian modern yang dirancang untuk mempermudah masyarakat dalam mengakses layanan kependudukan.
                Dengan adanya sistem ini, Anda tidak perlu lagi menghabiskan waktu berjam-jam menunggu di lokasi pelayanan,
                Dengan antarmuka yang intuitif, pengguna dapat dengan mudah mendaftar antrian secara online dan memantau status antrian.
                Sistem ini juga dilengkapi dengan fitur yang memungkinkan pengelolaan data secara real-time, sehingga Anda bisa mendapatkan layanan tepat waktu sesuai kebutuhan.
              </p>
              <ul>
                <li><i class="ri-number-1"></i> Kunjungi website e-Antrian DUKCAPIL Kabupaten Klaten, Provinsi Jawa Tengah.</li>
                <li><i class="ri-number-2"></i> Login / Register akun </li>
                <li><i class="ri-number-3"></i> Pilih jenis layanan yang tersedia</li>
                <li><i class="ri-number-4"></i> Masukkan data diri anda</li>
                <li><i class="ri-number-5"></i> Simpan dan Cetak nomor urut antrian</li>
              </ul>
              <p>
                Bergabunglah dengan kami untuk merasakan kemudahan dan kenyamanan layanan kependudukan melalui e-Antrian DUKCAPIL.
                Bersama, kita wujudkan pelayanan yang lebih baik untuk semua!
              </p>
            </div>
          </div>

        </div>

      </section>


      </section><!-- /About Section -->
@endsection
