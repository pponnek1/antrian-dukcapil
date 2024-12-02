@extends('dashboard.layouts.app')

@section('content')

@include('dashboard.layanan.create')

<div class="container-xxl flex-grow-1 container-p-y">
    {{-- table --}}
    <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h3 class="m-0 font-weight-bold">Layanan Dukcapil</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning waves-effect waves-light" data-bs-toggle="modal"
                data-bs-target="#modalCenter">
                Tambah Layanan
            </button>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <caption class="ms-6">
                    Daftar Layanan
                </caption>
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Layanan</th>
                        <th>kode</th>
                        <th>Deskripsi</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($layanans as $layanan)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $layanan->nama_layanan }}</td>
                        <td>{{ $layanan->kode }}</td>
                        <td>{{ $layanan->deskripsi }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">

                                {{-- button edit --}}
                                <a href="/dashboard/layanan/{{ $layanan->id }}/edit" type="button"
                                    class="btn btn-label-primary waves-effect">
                                    <span class="ti-xs ti ti-pencil me-2"></span>Edit
                                </a>

                                {{-- button hapus --}}
                                <form id="{{ $layanan->id }}" action="/dashboard/layanan/{{ $layanan->id }}"
                                    method="POST" class="m-0 p-0">
                                    @method('DELETE')
                                    @csrf
                                    <button type="button" class="btn btn-label-danger waves-effect delete-button"
                                        data-form="{{ $layanan->id }}">
                                        <span class="ti ti-trash me-1"></span>Hapus
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>

@endsection
