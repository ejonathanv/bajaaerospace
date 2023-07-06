<x-page-layout title="Webinars" bgvideo="pexels-asko-6099420.mp4">
    <section class="py-10 md:py-16 bg-gray-100">
        <div class="container">
            <!-- IMAGEN FIJA -->
            <img src="{{ asset('webinars/webinar_cover.jpeg') }}" alt="" class="w-full h-auto">

            <!-- IMAGEN DINAMICA POR WEBINAR -->
            <div class="webinar-info flex flex-col md:flex-row items-center space-y-7 md:space-y-0 md:space-x-7 mt-7 md:mt-16">
                <div class="basis-full md:basis-9/12">
                    <img src="{{ asset('webinars/' . $webinar->flyer) }}" alt="" class="w-full h-auto">
                </div>    
                <div class="basis-full md:basis-3/12">
                    <!-- LINK PARA REGISTRO AL WEBINAR -->
                    <a href="{{ route('webinar.register') }}" class="btn btn-primary w-full text-center">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        Subscribe to this event
                    </a>
                </div>
            </div>

            @if($last_webinar)
                @if($last_webinar->video)
                <div class="mt-16">
                    <h2 class="text-2xl font-bold">
                        Our last webinar
                    </h2>

                    <!-- VIDEO DE YOUTUBE -->
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/{{ $last_webinar->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                @endif
            @endif
        </div>   
    </section>
</x-page-layout>