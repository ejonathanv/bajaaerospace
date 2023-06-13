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

            <div>
                <a href="#" class="btn btn-secondary">
                    View all events
                </a>
            </div>
        </div>
        <div class="w-8/12">
            <div class="eventSlider">
                <div class="flex flex-col w-7/12">
                    <p class="font-bold text-white text-sm !mb-3">
                        Next event
                    </p>
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