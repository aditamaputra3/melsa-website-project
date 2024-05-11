@extends('layout.layout-guest')

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
        <div class="home-menu-container mb-4 w-75 ">
            <div class="home-menu-button-container d-flex justify-content-center">
                <button class="home-menu-button">Melsa Catering</button>
                <button class="home-menu-button">Melsa Kue</button>
            </div>
            <div class="home-menu-list d-flex justify-content-center flex-wrap p-2">
                <div class="home-menu-card p-5 m-2 bg-danger w-25">1</div>
                <div class="home-menu-card p-5 m-2 bg-danger w-25">2</div>
                <div class="home-menu-card p-5 m-2 bg-danger w-25">3</div>
                <div class="home-menu-card p-5 m-2 bg-danger w-25">1</div>
                <div class="home-menu-card p-5 m-2 bg-danger w-25">2</div>
                <div class="home-menu-card p-5 m-2 bg-danger w-25">3</div>
                <div class="home-menu-card p-5 m-2 bg-danger w-25">1</div>
            </div>
        </div>
        <div class="home-content-why-container w-75  mb-4">
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
        <div class="home-content-testimoni-container w-75 mb-4 ">
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
