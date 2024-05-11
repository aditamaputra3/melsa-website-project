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
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Cari</button>
                        </form>
                    </div>
                </di>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row mt-3">
            <div class="col-4">
                <div class="card">
                    <img src="/assets/img/guest/Cup Cake.jpg" class="card-img-thubmnail" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">20/04/24</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/assets/img/guest/Cup Cake.jpg" class="card-img-thubmnail" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">20/04/24</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/assets/img/guest/Cup Cake.jpg" class="card-img-thubmnail" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">20/04/24</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/assets/img/guest/Cup Cake.jpg" class="card-img-thubmnail" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">20/04/24</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
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
