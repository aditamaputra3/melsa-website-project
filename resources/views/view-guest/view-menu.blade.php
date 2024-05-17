@extends('layout.layout-guest')

@section('content')
    <div class="melsa-menu-container">
        <div class="title-menu-container">
            <a class = "menu-title-active">Melsa Catering</a>
            <div class="menu-title-separator">
            </div>
            <a class="menu-title-inactive">Melsa Kue</a>
        </div>
        <div class="menu-content-container catering-content-container">
            <div class="menu-controller-container mb-5">
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori Produk
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Urutkan
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <form class="input-group search-container">
                    <input class="form-search form-control fst-italic" type="search" aria-describedby="search-form"
                        placeholder="Ketik nama produk yang anda cari...">
                    <span><button class="input-group-text btn-search" type="submit" id="search-form">Cari</button>
                    </span>
                </form>
            </div>
            <div class="menu-container mb-5 p-2 catering-menu">
                <a class="menu-card">
                    <div class="menu-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/catering/cat1.png" alt="">
                    </div>
                    <div class="menu-card-body">
                        <h5 class="menu-title fw-bold">Catering 1</h5>
                        <p class="menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                        <h5 class="menu-price fw-bold">Rp 30.000</h5>
                    </div>
                </a>
                <a class="menu-card">
                    <div class="menu-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/catering/cat2.png" alt="">
                    </div>
                    <div class="menu-card-body">
                        <h5 class="menu-title fw-bold">Catering 2</h5>
                        <p class="menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                        <h5 class="menu-price fw-bold">Rp 30.000</h5>
                    </div>
                </a>
                <a class="menu-card">
                    <div class="menu-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/catering/cat3.png" alt="">
                    </div>
                    <div class="menu-card-body">
                        <h5 class="menu-title fw-bold">Catering 3</h5>
                        <p class="menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                        <h5 class="menu-price fw-bold">Rp 30.000</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="menu-content-container cake-content-container">
            <div class="menu-controller-container mb-5">
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori Produk
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Urutkan
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <form class="input-group search-container">
                    <input class="form-search form-control fst-italic" type="search" aria-describedby="search-form"
                        placeholder="Ketik nama produk yang anda cari...">
                    <span><button class="input-group-text btn-search" type="submit" id="search-form">Cari</button>
                    </span>
                </form>
            </div>
            <div class="menu-container mb-5 p-2 cake-menu">
                <a class="menu-card">
                    <div class="menu-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/Cup Cake.jpg" alt="">
                    </div>
                    <div class="menu-card-body">
                        <h5 class="menu-title fw-bold">Cake 1</h5>
                        <p class="menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                        <h5 class="menu-price fw-bold">Rp 30.000</h5>
                    </div>
                </a>
                <a class="menu-card">
                    <div class="menu-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/Kue Mocha.jpeg" alt="">
                    </div>
                    <div class="menu-card-body">
                        <h5 class="menu-title fw-bold">Cake 2</h5>
                        <p class="menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                        <h5 class="menu-price fw-bold">Rp 30.000</h5>
                    </div>
                </a>
                <a class="menu-card">
                    <div class="menu-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/Cup Cake.jpg" alt="">
                    </div>
                    <div class="menu-card-body">
                        <h5 class="menu-title fw-bold">Cake 3</h5>
                        <p class="menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                        </p>
                        <h5 class="menu-price fw-bold">Rp 30.000</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
