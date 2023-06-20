<header class="header" :class="headerFixed ? 'fixed' : ''">
    <div class="container">
        <div class="flex flex-row items-center md:items-center justify-between">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('img/logo_baja_aerospace_cluster.png') }}" alt="Baja Aerospace Cluster">
            </a>
            <nav class="hidden md:flex nav">
                <a href="{{ route('home') }}">Home</a>
                @foreach($pages as $page)
                <a href="{{ route('page', $page->slug) }}">
                    {{ $page->name_on_navbar }}
                </a>
                @endforeach
                <a href="{{ route('events') }}">Events</a>
                <a href="{{ route('blog') }}">Blog</a>
                <a href="{{ route('contact') }}">Contact us</a>
            </nav>
            <div class="block md:hidden">
                <a href="#" class="text-white text-4xl" @click.prevent="toggleMobileMenu">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
    </div>
</header>

<div v-cloak>
    <div v-if="mobileMenu" class="mobileMenu">

        <a href="#" class="closeMenu">
            <i class="fa fa-times text-white text-4xl" @click.prevent="toggleMobileMenu"></i>
        </a>

        <a href="#">
            <img src="{{ asset('img/logo_baja_aerospace_cluster.png') }}" alt="Baja Aerospace Cluster" class="w-48 h-auto">
        </a>

        <nav class="flex flex-col items-stretch text-white font-bold text-lg w-full my-auto">
            <a href="{{ route('home') }}">Home</a>
            @foreach($pages as $page)
            <a href="{{ route('page', $page->slug) }}">
                {{ $page->name_on_navbar }}
            </a>
            @endforeach
            <a href="{{ route('events') }}">Events</a>
            <a href="{{ route('blog') }}">Blog</a>
            <a href="{{ route('contact') }}">Contact us</a>
        </nav>

        <div>
            <p class="text-white text-center text-xs font-bold">
                © {{ date('Y') }} {{ config('app.name') }}, All rights reserved.
            </p>
        </div>
    </div>
</div>