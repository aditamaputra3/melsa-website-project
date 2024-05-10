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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
