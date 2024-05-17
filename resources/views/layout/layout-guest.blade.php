<!DOCTYPE html>
<html lang="en">

<head>
    @include('component.guest.head-guest')
</head>

<body id="bootstrap-override">
    @include('component.guest.navbar-guest')
    @yield('content')
    <div class="floating-container">
        <div class="floating-button">?</div>
        <div class="element-container">
            <span class="float-element">
                <a href="" class="">
                    <span class="material-symbols-outlined material-icons">
                        call
                    </span></a>
            </span>
            <span class="float-element">
                <a href="">
                    <span class="material-symbols-outlined material-icons">
                        location_on
                    </span>
                </a>
            </span>
        </div>
    </div>
    <div>
        @include('component.guest.footer-guest')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="/assets/js/script-guest/script.js"></script>
</body>

</html>
