<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight !mb-0">
            Event #{{ $event->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl flex items-start space-x-6 mx-auto sm:px-6 lg:px-8">
            <div class="w-8/12">
                <x-admin.event-form :event="$event" method="PUT" />
            </div>
            <div class="w-4/12">
                <div class="bt-white p-5 shadow rounded bg-white">
                    <h3 class="!leading-relaxed !mb-4 text-xl">
                        Registers for this event
                    </h3>

                    <h5 class="text-sm text-gray-500 mb-6 font-bold">
                        Total registers: {{ $event->registers->count() }}
                    </h5>
                    
                    <ul class="flex flex-col space-y-2 max-h-96 overflow-y-auto"
                        @foreach($event->registers as $register)
                            <li>
                                <p class="text-sm !m-0 font-bold">
                                    {{ $register->name }}
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

                    <form action="{{ route('download-event-list', $event) }}" method="POST">
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