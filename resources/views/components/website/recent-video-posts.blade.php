@if($videos->count())
<section class="py-32 bg-primary-900">
    <div class="container-fluid">
        <h3 class="text-3xl text-white text-center mb-16">
            <span>Recent videos</span>
        </h3>
        
        <div class="flex flex-col md:flex-row items-start space-y-6 md:space-y-0 md:space-x-6">
            @foreach($videos as $video)
                <div class="w-full md:w-1/3">
                    <x-video-card :video="$video"></x-video-card>
                </div>
            @endforeach
        </div>

        <div class="flex items-center justify-center mt-10">
            <a href="{{ route('video-blog') }}" class="text-secondary-100 text-lg font-bold underline">
                View all videos
            </a>
        </div>
    </div>
</section>
@endif