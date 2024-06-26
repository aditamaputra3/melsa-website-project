<!DOCTYPE html>
<html lang="en">

<head>
    <!-- head -->
    @include('component.admin.head-admin')
    {{-- @yield('head') --}}
    <!-- head -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- navbar -->
        @include('component.admin.navbar-admin')
        <!-- /.navbar -->

        <!-- sidebar -->
        @include('component.admin.sidebar')
        <!-- /.sidebar -->

        <!-- Content -->
        <div class="content-wrapper" style="min-height: 2171.31px;">
            @if(!Request::is('perusahaan'))
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>@yield('title')</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item active">@yield('title')</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
            @endif
            @yield('content')
        </div>
        <!-- /.Content -->

        <!-- Footer -->
        @include('component.admin.footer-admin')
        <!-- /.Footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    <!-- Script -->
    @include('component.admin.script-admin')
    <!-- /.Script -->
    @yield('script')

    @if (session('success'))
        <script>
            // Menampilkan toast SweetAlert sukses
            Swal.fire({
                icon: 'success',
                title: '{{ session('success') }}, {{ auth()->user()->nama_admin }}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif
</body>

</html>
