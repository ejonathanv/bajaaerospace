<section class="cover shadow-lg">
    <video autoplay loop muted>
        <source src="{{ asset('video/' . $bgvideo) }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <x-website.header-links></x-website.header-links>
    <x-website.page-cover title="{{$title}}" subtitle="{{$subtitle}}"></x-website.page-cover>
</section>
