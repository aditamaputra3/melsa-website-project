@extends('layout.layout-admin')

@section('title')
    {{ 'Data Kategori' }}
@endsection

@section('content')
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
        <div class="modal-dialog" role="document">
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
                        <div class="form-group">
                            <label for="name">Nama Kategori</label>
                            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" autofocus>
                            <span class="text-danger" id="error-nama_kategori"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm melsared1 close-btn" data-dismiss="modal"><i
                                class="fa fa-arrow-circle-left"></i> Cancel</button>
                        <button type="submit" class="btn btn-sm melsagray" id="saveBtn"><i class="fa fa-save"></i>
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
                                    {{-- <a href="{{ route('admin.export') }}" class="btn btn-success">
                                        <i class="fa fa-download"></i> Export
                                    </a> --}}
                                    
                                </div>

                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 no-footer" role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th>#</th>
                                            <th>Nama Kategori</th>
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
        let routeUrl = "{{ route('kategori.index') }}";

        let columns = [{
                data: 'DT_RowIndex',
                searchable: false,
                orderable: true
            },
            {
                data: 'nama_kategori',
                name: 'nama_kategori',
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
            $.get("{{ route('kategori.index') }}" + '/' + id + '/edit', function(data) {
                $('.modal-title').text('Edit Data');
                $('#modal-form').modal('show');
                $('#id').val(data.id);
                $('#nama_kategori').val(data.nama_kategori);
            })
        });

        function addForm() {
            $("#modal-form").modal('show');
            $('#id').val('');
            $('.modal-title').text('Tambah Data');
            $('#modal-form form')[0].reset();
            $('#modal-form [name=nama_kategori').focus();
        }

        function validation(data, isCreate) {
            let formIsValid = true;
            $('span[id^="error"]').text('');
            if (!data.nama_kategori) {
                formIsValid = false;
                $("#error-nama_kategori").text('Nama kategori wajib diisi.')
            }

            return formIsValid;
        }
    </script>
@endsection
