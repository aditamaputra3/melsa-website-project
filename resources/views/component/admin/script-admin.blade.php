<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/assets/plugins/jszip/jszip.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/assets/plugins/pdfmake/pdfmake.min.js"></script>
<!-- overlayScrollbars -->
<script src="/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.js"></script>
<!-- PAGE PLUGINS -->
<!-- SweetAlert2 -->
<script src="/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
    /*** add active class and stay opened when selected ***/
    var url = window.location;

    // for sidebar menu entirely but not cover treeview
    $('ul.nav-sidebar a').filter(function() {
        if (this.href) {
            return this.href == url || url.href.indexOf(this.href) == 0;
        }
    }).addClass('active');

    // for the treeview
    $('ul.nav-treeview a').filter(function() {
        if (this.href) {
            return this.href == url || url.href.indexOf(this.href) == 0;
        }
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
</script>

<script>
    function showSuccessToast(message) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        Toast.fire({
            icon: 'success',
            title: message // Menggunakan pesan dari parameter fungsi sebagai judul
        });
    }

    // Fungsi untuk menampilkan toast SweetAlert error
    function showErrorToast(message) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        Toast.fire({
            icon: 'error',
            title: message
        });
    }
</script>

<script>
    var currentUrl = window.location.href;
    var excludedUrls = [
        '/perusahaan', // Route::get('/perusahaan', [PerusahaanController::class, 'index'])->name('perusahaan.index');
        '/perusahaan',
        '/admin'
        // '/produk/kue',
        // '/produk/catering' // Route::put('/perusahaan', [PerusahaanController::class, 'update'])->name('perusahaan.update');
    ];
    var isExcluded = excludedUrls.some(function(url) {
        return currentUrl.includes(url);
    });

    if (!isExcluded) {
        function initializeDataTables(routeUrl, columns) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            return $('.table').DataTable({
                processing: true,
                autoWidth: false,
                responsive: true,
                lengthChange: true,
                serverSide: true,
                dom: "<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",

                buttons: [{
                    extend: 'collection',
                    text: '<i class="fa fa-print"></i> Export',
                    className: 'btn btn-warning',
                    buttons: [{
                        extend: 'excel',
                        title: ''
                    }, {
                        extend: 'pdf',
                        title: '',
                    }, {
                        extend: 'csv',
                        title: ''
                    }, {
                        extend: 'print',
                        title: ''
                    }, {
                        extend: 'copy',
                        title: ''
                    }]
                }],
                ajax: routeUrl,
                columns: columns
            }).buttons().container().appendTo('#print');
        }

        // Expose the function to the global scope
        window.initializeDataTables = initializeDataTables;

        var currentUrl = window.location.href;
        var excludedUrls2 = [
            '/produk/kue',
            '/produk/catering' // Route::put('/perusahaan', [PerusahaanController::class, 'update'])->name('perusahaan.update');
        ];
        var isExcluded2 = excludedUrls2.some(function(url) {
            return currentUrl.includes(url);
        });

        if (!isExcluded2) {
            // Handle form submission
            $("form").on("submit", function(e) {
                e.preventDefault();
                var formdata = $(this).serializeArray();
                var data = {};

                $(formdata).each(function(index, obj) {
                    data[obj.name] = obj.value;
                });

                if (validation(data, true)) {
                    $.ajax({
                        data: $(this).serialize(),
                        url: $(this).attr('action'), // Menggunakan URL dari atribut action form
                        // enctype: 'multipart/form-data',
                        type: "POST",
                        dataType: 'json',
                        success: function(data) {
                            $('.modal').modal('hide');
                            $('.table').DataTable().draw();

                            // Tampilkan pesan 'success' dari response JSON
                            if (data.success) {
                                showSuccessToast(data
                                .success); // Gunakan response JSON sebagai judul toast
                            }
                        },
                        error: function(data) {
                            console.log('Error:', data);
                            $('#saveBtn').html('Save Changes');
                            // Tampilkan pesan 'error' dari response JSON jika ada
                            if (data.responseJSON && data.responseJSON.error) {
                                showErrorToast(data.responseJSON.error);
                            } else {
                                // Tampilkan pesan error kustom jika tidak ada pesan error dalam response JSON
                                showErrorToast('An error occurred while saving the data.');
                            }
                        }
                    });
                }
            });
        }
        $('.close-btn').click(function(e) {
            $('.modal').modal('hide');
        });


        $('body').on('click', '.deleteData', function() {
            var id = $(this).data("id");
            var url = $(this).data("url");
            if (confirm("Kamu yakin ingin menghapus data?") == true) {
                $.ajax({
                    type: "DELETE",
                    url: url + '/' + id,
                    success: function(data) {
                        $('.table').DataTable().draw();
                        // Tampilkan pesan 'success' dari response JSON
                        if (data.success) {
                            showSuccessToast(data
                            .success); // Gunakan response JSON sebagai judul toast
                        }
                    },
                    error: function(data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                        // Tampilkan pesan 'error' dari response JSON jika ada
                        if (data.error) {
                            showErrorToast(data.error);
                        } else {
                            // Tampilkan pesan error kustom jika tidak ada pesan error dalam response JSON
                            showErrorToast('An error occurred while delete the data.');
                        }
                    }
                });
            }
        });

        $('#product-form').submit(function(event) {
            event.preventDefault();

            var formData = new FormData(document.getElementById('product-form'));
            formData.append('nama_produk', $("#product-form input[name=nama_produk]").val());
            formData.append('harga_produk', $("#product-form input[name=harga_produk]").val());
            formData.append('deskripsi_produk', $("#product-form textarea[name=deskripsi_produk]").val());
            formData.append('id_kategori', $("#product-form select[name=id_kategori]").val());
            formData.append('jenis_produk', $("#product-form select[name=jenis_produk]").val());

            var foto_produk = document.querySelector('#product-form input[name=foto_produk]');
            formData.append('foto_produk', foto_produk.files[0]);

            $.ajax({
                type: 'POST',
                url: routeUrl,
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(data) {
                    $('#modal-form').modal('hide');
                    $('.table').DataTable().draw();
                    if (data.success) {
                                showSuccessToast(data
                                .success); // Gunakan response JSON sebagai judul toast
                            }
                },
                error: function(data) {
                    console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                        // Tampilkan pesan 'error' dari response JSON jika ada
                        if (data.error) {
                            showErrorToast(data.error);
                        } else {
                            // Tampilkan pesan error kustom jika tidak ada pesan error dalam response JSON
                            showErrorToast('An error occurred.');
                        }
                }
            });
        });

    }
</script>
