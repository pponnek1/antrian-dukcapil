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
                            <a href="/" class="btn btn-primary waves-effect waves-light">Homepage</a>
                        </div>
                    </div>
                    <div class="col-5 text-center text-sm-left">
                        <div class="card-body pb-4 px-0 px-md-4">
                            <img src="{{ asset('assets/img/logo/logo-kab-klaten.png') }}" height="140"
                                alt="view sales">
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
                                        <small>Antrian Buka</small>
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

        <div class="col-xl">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Antian Masuk</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        @foreach ($antrianList as $key => $antrian)
                        <div class="col-lg-3 mb-4">
                            <div class="card bg-primary text-white shadow">
                                <div class="card-body">
                                    <a href="/dashboard/antrian-masuk/{{ $antrian->slug }}"
                                        style="color: white; text-decoration: none">{{ $antrian->nama_layanan }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
