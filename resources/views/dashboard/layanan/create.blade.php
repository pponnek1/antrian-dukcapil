<div class="mt-4">
    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Tambah Layanan Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/dashboard/layanan/" method="POST">
                    <div class="modal-body">
                        @csrf

                        <div class="col mb-4">
                            <label for="nama_layanan" class="form-label">Nama Layanan</label>
                            <input type="text" id="nama_layanan"
                                class="form-control @error('nama_layanan') is-invalid @enderror" name="nama_layanan"
                                placeholder="Masukan nama Layanan">
                            @error('nama_layanan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col mb-4">
                            <label for="kode" class="form-label">kode</label>
                            <input type="text" id="kode" class="form-control @error('kode') is-invalid @enderror"
                                name="kode" placeholder="Masukan kode">
                            @error('kode')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col mb-4">
                            <label for="deskripsi" class="form-label">deskripsi</label>
                            <textarea id="deskrpsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                name="deskripsi" placeholder="deskripsi" rows="3"></textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-label-secondary waves-effect" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="sumbit" class="btn btn-primary waves-effect waves-light">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
    $('#tambah-layanan form').submit(function(event){
        event.preventDefault();
        var form = $(this);
        var nama_layanan = form.find('#nama_layanan').val();
        var deskripsi = form.find('#deskripsi').val();
        var error = false;

        if(!nama_layanan){
        form.find('#nama_layanan').addClass('is-invalid');
        error = true;
        } else {
        form.find('#nama_layanan').removeClass('is-invalid');
        }

        if(!deskripsi){
        form.find('#deskripsi').addClass('is-invalid');
        error = true;
        } else {
        form.find('#deskripsi').removeClass('is-invalid');
        }

        if(!error){
        form.unbind('submit').submit();
        }

    })
    })
</script>
