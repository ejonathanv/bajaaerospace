<div class="bt-white p-5 shadow rounded bg-white">
    <h4 class="!leading-relaxed !mb-4">
        @if($method === 'PUT')
            Edit event
        @else
            Create event
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
            <x-input-label for="flyer" :value="__('Flyer')" />
            <input type="file" name="flyer" id="flyer" class="form-control">
            <x-input-error :messages="$errors->get('flyer')" class="mt-2" />
            @isset($event)
                @if($event)
                    <img src="{{ asset('events/' . $event->flyer) }}" alt="" class="w-48 h-48 object-cover rounded mt-5">
                @endif
            @endisset
        </div>
        <div class="mt-4">
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$event ? $event->title : old('title')" required autofocus autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$event ? $event->description : old('description')" required autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
        <div class="flex items-start space-x-6 mt-4">
            <div class="flex-1">
                <x-input-label for="start_date" :value="__('Start date')" />
                <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" :value="$event ? \Carbon\Carbon::parse($event->start_date)->format('H:i a') : old('start_date')" required autocomplete="start_date" pattern="[0-9]{2}:[0-9]{2}" placeholder="HH:MM" />
                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
            </div>
            <div class="flex-1">
                <x-input-label for="start_time" :value="__('Start time')" />
                <x-text-input id="start_time" class="block mt-1 w-full" type="time" name="start_time" :value="$event ? $event->start_time : old('start_time')" required autocomplete="start_time" />
                <x-input-error :messages="$errors->get('start_time')" class="mt-2" />
            </div>
        </div>
        <div class="flex items-start space-x-6 mt-4">
            <div class="flex-1">
                <x-input-label for="end_date" :value="__('End date')" />
                <x-text-input id="end_date" class="block mt-1 w-full" type="date" name="end_date" :value="$event ? $event->end_date : old('end_date')" required autocomplete="end_date" />
                <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
            </div>
            <div class="flex-1">
                <x-input-label for="end_time" :value="__('End time')" />
                <x-text-input id="end_time" class="block mt-1 w-full" type="time" name="end_time" :value="$event ? $event->end_time : old('end_time')" required autocomplete="end_time" />
                <x-input-error :messages="$errors->get('end_time')" class="mt-2" />
            </div>
        </div>
        <div class="mt-4">
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="$event ? $event->location : old('location')" required autocomplete="location" />
            <x-input-error :messages="$errors->get('location')" class="mt-2" />
        </div>
        <div class="mt-4 mb-10">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="$event ? $event->address : old('address')" required autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        <x-primary-button>
            @if($method === 'PUT')
                Update event
            @else
                Create event
            @endif
        </x-primary-button>
    </form>
    @if($event)
        <hr class="my-5">
        <form action="{{ route('events.destroy', $event) }}" method="POST" class="mt-5" onsubmit="return confirm('Are you sure you want to delete this event?')">
            @csrf
            @method('DELETE')
            <x-danger-button>
                Delete event
            </x-danger-button>
        </form>
    @endif
</div>