<section class="bg-white py-10">
    <div class="container-fluid flex flex-col md:flex-row items-center space-y-3 md:space-y-0 md:space-x-4">
        <div class="w-full md:w-2/12 hidden md:block">
            <div class="bannerVertical" style="background-image: url('{{ asset('img/banners/banner_vertical_default.jpeg') }}')">
                <span>
                    <i class="fas fa-bullhorn"></i> <br>
                    Advertise Here
                </span>
            </div>
        </div>
        <div class="w-full md:w-8/12">
            <iframe class="w-full aspect-video" 
                id="ytplayer" 
                type="text/html"
                src="https://www.youtube.com/embed/TKx15AWC9ks?autoplay=1"
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen />
        </div>
        <div class="w-full md:w-2/12 flex flex-col space-y-3 hidden md:block">
            <div class="bannerSquare" style="background-image: url('{{ asset('img/banners/banner_square_default.jpeg') }}')">
                <span>
                    <i class="fas fa-bullhorn"></i> <br>
                    Advertise Here
                </span>
            </div>
            <div class="bannerSquare" style="background-image: url('{{ asset('img/banners/banner_vertical_default.jpeg') }}')">
                <span>
                    <i class="fas fa-bullhorn"></i> <br>
                    Advertise Here
                </span>
            </div>
        </div>
        <div class="flex md:hidden w-full items-start space-x-2">
            <div class="w-6/12">
                <div class="bannerVertical" style="background-image: url('{{ asset('img/banners/banner_vertical_default.jpeg') }}')">
                    <span>
                        <i class="fas fa-bullhorn"></i> <br>
                        Advertise Here
                    </span>
                </div>
            </div>
            <div class="w-6/12 flex flex-col space-y-2">
                <div class="bannerSquare" style="background-image: url('{{ asset('img/banners/banner_square_default.jpeg') }}')">
                    <span>
                        <i class="fas fa-bullhorn"></i> <br>
                        Advertise Here
                    </span>
                </div>
                <div class="bannerSquare" style="background-image: url('{{ asset('img/banners/banner_vertical_default.jpeg') }}')">
                    <span>
                        <i class="fas fa-bullhorn"></i> <br>
                        Advertise Here
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>