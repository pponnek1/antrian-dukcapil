@extends('dashboard.layouts.app')

@section('content')

@include('dashboard.antrian.create')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h3 class="m-0 font-weight-bold">Antrian Dukcapil</h3>
            {{-- Button trigger modal --}}
            <button type="button" class="btn btn-warning waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalCenter">
                Tambah Antrian
            </button>
        </div>

        {{-- Data Table --}}
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered" id="dataTable">
                <caption class="ms-6">Daftar Antrian Aktif</caption>
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Antrian</th>
                        <th>Deskripsi</th>
                        <th>Batas Antrian</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($antrians as $antrian)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $antrian->nama_layanan }}</td>
                        <td>{{ $antrian->deskripsi }}</td>
                        <td>{{ $antrian->batas_antrian }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                {{-- Button Edit --}}
                                <a href="/dashboard/antrian/{{ $antrian->slug }}/edit" class="btn btn-label-primary waves-effect">
                                    <span class="ti-xs ti ti-pencil me-2"></span>Edit
                                </a>

                                {{-- Button Hapus --}}
                                <form id="{{ $antrian->id }}" action="/dashboard/antrian/{{ $antrian->id }}"
                                    method="POST" class="m-0 p-0">
                                    @method('DELETE')
                                    @csrf
                                    <button type="button" class="btn btn-label-danger waves-effect delete-button"
                                        data-form="{{ $antrian->id }}">
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

<!-- Include Datatable -->
<script>
    $(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>

<!-- Autofill dan Autocomplete dari Database/Tabel Layanan -->
<script>
    $(function(){
      $('#nama_layanan').autocomplete({
        source:function(request,response){
          $.getJSON('{{ url('api/dashboard/antrian') }}?term='+request.term, function(data){
            var array = $.map(data, function(row){
              return{
                value:row.nama_layanan,
                label:row.nama_layanan,
                name:row.nama_layanan,
                deskripsi:row.deskripsi,
                kode:row.kode,
              }
            })
            response($.ui.autocomplete.filter(array,request.term));
          })
        },
        minLength:1,
        delay:500,
        select:function(event,ui){
          $('#deskripsi').val(ui.item.deskripsi)
          $('#kode').val(ui.item.kode)
        }
      })
    })
  </script>
@endsection
