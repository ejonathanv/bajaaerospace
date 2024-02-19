<x-page-layout title="Articles" subtitle="Here you will find articles about space insdustry">
    <section class="py-16 bg-gray-100">
        <div class="container flex flex-col md:flex-row space-y-7 md:space-y-0 items-start md:space-x-10">
            <div class="w-full md:w-9/12">
                @if($article)
                    <h3 class="mb-6">
                        {{ $article->title }}
                    </h3>
                    @if($article->magazineUrl)
                    <iframe src="{{ $article->magazineUrl }}" 
                        frameborder="0"
                        class="w-full"
                        style="height: 80vh;"
                        />
                    @else
                    {{ $article->magazineFile }}
                    <iframe src="{{ asset('articles/' . $article->magazineFile) }}" 
                        frameborder="0"
                        class="w-full"
                        style="height: 80vh;"
                        />
                    @endif
                @else
                    <h3 class="mb-6">
                        No hay ediciones disponibles
                    </h3>
                @endif
            </div>
            <div class="w-full md:w-3/12">
                <h3 class="mb-6">
                    Ediciones
                </h3>
                <div class="card bg-white shadow rounded px-4 py-6 flex items-stretch flex-wrap -mx-2 overflow-hidden overflow-y-scroll" style="height: 80vh;">
                    @foreach($articles as $article)
                    <a href="{{ route('article', $article) }}" class="hover:underline px-2 w-1/2 mb-2 flex items-start justify-start flex-col">
                        <div class="magazineThumb" style="background-image: url('{{ asset('articles/' . $article->magazineThumb) }}')">
                        </div>
                        <p class="text-xs text-left mt-2">
                            {{ $article->title }}
                        </p>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-page-layout>