<x-page-layout title="Contact us">
    <section class="py-16">
        <div class="container">
            <div class="flex flex-col md:flex-row items-start space-y-10 md:space-y-0 md:space-x-16">
                <div class="w-full md:w-8/12">
                    <h1 class="!mb-6 !leading-tight">
                        How can we help you?
                    </h1>
                    <p class="text-gray-500 font-bold text-lg mb-7">
                        Please fill out the form below and we will contact you as soon as possible.
                    </p>

                    @if(session('successContactForm'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                            <span class="block sm:inline">{{ session('successContactForm') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('contact-form') }}" method="POST" onsubmit="this.querySelector('button').disabled = true">
                        @honeypot
                        @csrf
                        <div class="form-group">
                            <label for="">
                                Full name:
                            </label>
                            <input type="text" 
                                class="form-control light" 
                                name="name" 
                                placeholder="What is your name?" 
                                vaue="{{ old('name') }}"
                                required>
                            @error('name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">
                                Email:
                            </label>
                            <input type="text" 
                                class="form-control light" 
                                name="email" 
                                placeholder="What is your email?" 
                                value="{{ old('email') }}"
                                required>
                            @error('email')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">
                                Phone number (optional):
                            </label>
                            <input type="number" 
                                class="form-control light" 
                                name="phone" 
                                value="{{ old('phone') }}"
                                placeholder="What is your phone number?">
                            @error('phone')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">
                                Message:
                            </label>
                            <textarea name="message" id="" cols="30" rows="3" class="form-control light" placeholder="Enter your message here" required>{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="terms" required>
                                I agree to the <a href="#" class="link">terms and conditions</a>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="">
                                <input type="checkbox" name="newsletter">
                                I want to receive the newsletter
                            </label>
                        </div>

                        <div class="form-group">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            @error('g-recaptcha-response')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary disabled:opacity-50">
                            Send message
                        </button>
                    </form>
                </div>
                <div class="w-full md:w-4/12">
                    <x-website.recent-posts-list></x-website.recent-posts-list>
                </div>
            </div>            
        </div>
    </section>
</x-page-layout>