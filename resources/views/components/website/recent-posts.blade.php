@if($recentPost)
<section class="py-10 md:py-16 bg-gray-100">
    <div class="flex flex-col md:flex-row items-stretch space-y-7 md:space-y-0 px-6 md:px-0">
        <div class="w-full md:w-1/2 flex flex-col items-start p-5 md:p-10 bg-gray-100 rounded md:rounded-r-xl img-gradient-overlay shadow-md" style="background-image:url({{ asset('posts/' . $recentPost->cover) }})">
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
        <div class="w-full md:w-1/2 md:pr-24 md:pl-10">
            <div class="flex flex-col items-start space-y-2">
                @foreach($posts as $post)
                <div class="flex items-start space-x-6 bg-white p-3 w-full rounded-md shadow">
                    <div class="flex items-center justify-center">
                        <a href="{{ route('post', $post->slug) }}" class="inline-block w-20 h-20 bg-gray-100 rounded-md article-thumb" style="background-image: url({{ asset('posts/' . $post->cover) }})"></a>
                    </div>
                    <div>
                        <a href="{{ route('post', $post->slug) }}" class="hover:text-secondary-900 hover:underline">
                            <h4 class="!mb-2 !text-base">
                                {{ $post->title }}
                            </h4>
                        </a>
                        <p class="text-sm font-bold">
                            {{ Str::limit($post->subtitle, 100) }}
                        </p>
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
@endif