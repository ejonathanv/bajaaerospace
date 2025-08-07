<x-page-layout title="Members" subtitle="">


    <section class="flex flex-col md:flex-row items-center md:items-stretch bg-white py-16">
        <div class="container">
            <div class="flex items-center flex-wrap justify-center">
            @for($i = 1; $i <= 124; $i++) 
                @php $number=str_pad($i, 5, '0' , STR_PAD_LEFT); @endphp 
                <div class="px-2 mb-4">
                    @if($i == 111)
                        <div class="w-full h-auto">
                            <img src="{{ asset('img/members/logo'.$number.'.jpg') }}" style="width: 125px; height: auto;">
                        </div>
                    @else
                        <div class="w-full h-auto">
                            <img src="{{ asset('img/members/logo'.$number.'.jpg') }}" style="width: 75px; height: auto;">
                        </div>
                    @endif
                </div>
            @endfor
        </div>
        </div>
    </section>

</x-page-layout>