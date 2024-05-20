<div class="floating-container">
    <div class="floating-button">?</div>
    <div class="element-container">
        <span class="float-element">
            <a href="https://wa.me/{{$perusahaan->no_telp ?? 'notavail'}}" class="">
                <span class="material-symbols-outlined material-icons">
                    call
                </span></a>
        </span>
        <span class="float-element">
            <a href="{{$perusahaan->gmaps ?? 'notavail'}}">
                <span class="material-symbols-outlined material-icons">
                    location_on
                </span>
            </a>
        </span>
    </div>
</div>