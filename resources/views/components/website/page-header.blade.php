<section class="cover shadow-lg">
    <video autoplay loop muted>
        <source src="{{ asset('video/pexels-frank-cone-3194277-1280x720-30fps.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <x-website.header-links></x-website.header-links>
    <x-website.page-cover title="{{$title}}" subtitle="{{$subtitle}}"></x-website.page-cover>
</section>
