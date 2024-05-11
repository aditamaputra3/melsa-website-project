@extends('layout.layout-guest')

@section('content')
    <h1>Melsa Kue</h1>

    <div class="container">
        <div class="row mt-5">
            <div class="col-4">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="width: 301px;
                        height: 52px;
                        top: 226px;
                        left: 491px;
                        border-radius: 10px 10px 10px 10px;
                        border: 2px 2px 2px 2px;
                        text-align: left;
                        ">
                        Kategori Produk
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li> <a class="dropdown-item" href="#">Another action</a></li>
                        <li> <a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-4">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="width: 301px;
                        height: 52px;
                        top: 226px;
                        left: 491px;
                        border-radius: 10px 10px 10px 10px;
                        border: 2px 2px 2px 2px;
                        text-align: left;
                        ">
                        Urutkan
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li> <a class="dropdown-item" href="#">Another action</a></li>
                        <li> <a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-4">
                <di class="navbar bg-body-tertiary">
                    <div class="container-fluid" style="">
                        <form class="d-flex" role="search"
                            style="width: 552px;
                height: 52px;
                top: 226px;
                left: 843px;
                border-radius: 10px 10px 10px 10px;
                border: 2px 2px 2px 2px;
                ">
                            <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Cari">
                            <button class="btn btn-outline-success" type="submit">Cari</button>
                        </form>
                    </div>
                </di>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row mt-3">
            <div class="col-4 mb-4">
                <a style="text-decoration: none; cursor: pointer; padding: 0" class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="ratio ratio-4x3">
                        <img src="/assets/img/guest/Kue Mocha.jpeg" class="card-img-thumbnail" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kue Mocha</h5>
                        <p class="card-text">The point of using Lorem Ipsum is that it has a more</p>
                        <h6 style="color:#8F0000; font-weight: bold">Rp. 50.000</h6>
                    </div>
                </a>
            </div>
            <div class="col-4 mb-4">
                <a style="text-decoration: none; cursor: pointer;" class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="ratio ratio-4x3">
                        <img src="/assets/img/guest/Cup Cake.jpg" class="card-img-thumbnail" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Cup Cake</h5>
                        <p class="card-text">The point of using Lorem Ipsum is that it has a more</p>
                        <h6 style="color:#8F0000; font-weight: bold">Rp. 50.000</h6>
                    </div>
                </a>
            </div>
            <div class="col-4 mb-4">
                <a style="text-decoration: none; cursor: pointer;" class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="ratio ratio-4x3">
                        <img src="/assets/img/guest/Kue Mocha.jpeg" class="card-img-thumbnail" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kue Mocha</h5>
                        <p class="card-text">The point of using Lorem Ipsum is that it has a more</p>
                        <h6 style="color:#8F0000; font-weight: bold">Rp. 50.000</h6>
                    </div>
                </a>
            </div>
            <div class="col-4 mb-4">
                <a style="text-decoration: none; cursor: pointer;" class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="ratio ratio-4x3">
                        <img src="/assets/img/guest/Cup Cake.jpg" class="card-img-thumbnail" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Cup Cake</h5>
                        <p class="card-text">The point of using Lorem Ipsum is that it has a more</p>
                        <h6 style="color:#8F0000; font-weight: bold">Rp. 50.000</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <nav aria-label="...">
        <ul class="pagination justify-content-center">
            <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>
@endsection
