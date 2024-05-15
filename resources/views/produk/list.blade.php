@extends('layout.layout-admin')

@section('title')
    @if ($jenis_produk)
        {{ 'Data Produk - Melsa ' . ucfirst($jenis_produk) }}
    @else
        {{ 'Data Produk' }}
    @endif
@endsection

@section('content')
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
        <div class="modal-dialog modal-lg" role="document">
            <form class="form-horizontal">
                <div class="modal-content">
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
                                    <label for="foto_produk">Foto Produk</label>
                                    <input type="file" name="foto_produk" id="foto_produk" class="form-control"
                                        id="formFile">
                                    {{-- <span class="text-danger" id="error-foto_produk"></span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger close-btn" data-dismiss="modal"><i
                                class="fa fa-arrow-circle-left"></i> Cancel</button>
                        <button type="submit" class="btn btn-sm btn-dark" id="saveBtn"><i class="fa fa-save"></i>
                            Save</button>
                    </div>
                </div>
            </form>
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
                                            <th>Diperbarui Oleh</th>
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
                    return '<img src="' + data + '" width="100">';
                }
            },
            {
                data: 'updatedby',
                name: 'updatedby',
            },
            {
                data: 'aksi',
                name: 'aksi',
                orderable: false,
                searchable: false
            }
        ];

        let table = initializeDataTables(routeUrl, columns);
 
        $('body').on('click', '.editData', function() {
            var id = $(this).data('id');
            $.get("{{ route('produk.index') }}" + '/' + id + '/edit', function(data) {
                $('.modal-title').text('Edit Data');
                $('#modal-form').modal('show');
                $('#id').val(data.id);
                $('#nama_produk').val(data.nama_produk);
                $('#harga_produk').val(data.harga_produk);
                // $('#foto_produk').val(data.foto_produk);
                $('#deskripsi_produk').val(data.deskripsi_produk);
                $('#id_kategori').val(data.id_kategori);
                $('#jenis_produk').val(data.jenis_produk);
            })
        });

        function addForm() {
            $("#modal-form").modal('show');
            $('#id').val('');
            $('.modal-title').text('Tambah Data');
            $('#modal-form form')[0].reset();
            $('#modal-form [name=nama_produk]').focus();
            $('#modal-form [name=nama_produk]').focus();
            $('#modal-form [name=harga_produk]').focus();
            $('#modal-form [name=foto_produk]').focus();
            $('#modal-form [name=deskripsi_produk]').focus();
            $('#modal-form [name=id_kategori]').focus();
            $('#modal-form [name=jenis_produk]').focus();
        }

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
            // if (!data.foto_produk) {
            //     formIsValid = false;
            //     $("#error-foto_produk").text('Foto produk wajib diisi.')
            // }
            if (!data.deskripsi_produk) {
                formIsValid = false;
                $("#error-deskripsi_produk").text('Deskripsi produk wajib diisi.')
            }
            // if (!data.id_kategori) {
            //     formIsValid = false;
            //     $("#error-id_kategori").text('Kategori produk wajib diisi.')
            // }
            if (!data.jenis_produk) {
                formIsValid = false;
                $("#error-jenis_produk").text('Jenis produk wajib diisi.')
            }

            return formIsValid;
        }
    </script>
@endsection
