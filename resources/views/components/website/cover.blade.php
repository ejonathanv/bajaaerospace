<div class="container pt-10">
    <div class="flex flex-col md:flex-row items-center space-y-7 md:space-y-0 md:space-x-16">
        <div class="w-full md:w-7/12">
            <h1 class="text-white uppercase">
                An internationally recognized entity supporting and servicing the aerospace industry.
            </h1>
            <p class="text-white md:mb-7">
                Baja California, a state with global talent in the aerospace sector, expertise in aeronautics and space, accredited SMEs supply chain value and over five decades seniority in word-class management.
            </p>
        </div>
        <div class="w-full md:w-5/12">
            <div class="cover-form">
                <h3 class="text-white">Become a member</h3>
                <p class="text-white !text-sm font-bold opacity-75 !mb-7">
                    We are a dynamic and energized group of passionate aerospace enthusiasts with a well established network in the aerospace industry worldwide.
                </p>

                @if(session('successMemberRegistration'))
                    <p class="text-secondary-100 text-base font-bold mb-7">
                        {{ session('successMemberRegistration') }}
                    </p>
                @endif

                <form action="{{ route('store-member') }}" method="POST" onsubmit="this.querySelector('button').disabled = true">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" placeholder="What is your name" class="form-control" required>
                        @error('name')
                            <span class="text-secondary-100 text-sm font-bold">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="What is your email" class="form-control" required>
                        @error('email')
                            <span class="text-secondary-100 text-sm font-bold">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="What is your phone number (Optional)" class="form-control">
                        @error('phone')
                            <span class="text-secondary-100 text-sm font-bold">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group text-sm !mb-0">
                        <label class="text-white">
                            <input type="checkbox" name="terms" class="form-control" required>
                            I agree to the <a href="#" class="link">terms and conditions</a>
                        </label>
                    </div>
                    @error('terms')
                        <span class="block mb-2 text-secondary-100 text-sm font-bold">{{ $message }}</span>
                    @enderror

                    <div class="form-group text-sm">
                        <label class="text-white">
                            <input type="checkbox" name="newsletter" class="form-control">
                            I want to receive the newsletter
                        </label>
                    </div>

                    <button class="btn btn-secondary w-full text-center disabled:opacity-50" type="submit">
                        Send request
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>