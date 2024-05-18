@extends('layout.layout-admin')

@section('title')
    {{ 'Data Admin' }}
@endsection

@section('content')
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-dark">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Data Perusahaan</h3>
                                <div>
                                    <div class="button-container">
                                        <button type="button" class="btn btn-sm melsared1" id="edit-profile-btn">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-warning" id="save-button"
                                            style="display: none;"><i class="fa fa-save"></i> Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form id="edit-profile-form" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_perusahaan">Nama Perusahaan</label>
                                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="{{ $perusahaan->nama_perusahaan }}" placeholder="Jakarta 48">
                                            <small class="form-text text-muted">Masukkan nama resmi perusahaan</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="slogan">Slogan</label>
                                            <input type="text" class="form-control" id="slogan" name="slogan" value="{{ $perusahaan->slogan }}" placeholder="Inovasi Masa Depan">
                                            <small class="form-text text-muted">Masukkan slogan atau tagline perusahaan</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_telp">No. Telp</label>
                                            <input type="number" class="form-control" id="no_telp" name="no_telp" value="{{ $perusahaan->no_telp }}" placeholder="6281231289">
                                            <small class="form-text text-muted">Masukkan nomor Whatsapp aktif, <b>Nomor wajib diawali dengan 62</b></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" id="alamat" name="alamat" rows="2" placeholder="Jl. Mawar No.48, Bandung, Kec. Cibenying, Jawa Barat 42823">{{ $perusahaan->alamat }}</textarea>
                                            <small class="form-text text-muted">Masukan alamat lengkap perusahaan</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi Perusahaan</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="2" placeholder="Perusahaan ini menjual berbagai...">{{ $perusahaan->deskripsi }}</textarea>
                                            <small class="form-text text-muted">Masukkan deskripsi singkat tentang perusahaan</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ $perusahaan->email }}" placeholder="example@gmail.com">
                                            <small class="form-text text-muted">Masukkan alamat email resmi perusahaan</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram">Instagram</label>
                                            <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $perusahaan->instagram }}" placeholder="melsakue">
                                            <small class="form-text text-muted">Masukkan username instagram <b>tanpa menggunakan @</b></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="gmaps">Google Maps</label>
                                            <input type="text" class="form-control" id="gmaps" name="gmaps" value="{{ $perusahaan->gmaps }}" placeholder="https://www.google.com/maps/place/Cafebdg/@-7.2246038,108.1874327,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6f4f05555bbe71:0x2ae734238cb23427!8m2!3d-7.2246038!4d108.1900076!16s%2Fg%2F11rw9f2qlx?entry=ttu">
                                            <small class="form-text text-muted">Masukkan tautan (URL) Google Maps yang menunjukkan lokasi perusahaan .</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="tiktok">TikTok</label>
                                            <input type="text" class="form-control" id="tiktok" name="tiktok" value="{{ $perusahaan->tiktok }}" placeholder="@melsakue">
                                            <small class="form-text text-muted">Masukkan username tiktok <b>menggunakan @</b></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                {{-- <button type="submit" class="btn btn-success" id="save-button" style="display: none;">Simpan</button> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var isEditing = false;

            // Sembunyikan tombol "Simpan" dan buat form read-only pada awal
            $('#save-button').hide();
            $('#edit-profile-form :input').prop('readonly', true);

            // Fungsi untuk mengaktifkan input form dan tombol "Simpan"
            function enableEditMode() {
                $('#edit-profile-btn').hide();
                $('#edit-profile-form :input').prop('readonly', false);
                $('#save-button').show();
                isEditing = true;
            }

            // Fungsi untuk menonaktifkan input form dan tombol "Simpan"
            function disableEditMode() {
                $('#edit-profile-form :input').prop('readonly', true);
                $('#save-button').hide();
                $('#edit-profile-btn').show();
                isEditing = false;
            }

            // Ketika tombol "Edit" diklik
            $('.button-container').on('click', '#edit-profile-btn', function() {
                enableEditMode();
            });

            // Ketika tombol "Simpan" diklik
            $('.button-container').on('click', '#save-button', function(e) {
                e.preventDefault();
                var formData = $('#edit-profile-form').serialize();
                var updateUrl = "{{ route('perusahaan.update') }}";

                $.ajax({
                    type: "PUT",
                    url: updateUrl,
                    data: formData,
                    success: function(data) {
                        if (data.success) {
                            showSuccessToast(data.success); 
                        }
                        disableEditMode();
                    },
                    error: function(data) {
                        console.log('Error:', data);

                        // Tampilkan pesan 'error' dari response JSON jika ada
                        if (data.responseJSON && data.responseJSON.error) {
                            showErrorToast(data.responseJSON.error);
                        } else {
                            // Tampilkan pesan error kustom jika tidak ada pesan error dalam response JSON
                            showErrorToast('An error occurred while saving the data.');
                        }
                    }
                });
            });
        });
    </script>
@endsection
