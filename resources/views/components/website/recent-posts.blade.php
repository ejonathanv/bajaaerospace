<section class="pb-16 bg-white">
    <div class="flex items-stretch">
        <div class="w-1/2 flex flex-col items-start p-10 bg-gray-100 rounded-r-xl img-gradient-overlay shadow-lg" style="background-image:url({{ asset('posts/' . $recentPost->cover) }})">
            <h5 class="text-white relative z-2 font-bold uppercase !leading-tight">
                {{ $recentPost->created_at->format('d M Y') }}
            </h5>
            <a href="{{ route('post', $recentPost->slug) }}" class="mt-auto !mb-0 !leading-relaxed text-white relative z-2">
                <h2 class="!leading-tight hover:text-secondary-100 hover:underline">
                    {{ $recentPost->title }}
                </h2>
                <p class="text-white !mb-0">
                    {{ Str::limit($recentPost->subtitle, 100) }}
                </p>
            </a>
        </div>
        <div class="w-1/2 px-24">
            <div class="flex flex-col items-start space-y-4">
                @foreach($posts as $post)
                <div class="flex items-center space-x-6">
                    <div>
                        <a href="{{ route('post', $post->slug) }}" class="inline-block w-24 h-24 bg-gray-100 rounded-md article-thumb" style="background-image: url({{ asset('posts/' . $post->cover) }})"></a>
                    </div>
                    <div>
                        <a href="{{ route('post', $post->slug) }}" class="hover:text-secondary-100 hover:underline">
                            <h4 class="!mb-2">
                                {{ $post->title }}
                            </h4>
                        </a>
                        <p class="text-gray-400 text-sm font-bold !mb-0">
                            {{ $post->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>