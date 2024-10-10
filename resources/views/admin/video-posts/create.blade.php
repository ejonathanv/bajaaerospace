<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight !mb-0">
            Create new video
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-9/12 mx-auto">
                <x-video-form method="POST" video="" />
            </div>
        </div>
    </div>
</x-app-layout>