<x-page-layout title="Events">
    <section class="py-16 bg-gray-100">
        <div class="container">
            <!-- I need to add the events here -->

            @foreach($events as $event)
            <div class="bg-white rounded mb-7 shadow flex items-start justify-between space-x-16 p-5">
                <div class="w-2/12">
                    <img src="{{ asset('flyers/' . $event->flyer) }}" alt="Event" class="rounded shadow">
                </div>
                <div class="w-7/12">
                    <h3 class="text-gray-500">
                        {{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y') }}
                    </h3>
                    <h2 class="text-2xl font-bold">
                        {{ $event->title }}
                    </h2>
                    <p class="text-sm text-gray-500">
                        {{ $event->description }}
                    </p>
                </div>
                <div class="w-3/12 flex flex-col items-center space-y-3">
                    <a href="{{ route('event', $event->slug) }}" class="btn btn-primary">
                        Read more
                    </a>
                    <a href="#" class="btn btn-secondary">
                        Subscribe
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-page-layout>