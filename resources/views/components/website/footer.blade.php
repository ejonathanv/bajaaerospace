<footer class="footer">
    <div class="container flex flex-col md:flex-row items-start space-y-7 md:space-y-0 md:space-x-4">
        <div class="w-full md:w-3/12 flex items-center justify-center md:justify-start md:items-start justify-start">
            <a href="#">
                <img src="{{ asset('img/logo_baja_aerospace_cluster.png') }}" alt="Baja Aerospace Cluster" class="w-48 h-auto">
            </a>
        </div>

        <div class="w-full md:w-3/12 text-center md:text-left">
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

        <div class="w-full md:w-6/12 text-center md:text-left">
            <h3>
                Connect with us
            </h3>

            <div class="flex items-center justify-center w-full mb-7">
                <div class="w-1/2">
                    <a href="https://www.facebook.com/BajaAerospaceMX?mibextid=ZbWKwL" class="text-white flex items-center space-x-2" target="_blank">
                        <div class="w-12 h-12 rounded-full border-2 border-white flex items-center justify-center text-2xl">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <span>
                            Facebook
                        </span>
                    </a>
                </div>
                <div class="w-1/2">
                    <a href="https://www.linkedin.com/in/clusteraerobc" class="text-white flex items-center space-x-2" target="_blank"> 
                        <div class="w-12 h-12 rounded-full border-2 border-white flex items-center justify-center text-2xl">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                        <span>
                            LinkedIn
                        </span>
                    </a>
                </div>
            </div>

            <div class="flex items-center justify-center">
                <div class="w-1/2">
                    <a href="https://twitter.com/ClusterAeroBC?t=Y2KaIvYixvfOZzQsU_IPbg&s=09" class="text-white flex items-center space-x-2" target="_blank">
                        <div class="w-12 h-12 rounded-full border-2 border-white flex items-center justify-center text-2xl">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <span>
                            Twitter
                        </span>
                    </a>
                </div>
                <div class="w-1/2">
                    <a href="https://www.youtube.com/@bajaaerospacecluster3720" class="text-white flex items-center space-x-2" target="_blank">
                        <div class="w-12 h-12 rounded-full border-2 border-white flex items-center justify-center text-2xl">
                            <i class="fab fa-youtube"></i>
                        </div>
                        <span>
                            YouTube
                        </span>
                    </a>
                </div>
            </div>

            <h3 class="mt-7">
                Newsletter
            </h3>

            @if(session('successNewsletter'))
                <span class="text-green-500 text-sm mt-2">
                    {{ session('successNewsletter') }}
                </span>
            @endif

            <form action="{{ route('register-subscriber') }}" class="flex items-stretch border-2 border-white rounded-md mt-2" method="POST" onsubmit="this.querySelector('button').disabled = true">
                @csrf
                <input type="text" name="name" placeholder="Enter your name" class="w-full border-0 px-3 py-2 bg-transparent text-white placeholder-white focus:outline-none focus:ring-0 border-r-2 border-white" required>
                <input type="text" name="email" placeholder="Enter your email address" class="w-full border-0 px-3 py-2 bg-transparent text-white placeholder-white focus:outline-none focus:ring-0" required>
                <button type="submit" class="bg-white text-black px-3 py-2 font-bold disabled:opacity-50">
                    <span class="whitespace-nowrap">Sign up</span>
                </button>
            </form>

            @error('email')
                <span class="text-red-500 text-sm mt-2">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div id="occ-widget"></div>
    <script id="bolsa-widget" type="text/javascript" charset="UTF-8"
    src="https://jobdiscovery-widget-occ.occ.com.mx/button-bundle.js" key="1YwoNW0djZbC2sUrvuLFQmfxYJt"></script>
</footer>