@extends('layout.layout-admin')

@section('title')
    @if ($jenis_produk)
        {{ 'Data Produk - Melsa ' . ucfirst($jenis_produk) }}
    @else
        {{ 'Data Produk' }}
    @endif
@endsection

@section('content')
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form"
        enctype="multipart/form-data">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="product-form" class="form-horizontal" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" class="form-control">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_produk">Nama Produk</label>
                                    <input type="text" name="nama_produk" id="nama_produk" class="form-control"
                                        autofocus>
                                    <span class="text-danger" id="error-nama_produk"></span>
                                </div>
                                <div class="form-group">
                                    <label for="harga_produk">Harga Produk</label>
                                    <input type="number" name="harga_produk" id="harga_produk" class="form-control">
                                    <span class="text-danger" id="error-harga_produk"></span>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi_produk">Deskripsi Produk</label>
                                    <textarea name="deskripsi_produk" id="deskripsi_produk" class="form-control"></textarea>
                                    <span class="text-danger" id="error-deskripsi_produk"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_kategori">Kategori</label>
                                    <select name="id_kategori" id="id_kategori" class="form-control">
                                        <option>Pilih</option>
                                        @foreach ($kategori as $id => $nama_kategori)
                                            <option value="{{ $id }}">{{ $nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger" id="error-id_kategori"></span>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_produk">Jenis Produk</label>
                                    <select name="jenis_produk" id="jenis_produk" class="form-control">
                                        <option>Pilih Jenis Produk</option>
                                        <option value="kue">Melsa Kue</option>
                                        <option value="catering">Melsa Catering</option>
                                    </select>
                                    <span class="text-danger" id="error-jenis_produk"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Gambar</label>
                                    <div class="resitdc-image-choose">
                                        <input type="file" name="foto_produk" id="photo"
                                            class="resitdc-image-choose-input"
                                            accept="image/.bmp, image/.png, image/.jpg, image/.jpeg">
                                        <div class="resitdc-image-choose-preview"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm melsared1 close-btn" data-dismiss="modal"><i
                                class="fa fa-arrow-circle-left"></i> Cancel</button>
                        <button type="submit" class="btn btn-sm melsagray" id="saveBtn"><i class="fa fa-save"></i>
                            Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-dark">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="d-flex justify-content-start" id="print">
                                    <!-- Second div content (if any) -->
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" onclick="addForm()" class="btn melsagray">
                                        <i class="fa fa-plus"></i> Tambah Data
                                    </button>
                                    {{-- <a href="{{ route('produk.export') }}" class="btn btn-success">
                                    <i class="fa fa-download"></i> Export
                                </a> --}}
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 no-footer" role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th>#</th>
                                            <th>Nama Produk</th>
                                            <th>Harga Produk</th>
                                            <th>Deskripsi Produk</th>
                                            <th>Kategori Produk</th>
                                            <th>Jenis Produk</th>
                                            <th>Foto Produk</th>
                                            {{-- <th>Diperbarui Oleh</th> --}}
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        let routeUrl = "{{ route('produk.index', ['jenis_produk' => $jenis_produk ?? null]) }}";

        let columns = [{
                data: 'DT_RowIndex',
                searchable: false,
                orderable: true
            },
            {
                data: 'nama_produk',
                name: 'nama_produk',
            },
            {
                data: 'harga_produk',
                name: 'harga_produk',
                render: function(data, type, row) {
                    return 'Rp. ' + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                }
            },
            {
                data: 'deskripsi_produk',
                name: 'deskripsi_produk',
            },
            {
                data: 'kategori.nama_kategori',
                name: 'kategori.nama_kategori',
            },
            {
                data: 'jenis_produk',
                name: 'jenis_produk',
                render: function(data, type, row) {
                    return 'Melsa ' + data;
                }
            },
            {
                data: 'foto_produk',
                name: 'foto_produk',
                render: function(data, type, row) {
                    if (data) {
                        return '<img src="{{ asset('storage/') }}/' + data + '" width="100">';
                    }
                    return '';
                }
            },
            // {
            //     data: 'updatedby',
            //     name: 'updatedby',
            // },
            {
                data: 'aksi',
                name: 'aksi',
                orderable: false,
                searchable: false
            }
        ];

        let table = initializeDataTables(routeUrl, columns);

        $(".resitdc-image-choose .resitdc-image-choose-input").change(function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $(".resitdc-image-choose .resitdc-image-choose-preview").css("background-image",
                        `url('${e.target.result}')`);
                }
                reader.readAsDataURL(file);
            } else {
                $(".resitdc-image-choose .resitdc-image-choose-preview").removeAttr("style");
            }
        });

        $('body').on('click', '.editData', function() {
            var id = $(this).data('id');
            $.get("{{ route('produk.index') }}" + '/' + id + '/edit', function(data) {
                $('.modal-title').text('Edit Data');
                $('#modal-form').modal('show');
                $('#id').val(data.id);
                $('#nama_produk').val(data.nama_produk);
                $('#harga_produk').val(data.harga_produk);
                $('#foto_produk').text(data.foto_produk);
                $('#deskripsi_produk').val(data.deskripsi_produk);
                $('#id_kategori').val(data.id_kategori);
                $('#jenis_produk').val(data.jenis_produk);
            })
        });

        function addForm() {
            $(".resitdc-image-choose .resitdc-image-choose-preview").removeAttr("style");
            $("#modal-form").modal('show');
            $('#id').val('');
            $('.modal-title').text('Tambah Data');
            $('#modal-form form')[0].reset();
            $('#modal-form [name=nama_produk]').focus();
            $('#modal-form [name=harga_produk]').focus();
            $('#modal-form [name=deskripsi_produk]').focus();
            $('#modal-form [name=id_kategori]').focus();
            $('#modal-form [name=jenis_produk]').focus();
        }

        // $('#modal-form form').submit(function(event) {
        //     event.preventDefault();

        //     var formData = new FormData(document.getElementById('product-form'));
        //     formData.append('nama_produk', $("#product-form input[name=nama_produk]").val());
        //     formData.append('harga_produk', $("#product-form input[name=harga_produk]").val());
        //     formData.append('deskripsi_produk', $("#product-form textarea[name=deskripsi_produk]").val());
        //     formData.append('id_kategori', $("#product-form select[name=id_kategori]").val());
        //     formData.append('jenis_produk', $("#product-form select[name=jenis_produk]").val());

        //     var foto_produk = document.querySelector('#product-form input[name=foto_produk]');
        //     formData.append('foto_produk', foto_produk.files[0]);

        //     $.ajax({
        //         type: 'POST',
        //         url: routeUrl,
        //         data: formData,
        //         processData: false,
        //         contentType: false,
        //         dataType: 'json',
        //         success: function(response) {
        //             $('#modal-form').modal('hide');
        //             table.ajax.reload();
        //             alert('Data saved successfully');
        //         },
        //         error: function(response) {
        //             var errors = $.parseJSON(response.responseText);
        //             $('span[id^="error"]').text('');
        //             $.each(errors.messages, function(key, value) {
        //                 $('#error-' + key).text(value);
        //             });
        //         }
        //     });
        // });

        function validation(data, isCreate) {
            let formIsValid = true;
            $('span[id^="error"]').text('');
            if (!data.nama_produk) {
                formIsValid = false;
                $("#error-nama_produk").text('Nama produk wajib diisi.')
            }
            if (!data.harga_produk) {
                formIsValid = false;
                $("#error-harga_produk").text('Harga produk wajib diisi.')
            }
            if (!data.deskripsi_produk) {
                formIsValid = false;
                $("#error-deskripsi_produk").text('Deskripsi produk wajib diisi.')
            }
            if (!data.jenis_produk) {
                formIsValid = false;
                $("#error-jenis_produk").text('Jenis produk wajib diisi.')
            }

            return formIsValid;
        }
    </script>
@endsection
