<x-page-layout title="Blog">
    <section class="py-16">
        <div class="container">
            <div class="flex flex-wrap">
                @foreach($posts as $post)
                <div class="w-1/3 p-3 mb-6">
                    <a href="{{ route('post', $post->slug) }}">
                    <img src="{{ asset('posts/' . $post->cover) }}" alt="Post" class="w-full h-64 object-cover rounded shadow mb-3">
                    <p>
                        {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}
                    </p>
                    <h2 class="!mb-3">
                        {{ $post->title }}
                    </h2>
                    <p>
                        {{ Str::limit($post->subtitle, 100) }}
                    </p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-page-layout>