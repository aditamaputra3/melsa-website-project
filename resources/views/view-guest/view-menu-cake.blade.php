@extends('layout.layout-guest')

@section('content')
    <section class="">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
        </div>
        </div>
        <div class= "melsacatering">
            <div class = "judul">Melsa Cake</div>
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
                <a class="home-menu-card m-2">
                    <div class="home-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/Cup Cake.jpg" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Catering 1</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <h5 class="card-price">Rp 30.000</h5>
                    </div>
                </a>
                <a class="home-menu-card m-2">
                    <div class="home-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/Cup Cake.jpg" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Catering 1</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <h5 class="card-price">Rp 30.000</h5>
                    </div>
                </a>
                <a class="home-menu-card m-2">
                    <div class="home-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/Cup Cake.jpg" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Catering 1</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <h5 class="card-price">Rp 30.000</h5>
                    </div>
                </a>
                <a class="home-menu-card m-2">
                    <div class="home-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/Cup Cake.jpg" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Catering 1</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <h5 class="card-price">Rp 30.000</h5>
                    </div>
                </a>
                <a class="home-menu-card m-2">
                    <div class="home-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/Cup Cake.jpg" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Catering 1</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <h5 class="card-price">Rp 30.000</h5>
                    </div>
                </a>
            </div>
            <div class="number-row">
                <div class="number-square">1</div>
                <div class="number-square">2</div>
                <div class="number-square">3</div>
            </div>
        </div>
    </section>
@endsection
