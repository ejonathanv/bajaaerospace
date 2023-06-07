<div class="bt-white p-5 shadow rounded bg-white">

    <h4 class="!leading-relaxed !mb-4">
        @if($method === 'PUT')
            Edit post
        @else
            Create post
        @endif
    </h4>

    <form action="{{ $route }}" method="POST" enctype="multipart/form-data">

        @csrf

        @if($method === 'PUT')
            @method('PUT')
        @endif

        <div>
            <x-input-label for="cover" :value="__('Cover')" />
            <input type="file" name="cover" id="cover" class="form-control">

            @isset($post)
                @if($post->cover)
                    <img src="{{ asset('posts/' . $post->cover) }}" alt="" class="w-48 h-48 object-cover rounded mt-5">
                @endif
            @endisset
        </div>

        <div class="mt-4">
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$post ? $post->title : old('title')" required autofocus autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="subtitle" :value="__('Subtitle')" />
            <x-text-input id="subtitle" class="block mt-1 w-full" type="text" name="subtitle" :value="$post ? $post->subtitle : old('subtitle')" required autofocus autocomplete="subtitle" />
            <x-input-error :messages="$errors->get('subtitle')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="content" :value="__('Content')" />
            <input type="hidden" name="content" id="postContent" value="{{ $post ? $post->content : old('content') }}">
            <div id="editor">
                {!! $post ? $post->content : old('content') !!}
            </div>
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>

        <div class="mt-4 mb-10">
            <label>
                <input type="checkbox" name="published" id="published" {{ $post ? $post->published ? 'checked' : '' : '' }}>
                Published
            </label>
        </div>

        <x-primary-button>
            @if($method === 'PUT')
                Update post
            @else
                Create post
            @endif
        </x-primary-button>
    </form>
</div>