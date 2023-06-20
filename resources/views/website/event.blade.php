<x-page-layout title="{{ $event->title }}" subtitle="{{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y') }}">
    <section class="py-10 md:py-16 bg-gray-100">
        <div class="container flex items-start space-x-16">
            <div class="w-full md:w-9/12">
                <div>
                    <img src="{{ asset('events/' . $event->flyer) }}" alt="Event" class="w-full object-cover mb-3">
                </div>
                <h1 class="!mb-6 mt-10 !leading-tight">
                    {{ $event->title }}
                </h1>
                <p class="text-gray-500 font-bold text-sm">
                    <span class="text-gray-900">
                        Date and time of start:
                    </span>
                    {{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y') }} - {{ \Carbon\Carbon::parse($event->start_time)->format('H:i a') }}
                </p>
                @if($event->end_date)
                <p class="text-gray-500 font-bold text-sm">
                    <span class="text-gray-900">
                        Date and time of end:
                    </span>
                    {{ \Carbon\Carbon::parse($event->end_date)->format('d/m/Y') }} - {{ \Carbon\Carbon::parse($event->end_time)->format('H:i a') }}
                </p>
                @endif

                <p class="text-gray-500 font-bold text-sm">
                    <span class="text-gray-900">
                        Location:
                    </span>
                    {{ $event->location }}
                </p>

                <p class="text-gray-500 font-bold text-sm">
                    <span class="text-gray-900">
                        Address:
                    </span>
                    {{ $event->address }}
                <p>

                    {{ $event->description }}
                </p>
            </div>
            <div class="w-full md:w-3/12">
                <h4>
                    Subscribe to this event and receive notifications, don´t miss it! 
                </h4>
                <a href="{{ route('event.register', $event->slug) }}" class="btn btn-secondary w-full mb-3">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    Subscribe to this event
                </a>
                <hr class="my-3">
                <x-website.recent-posts-list />
            </div>
        </div>
    </section>
</x-page-layout>