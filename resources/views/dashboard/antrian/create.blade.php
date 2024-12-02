<div class="mt-4">
    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Tambah Antrian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="tambah-menu-antrian" action="/dashboard/antrian/" method="POST">
                    <div class="modal-body">
                        @csrf

                        <div class="col mb-4">
                            <label for="layanans_id" class="form-label">Layanan</label>
                            <select name="layanans_id" id="layanans_id" class="form-control">
                                <option value="">Pilih Layanan</option>
                                @foreach($layanans as $layanan)
                                    <option value="{{ $layanan->id }}">{{ $layanan->nama_layanan }}</option>
                                @endforeach
                            </select>
                            @error('layanans_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col mb-4">
                            <label for="nama_layanan" class="form-label">Nama Antrian</label>
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
                            <label for="kode" class="form-label">Kode</label>
                            <input type="text" id="kode" class="form-control @error('kode') is-invalid @enderror"
                                name="kode" placeholder="Masukan kode">
                            @error('kode')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col mb-4">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" id="slug" class="form-control @error('slug') is-invalid @enderror"
                                name="slug" placeholder="Masukan slug" readonly>
                            @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col mb-4">
                            <label for="batas_antrian" class="form-label">Batas Antrian</label>
                            <input type="number" id="batas_antrian" class="form-control @error('batas_antrian') is-invalid @enderror"
                                name="batas_antrian" placeholder="Masukan batas antrian">
                            @error('batas_antrian')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col mb-4">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                name="deskripsi" placeholder="Masukan deskripsi" rows="3"></textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col mb-4">
                            <label for="persyaratan" class="form-label">Persyaratan</label>
                            <textarea id="persyaratan" class="form-control @error('persyaratan') is-invalid @enderror"
                                name="persyaratan" placeholder="Masukan persyaratan" rows="3"></textarea>
                            @error('persyaratan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-label-secondary waves-effect" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Add Antrian</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const nama_layanan = document.querySelector('#nama_layanan');
    const slug  = document.querySelector('#slug');

    // Generate the slug after the user has finished typing (with a slight delay)
    nama_layanan.addEventListener('input', function() {
        clearTimeout(window.slugTimeout); // Clear previous timeout
        window.slugTimeout = setTimeout(function() {
            fetch('/dashboard/antrian/checkSlug?nama_layanan=' + encodeURIComponent(nama_layanan.value))
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        }, 500); // 500ms delay after user stops typing
    });
</script>

<!-- Form Validation -->
<script>
    $(document).ready(function() {
        $('#tambah-menu-antrian').submit(function(event) {
            event.preventDefault();
            var form = $(this);
            var nama_layanan  = form.find('#nama_layanan').val();
            var kode          = form.find('#kode').val();
            var deskripsi     = form.find('#deskripsi').val();
            var slug          = form.find('#slug').val();
            var batas_antrian = form.find('#batas_antrian').val();
            var persyaratan   = form.find('#persyaratan').val();
            var layanans_id   = form.find('#layanans_id').val(); // Add layanans_id validation
            var error         = false;

            // Validation logic for each input
            if (!nama_layanan) {
                form.find('#nama_layanan').addClass('is-invalid');
                form.find('#nama_layanan').next('.invalid-feedback').text('Nama Layanan is required.');
                error = true;
            } else {
                form.find('#nama_layanan').removeClass('is-invalid');
            }

            if (!kode) {
                form.find('#kode').addClass('is-invalid');
                form.find('#kode').next('.invalid-feedback').text('Kode is required.');
                error = true;
            } else {
                form.find('#kode').removeClass('is-invalid');
            }

            if (!deskripsi) {
                form.find('#deskripsi').addClass('is-invalid');
                form.find('#deskripsi').next('.invalid-feedback').text('Deskripsi is required.');
                error = true;
            } else {
                form.find('#deskripsi').removeClass('is-invalid');
            }

            if (!slug) {
                form.find('#slug').addClass('is-invalid');
                form.find('#slug').next('.invalid-feedback').text('Slug is required.');
                error = true;
            } else {
                form.find('#slug').removeClass('is-invalid');
            }

            if (!batas_antrian) {
                form.find('#batas_antrian').addClass('is-invalid');
                form.find('#batas_antrian').next('.invalid-feedback').text('Batas Antrian is required.');
                error = true;
            } else {
                form.find('#batas_antrian').removeClass('is-invalid');
            }

            if (!persyaratan) {
                form.find('#persyaratan').addClass('is-invalid');
                form.find('#persyaratan').next('.invalid-feedback').text('Persyaratan is required.');
                error = true;
            } else {
                form.find('#persyaratan').removeClass('is-invalid');
            }

            if (!layanans_id) {
                form.find('#layanans_id').addClass('is-invalid');
                form.find('#layanans_id').next('.invalid-feedback').text('Layanan is required.');
                error = true;
            } else {
                form.find('#layanans_id').removeClass('is-invalid');
            }

            // If no errors, submit the form
            if (!error) {
                form.unbind('submit').submit();
            }
        });
    });
</script>
