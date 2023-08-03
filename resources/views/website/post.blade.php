<x-page-layout title="{{ $post->title }}" subtitle="{{ $post->subtitle }}">
    <section class="py-10">
        <div class="container flex items-start space-x-16">
            <div class="w-9/12">
                <img src="{{ asset('posts/'.$post->cover) }}" alt="{{ $post->title }}" class="w-full rounded shadow">

                <h1 class="!mb-6 mt-10">
                    {{ $post->title }}
                </h1>

                <p>
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
            <div class="w-3/12">
                <x-website.recent-posts-list :current="$post"></x-website.recent-posts-list>
            </div>
        </div>
    </section>
</x-page-layout>