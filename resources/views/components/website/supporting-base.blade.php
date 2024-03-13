<section class="bg-white py-16">
    <div class="container">
        <h2 class="text-center mb-7">
            Our Supporting Base
        </h2>
        <div class="flex items-center flex-wrap justify-center">
            <div class="w-4/12 md:w-1/12 px-2 mb-4">
                <img src="{{ asset('img/partners/logos/aem.jpg') }}" alt="AEM" class="w-full h-auto">
            </div>
            <div class="w-4/12 md:w-1/12 px-2 mb-4">
                <img src="{{ asset('img/partners/logos/afac.jpg') }}" alt="AFAC" class="w-full h-auto">
            </div>
            <div class="w-4/12 md:w-1/12 px-2 mb-4">
                <img src="{{ asset('img/partners/logos/xxiv-ayuntamiento-tijuana.jpg') }}" alt="XXIV Ayuntamiento Tijuana" class="w-full h-auto">
            </div>
            <div class="w-4/12 md:w-1/12 px-2 mb-4">
                <img src="{{ asset('img/partners/logos/baja-california-gobierno-del-estado.jpg') }}" alt="Baja California Gobierno del Estado" class="w-full h-auto">
            </div>
            <div class="w-4/12 md:w-1/12 px-2 mb-4">
                <img src="{{ asset('img/partners/logos/consejo-cordinador-empresarial-tijuana.jpg') }}" alt="Consejo Cordinador Empresarial Tijuana" class="w-full h-auto">
            </div>
            <div class="w-4/12 md:w-1/12 px-2 mb-4">
                <img src="{{ asset('img/partners/logos/consejo-de-desarrollo-de-tijuana.jpg') }}" alt="Consejo de Desarrollo de Tijuana" class="w-full h-auto">
            </div>
            @for($i = 1; $i <= 102; $i++)
                @php
                    $number = str_pad($i, 5, '0', STR_PAD_LEFT);
                @endphp
                <div class="w-4/12 md:w-1/12 px-2 mb-4">
                    <img src="{{ asset('img/partners/logos2024/actualizados/logo'.$number.'.jpg') }}" class="w-full h-auto">
                </div>
            @endfor
        </div>
    </div>
</section>