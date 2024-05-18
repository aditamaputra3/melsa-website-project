@extends('layout.layout-guest')

@section('content')
    <div class="detail-container">
        <div class="detail-content">
            <div class="detail-img">
                <img src="/assets/img/guest/catering/cat1.png" alt="">
            </div>
            <div class="detail-product">
                <p class="detail-path">Menu / Katalog Catering / Produk / Kentang Goreng Ayam </p>
                <h1 class="detail-title">Catering 1</h1>
                <h3 class="detail-price">Rp 36.000</h3>
                <p class="detail-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat minus eum vero
                    eligendi at dolor animi praesentium suscipit, voluptate id eveniet recusandae incidunt, illum
                    asperiores, nihil ad excepturi obcaecati reprehenderit!Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit. Repellat minus eum vero
                    eligendi at dolor animi praesentium suscipit, voluptate id eveniet recusandae incidunt, illum
                    asperiores, nihil ad excepturi obcaecati reprehenderit!Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit. Repellat minus eum vero
                    eligendi at dolor animi praesentium suscipit, voluptate id eveniet recusandae incidunt, illum
                    asperiores, nihil ad excepturi obcaecati reprehenderit!</p>
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
    </div>
@endsection
