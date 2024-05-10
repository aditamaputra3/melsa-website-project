<!DOCTYPE html>
<html lang="en">

<head>
    @include('component.guest.head-guest')
</head>

<body id="bootstrap-override">
    <div class="background-image">
        <div class="backdrop">
            @include('component.guest.navbar-guest')
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
            </script>
        </div>
    </div>
</body>

</html>
