<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight !mb-0">
            Webinars
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-9/12 mx-auto">
                <div class="bg-white p-7 rounded shadow">

                    <div class="flex items-center justify-between mb-7">
                        <h3 class="!m-0">
                            Webinars list
                        </h3>

                        <div>
                            <a href="{{ route('webinars.create') }}" class="btn btn-primary">
                                New Webinar
                            </a>
                        </div>
                    </div>

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <hr class="my-5">

                    @if(count($webinars))
                    <ul class="flex flex-col space-y-5">
                        @foreach($webinars as $webinar)
                            <li>
                                <h4 class="!m-0">
                                    <a href="{{ route('webinars.show', $webinar) }}" class="text-base hover:underline mb-2">
                                        {{ $webinar->title }}
                                    </a>
                                </h4>
                                <p class="text-sm text-gray-500 !m-0">
                                    <b>Link:</b> {{ $webinar->link }}
                                </p>
                                <p class="text-sm text-gray-500 !m-0">
                                    <b>Total de registros:</b> {{ $webinar->registers->count() }}
                                </p>
                            </li>
                        @endforeach
                    </ul>

                    <div class="mt-5">
                        {{ $webinars->links() }}
                    </div>
                    @else
                    <p class="text-sm !m-0">
                        There are no webinar yet.
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>