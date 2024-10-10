<div class="bt-white p-5 shadow rounded bg-white">
    <h4 class="!leading-relaxed !mb-4">
        @if($method === 'PUT')
            Edit video
        @else
            Create video
        @endif
    </h4>

    <!-- Si tenemos errores los vamos a mostrar aqui -->
    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ $route }}" method="POST" enctype="multipart/form-data" x-data="{
        source: '{{ $video ? $video->source : '' }}'
    }">
        @csrf

        @if($method === 'PUT')
            @method('PUT')
        @endif

        <p class="text-red-500 text-xs font-bold">
            All fields are required
        </p>

        <div>
            <x-input-label for="cover" :value="__('Cover')" required />
            <input type="file" name="cover" id="cover" class="form-control" @if($method === 'POST') required @endif>

            @if($video && $video->cover)
                <img src="{{ asset($video->cover) }}" alt="" class="w-48 h-48 object-cover rounded mt-5">
            @endif
        </div>

        <div class="mt-4">
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$video ? $video->title : old('title')" required autofocus autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$video ? $video->description : old('description')" required autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="source" :value="__('Source')" />
            <select name="source" id="source" class="form-control light" x-model="source" required>
                <option disabled selected value="">Select a source</option>
                <option value="YouTube" {{ $video ? $video->source === 'YouTube' ? 'selected' : '' : '' }}>Youtube</option>
                <option value="Other" {{ $video ? $video->source === 'Other' ? 'selected' : '' : '' }}>Other</option>
            </select>
            <x-input-error :messages="$errors->get('source')" class="mt-2" />
        </div>

        <template x-if="source == 'YouTube'">
            <div class="mt-4">
                <x-input-label for="youtube_video_id" :value="__('Youtube video ID')" />
                <x-text-input id="youtube_video_id" class="block mt-1 w-full" type="text" name="youtube_video_id" :value="$video ? $video->youtube_video_id : old('youtube_video_id')" required autocomplete="youtube_video_id" />
                <x-input-error :messages="$errors->get('youtube_video_id')" class="mt-2" />
            </div>
        </template>

        <template x-if="source == 'Other'">
            <div class="mt-4">
                <x-input-label for="embed_code" :value="__('Embed code')" />
                <textarea name="embed_code" id="embed_code" class="form-control light" rows="5" ruquired>{{ $video ? $video->embed_code : old('embed_code') }}</textarea>
                <x-input-error :messages="$errors->get('embed_code')" class="mt-2" />
            </div>
        </template>

        <div class="mt-4">
            <label>
                <input type="checkbox" name="is_published" id="is_published" {{ $video ? $video->is_published ? 'checked' : '' : '' }}>
                Published
            </label>
        </div>

        <div class="mt-4 mb-10"> 
            <x-input-label for="published_at" :value="__('Published at')" />
            <input type="date" name="published_at" id="published_at" class="form-control light" value="{{ $video ? $video->published_at->format('Y-m-d') : old('published_at') }}" required>
            <x-input-error :messages="$errors->get('published_at')" class="mt-2" />
        </div>

        <x-primary-button>
            @if($method === 'PUT')
                Update video
            @else
                Create video
            @endif
        </x-primary-button>
    </form>

    @if($video)

        <hr class="my-5">

        <form action="{{ route('video-posts.destroy', $video) }}" method="POST" class="mt-5" onsubmit="return confirm('Are you sure you want to delete this video?')">
            @csrf
            @method('DELETE')

            <x-danger-button>
                Delete video
            </x-danger-button>
        </form>
    @endif
</div>