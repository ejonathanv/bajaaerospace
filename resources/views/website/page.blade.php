<x-page-layout>
    <section class="py-16">
        <div class="container">
            <div class="flex items-start space-x-16">
                <div class="w-9/12">
                    <h1 class="!mb-4">
                        {{ $page->title }}
                    </h1>

                    <h4 class="mb-10">
                        {{ $page->subtitle }}
                    </h4>
                    @if($page->cover)
                    <img src="{{ asset('pages/'.$page->cover) }}" alt="{{ $page->title }}" class="w-full h-auto rounded shadow mb-9">
                    @endif
                    <div>
                        {!! $page->content !!}
                    </div>
                </div>
                <div class="w-3/12">
                    <x-website.recent-posts-list></x-website.recent-posts-list>
                </div>
            </div>
        </div>
    </section>
</x-page-layout>