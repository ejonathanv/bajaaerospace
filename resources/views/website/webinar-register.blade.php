<x-page-layout title="Register to our next webinar" bgvideo="pexels-asko-6099420.mp4">
    <section class="py-10 md:py-16 bg-gray-100">
        <div class="container">
            <div class="w-full md:w-8/12 mx-auto">
                <div class="bg-white rounded-lg shadow p-7 md:p-10">

                    <h1 class="text-2xl font-bold mb-10">
                        Registration for the webinar: <br> {{ $webinar->title }}
                    </h1>

                    <form action="{{ route('webinar.register.store') }}" method="POST">
                        @csrf
                        <div class="flex flex-col md:flex-row items-start md:space-x-7">
                            <div class="w-full basis-full md:basis-1/2">
                                <div class="mb-4 w-full">
                                    <x-input-label for="first_name" :value="__('First name')" />
                                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
                                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                </div>
                            </div>
                            <div class="w-full basis-full md:basis-1/2">
                                <div class="mb-4">
                                    <x-input-label for="last_name" :value="__('Last name')" />
                                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
                                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-start md:space-x-7">
                            <div class="w-full basis-full md:basis-1/2">
                                <div class="mb-4">
                                    <x-input-label for="company" :value="__('Company')" />
                                    <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" required autofocus autocomplete="company" />
                                    <x-input-error :messages="$errors->get('company')" class="mt-2" />
                                </div>
                            </div>
                            <div class="w-full basis-full md:basis-1/2">
                                <div class="mb-4">
                                    <x-input-label for="job_title" :value="__('Job title')" />
                                    <x-text-input id="job_title" class="block mt-1 w-full" type="text" name="job_title" :value="old('job_title')" required autofocus autocomplete="job_title" />
                                    <x-input-error :messages="$errors->get('job_title')" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="phone" :value="__('Phone')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <div class="mb-7">
                            <label>
                                <input type="checkbox" name="terms" required>
                                <span class="ml-2 font-bold text-xs md:text-sm">
                                    I accept the <a href="#" class="underline">terms and conditions</a> of this webinar.
                                </span>
                            </label>
                        </div>

                        <button class="btn btn-primary w-full text-center flex items-center space-x-2" type="submit">
                            <i class="fas fa-check mr-2"></i>
                            <span>
                                Register to the webinar!
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-page-layout>