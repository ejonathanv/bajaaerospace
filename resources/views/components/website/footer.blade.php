<footer class="footer">
    <div class="container flex items-start space-x-4">
        <div class="w-3/12">
            <a href="#">
                <img src="{{ asset('img/logo_baja_aerospace_cluster.png') }}" alt="Baja Aerospace Cluster" class="w-48 h-auto">
            </a>
        </div>

        <div class="w-3/12">
            <h3 class="text-white">
                Quick links
            </h3>

            <nav class="text-white flex flex-col space-y-2 text-sm font-bold">
                <a href="#">Home</a>
                <a href="#">Cluster BC</a>
                <a href="#">Events</a>
                <a href="#">Articles</a>
                <a href="#">Webinars</a>
                <a href="#">Contact</a>
                <a href="#">Policies</a>
                <a href="{{ route('login') }}">Login</a>
            </nav>
        </div>

        <div class="w-6/12">
            <h3>
                Cluster B.C.
            </h3>

            <p class="text-md">
                The Baja California Aerospace Cluster is a non-profit organization that promotes the development of the aerospace industry in Baja California, Mexico.
            </p>
        </div>
    </div>
</footer>