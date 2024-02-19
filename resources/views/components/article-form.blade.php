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
        <div class="mt-6" x-data="{
            <!-- TYPE ES PARA ESPECIFICAR SI VAMOS A SUBIR UN ARCHIVO O UNA URL -->
            type: '',
        }">
            <div class="flex items-center space-x-2">
                <x-secondary-button type="button" href="#" @click="type = 'file'">
                    <i class="fas fa-upload mr-2"></i>
                    Upload file
                </x-primary-button>
                <x-secondary-button type="button" href="#" @click="type = 'url'">
                    <i class="fas fa-link mr-2"></i>
                    Add url
                </x-primary-button>
            </div>
            <template x-if="type === 'url'">
                <!-- AQUI PODEMOS PONER UNA URL -->
                <div class="mt-4">
                    <x-input-label for="magazineUrl" :value="__('Magazine Url')" />
                    <x-text-input id="magazineUrl" 
                        class="block mt-1 w-full" 
                        type="text" 
                        name="magazineUrl" 
                        :value="$article ? $article->magazineUrl : old('magazineUrl')" 
                        required 
                        autofocus 
                        autocomplete="magazineUrl" />
                    <x-input-error :messages="$errors->get('magazineUrl')" class="mt-2" />
                </div>
            </template>
            <template x-if="type === 'file'">
                <!-- AQUI PODEMOS SUBIR UN ARCHIVO PDF -->
                <div class="mt-4">
                    <x-input-label for="magazineFile" :value="__('Magazine File')" />
                    <input type="file" 
                        name="magazineFile" 
                        id="magazineFile" 
                        class="form-control">
                    <x-input-error :messages="$errors->get('magazineFile')" class="mt-2" />
                </div>
            </template>

            @isset($article)
            @if($article->magazineFile)
            <div class="mt-6">
                <p class="text-xs text-gray-500"> 
                    Actualmente el artículo tiene un archivo PDF ajunto. Si subes un nuevo archivo, este será reemplazado.
                </p>

                <a href="{{ asset('articles/' . $article->magazineFile) }}" target="_blank">
                    <x-secondary-button class="flex items-center space-x-2">
                        <i class="fas fa-eye"></i>
                        <span>
                            View current file
                        </span>
                    </x-secondary-button>
                </a>
            </div>
            @elseif($article->magazineUrl)
            <div class="mt-6">
                <p class="text-xs text-gray-500"> 
                    Actualmente el artículo tiene una URL ajunta. Si subes un nuevo archivo, este será reemplazado.
                </p>

                <p>
                    {{ $article->magazineUrl }}
                </p>
            </div>
            @endif
            @endisset

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
    <form action="{{ route('articles.destroy', $article) }}" method="POST" class="mt-5" onsubmit="return confirm('Are you sure you want to delete this article?')">
        @csrf
        @method('DELETE')
        <x-danger-button>
            Delete article
        </x-danger-button>
    </form>
    @endif
</div>