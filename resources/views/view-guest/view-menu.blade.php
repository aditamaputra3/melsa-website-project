@extends('layout.layout-guest')

@section('content')
    <div class="melsa-menu-container">
        <div class="title-menu-container">
            <a class = "menu-title-active">Melsa Catering</a>
            <div class="menu-title-separator">
            </div>
            <a class="menu-title-inactive">Melsa Kue</a>
        </div>
        <div class="menu-controller-container mb-5">
            <div class="dropdown">
                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori Produk
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="/menu">Tampilkan semua</a>
                    </li>
                    @foreach ($Kategori as $jenis)
                        <li>
                            <a class="dropdown-item" href="/menu?id={{ $jenis->id }}">{{ $jenis->nama_kategori }}</a>
                        </li>
                    @endforeach
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
                    placeholder="Ketik nama produk yang anda cari..." id="search-catering">
                <span><button class="input-group-text btn-search" type="submit" id="search-form">Cari</button>
                </span>
            </form>
        </div>
        <div class="menu-content-container catering-content-container active-menu">
            <div class="menu-container mb-5 p-2 catering-menu" id="cateringMenu">
                @foreach ($ProdukCatering as $produk)
                    <a class="menu-card" href="{{ route('detail-produk', ['id' => $produk->id]) }}">
                        <div class="menu-card-img ratio ratio-4x3">
                            <img src="{{ asset('storage/' . $produk->foto_produk) }}" alt="{{ $produk->nama_produk }}">
                        </div>
                        <div class="menu-card-body">
                            <h5 class="menu-title fw-bold">{{ $produk->nama_produk }}</h5>
                            <p class="menu-desc">{{ $produk->deskripsi_produk }}</p>
                            <h5 class="menu-price fw-bold">Rp {{ number_format($produk->harga_produk, 0, ',', '.') }}
                            </h5>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="menu-content-container cake-content-container inactive-menu">
            <div class="menu-container mb-5 p-2 cake-menu">
                @foreach ($ProdukKue as $produk)
                    <a class="menu-card" href="{{ route('detail-produk', ['id' => $produk->id]) }}">
                        <div class="menu-card-img ratio ratio-4x3">
                            <img src="{{ asset('storage/' . $produk->foto_produk) }}" alt="{{ $produk->nama_produk }}">
                        </div>
                        <div class="menu-card-body">
                            <h5 class="menu-title fw-bold">{{ $produk->nama_produk }}</h5>
                            <p class="menu-desc">{{ $produk->deskripsi_produk }}</p>
                            <h5 class="menu-price fw-bold">Rp {{ number_format($produk->harga_produk, 0, ',', '.') }}
                            </h5>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
