<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight !mb-0">
            Webinars
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl flex items-start space-x-6 mx-auto sm:px-6 lg:px-8">
            <div class="w-8/12">
                <div class="bt-white p-5 shadow rounded bg-white">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <h4 class="!leading-relaxed !mb-4">
                        Update webinar
                    </h4>

                    <form action="{{ route('webinars.update', $webinar) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <x-input-label for="flyer" :value="__('Flyer')" />
                            <p class="text-gray-500 text-xs font-bold">
                                Recomended size: 1200x500
                            </p>
                            <input type="file" name="flyer" id="flyer" class="form-control">
                            <x-input-error :messages="$errors->get('flyer')" class="mt-2" />

                            @isset($webinar)
                                @if($webinar)
                                <img src="{{ asset('webinars/' . $webinar->flyer) }}" alt="" class="w-48 h-48 object-cover rounded mt-5">
                                @endif
                            @endisset
                        </div>

                        <div class="mb-4">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$webinar ? $webinar->title : old('title')" required autofocus autocomplete="title" />
                            @error('title')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$webinar ? $webinar->description : old('description')" required autocomplete="description" />
                            @error('description')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <x-input-label for="link" :value="__('Link')" />
                            <p class="text-gray-500 text-xs font-bold">
                                The link to the webinar (Ex: https://zoom.us/j/123456789)
                            </p>
                            <x-text-input id="link" class="block mt-1 w-full" type="text" name="link" :value="$webinar ? $webinar->link : old('link')" required autocomplete="link" />
                            @error('link')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <x-input-label for="video" :value="__('ID de YouTube (Optional)')" />
                            <p class="text-gray-500 text-xs font-bold">
                                This field can be null
                            </p>
                            <x-text-input id="video" class="block mt-1 w-full" type="text" name="video" :value="$webinar ? $webinar->video : old('video')" autocomplete="video" />
                            @error('video')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div>
                            <label>
                                <input type="checkbox" name="published" id="publish" class="mr-2" {{ $webinar->published ? 'checked' : '' }}>
                                Publish now
                            </label>
                        </div>

                        <button class="btn btn-primary mt-5">
                            Save webinar
                        </button>
                    </form>
                </div>
            </div>
            <div class="w-4/12">
                <div class="bt-white p-5 shadow rounded bg-white">
                    <h3 class="!leading-relaxed !mb-4 text-xl">
                        Registers for this webinar
                    </h3>

                    <h5 class="text-sm text-gray-500 mb-6 font-bold">
                        Total registers: {{ $webinar->registers->count() }}
                    </h5>
                    
                    <ul class="flex flex-col space-y-2 max-h-96 overflow-y-auto"
                        @foreach($webinar->registers as $register)
                            <li>
                                <p class="text-sm !m-0 font-bold">
                                    {{ $register->first_name }} {{ $register->last_name }}
                                </p>
                                <p class="text-sm text-gray-500 !m-0">
                                    E-mail: {{ $register->email }}
                                </p>
                                <p class="text-sm text-gray-500 !m-0">
                                    Phone: {{ $register->phone }}
                                </p>
                                <p class="text-sm text-gray-500 !m-0">
                                    Company: {{ $register->company }}
                                </p>
                                <p class="text-sm text-gray-500 !m-0">
                                    Job title: {{ $register->job_title }}
                                </p>
                            </li>
                        @endforeach
                    </ul>

                    <hr class="my-5">

                    <form action="{{ route('download', $webinar) }}" method="POST">
                        @csrf
                        <button class="btn btn-primary">
                            Download CSV
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>