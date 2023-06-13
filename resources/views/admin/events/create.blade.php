<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight !mb-0">
            {{ __('Create Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-9/12 mx-auto">
                <x-admin.event-form method="POST" />
            </div>
        </div>
    </div>
</x-app-layout>