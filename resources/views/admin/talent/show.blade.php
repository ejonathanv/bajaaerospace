<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight !mb-0">
            Talent details
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
                            {{ $talent->first_name }} {{ $talent->last_name }}
                        </h3>

                        <div class="ml-auto">
                            <a href="{{ asset('resumes') .'/'. $talent->attach_resume }}" class="btn btn-primary flex items-center space-x-2">
                                <i class="fas fa-download"></i>
                                <span>Download CV</span>
                            </a>
                        </div>
                    </div>
                    <hr class="my-5">
                    
                    <p>
                        <b>Full name:</b> {{ $talent->first_name }} {{ $talent->last_name }}
                    </p>
                    <p>
                        <b>Email:</b> {{ $talent->email }}
                    </p>
                    @if($talent->phone)
                    <p>
                        <b>Phone:</b> {{ $talent->phone }}
                    </p>
                    @endif
                    <p>
                        <b>University:</b> {{ $talent->university }}
                    </p>
                    <p>
                        <b>Career:</b> {{ $talent->career }}
                    </p>
                    <p>
                        <b>Academic level:</b> {{ $talent->academic_level }}
                    </p>
                    <p>
                        <b>Skills:</b> {{ $talent->skillsList }}
                    </p>
                    <p>
                        <b>Relevant Projects:</b> {{ $talent->relevant_projects }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>