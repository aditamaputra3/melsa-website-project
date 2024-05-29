    <div class="floating-title" id="floating-title">Hubungi Kami</div>
    <div class="floating-container">
        <div class="floating-button" title="Hubungi Kami"><span class="material-symbols-outlined">
                support_agent
            </span></div>
        <div class="element-container">
            <span class="float-element">
                <a href="https://wa.me/{{ $perusahaan->no_telp ?? 'notavail' }}?text=Halo melsa, Saya mau pesan" class="" title="Whatsapp">
                    <span class="material-symbols-outlined material-icons">
                        call
                    </span></a>
            </span>
            <span class="float-element">
                <a href="{{ $perusahaan->gmaps ?? 'notavail' }}" title="Alamat">
                    <span class="material-symbols-outlined material-icons">
                        location_on
                    </span>
                </a>
            </span>
        </div>
    </div>
