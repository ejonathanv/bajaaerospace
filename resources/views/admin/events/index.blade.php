<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight !mb-0">
            Events list
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-9/12 mx-auto">
                <div class="bg-white p-7 rounded shadow">

                    <div class="flex items-center justify-between mb-7">
                        <h3 class="!m-0">
                            Events list
                        </h3>

                        <div>
                            <a href="{{ route('events.create') }}" class="btn btn-primary">
                                New Event
                            </a>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <hr class="my-5">

                    <ul class="flex flex-col space-y-7">
                        @foreach($events as $event)
                            <x-admin.event-list-item :event="$event"></x-admin.event-list-item>
                        @endforeach
                    </ul>

                    <div class="mt-5">
                        {{ $events->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>