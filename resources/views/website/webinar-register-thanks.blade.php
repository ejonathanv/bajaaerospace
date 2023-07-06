<x-page-layout title="Register to our next webinar" bgvideo="pexels-asko-6099420.mp4">
    <section class="py-10 md:py-16 bg-gray-100">
        <div class="container">
            <div class="w-full md:w-8/12 mx-auto">
                <div class="bg-white rounded-lg shadow p-7 md:p-10">

                    <h1 class="text-2xl font-bold text-center">
                        Thank you for registering to our next webinar!
                    </h1>

                    <h4 class="text-center mt-5">
                        "{{ $webinar->title }}"
                    </h4>

                    <p class="text-center mt-5">
                        We will send you an email with the details of the webinar. Hope to see you there!
                    </p>

                    <p class="text-center mt-5 text-sm text-yellow-700">
                        (Note: If you don´t see the email in your inbox, please check your spam folder.)
                    </p>

                    <a href="{{ route('home') }}" class="btn btn-primary w-full text-center mt-10">
                        Back to home
                    </a>

                </div>
            </div>
        </div>
    </section>
</x-page-layout>