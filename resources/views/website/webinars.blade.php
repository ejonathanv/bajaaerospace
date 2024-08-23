<x-page-layout title="Webinars" bgvideo="pexels-asko-6099420.mp4">
    <section class="py-10 md:py-16 bg-gray-100">
        <div class="container">
            <!-- IMAGEN FIJA -->
            <img src="{{ asset('webinars/webinar_cover.jpeg') }}" alt="" class="w-full h-auto">
            <h2 class="text-center my-10">
                Discover a series of webinars with industry experts covering key topics such as:
            </h2>
            <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-6">
                <div class="w-full md:w-4/12 flex items-center flex-col text-center">
                    <img src="{{ asset('img/svg/members1.svg') }}" class="w-48 h-48 mb-4" alt="">
                    <h4>Technological Innovation</h4>
                </div>
                <div class="w-full md:w-4/12 flex items-center flex-col text-center">
                    <img src="{{ asset('img/svg/members2.svg') }}" class="w-48 h-48 mb-4" alt="">
                    <h4>Supplier Development</h4>
                </div>
                <div class="w-full md:w-4/12 flex items-center flex-col text-center">
                    <img src="{{ asset('img/svg/members3.svg') }}" class="w-48 h-48 mb-4" alt="">
                    <h4>New Market Opportunities</h4>
                </div>
            </div>
            <p class="text-center text-2xl mt-10">
                Don’t Miss Out! Each week we tackle different topics and answer real-time questions from our audience.
            </p>
            <h3 class="text-center text-2xl mt-10">
                Register for this week's webinar
            </h3>
            @if($webinar)
                <!-- IMAGEN DINAMICA POR WEBINAR -->
                <div class="webinar-info flex flex-col md:flex-row items-center space-y-7 md:space-y-0 md:space-x-7 mt-7 md:mt-16">
                    <div class="basis-full md:basis-9/12">
                        <img src="{{ asset('webinars/' . $webinar->flyer) }}" alt="" class="w-full h-auto">
                    </div>
                    <div class="basis-full md:basis-3/12">
                        <!-- LINK PARA REGISTRO AL WEBINAR -->
                        <a href="{{ route('webinar.register') }}" class="btn btn-primary w-full text-center">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            Register to this event
                        </a>
                    </div>
                </div>
            @else
                <div class="mt-16">
                    <h2 class="text-2xl font-bold">
                        Our next webinar
                    </h2>
                    <p class="text-gray-500 text-sm">
                        We don't have any webinar scheduled yet.
                    </p>
                </div>
            @endif

            <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 items-center md:space-x-16 mt-16 pt-10">
                <div class="w-full md:w-9/12 text-center md:text-left">
                    <h2>Subscribe to Our Channel</h2>
                    <p class="text-2xl mt-6">
                        Subscribe to our YouTube channel and never miss a webinar!
                    </p>
                </div>
                <div class="w-full md:w-3/12 flex items-center justify-center space-x-10">
                    <a href="https://youtube.com/@bajaaerospacecluster3720?si=l9CXUY2Mtiqn-pSp" target="_blank">
                        <img src="{{ asset('img/svg/bell.svg') }}" alt="" class="w-16 h-auto">
                    </a>
                    <a href="https://youtube.com/@bajaaerospacecluster3720?si=l9CXUY2Mtiqn-pSp" target="_blank">
                        <img src="{{ asset('img/svg/youtubeIcon.svg') }}" alt="" class="w-16 h-auto">
                    </a>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center justify-center md:space-x-16">
                <div class="w-full md:w-6/12 text-center md:text-left">
                    <h3 class="m-0">
                        Explore all our webinars on YouTube
                    </h3>
                </div>
                <div class="w-full md:w-2/12 flex items-center justify-center">
                    <a href="https://youtube.com/@bajaaerospacecluster3720?si=l9CXUY2Mtiqn-pSp" target="_blank">
                        <img src="{{ asset('img/svg/subscribe.svg') }}" alt="" class="w-36 h-auto">
                    </a>
                </div>
            </div>

            <x-webinar-video-player />

            <h2 class="text-center text-2xl mt-10">
                Follow us on Facebook where you can watch our webinars live
            </h2>

            <div class="flex items-center justify-center space-x-16">
                <a href="https://www.facebook.com/BajaAerospaceMX?mibextid=ZbWKwL" 
                    target="_blank"
                    class="inline-block">
                    <img src="{{ asset('img/svg/facebook.svg') }}" alt="Facebook" class="w-24 h-auto">
                </a>
                <a href="https://www.facebook.com/BajaAerospaceMX?mibextid=ZbWKwL" target="_blank">
                    <img src="{{ asset('img/svg/live.svg') }}" alt="Live" class="w-36 h-auto">
                </a>
                <div>
                    <a href="https://www.facebook.com/BajaAerospaceMX?mibextid=ZbWKwL" target="_blank">
                    <img src="{{ asset('img/svg/followus.svg') }}" alt="Follow us" class="w-36 h-auto">
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-page-layout>