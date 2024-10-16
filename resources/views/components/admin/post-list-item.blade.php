<li class="flex items-start space-x-3">
    <div>
        <div class="w-20">
            <img src="{{ asset('posts/' . $post->cover) }}" alt="" class="w-20 h-20 object-cover rounded">
        </div>
    </div>
    <div>
        <h4 class="!mb-0">
            {{ $post->title }}
        </h4>
        <p class="!mb-0">
            {{ $post->created_at->format('M d, Y') }}
        </p>
        <p class="text-sm font-bold !mb-0">
            Category: {{ $post->category_name }}
        </p>
        <a href="{{ route('posts.show', $post) }}" class="text-logo-blue underline">
            View details
        </a>
    </div>
</li>