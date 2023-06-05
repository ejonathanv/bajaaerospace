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

<section class="cover shadow-lg">
    <video autoplay loop muted>
        <source src="{{ asset('video/pexels-frank-cone-3194277-1280x720-30fps.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <header class="header" :class="headerFixed ? 'fixed' : ''">
        <div class="container">
            <div class="flex items-center justify-between">
                <a href="#" class="logo">
                    <img src="{{ asset('img/logo_baja_aerospace_cluster.png') }}" alt="Baja Aerospace Cluster">
                </a>
                <nav class="nav">
                    <a href="#">Home</a>
                    <a href="#">Cluster BC</a>
                    <a href="#">Industry</a>
                    <a href="#">Academy</a>
                    <a href="#">Technology</a>
                    <a href="#">Events</a>
                    <a href="#">News</a>
                    <a href="#">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <x-website.cover></x-website.cover>
</section>
