<!DOCTYPE html>
<html lang="en">

<head>
    @include('component.guest.head-guest')
</head>

<body id="bootstrap-override">
    @include('component.guest.navbar-guest')
    @yield('content')
  
    @include('component.guest.floating-guest')
    <div>
        @include('component.guest.footer-guest')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="/assets/js/script-guest/script.js"></script>
</body>

</html>
