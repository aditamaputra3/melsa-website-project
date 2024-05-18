<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="/assets/plugins/select2/js/select2.full.min.js"></script>
<script src="https://kit.fontawesome.com/198ace4666.js" crossorigin="anonymous"></script>
<!-- InputMask -->
<script src="/assets/plugins/moment/moment.min.js"></script>
<script src="/assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
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
<script src="/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/assets/plugins/datatables-fixedcolumns/js/dataTables.fixedColumns.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- overlayScrollbars -->
<script src="/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.js"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/assets/plugins/raphael/raphael.min.js"></script>
<script src="/assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/assets/plugins/chart.js/Chart.min.js"></script>
<!-- SweetAlert2 -->
<script src="/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="/assets/plugins/toastr/toastr.min.js"></script>

{{-- <script>
 $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    $(this).select2({
        dropdownParent: $(this).parent(),
    });

    //Initialize Select2 Elements
    // $('.select2bs4').select2({
    //   theme: 'bootstrap4'
    // })
})
</script> --}}
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
        '/perusahaan' // Route::put('/perusahaan', [PerusahaanController::class, 'update'])->name('perusahaan.update');
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

        $('.close-btn').click(function(e) {
            $('.modal').modal('hide');
        });

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
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        $('.modal').modal('hide');
                        $('.table').DataTable().draw();

                        // Tampilkan pesan 'success' dari response JSON
                        if (data.success) {
                            showSuccessToast(data.success); // Gunakan response JSON sebagai judul toast
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
                            showSuccessToast(data.success); // Gunakan response JSON sebagai judul toast
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

    }
    </script>

