@extends('layout.layout-guest')

@section('content')
    <div class="background-image mb-5">
        <div class="backdrop"></div>
        <div class="backdrop-text"></div>
    </div>
    <div class="position-absolute top-50 start-50 translate-middle text-center hero-text">
        <h1 class="mb-3 hero-title">MELSA GROUP</h1>
        <h5>Selamat datang di Melsa Kue,destinasi utama untuk pencinta kue dan hidangan lezat lainnya! Kami menyajikan
            beragam dessert, kue jajanan pasar, roti kekinian, snack box, layanan catering nasi box dan prasmanan dengan
            cita rasa yang tak tertandingi.</h5>
    </div>
    <div class="home-content d-flex flex-column align-items-center">
        <div class="home-content-title-container d-flex flex-column align-items-center mb-2">
            <h1 class="text-center mb-4 mx-4">Melsa Pilihan Makanan Setiap Acara</h1>
            {{-- <p class="text-center w-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad et ipsam autem totam
                quo
                ducimus blanditiis, iure
                saepe pariatur ipsum dolor nostrum cupiditate, mollitia quaerat atque quas sint odio rem.</p> --}}
        </div>
        <div class="home-menu-container mb-4">
            <div class="home-menu-button-container d-flex justify-content-center">
                <button class="home-menu-button catering-btn">Melsa Catering</button>
                <button class="home-menu-button cake-btn">Melsa Kue</button>
            </div>
            <div class="home-menu-list home-menu-catering p-2">
                <?php $count = 0; ?>
                @foreach ($ProdukCatering as $produk)
                    <?php if ($count == 6) {
                        break;
                    } ?>
                    <a class="home-menu-card m-2" href="{{ route('detail-produk', ['id' => $produk->id]) }}">
                        <div class="home-card-img">
                            <img src="{{ asset('storage/' . $produk->foto_produk) }}" alt="">
                        </div>
                        <div class="home-menu-card-body">
                            <h5 class="home-menu-title fw-bold">{{ $produk->nama_produk }}</h5>
                            <p class="home-menu-desc">{{ $produk->deskripsi_produk }}</p>
                        </div>
                    </a>
                    <?php $count++; ?>
                @endforeach
            </div>
            <div class="home-menu-list home-menu-cake p-2">
                <?php $count = 0; ?>
                @foreach ($ProdukKue as $produk)
                    <?php if ($count == 6) {
                        break;
                    } ?>
                    <a class="home-menu-card m-2" href="{{ route('detail-produk', ['id' => $produk->id]) }}">
                        <div class="home-card-img">
                            <img src="{{ asset('storage/' . $produk->foto_produk) }}" alt="">
                        </div>
                        <div class="home-menu-card-body">
                            <h5 class="home-menu-title fw-bold">{{ $produk->nama_produk }}</h5>
                            <p class="home-menu-desc">{{ $produk->deskripsi_produk }}</p>
                        </div>
                    </a>
                    <?php $count++; ?>
                @endforeach
            </div>
        </div>
        <div class="home-content-why-container w-100 mb-4 py-4">
            <h1 class="text-center mx-4">Kenapa Harus Memilih Melsa?</h1>
            <div class="home-why-item-container">
                <div class=" text-center home-why-item">
                    <img src="/assets/img/guest/Fork&Spoon.png" alt="">
                    <h4>Makanan Halal dan Berkualitas</h4>
                </div>
                <div class=" text-center home-why-item">
                    <img src="/assets/img/guest/Delivery.png" alt="">
                    <h4>Melayani Berbagai Macam Pemesanan</h4>
                </div>
                <div class=" text-center home-why-item">
                    <img src="/assets/img/guest/Storage.png" alt="">
                    <h4>Produksi dan Distribusi Bersih dan Aman</h4>
                </div>
            </div>
        </div>
        <div class="home-content-testimoni-container w-100 mb-4 px-4">
            <div class="home-testimoni-title mb-4">
                <h1 class="text-center">Testimoni Beberapa Pelanggan</h1>
                <h6 class="text-center">Melsa Catering & Melsa Kue</h6>
            </div>
            <div class="home-testimoni-card-container p-2">
                <div class="home-testimoni-card">
                    <p class="testimoni mb-5">Dana tipis tapi pengen jajan makanan enak? Langsung aja cus beli ke melsakue
                        bener banget rasanya tuhh enakk banget bikin mood jadi lebih baik lagi pokoknya mah enakk poll 100%
                    </p>
                    <h5 class="testimoni-sender mt-2">@riniiinurrr</h5>
                </div>
                <div class="home-testimoni-card">
                    <p class="testimoni mb-5">Relate, penambah mood disaat pusing tuh makanan yang manis2 sih 🔥 apalagi
                        semua produknya enak poll 💯 walau rumah jauh tetep kalau udah langganan gabisa berpaling 😍💓</p>
                    <h5 class="testimoni-sender mt-2">@fdlhjbdh_</h5>
                </div>
                <div class="home-testimoni-card">
                    <p class="testimoni mb-5">Tiada rasa yang lebih indah dari rasa cake melsa, seakan dunia milik beruda~~
                        kebanggaan sejak dulu minimelss jgn kemana mana yaa!!💓💓💓💓</p>
                    <h5 class="testimoni-sender mt-2">@hydalsya</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
