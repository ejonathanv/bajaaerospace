<x-page-layout title="{{ $video->title }}" subtitle="{{ $video->description }}">
    <section class="py-10 bg-primary-900" x-data="{
        add_aspect_video_class_to_iframes_and_set_width_full(){
            <!-- Vamos a buscar todos los iframes -->
            let iframes = document.querySelectorAll('iframe')

            <!-- Vamos a recorrer cada iframe -->
            iframes.forEach(iframe => {
                <!-- Vamos a agregar la clase aspect-video -->
                iframe.classList.add('aspect-video')
                <!-- Vamos a hacer que el ancho sea 100% -->
                iframe.style.width = '100%'
                <!-- Vamos a hacer que la altura sea auto -->
                iframe.style.height = 'auto'
            })
        }
    }" x-init="add_aspect_video_class_to_iframes_and_set_width_full()">
        <div class="container flex items-start space-x-16">
            <div class="w-full md:w-11/12 mx-auto">
                @if($video->source == 'YouTube')
                    <iframe src="https://www.youtube.com/embed/{{ $video->youtube_video_id }}"
                        title="YouTube video player" 
                        frameborder="0" 
                        class="aspect-video w-full h-auto shadow-lg rounded-lg"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                @else
                    {!! $video->embed_code !!}
                @endif
            </div>
        </div>
    </section>
    <x-video-posts-lists :current="$video"></x-video-posts-lists> 
</x-page-layout>