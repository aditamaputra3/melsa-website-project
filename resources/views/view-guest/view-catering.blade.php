@extends('layout.layout-guest')

@section('content')
    <section class="">
        {{-- <div class="background-image">
            <div class="backdrop"> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
        </div>
        </div>
        <div class= "melsacatering">
            <div class = "judul">Melsa Catering</div>
            <div class="row custom-row">
                <div class="col">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori Produk
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Urutkan
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"> Search</button>
                    </form>
                </div>
            </div>
            <div class="card-container">
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat6.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat6.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 21rem; height: 23rem;">
                    <img src="assets/img/guest/catering/cat6.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-content">
                            <h5 class="card-title">Spaghetti</h5>
                            <p class="card-text">The point of using Lorem Ipsum is that it has a more
                                content.</p>
                            <h5 class="card-price">Rp 30.000</h5>
                        </div>
                    </div>
                </div>
            </div>
             <div class="number-row">
                <div class="number-square">1</div>
                <div class="number-square">2</div>
                <div class="number-square">3</div>
            </div>
        </div>
    </section>
@endsection
