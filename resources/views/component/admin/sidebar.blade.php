<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="/assets/melsalogo1.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-medium">Melsa</span>
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
                        <a href="{{ url('/praktikum') }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Katalog
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Menu
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('/jadwal') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Menu Melsa Kue
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('/pengajuan-jadwal') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Menu Melsa Catering
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/pengguna') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Data Admin
                            </p>
                        </a>
                    </li>
           

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
