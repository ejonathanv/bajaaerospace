<section class="events">

    <video autoplay loop muted>
        <source src="{{ asset('video/pexels-ricky-esquivel-3184787-1280x720-24fps.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container-fluid flex flex-col md:flex-row items-start space-y-7 md:space-y-0 md:space-x-16 relative z-10">
        <div class="w-full md:w-4/12 flex flex-col items-center md:items-start space-y-7">
            <h1 class="text-white text-center md:text-left !m-0">
                Events <br>
                & Webinars
            </h1>
            <hr class="border-2 border-yellow-300 w-20">
            <div>
                <a href="#" class="btn btn-secondary">
                    View all events
                </a>
            </div>
        </div>
        <div class="w-full md:w-8/12">
            <div class="eventSlider">
                <div class="flex flex-col w-full md:w-7/12">
                    <p class="font-bold text-white text-sm !mb-3">
                        Next event
                    </p>
                    <h2 class="text-white !mb-6">
                        {{ $event->title }}
                    </h2>
                    <p class="text-white !md:mb-16">
                        {{ $event->description }}
                    </p>
                    <div class="mt-auto">
                        <h3 class="text-white">
                            {{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y') }}
                        </h3>
                        <p class="text-white text-sm font-bold">
                            {{ \Carbon\Carbon::parse($event->start_time)->format('h:i a') }} | {{ $event->location }}
                        </p>
                        <a href="{{ route('event', $event) }}" class="text-yellow-300 font-bold hover:underline">
                            View event
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-5/12">
                    <img src="{{ asset('events/' . $event->flyer) }}" alt="{{ $event->title }}" class="w-full h-auto shadow rounded">
                </div>
            </div>
        </div>
    </div>
</section>