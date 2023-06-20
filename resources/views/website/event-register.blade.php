<x-page-layout title="Register to event" subtitle="{{ $event->title }}">
    <section class="py-10 md:py-16 bg-gray-100">
        <div class="container flex items-start space-x-16">
            <div class="w-full md:w-9/12">

                <form action="">

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
                        <input type="text" class="form-control light" name="name" placeholder="What is your name?" required>
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
                        <input type="text" class="form-control light" name="email" placeholder="What is your email?" required>
                        @error('email')
                            <p class="text-red-600 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Phone number (optional):
                        </label>
                        <input type="text" class="form-control light" name="phone" placeholder="What is your phone number?">
                        @error('phone')
                            <p class="text-red-600 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
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