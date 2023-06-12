<li class="flex items-start space-x-3">
    <div>
        <img src="{{ asset('pages/' . $page->cover) }}" alt="" class="w-20 h-20 object-cover rounded">
    </div>
    <div>
        <h4 class="!mb-0">
            {{ $page->title }}
        </h4>
        <p class="!mb-0">
            {{ $page->created_at->format('M d, Y') }}
        </p>
        <a href="{{ route('pages.show', $page) }}" class="text-logo-blue underline">
            View details
        </a>
    </div>
</li>