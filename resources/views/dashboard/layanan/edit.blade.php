@extends('dashboard.layouts.app')

@section('content')

<div class="container-xl flex-grow-1 container-p-y">
    <div class="col-xxl-8">
        <div class="card h-100">
            <div class="card-body p-0">
                <div class="row row-bordered g-0">
                    <div class="card-header text-wrap py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="m-0 card-title">Edit Data Layanan</h5>
                        <a class="btn btn-secondary float-end" href="/dashboard/layanan" role="button">kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/layanan/{{ $layanan->id }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label for="nama_layanan" class="form-label">Nama Layanan</label>
                                <input type="text" class="form-control @error('nama_layanan') is-invalid @enderror"
                                    id="nama_layanan" name="nama_layanan"
                                    value="{{ old('nama_layanan', $layanan->nama_layanan) }}">
                                @error('nama_layanan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="kode" class="form-label">Kode</label>
                                <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode"
                                    name="kode" value="{{ old('kode', $layanan->kode) }}">
                                @error('kode')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control  @error('deskripsi') is-invalid @enderror" id="deskripsi"
                                    name="deskripsi" rows="3">{{ old('deskripsi', $layanan->deskripsi) }}</textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-warning float-end">Simpan</button>

                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>
    @endsection
