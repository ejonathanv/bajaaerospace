<div class="bg-white p-7 rounded shadow">
    <div class="flex items-start justify-between mb-5">
        <h3 class="!mb-0">
            Recent suscribers
        </h3>

        <div>
            <a href="#" class="btn btn-primary">
                View all
            </a>
        </div>
    </div>

    <p class="text-sm !mb-0">
        Here you can manage the suscribers of the newsletter.
    </p>

    <hr class="my-5">

    @if(count($suscribers))
        <div class="flex items-start space-y-6 flex-col">
        @foreach($suscribers as $suscriber)
            <div>
                <p class="font-bold text-lg !mb-0">
                    {{ $suscriber->name }}
                </p>
                <p class="text-sm !mb-0">
                    {{ $suscriber->email }}
                </p>
            </div>
        @endforeach
        </div>
    @else
        <p class="mt-5">
            There are no suscribers yet.
        </p>
    @endif

    <div class="mt-7">
        <a href="#" class="text-logo-blue underline">
            Manage suscribers
        </a>
    </div>
</div>