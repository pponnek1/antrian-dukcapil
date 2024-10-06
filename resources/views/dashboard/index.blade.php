@extends('dashboard.layouts.app')

@section('content')

<<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card-body py-3 d-flex flex-row align-items-center justify-content-between">
        <h1 class="m-0 font-weight-bold text-primary">Dashboard</h1>
    </div>

    <div class="card bg-transparent shadow-none my-6 border-0">
        <div class="card-body row p-0 pb-6 g-6">
            <div class="col-12 col-lg-8 card-separator">
                <h5 class="mb-2">Selamat Datang Kembali,<span class="h4"> {{ auth()->user()->role }} 👋🏻</span></h5>
                <div class="col-12 col-lg-5">
                    <p>beberapa pekerjaan sudah menunggu !</p>
                </div>
                <div class="d-flex justify-content-between flex-wrap gap-4 me-12">
                    <div class="d-flex align-items-center gap-4 me-6 me-sm-0">
                        <div class="avatar avatar-lg">
                            <div class="avatar-initial bg-label-primary rounded">
                                <div>
                                    <img src="../../assets/svg/icons/laptop.svg" alt="paypal" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="content-right">
                            <p class="mb-0 fw-medium">Jumlah layanan</p>
                            <h4 class="text-primary mb-0">{{ $jumlahLayanan }}</h4>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-4">
                        <div class="avatar avatar-lg">
                            <div class="avatar-initial bg-label-info rounded">
                                <div>
                                    <img src="../../assets/svg/icons/lightbulb.svg" alt="Lightbulb" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="content-right">
                            <p class="mb-0 fw-medium">Jumlah Antrian dibuka</p>
                            <h4 class="text-info mb-0">{{ $jumlahAntrianBuka }}</h4>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-4">
                        <div class="avatar avatar-lg">
                            <div class="avatar-initial bg-label-warning rounded">
                                <div>
                                    <img src="../../assets/svg/icons/check.svg" alt="Check" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="content-right">
                            <p class="mb-0 fw-medium">Jumlah Orang Antri</p>
                            <h4 class="text-warning mb-0">{{ $jumlahOrangAntri }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style=""
                                        src="{{ asset('assets/img/illustrations/card-advance-sale.png') }}"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h5>Ayo beraksi, waktunya cetak prestasi!</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 ps-md-4 ps-lg-6">
            <div class="d-flex justify-content-between align-items-center" style="position: relative;">


                <div class="resize-triggers">
                    <div class="expand-trigger">
                        <div style="width: 189px; height: 246px;"></div>
                    </div>
                    <div class="contract-trigger"></div>
                </div>
            </div>
        </div>
    </div>




    {{-- daftar-layanan --}}
    <div class="card-body">
        <div class="row">
            @foreach ($antrianList as $key => $antrian)
            <div class="col-lg-3 mb-4">
                <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                        <!-- Menambahkan ikon di sini -->
                        <i class="fas fa-cog"></i>
                        <a href="/dashboard/antrian-masuk/{{ $antrian->slug }}"
                            style="color: white; text-decoration: none">
                            {{ $antrian->nama_layanan }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>



    @endsection
