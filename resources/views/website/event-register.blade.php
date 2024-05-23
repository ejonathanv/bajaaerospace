<x-page-layout title="Register to event" subtitle="{{ $event->title }}">
    <section class="py-10 md:py-16 bg-gray-100">
        <div class="container flex flex-col md:flex-row items-start space-y-10 md:space-y-0 md:space-x-16">
            <div class="w-full md:w-9/12">

                <!-- Vamos a revisar si hay errores -->
                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-5" role="alert">
                        <p class="font-bold">Success</p>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-5" role="alert">
                        <p class="font-bold">Error</p>
                        <p>{{ session('error') }}</p>
                    </div>
                @endif
                


                <form action="{{ route('submit-event-registration', $event) }}" method="POST">
                    @csrf
                    <h1 class="mb-5">
                        Register to event
                    </h1>
                    <p class="text-gray-500 font-bold text-lg mb-2">
                        Please fill out the form below and we will contact you as soon as possible.
                    </p>
                    <p class="text-sm">
                        Field with <span class="text-red-600">*</span> are required.
                    </p>

                    <div class="form-group">
                        <label for="">
                            Full name <span class="text-red-600">*</span>
                        </label>
                        <input type="text" class="form-control light" name="name" placeholder="What is your name?" required value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-600 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Email <span class="text-red-600">*</span>
                        </label>
                        <input type="email" class="form-control light" name="email" placeholder="What is your email?" required value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-600 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Phone number <span class="text-red-600">*</span>
                        </label>
                        <input type="text" class="form-control light" name="phone" placeholder="What is your phone number?" required value="{{ old('phone') }}">
                        @error('phone')
                            <p class="text-red-600 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex items-center space-x-5">
                        <div class="form-group flex-1">
                            <label for="">
                                Company <span class="text-red-600">*</span>
                            </label>
                            <input type="text" class="form-control light" name="company" placeholder="What is your company?" required value="{{ old('company') }}">
                            @error('company')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="form-group flex-1">
                            <label for="">
                                Job title <span class="text-red-600">*</span>
                            </label>
                            <input type="text" class="form-control light" name="job_title" placeholder="What is your job title?" required value="{{ old('job_title') }}">
                            @error('job_title')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-primary">
                        Register to event
                    </button>

                </form>

            </div>
            <div class="w-full md:w-3/12">
                <x-website.recent-posts-list />
            </div>
        </div>
    </section>
</x-page-layout>