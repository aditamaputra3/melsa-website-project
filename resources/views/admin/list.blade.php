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
                                <h3 class="card-title">Form Data Admin</h3>
                                <div>
                                    <div class="button-container">
                                        <button type="button" class="btn btn-sm melsared1" id="edit-profile-btn">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-warning" id="save-button" style="display: none;">
                                            <i class="fa fa-save"></i> Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form id="edit-profile-form" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nama_admin">Nama Admin</label>
                                            <input type="text" class="form-control" id="nama_admin" name="nama_admin" value="{{ $admin->nama_admin }}" placeholder="Nama Admin">
                                            <small class="form-text text-muted">Masukkan nama lengkap admin</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" value="{{ $admin->username }}" placeholder="Username">
                                            <small class="form-text text-muted">Masukkan username admin</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                            <small class="form-text text-muted">Masukkan password baru jika ingin mengganti</small>
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
                var updateUrl = "{{ route('admin.update', $admin->id) }}"; // Asumsi route update ada dan ID admin diakses dengan $admin->id
    
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

