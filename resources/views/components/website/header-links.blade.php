<header class="header" :class="headerFixed ? 'fixed' : ''">
    <div class="container">
        <div class="flex items-center justify-between">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('img/logo_baja_aerospace_cluster.png') }}" alt="Baja Aerospace Cluster">
            </a>
            <nav class="nav">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('page', 'cluster-bc') }}">
                    Cluster BC
                </a>
                <a href="{{ route('page', 'aerospace-industry') }}">
                    Industry
                </a>
                <a href="{{ route('page', 'aerospace-academy') }}">
                    Academy
                </a>
                <a href="{{ route('page', 'aerospace-technology') }}">
                    Technology
                </a>
                <a href="{{ route('page', 'events') }}">
                    Events
                </a>
                <a href="{{ route('page', 'news') }}">
                    News
                </a>
                <a href="{{ route('page', 'contact') }}">
                    Contact
                </a>
            </nav>
        </div>
    </div>
</header>