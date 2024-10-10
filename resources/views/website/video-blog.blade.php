<x-page-layout title="Welcome to the video blog" subtitle="Watch our latest videos">
    <section class="py-16 bg-gray-100">
        @if($videos->count())
        <div class="container-fluid">
            <div class="flex flex-col md:flex-wrap items-stretch -mx-3">
                @foreach($videos as $video)
                <div class="w-full md:w-1/3 p-3 mb-6">
                    <x-video-card :video="$video" theme="light"></x-video-card>
                </div>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $videos->links() }}
            </div>
        </div>
        @else
        <div class="container-fluid">
            <p class="text-center text-gray-500">
                There are no videos yet.
            </p>
        </div>
        @endif
    </section>
</x-page-layout>