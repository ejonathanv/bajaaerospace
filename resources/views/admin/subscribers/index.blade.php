<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight !mb-0">
            Subscribers list
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-9/12 mx-auto flex items-center space-y-2 flex-col">

                @if(session('success'))
                <div class="bg-green-100 text-green-600 p-3 rounded shadow w-full">
                    {{ session('success') }}
                </div>
                @endif

                <div class="bg-white p-7 rounded shadow w-full">
                    <div class="flex items-start justify-between mb-7 w-full">
                        <h3 class="!m-0 flex-1">
                            Subscribers list
                        </h3>

                        <div class="ml-auto">
                            <form action="">
                                <button class="btn btn-primary">
                                    Download CSV
                                </button>
                            </form>
                        </div>
                    </div>
                    <hr class="my-5">
                    @if(count($subscribers))
                        @foreach($subscribers as $subscriber)
                        <div class="flex items-center justify-between w-full">
                            <div>
                                <p class="!m-0 font-bold text-lg">
                                    {{ $subscriber->name }}
                                </p>
                                <p class="text-gray-500 !m-0">
                                    {{ $subscriber->email }}
                                </p>
                                @if($subscriber->phone)
                                <p class="text-gray-500 !m-0">
                                    {{ $subscriber->phone }}
                                </p>
                                @endif
                            </div>
                            <div>
                                <form action="{{ route('subscribers.destroy', $subscriber) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this subscriber?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-red-500">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                        <hr class="my-5">
                        @endforeach
                    @else
                        <p class="text-sm !m-0">
                            There are no subscribers yet.
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>