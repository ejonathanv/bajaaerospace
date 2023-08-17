<x-page-layout title="{{ $post->title }}" subtitle="{{ $post->subtitle }}">
    <section class="py-10">
        <div class="container flex items-start space-x-16">
            <div class="w-full md:w-9/12">
                {{--
                    <img src="{{ asset('posts/'.$post->cover) }}" alt="{{ $post->title }}" class="w-full rounded shadow">
                --}}

                <div class="relative">
                    <div class="owl-carousel overflow-hidden rounded shadow">
                        @foreach($post->images as $image)
                        <div class="post-image-slide" 
                            style="background-image: url('{{ asset('posts/slides/' . $image->name) }}')">
                        </div>
                        @endforeach
                    </div>

                    <a href="#" class="owl-next">
                        <i class="fas fa-chevron-right"></i>
                    </a>

                    <a href="#" class="owl-prev">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </div>

                <h1 class="!mb-6 mt-10">
                    {{ $post->title }}
                </h1>

                <p>m
                    <span class="text-gray-900">
                        Published at:
                    </span>
                    {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}
                </p>

                <h4 class="mb-7">
                    {{ $post->subtitle }}
                </h4>

                <div>
                    {!! $post->content !!}
                </div>
            </div>
            <div class="w-full md:w-3/12">
                <x-website.recent-posts-list :current="$post"></x-website.recent-posts-list>
            </div>
        </div>
    </section>
</x-page-layout>