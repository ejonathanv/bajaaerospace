<section class="bg-white py-16">
    <div class="container-fluid">
        <h4 class="text-center mb-16">
            Other videos
        </h4>
        @if($other_videos->count())
        <div class="flex flex-wrap">
            @foreach($other_videos as $video)
            <div class="w-full md:w-1/3 px-4 mb-10">
                <x-video-card :video="$video" theme="light"></x-video-card>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-center text-gray-500">
            There are no more videos.
        </p>
        @endif
    </div>
</section>