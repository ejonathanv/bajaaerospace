<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight !mb-0">
            Video Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-9/12 mx-auto">
                <div class="bg-white p-7 rounded shadow">

                    <div class="flex items-center justify-between mb-7">
                        <h3 class="!m-0">
                            Videos list
                        </h3>

                        <div>
                            <a href="{{ route('video-posts.create') }}" class="btn btn-primary">
                                New Video
                            </a>
                        </div>
                    </div>

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <hr class="my-5">

                    @if(count($videos))
                    <ul class="flex flex-col space-y-5">
                        @foreach($videos as $video)
                            <li class="flex items-start space-x-5">
                                <div>
                                    <a href="{{ route('video-posts.show', $video) }}">
                                        <div class="w-48 h-28 bg-gray-200 rounded shadow bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset($video->cover) }}')"></div>
                                    </a>
                                </div>
                                <div>
                                    <h4 class="!m-0">
                                        <a href="{{ route('video-posts.show', $video) }}" class="text-base hover:underline mb-2">
                                            {{ $video->title }}
                                        </a>
                                    </h4>
                                    <p class="font-bold text-xs text-gray-500 !m-0">{{ $video->published_at->format('d M, Y') }}</p>

                                    </p>
                                    <p class="text-sm text-gray-500 !m-0">
                                        {{ $video->description }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <div class="mt-5">
                        {{ $videos->links() }}
                    </div>
                    @else
                    <p class="text-sm !m-0">
                        There are no videos yet.
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>