<section class="py-10 md:py-16 bg-white">
    <div class="container">
        <h2 class="text-center mb-4">
            Featured on Facebook
        </h2>
        <p class="text-center text-gray-600 mb-10 max-w-2xl mx-auto">
            Stay up to date with the latest from Baja Aerospace.
        </p>

        <div class="max-w-xl mx-auto flex flex-col items-center">
            <div class="w-full overflow-hidden flex justify-center">
                <iframe
                    src="https://www.facebook.com/plugins/post.php?href={{ urlencode($postUrl) }}&show_text=true&width=500"
                    width="500"
                    height="700"
                    style="border:none;overflow:hidden;max-width:100%"
                    scrolling="no"
                    frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                    title="Facebook post"
                ></iframe>
            </div>

            <a
                href="{{ $postUrl }}"
                target="_blank"
                rel="noopener noreferrer"
                class="btn btn-secondary mt-8"
            >
                <i class="fab fa-facebook-f mr-2"></i>
                View on Facebook
            </a>
        </div>
    </div>
</section>
