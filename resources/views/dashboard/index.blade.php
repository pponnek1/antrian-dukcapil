@extends('dashboard.layouts.app')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-6">
        {{-- welcome admin --}}
        <div class="col-xl-4">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-7">
                        <div class="card-body text-nowrap">
                            <h5 class="card-title mb-0">Selamat datang Admin! 🎉</h5>
                            <h4 class="text-warning mb-1 bold">e-DUKCAPIL.</h4>
                            <p class="mb-2">Kabupaten Klaten</p>
                            <a href="/" class="btn btn-warning waves-effect waves-light">Homepage</a>
                        </div>
                    </div>
                    <div class="col-5 text-center text-sm-left">
                        <div class="card-body pb-4 px-0 px-md-4">
                            <img src="{{ asset('assets/img/logo/logo-kab-klaten.png') }}" height="140" alt="view sales">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /welcome admin --}}

        {{-- laporan singkat --}}
        <div class="col-xl-8 col-md-12">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">Laporan</h5>
                    <small class="text-muted">Last Update</small>
                </div>
                <div class="card-body d-flex align-items-end">
                    <div class="w-100">
                        <div class="row gy-4">
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-primary me-4 p-2">
                                        <i class="ti ti-clipboard-data ti-lg"></i>
                                    </div>
                                    <div class="card-info">
                                        <small>Jumlah Layanan</small>
                                        <h5 class="text-primary mb-0">{{ $jumlahLayanan }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-info me-4 p-2">
                                        <i class="ti ti-checklist ti-lg"></i>
                                    </div>
                                    <div class="card-info">
                                        <small>Layanan aktif</small>
                                        <h5 class="text-info mb-0">{{ $jumlahAntrianBuka }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-danger me-4 p-2">
                                        <i class="ti ti-users ti-lg"></i>
                                    </div>
                                    <div class="card-info">
                                        <small>Jumlah Orang Antri</small>
                                        <h5 class="text-warning mb-0">{{ $jumlahOrangAntri }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--/ laporan singkat --}}

        {{-- layanan aktif --}}
        <div class="col-xxl-6 col-xl-6 col-lg-12">
            <div class="card h-60">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-1">Layanan Aktif</h5>
                        <p class="card-subtitle">jenis layanan</p>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        @foreach ($antrianList as $key => $antrian )
                        <li class="mb-6">
                            <div class="d-flex align-items-center">
                                <div class="badge bg-label-secondary text-body p-2 me-4 rounded">
                                    <i class="ti ti-shadow ti-md"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">{{ $antrian ->nama_layanan }}</h6>
                                        <small class="text-body">kode : {{ $antrian ->kode }}</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">Status :</p>
                                        <div class="ms-4 badge bg-label-success">Aktif</div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        {{--/ layanan aktif --}}

        {{-- web switcher --}}
        <div class="col-lg-6 mb-6 mb-lg-0 order-3 order-xl-0">
            <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg swiper-initialized swiper-horizontal swiper-backface-hidden h-60"
                id="swiper-with-pagination-cards">
                <div class="swiper-wrapper" id="swiper-wrapper-be43dde98e991f3a" aria-live="on">
                    <!-- Slide 1: Visi -->
                    <div class="swiper-slide" role="group" aria-label="1 / 2">
                        <div class="row h-100">
                            <div class="col-12 text-center mb-3">
                                <h5 class="text-white mb-2 fw-bold text-uppercase letter-spacing-1">Visi dan Misi</h5>
                                <small class="text-white-50 fw-medium">Dinas Dukcapil Kabupaten Klaten</small>
                                <hr class="opacity-25 mx-auto w-75">
                            </div>
                            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-1">
                                <div class="vision-content text-center px-4">
                                    <h4 class="text-white mt-0 mb-4 fw-bold text-uppercase">Visi</h4>
                                    <div class="vision-text bg-opacity-10 rounded-3 p-4">
                                        <p class="text-white fw-bold mb-2 text-uppercase">Terwujudnya Tertib
                                            Administrasi</p>
                                        <p class="text-white fw-bold mb-2 text-uppercase">Kependudukan Melalui</p>
                                        <p class="text-white fw-bold mb-0 text-uppercase">Inovasi Teknologi Informasi
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                <img src="{{ asset('assets/img/logo/logo-kab-klaten.png') }}"
                                    alt="Logo Kabupaten Klaten" height="150" class="card-website-analytics-img">
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Misi -->
                    <div class="swiper-slide" role="group" aria-label="2 / 2">
                        <div class="row h-100">
                            <div class="col-12 text-center">
                                <h5 class="text-white mb-1 fw-bold text-uppercase letter-spacing-1">Visi dan Misi</h5>
                                <small class="text-white-50 fw-medium">Dinas Dukcapil Kabupaten Klaten</small>
                                <hr class="opacity-25 mx-auto w-75 my-2">
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <!-- Kolom teks misi -->
                                    <div class="col-lg-7 col-md-9 col-12">
                                        <div class="mission-content px-1">
                                            <h4
                                                class="text-white text-center mb-2 fw-bold text-uppercase letter-spacing-2">
                                                Misi</h4>
                                            <div class="mission-items bg-opacity-10 rounded-3 p-3">
                                                <div class="mission-item d-flex align-items-start mb-2">
                                                    <span
                                                        class="mission-number bg-white text-primary fw-bold rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 20px; height: 20px; min-width: 20px; font-size: 12px;">1</span>
                                                    <p class="text-white mb-0 ms-2 fw-medium"
                                                        style="font-size: 13px; line-height: 1.4;">Meningkatkan
                                                        kemampuan aparatur dalam bidang administrasi <br>
                                                        kependudukan</p>
                                                </div>
                                                <div class="mission-item d-flex align-items-start mb-2">
                                                    <span
                                                        class="mission-number bg-white text-primary fw-bold rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 20px; height: 20px; min-width: 20px; font-size: 12px;">2</span>
                                                    <p class="text-white mb-0 ms-2 fw-medium"
                                                        style="font-size: 13px; line-height: 1.4;">Memberikan pelayanan
                                                        kepada masyarakat secara benar, <br> mudah dan tepat</p>
                                                </div>
                                                <div class="mission-item d-flex align-items-start mb-2">
                                                    <span
                                                        class="mission-number bg-white text-primary fw-bold rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 20px; height: 20px; min-width: 20px; font-size: 12px;">3</span>
                                                    <p class="text-white mb-0 ms-2 fw-medium"
                                                        style="font-size: 13px; line-height: 1.4;">
                                                        Menyelenggarakan administrasi kependudukan dalam kerangka<br>
                                                        sistem informasi administrasi kependudukan secara terpadu
                                                    </p>
                                                </div>
                                                <div class="mission-item d-flex align-items-start mb-2">
                                                    <span
                                                        class="mission-number bg-white text-primary fw-bold rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 20px; height: 20px; min-width: 20px; font-size: 12px;">4</span>
                                                    <p class="text-white mb-0 ms-2 fw-medium"
                                                        style="font-size: 13px; line-height: 1.4;">Terintegrasi database
                                                        kependudukan</p>
                                                </div>
                                                <div class="mission-item d-flex align-items-start">
                                                    <span
                                                        class="mission-number bg-white text-primary fw-bold rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 20px; height: 20px; min-width: 20px; font-size: 12px;">5</span>
                                                    <p class="text-white mb-0 ms-2 fw-medium"
                                                        style="font-size: 13px; line-height: 1.4;">Membangun pemahaman
                                                        masyarakat terhadap arti pentingnya <br>administrasi kependudukan
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Kolom logo -->
                                    <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center mt-10">
                                        <img src="{{ asset('assets/img/logo/logo-kab-klaten.png') }}"
                                            alt="Logo Kabupaten Klaten" height="150" class="card-website-analytics-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
        {{--/web switcher --}}
    </div>
</div>



@endsection
