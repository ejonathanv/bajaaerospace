<x-page-layout title="Events">
    <section class="py-10 md:py-16 bg-gray-100">
        <div class="container flex items-start space-x-16">
            <div class="w-full md:w-9/12">
                <!-- I need to add the events here -->

                @foreach($events as $event)
                <div class="bg-white rounded mb-7 shadow flex items-start justify-between space-x-5 p-5">
                    <div class="w-4/12">
                        <img src="{{ asset('events/' . $event->flyer) }}" alt="Event" class="rounded shadow h-48 w-full object-cover">
                    </div>
                    <div class="w-8/12">
                        <h2 class="text-2xl font-bold">
                            {{ $event->title }}
                        </h2>
                        <p class="text-gray-500 font-bold text-sm">
                            <span>
                                Date and time of start:
                            </span>
                            {{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y') }} - {{ \Carbon\Carbon::parse($event->start_time)->format('H:i a') }}
                        </p>
                        <p class="text-gray-500 font-bold text-sm">
                            <span>
                                Location:
                            </span>
                            {{ $event->location }}
                        </p>
                        <p class="text-sm text-gray-500">
                            {{ $event->description }}
                        </p>
                        <div class="flex flex-row items-center space-x-3 mt-10">
                            <a href="{{ route('event', $event->slug) }}" class="btn btn-primary whitespace-nowrap">
                                <i class="fas fa-info-circle mr-2"></i>
                                More details
                            </a>
                            <a href="{{ route('event.register', $event) }}" class="btn btn-secondary nowrap whitespace-nowrap">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                Subscribe to this event
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="w-full md:w-3/12">
                <x-website.recent-posts-list />
            </div>
        </div>
    </section>
</x-page-layout>