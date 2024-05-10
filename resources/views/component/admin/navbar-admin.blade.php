<!-- Navbar -->

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('index') }}" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        </li>
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
        </li>
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="/assets/img/user.jpg" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline"> {{ auth()->user()->nama_admin }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">

                <li class="user-header bg-danger">
                    <img src="/assets/img/user.jpg" class="img-circle elevation-2" alt="User Image">
                    <p>
                        {{ auth()->user()->nama_admin }}
                        <small> Admin </small>
                    </p>
                </li>

                <li class="user-footer">
                    {{-- <a href="#" class="btn btn-default btn-flat">Profile</a> --}}
                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-right">Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
