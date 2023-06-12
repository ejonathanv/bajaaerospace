{{--
<section class="pre-header">
    <div class="container">
        <div class="flex items-center justify-between">
            <div class="w-9/12">
                <p class="text-sm !m-0">
                    Here you can add relevant information about next events, promotions or anything else.
                </p>
            </div>
            <div class="w-3/12 flex items-center justify-end">
                <a href="#" class="text-sm hover:underline">
                    English
                </a>
                <span class="mx-2 text-sm">|</span>
                <a href="#" class="text-sm hover:underline">
                    Español
                </a>
            </div>
        </div>
    </div>
</section>
--}}

<section class="cover shadow-lg">
    <video autoplay loop muted>
        <source src="{{ asset('video/pexels-frank-cone-3194277-1280x720-30fps.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <x-website.header-links></x-website.header-links>
    <x-website.page-cover title="{{$title}}" subtitle="{{$subtitle}}"></x-website.page-cover>
</section>
