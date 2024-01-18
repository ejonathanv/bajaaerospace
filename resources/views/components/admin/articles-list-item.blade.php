<li class="flex items-start space-x-3">
    <div class="flex items-start space-x-4">
        <div>
            <div class="magazineThumb" style="background-image: url('{{ asset('articles/' . $article->magazineThumb) }}')">
            </div>
        </div>
        <div>
            <h4 class="!mb-0">
                {{ $article->title }}
            </h4>
            <p class="!mb-0">
                {{ $article->created_at->format('M d, Y') }}
            </p>
            <a href="{{ route('articles.show', $article) }}" class="text-logo-blue underline">
                View details
            </a>
        </div>
    </div>
</li>