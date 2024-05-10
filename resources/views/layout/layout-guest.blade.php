<!DOCTYPE html>
<html lang="en">

<head>
    @include('component.guest.head-guest')
</head>

<body id="bootstrap-override">
    @include('component.guest.navbar-guest')
    @yield('content')
    <div>
        @include('component.guest.footer-guest')
    </div>
</body>

</html>
