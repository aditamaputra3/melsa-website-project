    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Melsagroup - @yield('title')</title>

    <link rel="icon" href="/assets/favicon.ico" type="image/x-icon">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css"> --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- IONIC Icons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="/assets/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/select2.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-datetimepicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/assets/plugins/select2/css/select2.min.css">

    <link rel="manifest" href="/manifest.json">
    <style>
        /* .melsa-color {
            color: #D90802 !important;
        } */

        .melsared1 {
            background-color: #D90802 !important;
            color: #FFFFFF !important;
        }

        .melsared2 {
            background-color: #8F0000 !important;
            color: #FFFFFF !important;
        }

        .melsagray {
            background-color: #424242 !important;
            color: #ffffff !important;
        }

        .main-sidebar {
            background-color: #424242 !important;
            color: #FFFFFF !important;
        }

        .main-sidebar.sidebar-dark-melsared1 {
            background-color: #424242 !important;
        }

        .main-sidebar.sidebar-dark-melsared1 .nav-sidebar>.nav-item>.nav-link.active {
            background-color: #D90802 !important;
            color: #FFFFFF !important;
        }

        .dataTables_wrapper .pagination .page-item.active .page-link {
            background-color: #424242 !important;
            border-color: #424242 !important;
            color: #fff !important;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
