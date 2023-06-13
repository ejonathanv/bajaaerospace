<li class="flex items-start space-x-3">
    <div>
        <img src="{{ asset('events/' . $event->flyer) }}" alt="" class="w-20 h-20 object-cover rounded">
    </div>
    <div>
        <h4 class="!mb-0">
            {{ $event->title }}
        </h4>
        <a href="{{ route('events.show', $event) }}" class="text-logo-blue underline">
            View details
        </a>
    </div>
</li>