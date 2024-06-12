<x-page-layout title="Education" subtitle="Education is the key to success">
    <section class="py-16 bg-gray-100">
        <div class="container">
            <div class="flex flex-wrap items-stretch -mx-3">
                @foreach($posts as $post)
                <div class="w-1/3 p-3 mb-6">
                    <div class="bg-white rounded shadow h-full overflow-hidden">
                        <a href="{{ route('education.post', $post->slug) }}">
                            <img src="{{ asset('posts/' . $post->cover) }}" alt="Post" class="w-full h-64 object-cover mb-3">
                        </a>
                        <div class="p-5">
                            <p>
                                {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}
                            </p>
                            <a href="{{ route('education.post', $post->slug) }}" class="hover:underline">
                                <h4 class="!mb-3">
                                    {{ $post->title }}
                                </h4>
                            </a>
                            <p>
                                {{ Str::limit($post->subtitle, 100) }}
                            </p>
                        </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
</x-page-layout>