@extends('layout.layout-home-guest')

@section('content')
    <div class="background-image mb-5">
        <div class="backdrop">
        </div>
    </div>
    <div class="position-absolute top-50 start-50 translate-middle text-center hero-text">
        <h1 class="mb-5">MELSA GROUP</h1>
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
        <div class="home-menu-container mb-4 w-100 my-4">
            <div class="home-menu-button-container d-flex justify-content-center">
                <button class="home-menu-button catering-btn">Melsa Catering</button>
                <button class="home-menu-button cake-btn">Melsa Kue</button>
            </div>
            <div class="home-menu-list d-flex justify-content-center flex-wrap p-2">
                <a class="home-menu-card m-2" style="border:solid 2px rgb(207, 219, 231)">
                    <div class="home-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/Catering 1.png" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Catering 1</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </a>
                <a class="home-menu-card m-2">
                    <div class="home-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/Catering 1.png" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Catering 1</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </a>
                <a class="home-menu-card m-2">
                    <div class="home-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/Catering 1.png" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Catering 1</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </a>
                <a class="home-menu-card m-2">
                    <div class="home-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/Catering 1.png" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Catering 1</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </a>
                <a class="home-menu-card m-2">
                    <div class="home-card-img ratio ratio-4x3">
                        <img src="/assets/img/guest/Catering 1.png" alt="">
                    </div>
                    <div class="home-menu-card-body">
                        <h5 class="home-menu-title fw-bold">Catering 1</h5>
                        <p class="home-menu-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="home-content-why-container w-100 mb-4 py-4">
            <h1 class="text-center mx-4">Kenapa Harus Memilih Melsa?</h1>
            <div class="d-flex justify-content-between flex-wrap p-2">
                <div class=" px-3 text-center home-why-item">
                    <img class="mb-5" src="/assets/img/guest/Fork&Spoon.png" alt="">
                    <h4 class="mb-3">Lorem Ipsum</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
                <div class=" px-3 text-center home-why-item">
                    <img class="mb-5" src="/assets/img/guest/Delivery.png" alt="">
                    <h4 class="mb-3">Lorem Ipsum</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
                <div class=" px-3 text-center home-why-item">
                    <img class="mb-5" src="/assets/img/guest/Storage.png" alt="">
                    <h4 class="mb-3">Lorem Ipsum</h4>
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
