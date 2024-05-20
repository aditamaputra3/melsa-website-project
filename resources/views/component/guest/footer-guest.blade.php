<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: #D90802">
    <!-- Grid container -->
    <div class="container p-3 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h4 class="text mb-10 font-weight-bold">
                        Melsa Group
                    </h4>
                    <p>
                        Lorem ipsum is a placeholder text commonly used in
                        publishing and graphic design to demonstrate the visual
                        form of a document or
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h4 class="text mb-10 font-weight-bold">Catering</h4>
                    <p>
                        <a class="text-white">Snack Box</a>
                    </p>
                    <p>
                        <a class="text-white">Nasi Box</a>
                    </p>
                    <p>
                        <a class="text-white">Prasmanan</a>
                    </p>
                    <p>
                        <a class="text-white">Catering Service</a>
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h4 class="text mb-10 font-weight-bold">
                        Kue
                    </h4>
                    <p>
                        <a class="text-white">Dessert</a>
                    </p>
                    <p>
                        <a class="text-white">Cookies</a>
                    </p>
                    <p>
                        <a class="text-white">Cake Birthday</a>
                    </p>
                    <p>
                        <a class="text-white">Bakery</a>
                    </p>
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h4 class="text mb-10 font-weight-bold">Kontak Kami</h4>
                    <p><i class="fas fa-home mr-3"></i> Jalan Taman Srigunting nomor 5-6, Kecamatan Semarang Utara, Kota
                        Semarang, Jawa Tengah
                    </p>
                    <div class="footer-contact-container">
                        <a class="text-decoration-none" href="https://wa.me/{{$perusahaan->no_telp ?? 'notavail'}}"><img src="/assets/img/icon/whatsapp.png" alt=""></a>
                        <a class="text-decoration-none" href="https://www.instagram.com/{{$perusahaan->instagram ?? 'notavail'}}"><img src="/assets/img/icon/instagram.png" alt=""></a>
                        <a class="text-decoration-none" href="https://www.tiktok.com/{{$perusahaan->tiktok ?? 'notavail'}}"><img src="/assets/img/icon/tiktok.png" alt=""></a>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
            <div class="row d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                    <!-- Copyright -->
                    <div class="p-3">
                        ©2024 Copyright
                        <a class="text-white" href="https://mdbootstrap.com/">MelsaGroup.com</a>
                    </div>
                    <!-- Copyright -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                    <!-- Facebook -->
                    {{-- <a class="text-white">ABOUT US</a> --}}
                    <td>"Makanan pilihan semua catering"</td>
                </div>
                <!-- Grid column -->
            </div>
        </section>
        <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
</footer>
<!-- Footer -->
</div>
