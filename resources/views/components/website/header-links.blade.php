<header class="header" :class="headerFixed ? 'fixed' : ''">
    <div class="container">
        <div class="flex items-center justify-between">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('img/logo_baja_aerospace_cluster.png') }}" alt="Baja Aerospace Cluster">
            </a>
            <nav class="nav">
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
        </div>
    </div>
</header>