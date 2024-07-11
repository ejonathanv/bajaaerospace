<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight !mb-0">
            Talent list
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
                            Talent list
                        </h3>
                    </div>
                    <hr class="my-5">
                    @if(count($talents))
                        @foreach($talents as $talent)
                        <div class="flex items-center justify-between w-full">
                            <div>
                                <a href="{{ route('talent.show', $talent) }}" class="!m-0 font-bold text-lg text-primary-100 underline">
                                    {{ $talent->first_name }} {{ $talent->last_name }}
                                </a>
                                <p class="text-gray-500 !m-0">
                                    {{ $talent->email }}
                                </p>
                                @if($talent->phone)
                                <p class="text-gray-500 !m-0">
                                    {{ $talent->phone }}
                                </p>
                                @endif
                                <p class="text-gray-500 text-sm mt-4">
                                    Fecha: {{ $talent->created_at->format('d/m/Y') }}
                                </p>
                            </div>
                        </div>
                        <hr class="my-5">
                        @endforeach

                        <div class="mt-5">
                            {{ $talents->links() }}
                        </div>
                    @else
                        <p class="text-center">
                            No talent found
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>