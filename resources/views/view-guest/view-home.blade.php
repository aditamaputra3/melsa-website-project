@extends('layout.layout-guest')

@section('content')
    <div class="background-image mb-5">
        <div class="backdrop"></div>
        <div class="backdrop-text"></div>
    </div>
    <div class="position-absolute top-50 start-50 translate-middle text-center hero-text">
        <h1 class="mb-1 hero-title">MELSA GROUP</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptatibus accusantium adipisci,
            tempore ab iusto aliquid quasi esse veniam accusamus eius laboriosam quae! Ex quaerat quo ducimus?
            Deleniti, quasi impedit!</p>
    </div>
    <div class="home-content d-flex flex-column align-items-center">
        <div class="home-content-title-container d-flex flex-column align-items-center mb-2">
            <h1 class="text-center mb-4 mx-4">Melsa Pilihan Makanan Setiap Acara</h1>
            <p class="text-center w-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad et ipsam autem totam
                quo
                ducimus blanditiis, iure
                saepe pariatur ipsum dolor nostrum cupiditate, mollitia quaerat atque quas sint odio rem.</p>
        </div>
        <div class="home-menu-container mb-4">
            <div class="home-menu-button-container d-flex justify-content-center">
                <button class="home-menu-button catering-btn">Melsa Catering</button>
                <button class="home-menu-button cake-btn">Melsa Kue</button>
            </div>
            <div class="home-menu-list home-menu-catering p-2">
                <a class="home-menu-card m-2">
                    <div class="home-card-img">
                        <img src="/assets/img/guest/Catering 1.png" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Catering 1</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </a>
                <a class="home-menu-card m-2">
                    <div class="home-card-img">
                        <img src="/assets/img/guest/Catering 2.png" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Catering 2</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </a>
                <a class="home-menu-card m-2">
                    <div class="home-card-img">
                        <img src="/assets/img/guest/Catering 1.png" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Catering 3</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </a>
            </div>
            <div class="home-menu-list home-menu-cake p-2">
                <a class="home-menu-card m-2">
                    <div class="home-card-img">
                        <img src="/assets/img/guest/Cup Cake.jpg" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Cake 1</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </a>
                <a class="home-menu-card m-2">
                    <div class="home-card-img">
                        <img src="/assets/img/guest/Kue Mocha.jpeg" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Cake 2</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </a>
                <a class="home-menu-card m-2">
                    <div class="home-card-img">
                        <img src="/assets/img/guest/Cup Cake.jpg" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Cake 3</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="home-content-why-container w-100 mb-4 py-4">
            <h1 class="text-center mx-4">Kenapa Harus Memilih Melsa?</h1>
            <div class="home-why-item-container">
                <div class=" text-center home-why-item">
                    <img src="/assets/img/guest/Fork&Spoon.png" alt="">
                    <h4>Lorem Ipsum</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
                <div class=" text-center home-why-item">
                    <img src="/assets/img/guest/Delivery.png" alt="">
                    <h4>Lorem Ipsum</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
                <div class=" text-center home-why-item">
                    <img src="/assets/img/guest/Storage.png" alt="">
                    <h4>Lorem Ipsum</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
            </div>
        </div>
        <div class="home-content-testimoni-container w-100 mb-4 px-4">
            <div class="home-testimoni-title mb-4">
                <h1 class="text-center">Testimoni Beberapa Pelanggan</h1>
                <h6 class="text-center">Melsa Catering & Melsa Kue</h6>
            </div>
            <div class="home-testimoni-card-container d-flex justify-content-between flex-wrap p-2">
                <div class="home-testimoni-card">
                    <p class="testimoni mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                    <p class="testimoni-sender">Shyandis</p>
                </div>
                <div class="home-testimoni-card">
                    <p class="testimoni mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                    <p class="testimoni-sender">Shyandis</p>
                </div>
                <div class="home-testimoni-card">
                    <p class="testimoni mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                    <p class="testimoni-sender">Shyandis</p>
                </div>
            </div>
        </div>
    </div>
@endsection
