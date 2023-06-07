<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight !mb-0">
            Welcome to {{ config('app.name', 'Laravel') }}!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-start space-x-10">
                <div class="w-1/2">
                    <x-admin.recent-posts-list></x-admin.recent-posts-list>
                </div>
                <div class="w-1/2">
                    <x-admin.recent-suscribers></x-admin.recent-suscribers>
                </div>
            </div>        
        </div>
    </div>
</x-app-layout>
