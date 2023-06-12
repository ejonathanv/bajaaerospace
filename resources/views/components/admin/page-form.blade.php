<div class="bt-white p-5 shadow rounded bg-white">
    <h4 class="!leading-relaxed !mb-4">
        @if($method === 'PUT')
            Edit page
        @else
            Create page
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
            <x-input-label for="cover" :value="__('Cover')" />
            <input type="file" name="cover" id="cover" class="form-control">
            <x-input-error :messages="$errors->get('cover')" class="mt-2" />

            @isset($page)
                @if($page->cover)
                    <img src="{{ asset('pages/' . $page->cover) }}" alt="" class="w-48 h-48 object-cover rounded mt-5">
                @endif
            @endisset
        </div>

        <div class="mt-4">
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$page ? $page->title : old('title')" required autofocus autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="subtitle" :value="__('Subtitle')" />
            <x-text-input id="subtitle" class="block mt-1 w-full" type="text" name="subtitle" :value="$page ? $page->subtitle : old('subtitle')" required autofocus autocomplete="subtitle" />
            <x-input-error :messages="$errors->get('subtitle')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="content" :value="__('Content')" />
            <input type="hidden" name="content" id="postContent" value="{{ $page ? $page->content : old('content') }}">
            <div id="editor">
                {!! $page ? $page->content : old('content') !!}
            </div>
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>

        <div class="mt-4 mb-10">
            <label>
                <input type="checkbox" name="published" id="published" {{ $page ? $page->published ? 'checked' : '' : '' }}>
                Published
            </label>
        </div>

        <div class="mt-4 mb-10">
            <label>
                <input type="checkbox" name="add_to_navbar" id="add_to_navbar" {{ $page ? $page->add_to_navbar ? 'checked' : '' : '' }}>
                Add to navbar
            </label>
        </div>

        <div class="mt-4 mb-10">
            <label>
                <input type="checkbox" name="add_to_footer" id="add_to_footer" {{ $page ? $page->add_to_footer ? 'checked' : '' : '' }}>
                Add to footer
            </label>
        </div>

        <div class="mt-4 mb-10">
            <x-input-label for="name_on_navbar" :value="__('Name on navbar')" />
            <x-text-input id="name_on_navbar" class="block mt-1 w-full" type="text" name="name_on_navbar" :value="$page ? $page->name_on_navbar : old('name_on_navbar')" autocomplete="name_on_navbar" />
            <x-input-error :messages="$errors->get('name_on_navbar')" class="mt-2" />
        </div>

        <x-primary-button>
            @if($method === 'PUT')
                Update page
            @else
                Create page
            @endif
        </x-primary-button>
    </form>

    @if($page)

        <hr class="my-5">

        <form action="{{ route('pages.destroy', $page) }}" method="POST" class="mt-5" onsubmit="return confirm('Are you sure you want to delete this page?')">
            @csrf
            @method('DELETE')

            <x-danger-button>
                Delete page
            </x-danger-button>
        </form>
    @endif
</div>