<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight !mb-0">
            Articles list
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-9/12 mx-auto">
                <div class="bg-white p-7 rounded shadow">

                    <div class="flex items-center justify-between mb-7">
                        <h3 class="!m-0">
                            Articles list
                        </h3>

                        <div>
                            <a href="{{ route('articles.create') }}" class="btn btn-primary">
                                New Article
                            </a>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <hr class="my-5">

                    @if(count($articles))
                    <ul class="flex flex-col space-y-7">
                        @foreach($articles as $article)
                            <x-admin.articles-list-item :article="$article" />
                        @endforeach
                    </ul>
                    @else
                        <p class="text-sm !m-0">
                            There are no articles yet.
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>