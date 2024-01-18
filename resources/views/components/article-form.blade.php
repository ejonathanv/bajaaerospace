<div class="bt-white p-5 shadow rounded bg-white">
    <h4 class="!leading-relaxed !mb-4">
        @if($method === 'PUT')
            Edit article
        @else
            Create article
        @endif
    </h4>


    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if($method === 'PUT')
            @method('PUT')
        @endif

        <div>
            <x-input-label for="magazineThumb" :value="__('Magazine Thumb')" />
            <input type="file" name="magazineThumb" id="magazineThumb" class="form-control">
            <x-input-error :messages="$errors->get('magazineThumb')" class="mt-2" />

            <p class="mt-2 text-xs text-gray-500">
                <small>
                    Dimensiones recomendadas: 600px x 900px
                </small>
            </p>

            @isset($article)
                @if($article->magazineThumb)
                    <div class="magazineThumb mt-6" style="background-image: url('{{ asset('articles/' . $article->magazineThumb) }}')">

                    </div>
                @endif
            @endisset
        </div>

        <div class="mt-4">
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$article ? $article->title : old('title')" required autofocus autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$article ? $article->description : old('description')" autocomplete="off" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="magazineUrl" :value="__('Magazine Url')" />
            <x-text-input id="magazineUrl" class="block mt-1 w-full" type="text" name="magazineUrl" :value="$article ? $article->magazineUrl : old('magazineUrl')" required autofocus autocomplete="magazineUrl" />
            <x-input-error :messages="$errors->get('magazineUrl')" class="mt-2" />
        </div>

        <x-primary-button class="mt-7">
            @if($method === 'PUT')
                Update article
            @else
                Create article
            @endif
        </x-primary-button>
    </form>

    @if($article)

        <hr class="my-5">

        <form action="{{ route('articles.destroy', $article) }}" 
            method="POST" 
            class="mt-5" 
            onsubmit="return confirm('Are you sure you want to delete this article?')">

            @csrf
            @method('DELETE')

            <x-danger-button>
                Delete article
            </x-danger-button>
        </form>
    @endif
</div>