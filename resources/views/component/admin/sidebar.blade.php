<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="/" class="brand-link">
        <img src="/assets/melsalogo1.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-medium">Melsa</span>
    </a> --}}

    <a href="{{url('/')}}" class="brand-link logo-switch bg-white">
        <img src="/assets/melsalogo3.png" alt="AdminLTE Docs Logo Small" class="brand-image-xs logo-xs" style="left: 0px;">
        <img src="/assets/melsalogo2.png" alt="AdminLTE Docs Logo Large" class="brand-image-xl logo-xl" style="left: 50px;">
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" 
                data-accordion="false">

                {{-- @if (Auth::check() && (Auth::user()->peran_pengguna == 'TEKNISI' || Auth::user()->peran_pengguna == 'KEPALA')) --}}
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('/kategori') }}" class="nav-link">
                            <i class="nav-icon fas fa-cart-plus"></i>
                            <p>
                                Kategori
                            </p>
                        </a>
                    </li>
                 
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Produk
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('produk.index', ['jenis_produk' => 'kue']) }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Produk Melsa Kue
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('produk.index', ['jenis_produk' => 'catering']) }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Produk Melsa Catering
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/admin') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Data Admin
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/perusahaan') }}" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                Data Perusahaan
                            </p>
                        </a>
                    </li>
           

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
