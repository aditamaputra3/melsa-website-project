<!DOCTYPE html>
<html lang="en">

<head>
    <!-- head -->
    @include('component.head-admin')
    {{-- @yield('head') --}}
    <!-- head -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- navbar -->
        @include('component.navbar-admin')
        <!-- /.navbar -->

        <!-- sidebar -->
        @include('component.sidebar')
        <!-- /.sidebar -->

        <!-- Content -->
        <div class="content-wrapper" style="min-height: 2171.31px;">
            {{-- @if (Request::is(
                    'pemasok',
                    'detail-kondisi',
                    'kategori',
                    'pengguna',
                    'dosen',
                    'matakuliah',
                    'aslab',
                    'dashboard',
                    'praktikum',
                    'jadwal',
                    'pengajuan-jadwal',
                    'profile-aslab',
                    'bap',
                    'mahasiswa')) --}}
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
            {{-- @endif --}}
            @yield('content')
        </div>
        <!-- /.Content -->

        <!-- Footer -->
        @include('component.footer-admin')
        <!-- /.Footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    <!-- Script -->
    @include('component.script-admin')
    <!-- /.Script -->
    @yield('script')

    @if (session('success'))
        <script>
            // Menampilkan toast SweetAlert sukses
            Swal.fire({
                icon: 'success',
                title: '{{ session('success') }}, {{ auth()->user()->nama_lengkap }}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif
</body>

</html>
