@extends('layout.layout-guest')

@section('content')
    <div class="detail-container">
        <div class="detail-content">
            <div class="detail-img">
                <img src="{{ asset('storage/' . $data->foto_produk) }}" alt="{{ $data->nama_produk }}">
            </div>
            <div class="detail-product">
                <p class="detail-path">Menu / Katalog Catering / Produk / {{ $data->nama_produk }}</p>
                <h1 class="detail-title">{{ $data->nama_produk }}</h1>
                <h3 class="detail-price">Rp {{ number_format($data->harga_produk, 0, ',', '.') }}</h3>
                <p class="detail-desc">{{ $data->deskripsi_produk }}</p>
                <div class="order-contact">
                    <p class="fw-bold">Untuk pemesanan hubungi nomor whatsapp di bawah : </p>
                    <a class="contact-whatsapp">
                        <span class="material-symbols-outlined">
                            call
                        </span>
                        <p class="fw-bolder">+62 822-1805-0200</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="related-products">
            <div class="related-title">
                <hr class="related-separator">
                <p class="">Produk Terkait</p>
                <hr class="related-separator">
            </div>
            <div class="menu-container mb-5 p-2 catering-menu">
                <?php $count = 0; ?>
                @foreach ($related as $produk)
                    <?php if ($count == 3) {
                        break;
                    } ?>
                    <a class="menu-card" href="{{ route('detail-produk', ['id' => $produk->id]) }}">
                        <div class="menu-card-img ratio ratio-4x3">
                            <img src="{{ asset('storage/' . $produk->foto_produk) }}" alt="{{ $produk->nama_produk }}">
                        </div>
                        <div class="menu-card-body">
                            <h5 class="menu-title fw-bold">{{ $produk->nama_produk }}</h5>
                            <p class="menu-desc">{{ $produk->deskripsi_produk }}</p>
                            <h5 class="menu-price fw-bold">Rp {{ number_format($produk->harga_produk, 0, ',', '.') }}</h5>
                        </div>
                    </a>
                    <?php $count++; ?>
                @endforeach
            </div>
        </div>
    </div>
@endsection
