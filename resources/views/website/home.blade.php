<x-guest-layout title="Bienvenidos">
    <section class="py-16 bg-white">
        <div class="container">
            <div class="bg-primary-900 rounded-lg flex items-stretch overflow-hidden shadow-lg">
                <div class="w-8/12 p-7 flex items-start flex-col justify-center">
                    <h4 class="text-secondary-100">Cluster BC</h4>
                    <p class="text-white !mb-0">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde laudantium dolor iure dignissimos doloremque ducimus natus adipisci corporis cumque suscipit expedita minima in nobis dolore dolorum, id, optio eos aliquid?
                    </p>
                </div>
                <div class="w-4/12">
                    <img src="{{ asset('img/pexels-pixabay-1048261.png') }}" alt="Baja Aerospace Cluster" class="w-full h-auto shadow-md">
                </div>
            </div>
        </div>
    </section>

    <section class="pb-10 bg-white">
        <div class="container">
            <h2 class="text-center">
                <span class="italic font-bold text-secondary-900">GET TO KNOW US</span> Aerospace Cluster of Baja California
            </h2>
        </div>
    </section>

    <x-website.recent-posts></x-website.recent-posts>

    <section class="events">

        <video autoplay loop muted>
            <source src="{{ asset('video/pexels-ricky-esquivel-3184787-1280x720-24fps.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="container-fluid flex items-start space-x-16 relative z-10">
            <div class="w-4/12">
                <h1 class="text-white pb-7 border-b border-yellow-300 mb-7">
                Events <br>
                & Webinars
                </h1>

                <a href="#" class="text-yellow-300 font-bold hover:underline">
                    View all events
                </a>
            </div>
            <div class="w-8/12">
                <div class="eventSlider">
                    <div class="flex flex-col w-7/12">
                        <h2 class="text-white !mb-6">
                            This is the title of the event and will be displayed here
                        </h2>
                        <p class="text-white !mb-16">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi architecto aliquid voluptas ad ex, modi quos magnam dolor.
                        </p>
                        <div class="mt-auto">
                            <h3 class="text-white">
                                30 Junio 2023
                            </h3>
                            <p class="text-white text-sm font-bold">
                                10:00 AM | Hotel Lucerna, Tijuana, Baja California, México
                            </p>
                            <a href="#" class="text-yellow-300 font-bold hover:underline">
                                View event
                            </a>
                        </div>
                    </div>
                    <div class="w-5/12">
                        <img src="{{ asset('img/pexels-werner-pfennig-6950033.jpg') }}" alt="Event" class="w-full h-auto shadow rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="container-fluid">
            <h2 class="text-center mb-7">
                Supporting Organizations
            </h2>
            <div class="flex items-center justify-between space-x-3">
                <div class="w-2/12">
                    <img src="{{ asset('img/partners/agencia_espacial_mexicana.jpg') }}" 
                        alt="Agencia Espacial Mexicana" 
                        class="w-full h-auto">
                </div>
                <div class="w-2/12">
                    <img src="{{ asset('img/partners/agencia_federal_de_aviacion_civil.jpg') }}" 
                        alt="Agencia Federal de Aviación Civil"
                        class="w-full h-auto">
                </div>
                <div class="w-2/12">
                    <img src="{{ asset('img/partners/ayuntamiento_tijuana.jpg') }}" 
                        alt="Ayuntamiento de Tijuana"
                        class="w-full h-auto">
                </div>
                <div class="w-2/12">
                    <img src="{{ asset('img/partners/baja_california_gobierno_del_estado.jpg') }}" 
                        alt="Gobierno del Estado de Baja California"
                        class="w-full h-auto">
                </div>
                <div class="w-2/12">
                    <img src="{{ asset('img/partners/consejo_coordinador_empresarial_tijuana.jpg') }}" 
                        alt="Consejo Coordinador Empresarial de Tijuana"
                        class="w-full h-auto">
                </div>
                <div class="w-2/12">
                    <img src="{{ asset('img/partners/consejo_de_desarrollo_de_tijuana.jpg') }}" 
                        alt="Consejo de Desarrollo de Tijuana"
                        class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>